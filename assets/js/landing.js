(function () {
  'use strict';

  // ---------- Features Tabs ----------
  document.querySelectorAll('[data-ax-tabs]').forEach(function (root) {
    root.querySelectorAll('.ax-tab-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.getAttribute('data-tab');
        root.querySelectorAll('.ax-tab-btn').forEach(function (b) { b.classList.remove('is-active'); });
        root.querySelectorAll('.ax-tab-panel').forEach(function (p) { p.classList.remove('is-active'); });
        btn.classList.add('is-active');
        var panel = root.querySelector('[data-panel="' + target + '"]');
        if (panel) panel.classList.add('is-active');
      });
    });
  });

  // ---------- FAQ accordion (close siblings) ----------
  document.querySelectorAll('[data-ax-faq]').forEach(function (root) {
    var items = root.querySelectorAll('.ax-faq-item');
    items.forEach(function (item) {
      item.addEventListener('toggle', function () {
        if (item.open) {
          items.forEach(function (other) {
            if (other !== item) other.removeAttribute('open');
          });
        }
      });
    });
  });

  // ---------- Mobile nav toggle ----------
  var burger = document.querySelector('.ax-burger');
  var nav    = document.querySelector('.ax-nav');
  if (burger && nav) {
    burger.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.classList.toggle('ax-nav-open', open);
    });
    // Close nav on outside click
    document.addEventListener('click', function (e) {
      if (nav.classList.contains('is-open') && !nav.contains(e.target) && !burger.contains(e.target)) {
        nav.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('ax-nav-open');
      }
    });
  }

  // ---------- Mobile submenu tap toggle (at ≤1024px CSS hides hover) ----------
  document.querySelectorAll('.ax-has-sub > a').forEach(function (link) {
    link.addEventListener('click', function (e) {
      if (window.innerWidth <= 1024) {
        var sub = link.parentElement.querySelector('.ax-sub-menu');
        if (sub) {
          e.preventDefault();
          var open = sub.style.display === 'block';
          // Close all other open submenus
          document.querySelectorAll('.ax-sub-menu').forEach(function (s) { s.style.display = ''; });
          sub.style.display = open ? '' : 'block';
        }
      }
    });
  });

  // ---------- Sticky header shadow on scroll ----------
  var header = document.querySelector('.ax-header');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('is-stuck', window.scrollY > 12);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---------- Smooth scroll for in-page anchor links ----------
  document.querySelectorAll('a[href*="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var href = a.getAttribute('href');
      var hash = href.indexOf('#') !== -1 ? href.slice(href.indexOf('#')) : '';
      if (!hash || hash === '#') return;
      try {
        var target = document.querySelector(hash);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      } catch (_) {}
    });
  });
})();
