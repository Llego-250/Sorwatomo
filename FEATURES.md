# Sorwatom — Feature Documentation
**From:** June 19, 2026 (day one) **→ To:** June 30, 2026 (today)  
**Site:** sorwatom.rf.gd · InfinityFree hosting · PHP + MySQL

---

## 1. Site Architecture

### File Structure
```
public_html/
├── index.php               Homepage
├── about.php               Our Story page
├── products.php            Products listing
├── product-ketchup.php     Ketchup detail
├── product-tomato-paste.php  Tomato Paste detail
├── product-masala.php      Pilau Masala detail
├── product-vinegar.php     Pure Vinegar detail
├── blog.php                Journal listing
├── blog-post.php           Single post view
├── contact.php             Contact form
├── privacy.php             Privacy policy
├── feed.php                RSS feed (/feed)
├── 404.php                 Custom error page
├── favicon.ico             Browser tab icon (root)
│
├── partials/               Shared PHP partials
│   ├── _head.php           <head> meta, CSS links, lang bootstrap
│   ├── _scripts.php        JS includes
│   ├── nav.php             Site navigation
│   ├── footer.php          Footer
│   └── _lang.php           i18n session + __t() / __r() helpers
│
├── lang/                   Translation files
│   ├── en.php              English (282 lines)
│   ├── fr.php              French  (265 lines)
│   └── sw.php              Kiswahili (262 lines)
│
├── data/
│   └── blog.php            All blog DB query functions
│
├── config/
│   ├── app.php             Constants (DB, SITE_URL, admin hash)
│   └── database.php        PDO singleton (get_db())
│
├── admin/                  Admin panel (auth-gated)
│   ├── index.php           Dashboard
│   ├── login.php / logout.php
│   ├── posts.php           Post list
│   ├── post-edit.php       Create / edit post (WYSIWYG)
│   ├── post-delete.php     Delete handler
│   ├── setup.php           One-time DB table creator
│   ├── image-upload.php    AJAX image upload endpoint
│   ├── db-check.php        Diagnostic tool
│   ├── _auth.php           Auth guard
│   ├── _nav.php            Admin nav partial
│   └── assets/admin.css    Admin stylesheet (610 lines)
│
└── assets/
    ├── css/
    │   ├── tokens.css      Design tokens
    │   ├── reset.css       CSS reset
    │   ├── layout.css      Grid / containers
    │   ├── global.css      Base typography
    │   ├── components.css  Shared components (1 362 lines)
    │   └── pages/          Per-page stylesheets
    │       ├── home.css
    │       ├── about.css
    │       ├── products.css
    │       ├── blog.css
    │       └── contact.css
    └── img/
        ├── products/       PNG + WebP product images
        ├── slider/         PNG/JPG + WebP hero images
        └── blog/           Uploaded blog post images
```

### Clean URL Routing (`.htaccess`)
| Browser URL | Serves |
|-------------|--------|
| `/` | `index.php` |
| `/about` | `about.php` |
| `/products` | `products.php` |
| `/product-ketchup` | `product-ketchup.php` |
| `/blog` | `blog.php` |
| `/blog/my-post-slug` | `blog-post.php?slug=my-post-slug` |
| `/contact` | `contact.php` |
| `/feed` | `feed.php` |
| `/admin/posts` | `admin/posts.php` |

POST requests are excluded from the clean-URL redirect (a 301 would convert POST → GET and lose form data).

---

## 2. Design System & CSS

### Tokens (`tokens.css`)
- **Colour palette:** `--col-ground` (dark green), `--col-accent` (amber), `--col-surface-*`, `--col-text-*`, `--col-border`
- **Typography scale:** fluid `--step--1` → `--step-5` using `clamp()`
- **Spacing scale:** `--space-xs` → `--space-3xl`
- **Motion:** `--dur-fast`, `--dur-base`, `--ease-out`
- **Radius:** `--radius-sm`, `--radius-lg`

