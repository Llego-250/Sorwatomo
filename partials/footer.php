<footer class="site-footer" role="contentinfo">
  <div class="container">

    <!-- Four-column grid -->
    <div class="footer-grid">

      <!-- Col 1: Brand -->
      <div class="footer-brand footer-col">
        <a href="/" class="footer-brand__logo-link" aria-label="Sorwatomo — Home">
          <img src="/assets/img/logo.png" alt="Sorwatom" class="footer-brand__logo-img" width="130" height="44" loading="lazy" decoding="async" style="filter:none">
        </a>
        <p>
          The Great Lakes' leading agribusiness — producing extraordinary
          flavour profiles for the modern global palate since 1984.
        </p>
      </div>

      <!-- Col 2: Explore links -->
      <div class="footer-col">
        <h4>Explore</h4>
        <ul role="list">
          <li><a href="/about">Our Story</a></li>
          <li><a href="/products">Product Catalog</a></li>
          <li><a href="/blog">Journal</a></li>
          <li><a href="/contact">Get in Touch</a></li>
        </ul>
      </div>

      <!-- Col 3: Headquarters -->
      <div class="footer-col footer-hq">
        <h4>Headquarters</h4>
        <address class="footer-address">
          <p>Ndera - Murindi<br>Kigali, Rwanda</p>
          <p>
            <a href="tel:+250787160000">(+250) 787 160 000</a>
          </p>
          <p>
            <a href="mailto:info@sorwatom.com">info@sorwatom.com</a>
          </p>
        </address>
      </div>

      <!-- Col 4: Newsletter -->
      <div class="footer-col footer-newsletter">
        <h4>Stay Close</h4>
        <p class="footer-newsletter__intro">
          New products, brand updates, and exclusive launches — delivered to your inbox.
        </p>
        <form action="#" method="post" novalidate aria-label="Newsletter signup">
          <div class="footer-newsletter__row">
            <label for="footer-email" class="sr-only">Email address</label>
            <input
              type="email"
              id="footer-email"
              name="email"
              placeholder="Your email address"
              autocomplete="email"
              required
            >
            <button type="submit">JOIN</button>
          </div>
        </form>
      </div>

    </div><!-- /.footer-grid -->

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <p>&copy; 2026 SORWATOMO AGRIBUSINESS. ALL RIGHTS RESERVED.</p>
      <nav class="footer-social" aria-label="Social and legal links">
        <a href="https://www.instagram.com/sorwatom_rw/" rel="noopener noreferrer" aria-label="Sorwatomo on Instagram">INSTAGRAM</a>
        <a href="https://www.linkedin.com/in/sorwatom-ltd-6b2a48177/" rel="noopener noreferrer" aria-label="Sorwatomo on LinkedIn">LINKEDIN</a>
        <a href="https://www.facebook.com/SORWATOM/" rel="noopener noreferrer" aria-label="Sorwatomo on Facebook">FACEBOOK</a>
        <a href="https://www.X.com/sorwatom/" rel="noopener noreferrer" aria-label="Sorwatomo on Twitter">TWITTER</a>
        <a href="#">PRIVACY</a>
      </nav>
    </div>

  </div><!-- /.container -->
</footer>

<style>
/* -------------------------------------------------------
   FOOTER LOGO — shares nav-logo token styles; declared
   here so the footer works independently of nav.php.
------------------------------------------------------- */
.footer-brand__logo-link {
  display: inline-block;
  text-decoration: none;
  margin-bottom: var(--space-sm);
}

.footer-brand__logo-img {
  height: 40px;
  width: auto;
  object-fit: contain;
  display: block;
}

/* -------------------------------------------------------
   ADDRESS block — reset italic, match body colour.
------------------------------------------------------- */
.footer-address {
  font-style: normal;
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.footer-address p {
  font-size: var(--step-0);
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.6;
  margin: 0;
}

.footer-address a {
  color: rgba(255, 255, 255, 0.75);
  text-decoration: none;
  transition: color var(--dur-fast);
}

.footer-address a:hover {
  color: var(--col-accent);
}

/* -------------------------------------------------------
   NEWSLETTER intro copy
------------------------------------------------------- */
.footer-newsletter__intro {
  font-size: var(--step--1);
  color: rgba(255, 255, 255, 0.55);
  line-height: 1.65;
  margin-bottom: var(--space-sm);
}

/* Newsletter input + button row — override base to use
   a row layout (base form uses flex already). */
.footer-newsletter__row {
  display: flex;
  gap: var(--space-xs);
}

/* -------------------------------------------------------
   SCREEN-READER ONLY utility (used for label above).
------------------------------------------------------- */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
</style>
