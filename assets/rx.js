(() => {
  const bar = document.querySelector('[data-bar]');
  const onScroll = () => bar.classList.toggle('fixed', scrollY > 90);
  onScroll(); addEventListener('scroll', onScroll, { passive: true });
  const ids = ['flow', 'control', 'pricing'];
  document.querySelectorAll('[data-lang]').forEach((a) => a.addEventListener('click', () => {
    const here = ids.filter((id) => document.getElementById(id)?.getBoundingClientRect().top <= 140).pop();
    a.href = a.href.split('#')[0] + (here ? '#' + here : '');
  }));
  fetch('https://app.enginex2030.com/api/admin/plans', { headers: { Accept: 'application/json' } })
    .then((r) => (r.ok ? r.json() : Promise.reject()))
    .then((d) => {
      const list = Array.isArray(d) ? d : (Array.isArray(d?.data) ? d.data : []);
      const plan = list.find((p) => p?.isActive !== false) || list[0];
      if (!plan) return;
      [['annual', plan.annualPrice], ['biennial', plan.biennialPrice]].forEach(([k, v]) => {
        const el = document.querySelector(`[data-price="${k}"]`);
        if (el && Number.isFinite(Number(v))) el.textContent = Number(v).toLocaleString();
      });
    }).catch(() => {});
})();