### Component Library (`components.css` — 1 362 lines)
- **Hero:** `position: relative; display: flex; align-items: flex-end`. Variants: `hero--full` (100svh), `hero--half`. Background via `hero__bg` (absolute `<img>`) or `hero__bg--pattern` (CSS radial gradient). Overlay via `::after` pseudo-element
- **Navigation:** fixed top bar, logo, links, mobile hamburger overlay with accessibility (focus management on close)
- **Buttons:** `.btn-primary`, `.btn-ghost`, `.btn--text`, `.btn-delete`
- **Cards:** post cards, product cards, related cards
- **Badges:** `.badge`, `.badge--outline`
- **Stats bar:** founded year, countries, products count
- **Author bio:** avatar (image or initial fallback), name, bio text
- **Share buttons:** WhatsApp link + copy-link button
- **Pagination:** prev/next with page info
- **CTA block:** full-width dark promotional strip
- **Forms:** inputs, textareas, selects, labels, hints, error/success alerts

### Performance
- All hero and product images available as **WebP** (`<picture>` element with PNG/JPEG fallback)
- `.htaccess` auto-serves `.webp` to supporting browsers without changing URLs
- `<link rel="preload">` hints on above-the-fold hero images
- **Image sizes reduced ~10×:** hero images from 2.4–3.1 MB → 156–232 KB per image
- Gzip/Deflate compression for HTML, CSS, JS, JSON, fonts
- Browser cache headers: CSS/JS 1 month · images 6 months · fonts 1 year

---

## 3. Public Pages

### Homepage (`index.php`)
- Full-viewport hero with WebP background image, headline, subtitle, CTA buttons
- About teaser section
- Product grid (4 products)
- Wholesale / contact CTA block
- All strings translatable via `__t()` / `__r()`

### About (`about.php`)
- Full-viewport hero with stats bar pinned to the bottom (Founded · Countries · Products) — uses `margin-top: auto` on a flex-column hero
- Brand story section
- Team cards (photo, name, role, bio)
- "Our Journey" narrative / product promise section
- Top clearance: `clamp(9rem, 20svh, 15rem)` to clear the fixed nav on all viewports

### Products (`products.php`)
- Product grid with images, names, and links to detail pages

### Product Detail Pages (×4)
Each of `product-ketchup.php`, `product-tomato-paste.php`, `product-masala.php`, `product-vinegar.php` has:
- Hero with eyebrow label and styled title
- Product image (transparent PNG, `object-fit: contain`)
- Category badge, full title, description
- Feature bullet list (4 items with checkmarks)
- CTA buttons: "Request a Quote →" and "View All Products"
- Related products grid (3 cards)
- All strings translated (EN / FR / SW) via `pd.*` keys

### Blog Listing (`blog.php`)
- Hero with pattern background, eyebrow, title, subtitle
- Category filter pills (All + per-category)
- Featured post card (large, `16/9` aspect ratio)
- Post grid (up to 9 per page, `16/9` cards)
- Reading time shown on each card (calculated at 200 wpm)
- Empty-state message when no posts in category
- Pagination: prev / next / "Page X of Y"
- All UI strings translated via `blog.*` keys

### Blog Post (`blog-post.php`)
- Hero: `hero--full` with `min-height: 56svh`, category badge, post title, author · date
- Featured image (displayed at top of article body)
- Tags row (badge pills)
- Post content — raw HTML output from DB (supports all rich text formatting)
- Share bar: WhatsApp share link + copy-link button (with "Copied!" feedback)
- Author bio card: avatar image or initial, name, bio
- "← Back to Journal" footer link
- Related posts grid (same category, up to 3)
- JSON-LD `Article` structured data (headline, description, datePublished, dateModified, author, publisher, image)
- Open Graph meta tags (title, description, image, URL, type=article)
- RSS feed link in `<head>`
- Copy-link JS uses PHP-rendered strings so "Copied!" / "Copy link" respect the active language

### Contact (`contact.php`)
- Contact form with AJAX submission and client-side validation

### RSS Feed (`feed.php`)
- Standard RSS 2.0 feed at `/feed`
- Lists all published posts with title, link, description, pubDate

### 404 Page (`404.php`)
- Custom error page served via `.htaccess` `ErrorDocument 404 /404.php`

---

## 4. Multilingual System (i18n)

### How it works
- Language stored in `$_SESSION['lang']`; default is `en`
- `lang-switch.php` handles the POST from the footer switcher and redirects back
- `partials/_lang.php` is bootstrapped by `_head.php` before any HTML — `__t()` and `__r()` are available on every page

