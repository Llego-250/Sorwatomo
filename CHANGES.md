# Sorwatom — Project Change Log
**Period:** June 19 – June 29, 2026  
**Host:** InfinityFree (`sorwatom.rf.gd`)

---

## June 19 — Project Start

| Commit | Summary |
|--------|---------|
| `ef8cc99` | Initial commit — placeholder pages, leftover spec files from a prior project |

---

## June 21 — Foundation & Product Pages

| Commit | Summary |
|--------|---------|
| `b0f02d2` | Built foundational CSS architecture: `tokens.css` (design tokens), `reset.css`, `layout.css`, `global.css`. Created shared partials: `_head.php`, `_scripts.php`, `nav.php`, `footer.php` |
| `72749bd` | Removed obsolete spec/settings files from the previous KFC project |
| `8034bc2` | Revamped **Heirloom Ketchup** product page — hero, product image, badge, description, feature list, related products grid, CTA buttons |
| `a1d2762` | Revamped **Tomato Paste** product page — same structure, added image gallery and related products |
| `0eece98` | Revamped **Pilau Masala** product page |
| `c7451ee` | Revamped **Pure Vinegar** product page |
| `2881f5d` | Added custom `404.php` error page. Enhanced contact form with AJAX submission and client-side validation. Updated `.htaccess` routing. Added new product images |
| `a11b219` | Added decorative hero backgrounds and logo image. Updated product image paths for consistency across all pages |
| `448bbc7` | Removed unused files: `slider.js`, `validator.min.js`, `wow.min.js`, `nav_bar.html`, `product-template.php`, `products_sidebar.html` |

---

## June 24 — Refactor, Blog Foundation & Deployment Setup

| Commit | Summary |
|--------|---------|
| `463d729` | Refactored all product pages to use `partials/nav.php` and `partials/footer.php`. Changed all internal links to clean URLs (no `.php`). Added initial blog listing (`blog.php`) and single post (`blog-post.php`) with static placeholder posts and blog CSS |
| `345863c`–`2fc5d88` | CNAME file created, updated, then deleted (GitHub Pages domain experiments) |
| `2dcd70a` | Code structure refactor for readability |
| `a3561be` | Changed deployment target from GitHub Pages to FTP |
| `57de8c5` | Added Fly.io Docker deployment config |
| `95fa2fc` | Further code structure refactor |
| `67f500c` | Second full refactor of product pages + blog foundation with routing and dynamic data handling |

---

## June 27 — Navigation, Performance & WebP Images

| Commit | Summary |
|--------|---------|
| `5301196` | Removed local Claude settings file |
| `ff309fa` | Updated content and styles across multiple pages. Added mobile navigation close button |
| `a3f62a4` | Updated newsletter intro copy |
| `2a9d02c` | Improved mobile nav overlay: z-index, transition effects |
| `4bfda3e` | Refactored mobile nav: corrected logo path, improved overlay structure, accessibility attributes |
| `f0d9fee` | Updated GitHub Actions deploy workflow: switched from Fly.io to InfinityFree FTP |
| `32e49c4` | Fixed FTP deploy: forced plain FTP on port 21 (InfinityFree blocks FTPS) |
| `549774a` | Removed old Fly.io deploy workflow |
| `f94e1c0` | Switched FTP tool to `lftp` with passive mode for InfinityFree compatibility |
| `6a96182` | Added FTP connection test step and fixed `lftp` script format |
| `b3f46af` | Fixed `lftp` credentials with special characters using `-u` flag |
| `3a0729a` | **Bug fix:** closing the mobile menu left focus on a hidden element — fix returns focus to the hamburger toggle before setting `aria-hidden="true"` on the overlay |
| `2c099e7` | WebP conversion approach established |
| `02cbe1c` | Added WebP versions of all hero/slider images. Enabled gzip/Deflate compression and WebP auto-serving in `.htaccess` |
| `db92dad` | Created README |
| `803aea5`–`3646a7a` | Updated all four product pages with `<picture>` elements: WebP `<source>` + JPEG/PNG fallback. Added `$hero_img` variable |
| `050f3c0` | Added responsive hero images and `<link rel="preload">` hints targeting sub-2s load time |

---

## June 28 — Products Polish, Blog System & Admin Panel

