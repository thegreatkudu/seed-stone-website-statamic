/* Back to top: show the button once the visitor has scrolled down, and scroll up smoothly. */
(function () {
  var button = document.querySelector('[data-hx-top]');
  if (!button) {
    return;
  }

  button.classList.add('is-ready');
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  function update() {
    button.classList.toggle('is-visible', window.scrollY > window.innerHeight * 0.6);
  }

  button.addEventListener('click', function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: reduceMotion.matches ? 'auto' : 'smooth' });
    var target = document.querySelector('.nav_logo, a, button');
    if (target) {
      target.focus({ preventScroll: true });
    }
  });

  window.addEventListener('scroll', update, { passive: true });
  update();
})();
