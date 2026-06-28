<?php
require_once __DIR__ . '/_auth.php';
require_once __DIR__ . '/../data/blog.php';

$id         = isset($_GET['id']) ? (int) $_GET['id'] : null;
$post       = $id ? blog_get_post_admin($id) : null;
$categories = blog_get_all_categories_admin();
$authors    = blog_get_authors();
$errors     = [];
$success    = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    csrf_verify();

    $title  = trim($_POST['title']   ?? '');
    $slug   = trim($_POST['slug']    ?? '');
    $status = $_POST['status']       ?? 'draft';

    if (!$title) $errors[] = 'Title is required.';
    if (!$slug)  $errors[] = 'Slug is required.';

    // Ensure slug is unique (excluding current post)
    if ($slug && empty($errors)) {
        $db   = get_db();
        $stmt = $db->prepare("SELECT id FROM blog_posts WHERE slug = :slug AND id != :id");
        $stmt->execute([':slug' => $slug, ':id' => $id ?? 0]);
        if ($stmt->fetch()) $errors[] = 'This slug is already used by another post.';
    }

    if (empty($errors)) {
        $pub = ($_POST['published_at'] ?? '') ?: null;
        if ($status === 'published' && !$pub) $pub = date('Y-m-d H:i:s');

        $tags = array_filter(array_map('trim', explode(',', $_POST['tags'] ?? '')));

        $id = blog_save_post([
            'slug'         => $slug,
            'title'        => $title,
            'excerpt'      => trim($_POST['excerpt']     ?? ''),
            'content'      => $_POST['content']          ?? '',
            'category_id'  => ($_POST['category_id']     ?? '') ?: null,
            'author_id'    => ($_POST['author_id']        ?? '') ?: null,
            'image_url'    => trim($_POST['image_url']   ?? ''),
            'status'       => $status,
            'published_at' => $pub,
            'tags'         => $tags,
        ], $id);

        $post   = blog_get_post_admin($id);
        $success = true;
    }
}

$title_val   = htmlspecialchars($post['title']        ?? '');
$slug_val    = htmlspecialchars($post['slug']         ?? '');
$excerpt_val = htmlspecialchars($post['excerpt']      ?? '');
$content_val = htmlspecialchars($post['content']      ?? '');
$image_val   = htmlspecialchars($post['image_url']    ?? '');
$tags_val    = htmlspecialchars(implode(', ', $post['tags'] ?? []));
$pub_val     = htmlspecialchars(substr($post['published_at'] ?? '', 0, 16));
$status_val  = $post['status']      ?? 'draft';
$cat_val     = $post['category_id'] ?? '';
$auth_val    = $post['author_id']   ?? '';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $id ? 'Edit Post' : 'New Post' ?> — Sorwatom Admin</title>
<link rel="stylesheet" href="/assets/css/tokens.css">
<link rel="stylesheet" href="/admin/assets/admin.css">
</head>
<body class="admin-body">

<?php include __DIR__ . '/_nav.php'; ?>