### Helper functions
| Function | Returns | Use case |
|----------|---------|----------|
| `__t($key)` | HTML-escaped string | Most strings |
| `__t($key, ['var' => 'val'])` | String with `{var}` replaced | Pagination info, dynamic counts |
| `__r($key)` | Raw HTML string | Titles containing `<em>` italic highlights |

### Supported languages
| Code | Language |
|------|----------|
| `en` | English |
| `fr` | Français |
| `sw` | Kiswahili |

### Translation coverage
| Namespace | Pages covered |
|-----------|---------------|
| `nav.*` | All pages (navigation links) |
| `home.*` | Homepage |
| `about.*` | About page |
| `products.*` | Products listing |
| `pd.ketchup.*` | Ketchup detail page |
| `pd.tomato.*` | Tomato Paste detail page |
| `pd.masala.*` | Masala detail page |
| `pd.vinegar.*` | Vinegar detail page |
| `pd.rel.*` | Related product labels (shared) |
| `contact.*` | Contact page |
| `footer.*` | Footer |
| `privacy.*` | Privacy policy |
| `blog.*` | Blog listing + post view |

---

## 5. Blog System (Database-Driven)

### Database Schema
```sql
blog_posts        id, slug, title, excerpt, content, category_id,
                  author_id, image_url, status, published_at,
                  created_at, updated_at

blog_categories   id, name, slug, color

blog_authors      id, name, bio, avatar_url

blog_post_tags    post_id, tag
```

### Data Layer (`data/blog.php` — 218 lines)
| Function | Purpose |
|----------|---------|
| `blog_get_posts($page, $per_page, $category_slug)` | Paginated post list for the listing page |
| `blog_count_posts($category_slug)` | Total count for pagination |
| `blog_get_featured()` | Latest published post for the featured card |
| `blog_get_by_slug($slug)` | Single post for the post view |
| `blog_get_related($post_id, $category_id)` | Up to 3 related posts |
| `blog_get_categories()` | All categories with post counts |
| `blog_get_tags($post_id)` | Tags for a single post |
| `blog_save_post($data, $id)` | Insert or update a post + replace tags |
| `blog_delete_post($id)` | Hard delete |
| `blog_get_all_posts_admin()` | Full list for admin table |
| `blog_get_post_admin($id)` | Single post for the edit form |
| `blog_get_authors()` | Author list for the select dropdown |
| `blog_get_all_categories_admin()` | Category list for the select dropdown |
| `blog_reading_time($html)` | Word count ÷ 200, minimum 1 min |
| `blog_hydrate($post)` | Attaches reading_time, date_formatted, tags to a post row |
| `blog_slugify($text)` | Converts text to a URL-safe slug |

### Database Connection (`config/database.php`)
- PDO singleton `get_db()` — one connection per request
- `charset=utf8mb4` in DSN
- `ATTR_ERRMODE => ERRMODE_EXCEPTION`
- `ATTR_EMULATE_PREPARES => false` (native prepared statements)

---

## 6. Admin Panel

### Access & Security
- All admin pages begin with `require_once '_auth.php'` — unauthenticated requests redirect to `/admin/login`
- **Authentication:** bcrypt password via `password_verify()` against `$2y$` hash in `config/app.php`
- **CSRF protection:** token generated per session; every POST handler calls `csrf_verify()` — mismatch throws a 403
- `admin/.htaccess` — `Options -Indexes` (no directory listing)

### Pages
| Page | Function |
|------|----------|
| `admin/index.php` | Dashboard — post count, category count, quick links |
| `admin/posts.php` | Post list table with edit/delete links |
| `admin/post-edit.php` | Create / edit post (WYSIWYG editor) |
| `admin/post-delete.php` | CSRF-verified delete handler |
| `admin/setup.php` | One-time DB table creation script |
| `admin/db-check.php` | Diagnostic: lists posts + image_url + disk check |

### Post Editor (`admin/post-edit.php` — 568 lines)

**Fields saved to DB:** title, slug, excerpt, content (HTML), category, author, image_url, status (draft/published), publish date, tags

