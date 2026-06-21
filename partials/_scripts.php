<!-- Core site script — always loaded -->
<script src="assets/js/main.js" defer></script>

<!-- Per-page scripts -->
<?php foreach ($page_js ?? [] as $js): ?>
<script src="assets/js/<?= htmlspecialchars($js) ?>" defer></script>
<?php endforeach; ?>
