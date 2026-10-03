const { test } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const vm = require('node:vm');
const path = require('node:path');
const source = fs.readFileSync(path.join(__dirname, '../src/marketing.js'), 'utf8');
const start = source.indexOf('async function plans()');
const end = source.indexOf('lang.onclick', start);
const pricing = source.slice(start, end);

async function load(payload, ok = true) {
  let request;
  let renders = 0;
  const context = {
    S: { plan: null },
    window: { __ENGINEX_API_URL__: 'https://app.enginex2030.com' },
    AbortController, setTimeout, clearTimeout,
    fetch: async (url, options) => {
      request = { url, options };
      return { ok, json: async () => payload };
    },
    price: () => { renders++; },
  };
  await vm.runInNewContext(pricing + ';plans()', context);
  return { plan: context.S.plan, request, renders };
}

test('pricing supports both central administration response formats', async () => {
  const plan = { isActive: true, annualPrice: 1475, biennialPrice: 2650 };
  for (const payload of [[plan], { data: [plan] }]) {
    const result = await load(payload);
    assert.equal(result.plan, plan);
    assert.equal(result.request.url, 'https://app.enginex2030.com/api/admin/plans');
    assert.equal(result.request.options.cache, 'no-store');
    assert.equal(result.renders, 1);
  }
});

test('changed server prices are used on the next load without fixed fallback prices', async () => {
  assert.equal((await load([{ annualPrice: 111 }])).plan.annualPrice, 111);
  assert.equal((await load({ data: [{ annualPrice: 222 }] })).plan.annualPrice, 222);
  assert.equal((await load({ error: 'unavailable' }, false)).plan, null);
  assert.ok(!(await load([])).plan);
});

test('saved landing-page anchors and application login remain available', () => {
  const html = fs.readFileSync(path.join(__dirname, '../dist/index.html'), 'utf8');
  for (const id of ['top', 'problem', 'flow', 'control', 'pricing', 'payment', 'platform', 'roles', 'faq']) {
    assert.ok(html.includes('id="' + id + '"'), id);
  }
  assert.ok(html.includes('https://app.enginex2030.com/owner-login'));
});
