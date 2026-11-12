/**
 * HMX Tech home hero slider.
 *
 * Accessible carousel (WAI-ARIA APG "tabbed carousel" pattern):
 * - tabs choose a slide; arrow / Home / End keys move between tabs
 * - autoplay pauses on hover, on keyboard focus, when the tab is hidden,
 *   and can be stopped with the pause button (WCAG 2.2.2)
 * - visitors who prefer reduced motion never get autoplay
 * - inactive slides are hidden from assistive tech and the tab order
 */
(function () {
  'use strict';

  var hero = document.querySelector('[data-hx-hero]');

  if (!hero) {
    return;
  }

  var slides = Array.prototype.slice.call(hero.querySelectorAll('[data-hx-slide]'));
  var images = Array.prototype.slice.call(hero.querySelectorAll('[data-hx-image]'));
  var tabs = Array.prototype.slice.call(hero.querySelectorAll('[data-hx-tab]'));
  var slideRegion = hero.querySelector('[data-hx-slides]');
  var toggle = hero.querySelector('[data-hx-toggle]');
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  var interval = Math.min(Math.max(parseInt(hero.getAttribute('data-interval'), 10) || 7, 4), 20) * 1000;

  var current = 0;
  var playing = hero.getAttribute('data-autoplay') === 'true' && slides.length > 1 && !reduceMotion.matches;
  var held = false;
  var timer = null;
  var startedAt = 0;
  var remaining = interval;

  hero.style.setProperty('--hx-interval', interval / 1000 + 's');

  /**
   * Wrap each word of the headline in spans for the staggered reveal,
   * keeping the readable text on the heading for screen readers.
   */
  function splitWords(element) {
    var index = 0;

    element.setAttribute('aria-label', element.textContent.replace(/\s+/g, ' ').trim());

    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (child) {
        if (child.nodeType === Node.TEXT_NODE) {
          var fragment = document.createDocumentFragment();

          child.textContent.split(/(\s+)/).forEach(function (part) {
            if (part === '') {
              return;
            }

            if (/^\s+$/.test(part)) {
              fragment.appendChild(document.createTextNode(' '));

              return;
            }

            var word = document.createElement('span');
            var inner = document.createElement('span');

            word.className = 'hx-word';
            word.setAttribute('aria-hidden', 'true');
            inner.style.setProperty('--i', index++);
            inner.textContent = part;
            word.appendChild(inner);
            fragment.appendChild(word);
          });

          node.replaceChild(fragment, child);
        } else if (child.nodeType === Node.ELEMENT_NODE) {
          walk(child);
        }
      });
    })(element);
  }

  /** Move the travelling node along the line to match the active slide. */
  function placeNode(index) {
    var share = slides.length > 1 ? index / (slides.length - 1) : 0;

    hero.style.setProperty('--hx-node', 18 + share * 64 + '%');
  }

  function show(index, moveFocus) {
    current = (index + slides.length) % slides.length;

    slides.forEach(function (slide, i) {
      var active = i === current;

      slide.classList.toggle('is-active', active);
      slide.setAttribute('aria-hidden', active ? 'false' : 'true');
      slide.inert = !active;
    });

    images.forEach(function (image, i) {
      image.classList.toggle('is-active', i === current);
    });

    tabs.forEach(function (tab, i) {
      var active = i === current;

      tab.classList.toggle('is-active', active);
      tab.classList.toggle('is-done', i < current);
      tab.setAttribute('aria-selected', active ? 'true' : 'false');
      tab.tabIndex = active ? 0 : -1;

      // Restart the progress bar animation on the newly active tab.
      var fill = tab.querySelector('.hx-hero_tab-fill');

      if (fill && active) {
        fill.style.animation = 'none';
        void fill.offsetWidth;
        fill.style.animation = '';
      }
    });

    if (moveFocus && tabs[current]) {
      tabs[current].focus();
    }

    placeNode(current);
    schedule(interval);
  }

  function schedule(delay) {
    clearTimeout(timer);
    remaining = delay;

    if (!playing || held) {
      return;
    }

    startedAt = Date.now();
    timer = setTimeout(function () {
      show(current + 1);
    }, delay);
  }

  function hold(state) {
    if (held === state) {
      return;
    }

    held = state;
    hero.classList.toggle('is-held', held);

    if (held) {
      clearTimeout(timer);
      remaining = Math.max(remaining - (Date.now() - startedAt), 0);
    } else {
      schedule(remaining || interval);
    }
  }

  function setPlaying(state) {
    playing = state && slides.length > 1;
    hero.classList.toggle('is-playing', playing);
    slideRegion.setAttribute('aria-live', playing ? 'off' : 'polite');

    if (toggle) {
      toggle.setAttribute('aria-label', playing ? 'Pause slides' : 'Play slides');
    }

    schedule(interval);
    show(current);
  }

  slides.forEach(function (slide) {
    var heading = slide.querySelector('[data-hx-split]');

    if (heading) {
      splitWords(heading);
    }
  });

  tabs.forEach(function (tab, i) {
    tab.addEventListener('click', function () {
      show(i);
    });

    tab.addEventListener('keydown', function (event) {
      var target = {
        ArrowRight: current + 1,
        ArrowLeft: current - 1,
        Home: 0,
        End: slides.length - 1
      }[event.key];

      if (target === undefined) {
        return;
      }

      event.preventDefault();
      show(target, true);
    });
  });

  var previous = hero.querySelector('[data-hx-prev]');
  var next = hero.querySelector('[data-hx-next]');

  if (previous) {
    previous.addEventListener('click', function () {
      show(current - 1);
    });
  }

  if (next) {
    next.addEventListener('click', function () {
      show(current + 1);
    });
  }

  if (toggle) {
    toggle.addEventListener('click', function () {
      setPlaying(!playing);
    });
  }

  hero.addEventListener('mouseenter', function () {
    hold(true);
  });

  hero.addEventListener('mouseleave', function () {
    hold(hero.contains(document.activeElement));
  });

  hero.addEventListener('focusin', function () {
    hold(true);
  });

  hero.addEventListener('focusout', function (event) {
    if (!hero.contains(event.relatedTarget)) {
      hold(hero.matches(':hover'));
    }
  });

  document.addEventListener('visibilitychange', function () {
    hold(document.hidden || hero.matches(':hover') || hero.contains(document.activeElement));
  });

  reduceMotion.addEventListener('change', function (event) {
    if (event.matches) {
      setPlaying(false);
    }
  });

  hero.classList.add('is-ready');
  setPlaying(playing);
})();
