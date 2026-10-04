(() => {
  const url = new URL(location.href);
  const englishPath = url.pathname === '/en/' || url.pathname === '/en/index.html';
  const language = englishPath || url.searchParams.get('lang') === 'en' ? 'en' : 'ar';
  if (!englishPath && url.searchParams.get('lang') === 'en') {
    location.replace('/en/');
    return;
  }
  if (englishPath && document.documentElement.lang !== 'en') {
    document.getElementById('lang')?.click();
  }
  const origin = location.origin;
  const localized = (lang) => lang === 'en' ? `${origin}/en/` : `${origin}/`;
  const canonical = document.querySelector('link[rel="canonical"]');
  if (canonical) canonical.href = localized(language);

  for (const lang of ['ar', 'en']) {
    let link = document.querySelector(`link[rel="alternate"][hreflang="${lang}"]`);
    if (!link) {
      link = document.createElement('link');
      link.rel = 'alternate';
      link.hreflang = lang;
      document.head.appendChild(link);
    }
    link.href = localized(lang);
  }
  let fallback = document.querySelector('link[rel="alternate"][hreflang="x-default"]');
  if (!fallback) {
    fallback = document.createElement('link');
    fallback.rel = 'alternate';
    fallback.hreflang = 'x-default';
    document.head.appendChild(fallback);
  }
  fallback.href = localized('ar');
  const ogUrl = document.querySelector('meta[property="og:url"]');
  if (ogUrl) ogUrl.content = localized(language);
  document.getElementById('lang')?.addEventListener('click', () => {
    setTimeout(() => {
      if (document.documentElement.lang === 'en' && !englishPath) location.replace('/en/');
      if (document.documentElement.lang === 'ar' && englishPath) location.replace('/');
    }, 0);
  });
})();
