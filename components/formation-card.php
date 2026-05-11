<?php
// Attend la variable $f (array d'une formation depuis data/formations.php)
$_avenir = !empty($f['a_venir']);
?>
<a href="formation.php?slug=<?= htmlspecialchars($f['slug']) ?>"
   class="formation-card<?= $_avenir ? ' formation-card--avenir' : '' ?>">
  <?php if ($_avenir): ?>
    <span class="fc-avenir-badge">À venir</span>
  <?php endif; ?>
  <div class="formation-meta">
    <span><?= htmlspecialchars($f['niveau']) ?></span>
    <span class="duration"><?= htmlspecialchars($f['duration']) ?></span>
  </div>
  <h3><?= htmlspecialchars($f['title']) ?></h3>
  <p class="desc"><?= htmlspecialchars($f['desc']) ?></p>
  <div class="formation-card-foot">
    <span><?= htmlspecialchars($f['badge']) ?></span>
    <div class="arrow-circle">→</div>
  </div>
</a>