<main class="admin-main">
  <div class="admin-container admin-container--wide">

    <div class="page-header">
      <h1><?= $id ? 'Edit Post' : 'New Post' ?></h1>
      <?php if ($id && $status_val === 'published'): ?>
      <a href="/blog/<?= $slug_val ?>" target="_blank" class="btn-ghost">View Post ↗</a>
      <?php endif; ?>
    </div>

    <?php if ($success): ?>
    <div class="alert alert-success">Post saved successfully.</div>
    <?php endif; ?>
    <?php foreach ($errors as $e): ?>
    <div class="alert alert-error"><?= htmlspecialchars($e) ?></div>
    <?php endforeach; ?>

    <form method="post" id="post-form">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>">

      <div class="edit-layout">

        <!-- ── Main column ── -->
        <div class="edit-main">

          <div class="field">
            <label for="title">Title <span class="req">*</span></label>
            <input type="text" id="title" name="title" value="<?= $title_val ?>" required
                   placeholder="Post title…" class="input-lg">
          </div>

          <div class="field">
            <label for="slug">Slug <span class="req">*</span>
              <span class="label-hint">— used in the URL: /blog/<em id="slug-preview"><?= $slug_val ?: 'your-post-slug' ?></em></span>
            </label>
            <input type="text" id="slug" name="slug" value="<?= $slug_val ?>" required
                   pattern="[a-z0-9\-]+" placeholder="your-post-slug">
          </div>

          <div class="field">
            <label for="excerpt">Excerpt
              <span class="label-hint">— shown on listing cards (1–2 sentences)</span>
            </label>
            <textarea id="excerpt" name="excerpt" rows="3"
                      placeholder="A short description shown on the blog listing page…"><?= $excerpt_val ?></textarea>
          </div>

          <div class="field field--editor">
            <div class="editor-toolbar">
              <label>Content <span class="req">*</span></label>
              <div class="editor-tabs">
                <button type="button" class="tab-btn active" data-tab="write">Write</button>
                <button type="button" class="tab-btn" data-tab="preview">Preview</button>
              </div>
            </div>
            <div class="editor-format-bar">
              <button type="button" onclick="wrapSel('<h2>','</h2>')">H2</button>
              <button type="button" onclick="wrapSel('<h3>','</h3>')">H3</button>
              <button type="button" onclick="wrapSel('<strong>','</strong>')"><b>B</b></button>
              <button type="button" onclick="wrapSel('<em>','</em>')"><i>I</i></button>
              <button type="button" onclick="wrapSel('<blockquote><p>','</p></blockquote>')">❝</button>
              <button type="button" onclick="wrapSel('<ul>\n  <li>','</li>\n</ul>')">UL</button>
              <button type="button" onclick="wrapSel('<ol>\n  <li>','</li>\n</ol>')">OL</button>
              <button type="button" onclick="wrapSel('<a href=&quot;&quot;>','</a>')">Link</button>
            </div>
            <div id="tab-write">
              <textarea id="content" name="content" rows="24"
                        placeholder="Write your post content here as HTML…"><?= $content_val ?></textarea>
            </div>
            <div id="tab-preview" class="content-preview post-content" style="display:none"></div>
          </div>

        </div><!-- /.edit-main -->

        <!-- ── Sidebar ── -->
        <aside class="edit-sidebar">

          <div class="sidebar-card">
            <h3>Publish</h3>
            <div class="field">
              <label for="status">Status</label>
              <select id="status" name="status">
                <option value="draft"     <?= $status_val === 'draft'     ? 'selected' : '' ?>>Draft</option>
                <option value="published" <?= $status_val === 'published' ? 'selected' : '' ?>>Published</option>
              </select>
            </div>
            <div class="field">
              <label for="published_at">Publish Date</label>
              <input type="datetime-local" id="published_at" name="published_at" value="<?= $pub_val ?>">
            </div>
            <div class="sidebar-actions">
              <button type="submit" class="btn-primary btn-full">Save Post</button>
              <?php if ($id): ?>
              <form method="post" action="/admin/post-delete.php" style="margin-top:.5rem"
                    onsubmit="return confirm('Delete this post permanently?')">
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="btn-delete btn-full">Delete Post</button>
              </form>
              <?php endif; ?>
            </div>
          </div>

          <div class="sidebar-card">
            <h3>Category</h3>
            <div class="field">
              <select name="category_id">
                <option value="">— none —</option>
                <?php foreach ($categories as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $cat_val == $c['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($c['name']) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="sidebar-card">
            <h3>Author</h3>
            <div class="field">
              <select name="author_id">
                <option value="">— none —</option>
                <?php foreach ($authors as $a): ?>
                <option value="<?= $a['id'] ?>" <?= $auth_val == $a['id'] ? 'selected' : '' ?>>
                  <?= htmlspecialchars($a['name']) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="sidebar-card">
            <h3>Featured Image</h3>
            <div class="field">
              <input type="text" name="image_url" value="<?= $image_val ?>"
                     placeholder="/assets/img/blog/my-image.webp">
              <?php if ($image_val): ?>
              <img src="<?= $image_val ?>" alt="" class="img-preview" onerror="this.style.display='none'">
              <?php endif; ?>
            </div>
          </div>

          <div class="sidebar-card">
            <h3>Tags</h3>
            <div class="field">
              <input type="text" name="tags" value="<?= $tags_val ?>"
                     placeholder="tomatoes, recipe, harvest">
              <p class="field-hint">Comma-separated</p>
            </div>
          </div>

        </aside><!-- /.edit-sidebar -->

      </div><!-- /.edit-layout -->

    </form>

  </div>
</main>

<script>
// Auto-generate slug from title (only when slug field is empty or unchanged from title)
const titleInput = document.getElementById('title');
const slugInput  = document.getElementById('slug');
const slugPrev   = document.getElementById('slug-preview');
let manualSlug   = <?= $id ? 'true' : 'false' ?>;

function toSlug(s) {
  return s.toLowerCase().trim()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/[\s-]+/g, '-')
    .replace(/^-+|-+$/g, '');
}

titleInput.addEventListener('input', () => {
  if (!manualSlug) {
    const s = toSlug(titleInput.value);
    slugInput.value = s;
    slugPrev.textContent = s || 'your-post-slug';
  }
});

slugInput.addEventListener('input', () => {
  manualSlug = true;
  slugInput.value = toSlug(slugInput.value) || slugInput.value;
  slugPrev.textContent = slugInput.value || 'your-post-slug';
});

// Format toolbar
function wrapSel(before, after) {
  const ta  = document.getElementById('content');
  const s   = ta.selectionStart, e = ta.selectionEnd;
  const sel = ta.value.substring(s, e);
  ta.value  = ta.value.substring(0, s) + before + sel + after + ta.value.substring(e);
  ta.focus();
  ta.selectionStart = s + before.length;
  ta.selectionEnd   = s + before.length + sel.length;
}

// Write / Preview tabs
document.querySelectorAll('.tab-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const tab = btn.dataset.tab;
    document.getElementById('tab-write').style.display   = tab === 'write'   ? '' : 'none';
    document.getElementById('tab-preview').style.display = tab === 'preview' ? '' : 'none';
    if (tab === 'preview') {
      document.getElementById('tab-preview').innerHTML =
        document.getElementById('content').value || '<p style="color:#888">Nothing to preview.</p>';
    }
  });
});
</script>
</body>
</html>
