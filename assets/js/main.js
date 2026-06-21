/* ============================================================
   SORWATOMO — MAIN SITE SCRIPT
   Scroll reveal — shared across all new-design pages.
   ============================================================ */

(function () {
  'use strict';

  /* ---- Scroll-reveal — .reveal → .revealed when in viewport ---- */
  var revealEls = document.querySelectorAll('.reveal');
  if (!revealEls.length) return;

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );

  revealEls.forEach(function (el) {
    observer.observe(el);
  });
})();
