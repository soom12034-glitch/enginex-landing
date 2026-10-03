const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { test } = require('node:test');

const root = path.resolve(__dirname, '..');
const dist = path.join(root, 'dist');
const read = (file) => fs.readFileSync(path.join(dist, file), 'utf8');

test('build includes every page and local design asset', () => {
  for (const file of ['index.html', 'about.html', 'install.html', 'offline.html', 'privacy.html', 'terms.html', 'styles.css', 'editorial.css', 'marketing.js', 'install.js', 'laser-scene.js', 'laser-scene.css', 'config.js', 'brand.svg', 'favicon.svg', 'icons.svg', 'screens/projects.webp', 'icons/cloud-192.png', 'icons/cloud-512.png', 'fonts/cairo-arabic.woff2', 'fonts/cairo-latin.woff2']) {
    assert.ok(fs.existsSync(path.join(dist, file)), 'Missing dist/' + file);
  }
});

test('landing page retains Arabic/English switching and responsive layouts', () => {
  const html = read('index.html');
  const js = read('marketing.js');
  const css = html + read('styles.css');
  assert.match(html, /<html lang="ar" dir="rtl"/);
  assert.match(html, /<h1\b/);
  assert.match(js, /document\.documentElement\.dir/);
  assert.match(js, /T=\{ar:/);
  for (const breakpoint of ['max-width:480px', 'min-width:720px', 'min-width:1024px']) {
    assert.ok(css.includes(breakpoint), 'Missing responsive breakpoint ' + breakpoint);
  }
});

test('configured API origin drives registration, pricing, and installer requests', () => {
  const html = read('index.html');
  const installHtml = read('install.html');
  const js = read('marketing.js');
  const install = read('install.js');
  const config = read('config.js');
  assert.match(html, /https?:\/\/[^" ]+\/register/);
  assert.ok(html.indexOf('/config.js') < html.indexOf('/marketing.js'));
  assert.ok(installHtml.indexOf('/config.js') < installHtml.indexOf('/install.js'));
  assert.match(js, /window\.__ENGINEX_API_URL__/);
  assert.match(js, /\/api\/admin\/plans/);
  assert.match(install, /window\.__ENGINEX_API_URL__/);
  assert.match(install, /\/api\/desktop-release/);
  assert.match(config, /window\.__ENGINEX_API_URL__\s*=\s*"https?:\/\//);
});

test('build output has no unresolved config markers or base64 images', () => {
  const allText = ['index.html', 'about.html', 'install.html', 'offline.html', 'privacy.html', 'terms.html', 'marketing.js', 'install.js', 'config.js'].map(read).join('\n');
  assert.ok(!allText.includes('__VITE_API_'), 'Unresolved API configuration token');
  assert.ok(!/data:image\/[^;]+;base64,/i.test(allText), 'Unexpected embedded base64 image');
});
