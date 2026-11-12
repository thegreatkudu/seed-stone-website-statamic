/**
 * Fade-up reveal for elements marked [data-hx-reveal] as they scroll into view.
 * Elements are only hidden while the html element has the .hx-js class, which
 * the page sets inline, so content is never lost if this script fails to load.
 */
(function () {
  'use strict';

  var items = document.querySelectorAll('[data-hx-reveal]');

  if (!items.length) {
    return;
  }

  if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    items.forEach(function (item) {
      item.classList.add('is-visible');
    });

    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 });

  items.forEach(function (item) {
    observer.observe(item);
  });
})();
