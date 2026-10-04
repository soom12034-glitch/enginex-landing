(() => {
  const cleanPricingNote = () => {
    const note = document.querySelector('[data-i="priceP"]');
    if (!note) return;
    note.textContent = document.documentElement.lang === 'en'
      ? 'No payment card is required to start the 30-day trial.'
      : 'لا تحتاج بطاقة دفع لبدء تجربة 30 يوماً.';
  };

  cleanPricingNote();
  new MutationObserver(cleanPricingNote).observe(document.documentElement, {
    attributes: true,
    attributeFilter: ['lang']
  });
})();
