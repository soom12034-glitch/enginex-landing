(() => {
  const menuButton = document.querySelector('.menu');
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

  const image = document.querySelector('#demoImage');
  const title = document.querySelector('#demoTitle');
  const copy = document.querySelector('#demoCopy');
  const tourShell = document.querySelector('.tour-shell');
  const tabs = [...document.querySelectorAll('.tour-tabs button')];
  let activeTab = 0;
  let rotation;

  const showTab = (index) => {
    if (!tabs.length || !image) return;
    activeTab = (index + tabs.length) % tabs.length;
    const tab = tabs[activeTab];
    tabs.forEach((item, itemIndex) => item.setAttribute('aria-selected', String(itemIndex === activeTab)));
    tourShell?.classList.add('is-changing');
    const next = new Image();
    next.onload = () => {
      image.src = next.src;
      image.alt = tab.textContent.trim();
      title.textContent = tab.textContent.trim();
      copy.textContent = tab.dataset.copy;
      requestAnimationFrame(() => tourShell?.classList.remove('is-changing'));
    };
    next.src = `assets/screens/${tab.dataset.screen}.webp`;
  };

  const startRotation = () => {
    clearInterval(rotation);
    rotation = setInterval(() => showTab(activeTab + 1), 5800);
  };

  tabs.forEach((tab, index) => tab.addEventListener('click', () => {
    showTab(index);
    startRotation();
  }));
  tourShell?.addEventListener('mouseenter', () => {
    clearInterval(rotation);
    tourShell.classList.add('paused');
  });
  tourShell?.addEventListener('mouseleave', () => {
    tourShell.classList.remove('paused');
    startRotation();
  });
  if (!matchMedia('(prefers-reduced-motion: reduce)').matches) startRotation();

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
