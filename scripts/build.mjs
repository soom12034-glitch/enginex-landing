import { cp, mkdir, readFile, readdir, rm, writeFile } from 'node:fs/promises';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const sourceDir = path.join(root, 'src');
const publicDir = path.join(root, 'public');
const distDir = path.join(root, 'dist');
const deployDir = path.join(root, '.deploy');
const defaultApiBase = 'https://app.enginex2030.com';

async function readDotEnv(file) {
  try {
    const content = await readFile(file, 'utf8');
    const values = {};
    for (const line of content.split(/\r?\n/)) {
      const trimmed = line.trim();
      if (!trimmed || trimmed.startsWith('#')) continue;
      const separator = trimmed.indexOf('=');
      if (separator < 0) continue;
      const key = trimmed.slice(0, separator).trim();
      if (!/^[A-Za-z_][A-Za-z0-9_]*$/.test(key)) continue;
      let value = trimmed.slice(separator + 1).trim();
      if ((value.startsWith('"') && value.endsWith('"')) || (value.startsWith("'") && value.endsWith("'"))) value = value.slice(1, -1);
      values[key] = value;
    }
    return values;
  } catch (error) {
    if (error.code === 'ENOENT') return {};
    throw error;
  }
}

function normalizeApiBase(value) {
  let parsed;
  try {
    parsed = new URL(value);
  } catch {
    throw new Error('VITE_API_BASE_URL must be a valid http or https origin.');
  }
  if (!['https:', 'http:'].includes(parsed.protocol)) throw new Error('VITE_API_BASE_URL must use http or https.');
  if (parsed.username || parsed.password || parsed.pathname !== '/' || parsed.search || parsed.hash) {
    throw new Error('VITE_API_BASE_URL must be an origin only, such as https://app.example.com.');
  }
  return parsed.origin;
}

async function copyContents(source, destination) {
  await mkdir(destination, { recursive: true });
  for (const entry of await readdir(source, { withFileTypes: true })) {
    const from = path.join(source, entry.name);
    const to = path.join(destination, entry.name);
    if (entry.isDirectory()) await copyContents(from, to);
    else if (entry.isFile()) await cp(from, to);
  }
}

async function replaceTokens(directory, apiBase, apiHost) {
  const textExtensions = new Set(['.html', '.js', '.css', '.xml', '.txt', '.svg', '.webmanifest']);
  for (const entry of await readdir(directory, { withFileTypes: true })) {
    const file = path.join(directory, entry.name);
    if (entry.isDirectory()) {
      await replaceTokens(file, apiBase, apiHost);
    } else if (textExtensions.has(path.extname(entry.name).toLowerCase())) {
      let value = await readFile(file, 'utf8');
      value = value
        .replaceAll('__VITE_API_BASE_URL_JSON__', JSON.stringify(apiBase))
        .replaceAll('__VITE_API_BASE_URL__', apiBase)
        .replaceAll('__VITE_API_HOST__', apiHost);
      await writeFile(file, value);
    }
  }
}

const fileEnv = await readDotEnv(path.join(root, '.env'));
const requestedApiBase = process.env.VITE_API_BASE_URL || fileEnv.VITE_API_BASE_URL || defaultApiBase;
const apiBase = normalizeApiBase(requestedApiBase.trim());
const apiHost = new URL(apiBase).host;
await rm(distDir, { recursive: true, force: true });
await rm(deployDir, { recursive: true, force: true });
await mkdir(distDir, { recursive: true });
await mkdir(deployDir, { recursive: true });
await copyContents(sourceDir, distDir);
// Publish a stable English URL so Google can index it as a separate language version.
await mkdir(path.join(distDir, 'en'), { recursive: true });
await cp(path.join(sourceDir, 'index.html'), path.join(distDir, 'en', 'index.html'));
await copyContents(publicDir, distDir);
// Keep existing public asset URLs usable by saved links and installer pages.
await copyContents(path.join(root, 'assets'), path.join(distDir, 'assets'));
await replaceTokens(distDir, apiBase, apiHost);
const nginxTemplate = await readFile(path.join(root, 'nginx.conf.template'), 'utf8');
if (!nginxTemplate.includes('__VITE_API_BASE_URL__')) throw new Error('nginx.conf.template is missing the API origin token.');
await writeFile(path.join(deployDir, 'default.conf'), nginxTemplate.replaceAll('__VITE_API_BASE_URL__', apiBase));
console.log('Built dist/ with VITE_API_BASE_URL=' + apiBase);