| Commit | Summary |
|--------|---------|
| `8242c72`, `ebadbd7` | Updated `products.php`: improved grid, layout and copy |
| `0734e4f` | Changed `hero--half` to use `100svh` on all screen sizes — consistent full-viewport hero across every page |
| `9c3913a`, `3103b0e` | All four product pages now share the same hero markup structure as `index.php` |
| `f736025` | Updated `_head.php`: two meta/link changes |
| `b73e744` | Changed floating badge image on product pages |
| `dcbb4da` | **Performance:** Converted hero/slider images to WebP mobile variants — file size reduced from **2.4–3.1 MB → 156–232 KB per image** (~10× reduction). Updated `<source>` and preload hints |
| `8e417b8` | **Added full blog system:** MySQL schema (`blog_posts`, `blog_categories`, `blog_authors`, `blog_post_tags`), `data/blog.php` query layer, `config/database.php` PDO singleton (`utf8mb4`, prepared statements), `config/app.php` constants, `feed.php` RSS feed, full admin panel (`admin/index.php`, `admin/login.php`, `admin/logout.php`, `admin/posts.php`, `admin/post-edit.php`, `admin/post-delete.php`, `admin/setup.php`, `admin/_auth.php`, `admin/_nav.php`, `admin/assets/admin.css`), `.htaccess` routing for `/blog/slug` and clean URLs |
| `83e00db` | Added MySQL PHP extension to Dockerfile |
| `66f29f9` | Configured database name constant in `config/app.php` |
| `d8edfb5` | Replaced database placeholder with real credentials |
| `c923ffb` | Fixed `session_regenerate_id()` — wrapped in try/catch for InfinityFree shared hosting compatibility |
| `485e7e6` | Deleted `generate-hash.php` after use |
| `9c62fb4` | Fixed admin password: converted bcrypt hash prefix from `$2b$` (Python) to `$2y$` (PHP) |
| `3f5fba0` | **Critical bug fix:** `.htaccess` 301 redirect (`.php` → clean URL) was converting POST to GET, losing the login form password. Added `RewriteCond %{REQUEST_METHOD} !POST` to skip the redirect on POST requests |
| `d18f3f7` | Added images to blog posts |
| `1d78b63` | Removed duplicate `container--narrow` CSS (was in both `blog.css` and `layout.css`). Fixed blog post hero: `hero--full` was setting `100svh`; blog CSS now overrides to `70svh`. Fixed overlay `::after` to only apply when the pattern div is `position: absolute` |
| `30b2402` | **Bug fix:** blog listing hero pattern was being dimmed by the overlay — restored `opacity: 1` on `.hero__bg--pattern` |
| `0d43deb` | **Bug fix:** partial files used relative CSS/JS paths that broke at `/blog/slug` (one level deep). Changed all paths to absolute root paths (`/assets/...`) |
| `79dae86` | Changed CSS path reference |
| `18b7a19` | Fixed two blog layout issues identified in review |

---

## June 29 — Blog CSS, Footer, About Page, i18n & Admin Editor

### Blog CSS Refinements

| Commit | Summary |
|--------|---------|
| `0c466e3`, `8f3af31` | Fixed oversized featured post card — constrained height and layout |
| `5d21b33` | Changed featured post and post image aspect ratio from `4/3` → `16/9` for better proportions |
| `ce9f08e` | Updated both `blog-post.php` and `blog.css` together |
| `9dc6399`, `803b8eb` | **Bug fix:** `max-height` on a grid container doesn't constrain grid item images. Switched to explicit `.img-wrap` height + `object-fit: contain` for product PNGs with transparent backgrounds |
| `193053a` | Blog cards: extracted content preview from post body instead of excerpt only; removed fixed card height |
| `f83f351` | Post featured image: switched to `object-fit: contain` with 20px padding and `background: var(--col-surface-2)` so full product bottle is visible without cropping |
| `aff3d5d`, `0f87938` | Moved category badge from inside the image wrapper (where it was hidden by `overflow: hidden`) to the card body above the title |
| `759e380` | Uploaded updated `blog-post.php` and `blog.css` together |

### Footer & Social Media

| Commit | Summary |
|--------|---------|
| `4894340` | Updated HQ location in footer |
| `addd45e`, `333b0cb` | Added social media links to footer (two rounds) |
| `e534bad`, `f3042d0`, `3cdde64` | **Bug fix:** `filter: brightness(0) invert(1)` in footer CSS was turning the full-colour logo solid white. Multiple attempts — root cause was in `components.css` (loaded globally, overriding inline `style`) |
| `6ae7fb2` | **Final fix:** removed the filter from `components.css` at the source — footer and all pages now show the full-colour logo |
| `9bb14f2` | Removed the same white filter from admin panel header and login page logo |

