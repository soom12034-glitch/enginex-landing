(() => {
  const language = new URL(location.href).searchParams.get('lang') === 'en' ? 'en' : 'ar';
  const origin = location.origin;
  const localized = (lang) => `${origin}/?lang=${lang}`;
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
})();
