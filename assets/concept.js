(() => {
  const nav = document.querySelector('[data-nav]');
  const menu = document.querySelector('[data-menu]');
  const tabs = [...document.querySelectorAll('[data-story]')];
  const image = document.querySelector('[data-story-image]');
  const stage = image?.closest('.stage-screen');
  const copy = document.querySelector('[data-story-copy]');
  let active = 0;
  let timer;

  const updateNav = () => nav?.classList.toggle('fixed', window.scrollY > 90);
  updateNav();
  addEventListener('scroll', updateNav, { passive: true });
  menu?.addEventListener('click', () => nav?.classList.toggle('open'));
  nav?.querySelectorAll('nav a').forEach((link) => link.addEventListener('click', () => nav.classList.remove('open')));

  const showStory = (index, userInitiated = false) => {
    const tab = tabs[index];
    if (!tab || !image || !copy) return;
    active = index;
    tabs.forEach((item, i) => item.classList.toggle('active', i === index));
    stage?.classList.add('loading');
    const next = new Image();
    next.onload = () => {
      image.src = next.src;
      image.alt = tab.dataset.title || 'ENGINEX ERP';
      copy.querySelector('small').textContent = tab.dataset.kicker || '';
      copy.querySelector('h3').textContent = tab.dataset.title || '';
      copy.querySelector('p').textContent = tab.dataset.text || '';
      requestAnimationFrame(() => stage?.classList.remove('loading'));
    };
    next.src = `assets/screens/${tab.dataset.story}.webp`;
    if (userInitiated) restartStories();
  };

  const restartStories = () => {
    clearInterval(timer);
    timer = setInterval(() => showStory((active + 1) % tabs.length), 6000);
  };
  tabs.forEach((tab, index) => tab.addEventListener('click', () => showStory(index, true)));
  if (tabs.length > 1 && !matchMedia('(prefers-reduced-motion: reduce)').matches) restartStories();

  const reveals = [...document.querySelectorAll('.outcome-list article,.role-list article,.trust-line article,.price-board article')];
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.animate([{ opacity: 0, transform: 'translateY(22px)' }, { opacity: 1, transform: 'translateY(0)' }], { duration: 520, easing: 'cubic-bezier(.2,.7,.2,1)', fill: 'both' });
        observer.unobserve(entry.target);
      });
    }, { threshold: .12 });
    reveals.forEach((item) => observer.observe(item));
  }

  fetch('https://app.enginex2030.com/api/admin/plans', { headers: { Accept: 'application/json' } })
    .then((response) => response.ok ? response.json() : Promise.reject())
    .then((plans) => {
      const list = Array.isArray(plans) ? plans : (Array.isArray(plans?.data) ? plans.data : []);
      const plan = list.find((item) => item?.isActive !== false) || list[0];
      if (!plan) return;
      const annual = document.querySelector('[data-price="annual"]');
      const biennial = document.querySelector('[data-price="biennial"]');
      if (annual && Number.isFinite(Number(plan.annualPrice))) annual.textContent = Number(plan.annualPrice).toLocaleString();
      if (biennial && Number.isFinite(Number(plan.biennialPrice))) biennial.textContent = Number(plan.biennialPrice).toLocaleString();
    })
    .catch(() => {});
})();
