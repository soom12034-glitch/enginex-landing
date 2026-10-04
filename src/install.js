// Renders the Windows download on the install page.
//
// The page ships a static link to /desktop-updates/latest, which the server
// resolves on its own and which therefore keeps working after every release
// and with scripting switched off. This script only upgrades that link with the
// exact version, size and checksum, so a visitor can see what they are about to
// install instead of clicking an opaque download.
//
// The response is not trusted blindly. The channel is the one thing on this
// page that decides where a customer's installer comes from, so a URL is only
// used when it is HTTPS, on the application host, and pointing into the update
// channel. Anything else leaves the visitor with the plain link.

(() => {
  'use strict';

  const CHANNEL_ORIGIN = String(window.__ENGINEX_API_URL__ || '').replace(/\/+$/, '');
  const CHANNEL_PATH = '/desktop-updates/';
  const STABLE_DOWNLOAD = `${CHANNEL_ORIGIN}${CHANNEL_PATH}latest`;
  const REQUEST_TIMEOUT_MS = 8000;

  const elements = {
    anchor: document.querySelector('[data-release-anchor]'),
    version: document.querySelector('[data-release-version]'),
    size: document.querySelector('[data-release-size]'),
    hash: document.querySelector('[data-release-hash]'),
    copy: document.querySelector('[data-release-copy]'),
    note: document.querySelector('[data-release-note]'),
    state: document.querySelector('[data-release-state]'),
  };

  if (!elements.anchor) return;

  // The stable link works on its own, so it is present before any request is
  // made and stays present if the request never succeeds.
  elements.anchor.href = STABLE_DOWNLOAD;

  const setText = (element, value) => {
    if (element) element.textContent = value;
  };

  const isTrustedDownload = (url) => {
    if (typeof url !== 'string' || !url.startsWith('https://')) return false;
    if (!url.startsWith(STABLE_DOWNLOAD.slice(0, -'latest'.length))) return false;
    return url.endsWith('.exe');
  };

  const formatSize = (bytes) => {
    if (!Number.isFinite(bytes) || bytes <= 0) return '';
    return `${(bytes / (1024 * 1024)).toFixed(1)} ميجابايت`;
  };

  const fingerprint = (sha512) => {
    const compact = String(sha512 || '').replace(/[^A-Za-z0-9+/=]/g, '');
    const groups = compact.match(/.{1,8}/g) || [];
    return groups.slice(0, 4).join(' ');
  };

  const render = (release) => {
    if (isTrustedDownload(release.downloadUrl)) {
      elements.anchor.href = release.downloadUrl;
      setText(elements.version, release.version);
    } else {
      // The response named a host we do not publish from. Keep the stable link
      // rather than pointing a visitor at a file of unknown origin.
      setText(elements.version, '');
    }

    setText(elements.size, formatSize(release.size));
    setText(elements.hash, fingerprint(release.sha512));
    if (elements.copy) {
      elements.copy.dataset.hash = String(release.sha512 || '');
      elements.copy.hidden = !release.sha512;
    }
    setText(
      elements.note,
      'التنزيل من الخادم الرسمي عبر اتصال مشفّر، ويتضمّن التطبيق تحديثاً تلقائياً بعد التثبيت.'
    );
    if (elements.state) elements.state.hidden = true;
  };

  const renderUnavailable = (reason) => {
    setText(elements.anchor, 'افتح صفحة التحميل');
    setText(elements.version, '');
    setText(elements.size, '');
    setText(elements.hash, '');
    if (elements.copy) elements.copy.hidden = true;
    setText(elements.note, reason);
    if (elements.state) elements.state.hidden = true;
  };

  elements.copy?.addEventListener('click', async () => {
    const hash = elements.copy.dataset.hash || '';
    if (!hash) return;
    try {
      await navigator.clipboard.writeText(hash);
      setText(elements.copy, 'تم نسخ البصمة');
      window.setTimeout(() => setText(elements.copy, 'نسخ البصمة'), 2500);
    } catch (error) {
      setText(elements.copy, 'تعذّر النسخ — حدّده يدوياً');
    }
  });

  const controller = new AbortController();
  const timer = window.setTimeout(() => controller.abort(), REQUEST_TIMEOUT_MS);

  fetch(`${CHANNEL_ORIGIN}/api/desktop-release`, {
    cache: 'no-store',
    signal: controller.signal,
  })
    .then((response) => (response.ok ? response.json() : Promise.reject(new Error('bad status'))))
    .then((release) => {
      window.clearTimeout(timer);
      if (release && release.published === true) {
        render(release);
      } else {
        renderUnavailable('لم يُنشر إصدار ويندوز بعد. زر التنزيل أدناه يفتح أحدث ما نُشر.');
      }
    })
    .catch(() => {
      window.clearTimeout(timer);
      renderUnavailable('تعذّر قراءة تفاصيل الإصدار. زر التنزيل يعمل مباشرةً.');
    });
})();
