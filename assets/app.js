(() => {
  const menuButton = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  const closeMenu = () => {
    mobileNav?.classList.remove('open');
    document.body.classList.remove('menu-open');
    menuButton?.setAttribute('aria-expanded', 'false');
  };
  menuButton?.addEventListener('click', () => {
    const open = !mobileNav.classList.contains('open');
    mobileNav.classList.toggle('open', open);
    document.body.classList.toggle('menu-open', open);
    menuButton.setAttribute('aria-expanded', String(open));
  });
  mobileNav?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));

  const reveal = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveal.forEach((element) => observer.observe(element));
  } else {
    reveal.forEach((element) => element.classList.add('visible'));
  }

  const image = document.querySelector('#demoImage');
  const title = document.querySelector('#demoTitle');
  const copy = document.querySelector('#demoCopy');
  document.querySelectorAll('.demo-tabs button').forEach((tab) => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.demo-tabs button').forEach((item) => item.setAttribute('aria-selected', 'false'));
      tab.setAttribute('aria-selected', 'true');
      image.style.opacity = '.2';
      const next = new Image();
      next.onload = () => {
        image.src = next.src;
        image.alt = tab.textContent.trim();
        title.textContent = tab.textContent.trim();
        copy.textContent = tab.dataset.copy;
        image.style.opacity = '1';
      };
      next.src = `assets/screens/${tab.dataset.screen}.webp`;
    });
  });

  fetch('https://app.enginex2030.com/api/admin/plans', { headers: { Accept: 'application/json' } })
    .then((response) => response.ok ? response.json() : Promise.reject())
    .then((data) => {
      const plan = Array.isArray(data) ? data.find((item) => item.code === 'enterprise' || item.isActive) : null;
      if (!plan) return;
      const annual = document.querySelector('[data-price="annual"]');
      const biennial = document.querySelector('[data-price="biennial"]');
      if (annual && Number.isFinite(Number(plan.annualPrice))) annual.textContent = Number(plan.annualPrice).toLocaleString();
      if (biennial && Number.isFinite(Number(plan.biennialPrice))) biennial.textContent = Number(plan.biennialPrice).toLocaleString();
    })
    .catch(() => {});
})();
