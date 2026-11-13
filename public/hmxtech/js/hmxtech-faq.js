/**
 * HMXTECH FAQ accordion.
 *
 * Replaces the Webflow IX3 accordion, which was bound to fixed element IDs
 * and so could not open questions added in the control panel. Same motion:
 * the answer opens to its natural height in 0.45s and the plus turns 45°.
 */
(() => {
  const lists = document.querySelectorAll('[data-hx-faq]');
  if (!lists.length) {
    return;
  }

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  const setOpen = (item, isOpen) => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon_inner');

    question.setAttribute('aria-expanded', String(isOpen));

    if (window.gsap && !prefersReducedMotion.matches) {
      window.gsap.to(answer, { height: isOpen ? 'auto' : 0, duration: 0.45, ease: 'power2.out', overwrite: true });
      window.gsap.to(icon, { rotation: isOpen ? 45 : 0, duration: 0.35, ease: 'power2.out', overwrite: true });
    } else {
      answer.style.height = isOpen ? 'auto' : '0px';
      icon.style.transform = isOpen ? 'rotate(45deg)' : '';
    }
  };

  lists.forEach((list) => {
    list.addEventListener('click', (event) => {
      const question = event.target.closest('.faq-question');
      if (!question || !list.contains(question)) {
        return;
      }

      setOpen(question.closest('.faq-item'), question.getAttribute('aria-expanded') !== 'true');
    });
  });
})();