**Rich Text Editor (WYSIWYG)**
- `contenteditable` div — no raw HTML tags visible to the user
- Toolbar buttons: **B** · *I* · U · ~~S~~ · H2 · H3 · P · Blockquote · Bullet List · Numbered List · Link · Insert Image · HR · Clear Formatting
- All formatting via `document.execCommand()`
- Toolbar highlights the active format as the cursor moves
- `onmousedown="return false"` on the toolbar prevents focus leaving the editor
- Tab key inserts 4 non-breaking spaces instead of tabbing away
- On form submit, content is synced to `<input type="hidden" name="content">` via a `submit` event listener

**Featured Image Sidebar**
- Drag-and-drop upload zone (HTML `<label>` over a hidden `<input type="file">`)
- Live preview with a × remove button after upload or URL entry
- URL text input as fallback (paste any image URL)
- After upload, the URL text input is updated automatically

**Inline Image Insertion (modal)**
- "Image" toolbar button opens a modal
- Cursor position is saved with `saveRange()` (`window.getSelection().getRangeAt(0).cloneRange()`) before the modal opens
- Supports image upload or URL entry, optional alt text
- On Insert, `restoreRange()` replaces the selection and `execCommand('insertHTML')` drops the `<img>` at the exact cursor position
- Escape key and backdrop click close the modal

**Slug auto-generation**
- Typing a title auto-generates a slug (`lowercase, hyphens, a-z0-9` only)
- Once the slug field is edited manually, auto-generation stops
- Slug preview shown inline: `/blog/your-post-slug`

### Image Upload Endpoint (`admin/image-upload.php`)
- **Method:** POST (AJAX, `FormData`)
- **Auth:** requires active admin session + valid CSRF token in FormData
- **MIME validation:** `finfo_open(FILEINFO_MIME_TYPE)` — validates actual file bytes, not file extension
- **Allowed types:** JPEG, PNG, WebP, GIF
- **Size limit:** 8 MB
- **Filename:** `YYYYMMDD-<10 random hex chars>.ext`
- **Save path:** `assets/img/blog/`
- **Response:** `{"url": "/assets/img/blog/filename.ext"}` or `{"error": "..."}`

---

## 7. Footer

- 3-column grid: Brand (logo + tagline), Explore (nav links), HQ (address + contact)
- Social media links
- Copyright year from `date('Y')` — auto-increments annually
- "X+ years" heritage counter: `date('Y') − 1984` — also auto-increments
- Language switcher: **EN · FR · SW** buttons (POST to `lang-switch.php`)
- Logo shown in full colour (CSS `filter` removed)

---

## 8. Bug Fixes Applied (Day One → Today)

| Bug | Root Cause | Fix |
|-----|-----------|-----|
| Mobile menu focus trap | Closing overlay left focus on `aria-hidden` element | Return focus to hamburger toggle before hiding overlay |
| Login form losing password | `.htaccess` 301 redirect converted POST → GET | Added `RewriteCond %{REQUEST_METHOD} !POST` to skip redirect on POST |
| Admin bcrypt mismatch | Python generates `$2b$` prefix; PHP expects `$2y$` | Converted hash prefix in `config/app.php` |
| Blog assets 404 at `/blog/slug` | Partials used relative paths; `/blog/slug` is one level deep | Changed all asset paths to absolute root paths (`/assets/...`) |
| Blog hero pattern dimmed | Overlay `::after` was applying opacity to the pattern div | Restored `opacity: 1` on `.hero__bg--pattern` |
| Blog card images not constrained | `max-height` on grid container doesn't shrink grid items | Added explicit height to `.img-wrap` + `object-fit: contain` |
| Logo pure white in footer/admin | `filter: brightness(0) invert(1)` in `components.css` (loaded globally) | Removed filter from `components.css` at the source |
| Fields not saving to DB | Delete `<form>` was nested inside the edit `<form>`; its `</form>` closed the outer form early — `image_url`, `tags`, `category_id`, `author_id` were never submitted | Moved delete form outside the main form; delete button uses `form="delete-form"` attribute |
| Blog post hero content at top | `hero post-hero` class used — `post-hero` is undefined; `align-items: flex-end` not applied | Changed to `hero hero--full`; added explicit `align-items`, increased `min-height` to 56svh, added `padding-top: 5rem` to clear fixed nav |
| Favicon 404 on every page | Browsers request `/favicon.ico` at root regardless of `<link rel="icon">` | Generated `favicon.ico` from `favicon.png` using Python (PNG-compressed ICO) |
