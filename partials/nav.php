<!-- Skip link — visible on keyboard focus only -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-nav" id="site-nav" role="banner">
  <div class="container">
    <div class="site-nav__inner">

      <!-- Logo -->
      <a href="/" class="nav-logo" aria-label="Sorwatomo — Home">
        <img src="assets/img/logo.png" alt="Sorwatom" class="nav-logo__img" width="140" height="48">
      </a>

      <!-- Desktop navigation -->
      <nav aria-label="Main navigation">
        <ul class="nav-links" id="nav-links" role="list">
          <li>
            <a href="/"<?= ($current_page ?? '') === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
          </li>
          <li>
            <a href="/products"<?= ($current_page ?? '') === 'products' ? ' aria-current="page"' : '' ?>>Collection</a>
          </li>
          <li>
            <a href="/about"<?= ($current_page ?? '') === 'about' ? ' aria-current="page"' : '' ?>>Our Story</a>
          </li>
          <li>
            <a href="/blog"<?= ($current_page ?? '') === 'blog' ? ' aria-current="page"' : '' ?>>Journal</a>
          </li>
          <li>
            <a href="/contact" class="nav-cta"<?= ($current_page ?? '') === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a>
          </li>
        </ul>
      </nav>

      <!-- Mobile hamburger toggle -->
      <button
        class="nav-toggle"
        aria-label="Open menu"
        aria-expanded="false"
        aria-controls="mobile-nav"
        type="button"
      >
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
      </button>

    </div>
  </div>

  <!-- Mobile full-screen overlay nav -->
  <div class="mobile-nav" id="mobile-nav" aria-hidden="true" role="dialog" aria-label="Main navigation">
    <ul role="list">
      <li>
        <a href="/"<?= ($current_page ?? '') === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
      </li>
      <li>
        <a href="/products"<?= ($current_page ?? '') === 'products' ? ' aria-current="page"' : '' ?>>Collection</a>
      </li>
      <li>
        <a href="/about"<?= ($current_page ?? '') === 'about' ? ' aria-current="page"' : '' ?>>Our Story</a>
      </li>
      <li>
        <a href="/blog"<?= ($current_page ?? '') === 'blog' ? ' aria-current="page"' : '' ?>>Journal</a>
      </li>
      <li>
        <a href="/contact"<?= ($current_page ?? '') === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a>
      </li>
    </ul>
  </div>
</header>

<style>
/* -------------------------------------------------------
   NAV LOGO — inline so the wordmark renders even before
   components.css finishes parsing on slow connections.
------------------------------------------------------- */
.nav-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
  flex-shrink: 0;
}

.nav-logo__img {
  height: 44px;
  width: auto;
  object-fit: contain;
  display: block;
}

/* -------------------------------------------------------
   MOBILE OVERLAY NAV
------------------------------------------------------- */
.mobile-nav {
  position: fixed;
  inset: 0;
  background: var(--col-ground);
  z-index: 98;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transform: translateY(-8px);
  pointer-events: none;
  transition:
    opacity var(--dur-base) var(--ease-out),
    transform var(--dur-base) var(--ease-out);
}

.mobile-nav.open {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

.mobile-nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-lg);
}

.mobile-nav a {
  font-family: var(--font-display);
  font-size: var(--step-3);
  color: white;
  text-decoration: none;
  opacity: 0.85;
  transition: opacity var(--dur-fast), color var(--dur-fast);
  letter-spacing: -0.01em;
}

.mobile-nav a:hover,
.mobile-nav a[aria-current="page"] {
  opacity: 1;
  color: var(--col-accent);
}

@media (prefers-reduced-motion: reduce) {
  .mobile-nav {
    transition: none;
  }
}
</style>

<script>
(function () {
  var header  = document.getElementById('site-nav');
  var toggle  = header.querySelector('.nav-toggle');
  var overlay = document.getElementById('mobile-nav');
  var focusable = 'a[href], button:not([disabled])';
  var scrollThreshold = 60;

  /* ---- Scroll: add/remove .scrolled class ---- */
  function onScroll() {
    header.classList.toggle('scrolled', window.scrollY > scrollThreshold);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ---- Mobile menu open/close ---- */
  function openMenu() {
    overlay.classList.add('open');
    overlay.removeAttribute('aria-hidden');
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'Close menu');
    document.body.style.overflow = 'hidden';
    trapFocus(overlay);
  }

  function closeMenu() {
    overlay.classList.remove('open');
    overlay.setAttribute('aria-hidden', 'true');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Open menu');
    document.body.style.overflow = '';
    toggle.focus();
  }

  toggle.addEventListener('click', function () {
    toggle.getAttribute('aria-expanded') === 'true' ? closeMenu() : openMenu();
  });

  /* Close on Escape */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && overlay.classList.contains('open')) closeMenu();
  });

  /* Close on overlay link click */
  overlay.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  /* ---- Focus trap ---- */
  function trapFocus(el) {
    var nodes = Array.from(el.querySelectorAll(focusable));
    if (!nodes.length) return;
    nodes[0].focus();
    el.addEventListener('keydown', function cycle(e) {
      if (e.key !== 'Tab') return;
      if (e.shiftKey) {
        if (document.activeElement === nodes[0]) {
          e.preventDefault();
          nodes[nodes.length - 1].focus();
        }
      } else {
        if (document.activeElement === nodes[nodes.length - 1]) {
          e.preventDefault();
          nodes[0].focus();
        }
      }
      if (!overlay.classList.contains('open')) el.removeEventListener('keydown', cycle);
    });
  }
})();
</script>