### Products Page

| Commit | Summary |
|--------|---------|
| `db8db8d` | Removed "Process Strip" section from `products.php` entirely — HTML and all CSS cleaned out |
| `2a9229e` | Removed CTA block from all four product detail pages — pages now go straight from related products to the footer |

### Contact Page

| Commit | Summary |
|--------|---------|
| `4f0bdef` | Updated contact page content and layout |

### About Page (Full Rewrite)

| Commit | Summary |
|--------|---------|
| `a34280d`, `c7816ba`, `967930e` | Rewrote `about.php` with real brand content: brand story, team section with cards, product promise / "Our Journey" narrative |
| `0f4ed30` | Added team card styles to `about.css` |
| `27bc3dc` | Updated images in about section |
| `16d711b` | Uploaded updated `about.php` |
| `90c82fc` | Full structural rewrite of `about.php` for cleaner section order |
| `41eee43` | Reordered page sections |
| `b3ce99e` | Moved stats bar (Founded, Countries, Products) inside the hero section; updated colours for dark background |
| `93c82d2` | Added `about.css` styles for the stats bar on dark hero background |
| `421ddb6` | Made hero `flex-direction: column` so `margin-top: auto` on the stats wrapper pushes it to the bottom |
| `c68a15f` | Removed `padding-top` from `hero__stats-wrap` — `margin-top: auto` handles the spacing |
| `68450dc`, `e5088a6` | **Bug fix:** CSS specificity conflict on `.stats-bar__value` — both selectors had `0,2,0` specificity; resolved with more specific selector |
| `aa4c764` | Uploaded corrected `about.php` |
| `cb482e7`, `c118f34` | Hero top clearance increased: `clamp(5rem,12svh,9rem)` → `clamp(7rem,18svh,12rem)` (~112–192px) |
| `296aa1d` | Removed "Certified Badge" image from hero |
| `ffcdc80` | Hero top clearance increased further: → `clamp(9rem,20svh,15rem)` |
| `2582b32` | Removed "Brand Statement" section and all its CSS |

### Footer Cleanup

| Commit | Summary |
|--------|---------|
| `13ec3ee` | Copyright year and "years in business" counter now use `date('Y')` — both auto-increment every January 1st without code changes (1984 → current year) |
| `1c19890` | Removed newsletter signup column from footer grid |
| `8465bff` | Updated footer grid to 3 columns: Brand (1.6fr), Explore, HQ |

### Multilingual System (i18n)

| Commit | Summary |
|--------|---------|
| `fbe476c` | **Built complete i18n system:** `partials/_lang.php` (session-based language switching), `lang-switch.php` (POST handler), `__t($key)` helper (HTML-safe, `{placeholder}` interpolation), `__r($key)` helper (raw HTML for strings with tags). Translation files: `lang/en.php`, `lang/fr.php`, `lang/sw.php`. All pages translated: nav, home, about, products, contact, footer, privacy, blog, all four product detail pages |
| `6e8e2fb` | Verified `_head.php` bootstraps `_lang.php` first — all pages have `__t()` available before any HTML output. Removed Kinyarwanda (RW) from allowed languages; active languages: **EN · FR · SW** |

### Admin Post Editor Rewrite + Image Upload

| Commit | Summary |
|--------|---------|
| `87a1636`, `7d7ce3c` | **Rewrote `admin/post-edit.php`** — replaced raw HTML `<textarea>` with a `contenteditable` WYSIWYG rich-text editor (Bold, Italic, Underline, Strikethrough, H2, H3, Paragraph, Blockquote, Bullet List, Numbered List, Link, Insert Image, HR, Remove Formatting). Toolbar uses `document.execCommand()`; active state syncs on cursor movement. Tab key inserts 4 spaces. Content synced to hidden `<input name="content">` on submit. Added **Featured Image** sidebar card with drag-and-drop, file picker, live preview, remove button, and URL fallback. Added **Insert Image** modal with cursor-position preservation (`saveRange` / `restoreRange`). Created `admin/image-upload.php` — AJAX endpoint validating MIME type via `finfo`, 8 MB limit, dated random filename, saves to `assets/img/blog/`. Added all new CSS to `admin/assets/admin.css` |
