/**
 * HMXTECH motion: smooth scrolling and fade-and-reveal on scroll, rebuilt from
 * the Fortion Webflow template (GSAP 3.15 + ScrollTrigger + SplitText + Lenis).
 *
 * Fortion marks elements with attributes ([Section], [SectionTitle],
 * [StaggerList], [group-anim], [reveal-0s], [Image="Effect"], [data-anim-child]).
 * Here the same roles are mapped onto the Carefront class names in ROLES, so
 * every page gets the effect without hand-tagging templates. The attributes
 * below can also be added to any element directly:
 *   data-hx-title    heading words rise out of a mask
 *   data-hx-text     paragraph words rise in
 *   data-hx-stagger  children rise in one after another
 *   data-hx-group    direct children fade up one after another
 *   data-hx-fade     the element fades up as one block
 *   data-hx-zoom     image slowly zooms while scrolling (parent must clip)
 *   data-hx-motion="off" opts an element and everything inside it out.
 *
 * Elements are hidden before first paint by hmxtech-motion.css only while
 * <html> has .hx-motion and not .hx-motion-ready. The head sets .hx-motion
 * (skipped for prefers-reduced-motion) and a 4 s failsafe adds -ready, so
 * content is never lost if this script fails.
 */
(function () {
  'use strict';

  var root = document.documentElement;

  function markReady() {
    root.classList.add('hx-motion-ready');
  }

  if (!root.classList.contains('hx-motion') || !window.gsap || !window.ScrollTrigger) {
    markReady();

    return;
  }

  var gsap = window.gsap;
  var ScrollTrigger = window.ScrollTrigger;
  var SplitText = window.SplitText || null;

  gsap.registerPlugin(ScrollTrigger);

  if (SplitText) {
    gsap.registerPlugin(SplitText);
  }

  /** Fortion's timings, copied from its custom code and IX3 timelines. */
  var FORTION = {
    section: {
      start: 'top 88%',
      ease: 'power3.out',
      tag: { y: 18, dur: 0.7, at: 0 },
      title: { yPercent: 70, dur: 0.9, each: 0.05, at: 0.08 },
      text: { yPercent: 60, dur: 0.8, amount: 0.5, at: 0.3 },
      button: { y: 24, dur: 0.8, each: 0.1, at: 0.5 }
    },
    stagger: { y: 32, scale: 0.97, each: 0.14, dur: 1, ease: 'power4.out', start: 'top 94%' },
    group: { y: 20, dur: 0.3, each: 0.1, ease: 'power2.out', start: 'top 85%' },
    fade: { y: 60, dur: 0.7, ease: 'power2.out', start: 'top 95%' },
    child: { y: 20, dur: 0.7, ease: 'power2.out', start: 'top 95%' },
    zoom: { scale: 1.3, scrub: 0.8 },
    lenis: { lerp: 0.05 }
  };

  /** Carefront class names mapped onto Fortion's roles. */
  var ROLES = {
    stagger: '[data-hx-stagger], .post-list, .post-grid, .pricing-grid, .faq-list, .points, .channels, .platform-index,'
      + ' .license-list, .about-stats, .values-grid, .team-grid, .steps, .hx-steps, .releases, .quotes, .footer_cols',
    group: '[data-hx-group], .tag-row, .filter-chips, .trust-row, .byline_row',
    tag: '.eyebrow, .hx-tag, .post-header .post-card_tag',
    title: '[data-hx-title], h1, h2',
    text: '[data-hx-text], .text-lead, .page-hero_text, .post-header_summary, .post-feature_text',
    button: '.button-row > .button, .button-row > a, .section-header .button, .page-hero .button',
    fade: '[data-hx-fade], .post-cover, .post-feature, .form-card, .split-grid > *, .story-grid > *, .contact-grid > *,'
      + ' .faq-grid > *, .module-grid > *, .platform_grid > *, .app-grid > *, .sg-group, .careers, .auth_card, .footer_panel',
    child: '.w-richtext > *, .post-body_content > *, .instructions_text > *',
    zoom: '[data-hx-zoom], .hx-release_img'
  };

  /** Never animated by this script: own animations, Webflow IX3 targets, chrome. */
  var SKIP = '[data-hx-motion="off"], .nav_component, .hx-hero, .hx-top, .phpdebugbar, .w-form-done, .w-form-fail,'
    + ' .w-dropdown-list, [data-wf-target], .feature, .chip, .ui-card, .bubble, .check-dot, .pattern-tile,'
    + ' .progress_fill, .record-stack, .rs-leader, .snippet, .steps_dot, .steps_line, .typing, .module-scene,'
    + ' .svg-dash, .svg-dot, .svg-leader, .nav_mobile';

  /** Section groups: the nearest of these ancestors shares one timeline. */
  var GROUP = '.section-header, .page-hero, .post-header, .post-feature_body, .cta, section, header, footer, article, body';

  var CLAIMED = 'data-hx-m';

  function isFree(element) {
    return !element.closest(SKIP)
      && !element.closest('[' + CLAIMED + ']')
      && !element.querySelector(SKIP)
      && !element.querySelector('[' + CLAIMED + ']');
  }

  function claim(element) {
    element.setAttribute(CLAIMED, '');
  }

  function pick(selector) {
    return gsap.utils.toArray(selector).filter(function (element) {
      if (!isFree(element)) {
        return false;
      }

      claim(element);

      return true;
    });
  }

  function clearAfter(targets) {
    return function () {
      gsap.set(targets, { clearProps: 'transform,transformOrigin,opacity,visibility' });
    };
  }

  /* ---- Lenis smooth scroll (Fortion: lerp 0.05) --------------------------- */
  var lenis = null;

  if (window.Lenis) {
    lenis = new window.Lenis({
      lerp: FORTION.lenis.lerp,
      prevent: function (node) {
        return node.hasAttribute('data-lenis-prevent')
          || (node.matches && node.matches('.nav_mobile, .w-dropdown-list, .phpdebugbar, textarea, select'));
      }
    });

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add(function (time) {
      lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
    window.hxLenis = lenis;

    /* Same-page anchors glide with Lenis, clearing the fixed nav. */
    document.addEventListener('click', function (event) {
      var link = event.target.closest && event.target.closest('a[href*="#"]');

      if (!link || event.defaultPrevented || event.metaKey || event.ctrlKey || event.shiftKey) {
        return;
      }

      var url = new URL(link.href, window.location.href);

      if (url.pathname !== window.location.pathname || url.hash.length < 2) {
        return;
      }

      var target = url.hash === '#top' ? 0 : document.getElementById(decodeURIComponent(url.hash.slice(1)));

      if (target === null) {
        return;
      }

      event.preventDefault();
      event.stopPropagation();

      var nav = document.querySelector('.nav_component');

      lenis.scrollTo(target, { offset: target === 0 ? 0 : -((nav && nav.offsetHeight) || 0) - 16 });
      history.pushState(null, '', url.hash);
    }, true);
  }

  /* ---- 1. StaggerList: children rise, fade and scale in, batched ---------- */
  pick(ROLES.stagger).forEach(function (list) {
    var items = gsap.utils.toArray(list.children).filter(function (item) {
      return !item.closest(SKIP) && !item.querySelector(SKIP);
    });

    if (items.length < 2) {
      return;
    }

    var cfg = FORTION.stagger;

    gsap.set(items, { autoAlpha: 0, y: cfg.y, scale: cfg.scale, transformOrigin: '50% 0%' });

    ScrollTrigger.batch(items, {
      start: cfg.start,
      once: true,
      interval: 0.15,
      onEnter: function (batch) {
        gsap.to(batch, {
          autoAlpha: 1,
          y: 0,
          scale: 1,
          duration: cfg.dur,
          ease: cfg.ease,
          stagger: cfg.each,
          overwrite: true,
          onComplete: clearAfter(batch)
        });
      }
    });
  });

  /* ---- 2. group-anim: direct children fade up one after another ---------- */
  pick(ROLES.group).forEach(function (group) {
    var items = gsap.utils.toArray(group.children);
    var cfg = FORTION.group;

    if (!items.length) {
      return;
    }

    gsap.set(items, { autoAlpha: 0, y: cfg.y });
    gsap.to(items, {
      autoAlpha: 1,
      y: 0,
      duration: cfg.dur,
      ease: cfg.ease,
      stagger: cfg.each,
      delay: 0.1,
      scrollTrigger: { trigger: group, start: cfg.start, once: true },
      onComplete: clearAfter(items)
    });
  });

  /* ---- 3. Section: tag, title words, text words, buttons in one timeline -- */
  var sections = new Map();

  function addToSection(role, elements) {
    elements.forEach(function (element) {
      var group = element.parentElement ? element.parentElement.closest(GROUP) : document.body;

      if (!sections.has(group)) {
        sections.set(group, { tag: [], title: [], text: [], button: [] });
      }

      sections.get(group)[role].push(element);
    });
  }

  addToSection('tag', pick(ROLES.tag));
  addToSection('title', pick(ROLES.title));
  addToSection('text', pick(ROLES.text));
  addToSection('button', pick(ROLES.button));

  function splitWords(elements, splits) {
    if (!SplitText) {
      return elements;
    }

    return elements.reduce(function (words, element) {
      var split = new SplitText(element, { type: 'words', mask: 'words' });

      splits.push(split);

      return words.concat(split.words);
    }, []);
  }

  sections.forEach(function (parts) {
    var cfg = FORTION.section;
    var splits = [];
    var all = parts.tag.concat(parts.title, parts.text, parts.button);

    if (!all.length) {
      return;
    }

    var first = all.slice().sort(function (a, b) {
      return a.compareDocumentPosition(b) & Node.DOCUMENT_POSITION_FOLLOWING ? -1 : 1;
    })[0];

    var titleWords = splitWords(parts.title, splits);
    var textWords = splitWords(parts.text, splits);

    if (parts.tag.length) {
      gsap.set(parts.tag, { autoAlpha: 0, y: cfg.tag.y });
    }

    if (titleWords.length) {
      gsap.set(titleWords, { autoAlpha: 0, yPercent: cfg.title.yPercent });
    }

    if (textWords.length) {
      gsap.set(textWords, { autoAlpha: 0, yPercent: cfg.text.yPercent });
    }

    if (parts.button.length) {
      gsap.set(parts.button, { autoAlpha: 0, y: cfg.button.y });
    }

    var timeline = gsap.timeline({
      defaults: { ease: cfg.ease },
      scrollTrigger: { trigger: first, start: cfg.start, once: true },
      onComplete: function () {
        gsap.set(parts.tag.concat(parts.button), { clearProps: 'transform,opacity,visibility' });
        splits.forEach(function (split) {
          split.revert();
        });
      }
    });

    if (parts.tag.length) {
      timeline.to(parts.tag, { autoAlpha: 1, y: 0, duration: cfg.tag.dur, stagger: 0.1 }, cfg.tag.at);
    }

    if (titleWords.length) {
      timeline.to(titleWords, {
        autoAlpha: 1, yPercent: 0, duration: cfg.title.dur, stagger: cfg.title.each
      }, cfg.title.at);
    }

    if (textWords.length) {
      timeline.to(textWords, {
        autoAlpha: 1,
        yPercent: 0,
        duration: cfg.text.dur,
        stagger: { amount: Math.min(cfg.text.amount, textWords.length * 0.02) }
      }, cfg.text.at);
    }

    if (parts.button.length) {
      timeline.to(parts.button, {
        autoAlpha: 1, y: 0, duration: cfg.button.dur, stagger: cfg.button.each
      }, cfg.button.at);
    }
  });

  /* ---- 4. reveal-0s: larger blocks fade up as one -------------------------- */
  pick(ROLES.fade).forEach(function (block) {
    var cfg = FORTION.fade;

    gsap.fromTo(block, { autoAlpha: 0, y: cfg.y }, {
      autoAlpha: 1,
      y: 0,
      duration: cfg.dur,
      ease: cfg.ease,
      scrollTrigger: { trigger: block, start: cfg.start, once: true },
      onComplete: clearAfter(block)
    });
  });

  /* ---- 5. data-anim-child: long-form content fades up line by line ------- */
  pick(ROLES.child).forEach(function (element) {
    var cfg = FORTION.child;

    gsap.fromTo(element, { autoAlpha: 0, y: cfg.y }, {
      autoAlpha: 1,
      y: 0,
      duration: cfg.dur,
      ease: cfg.ease,
      scrollTrigger: { trigger: element, start: cfg.start, once: true },
      onComplete: clearAfter(element)
    });
  });

  /* ---- 6. Image="Effect": photos zoom slowly as they pass (scrubbed) ------ */
  gsap.utils.toArray(ROLES.zoom).forEach(function (image) {
    var frame = image.parentElement;

    if (image.closest(SKIP) || !frame || !/hidden|clip/.test(getComputedStyle(frame).overflow)) {
      return;
    }

    gsap.fromTo(image, { scale: 1 }, {
      scale: FORTION.zoom.scale,
      ease: 'none',
      scrollTrigger: { trigger: frame, start: 'top bottom', end: 'bottom top', scrub: FORTION.zoom.scrub }
    });
  });

  markReady();

  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () {
      ScrollTrigger.refresh();
    });
  }
})();
