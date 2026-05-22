(function () {
  'use strict';

  // ---------- Features Tabs ----------
  document.querySelectorAll('[data-ax-tabs]').forEach(function (root) {
    var buttons = root.querySelectorAll('.ax-tab-btn');
    var panels  = root.querySelectorAll('.ax-tab-panel');
    buttons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.getAttribute('data-tab');
        buttons.forEach(function (b) { b.classList.remove('is-active'); });
        panels.forEach(function (p) { p.classList.remove('is-active'); });
        btn.classList.add('is-active');
        var panel = root.querySelector('[data-panel="' + target + '"]');
        if (panel) panel.classList.add('is-active');
      });
    });
  });

  // ---------- FAQ — close siblings when one opens (accordion behavior) ----------
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
      nav.classList.toggle('is-open');
      document.body.classList.toggle('ax-nav-open');
    });
  }

  // ---------- Sticky header subtle shadow on scroll ----------
  var header = document.querySelector('.ax-header');
  if (header) {
    var onScroll = function () {
      if (window.scrollY > 12) header.classList.add('is-stuck');
      else header.classList.remove('is-stuck');
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
})();
