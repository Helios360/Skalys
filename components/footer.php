<?php
// Attend que $formations soit disponible (chargé via data/formations.php)
$page_js = $page_js ?? 'assets/js/home.js';
?>

<!-- ===== FOOTER ===== -->
<footer id="contact">
  <div class="footer-massive">Sk<span class="yel">a</span>lys</div>
  <div class="footer-grid">
    <div class="footer-brand-block">
      <p class="footer-brand-text">L'école qui connecte aux métiers de demain. Formations en alternance du Bac au Bac+2, à Compiègne.</p>
      <div class="footer-socials">
        <a href="#" class="social-icon">IG</a>
        <a href="#" class="social-icon">in</a>
        <a href="#" class="social-icon">TT</a>
        <a href="#" class="social-icon">YT</a>
      </div>
    </div>
    <div class="footer-col">
      <h5>Formations</h5>
      <ul>
        <?php foreach ($formations as $f): ?>
        <li><a href="formation.php?slug=<?= htmlspecialchars($f['slug']) ?>"><?= htmlspecialchars($f['badge']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="footer-col">
      <h5>L'école</h5>
      <ul>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Manifesto</a></li>
        <li><a href="#">Journée Portes Ouvertes</a></li>
        <li><a href="#">Actualités</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Contact</h5>
      <ul>
        <li>8 av. Flandres Dunkerque<br>60200 Compiègne</li>
        <li><a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></li>
        <li><a href="tel:0652670444">06 52 67 04 44</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 Skalys Business School / AJ-Formation SARL</span>
    <span>Mentions légales / Politique de confidentialité / Qualiopi</span>
  </div>
</footer>

<!-- ===== STICKY CTA ===== -->
<div class="sticky-cta" id="stickyCta">
  <?php if (!empty($sticky_cta_url)): ?>
    <a href="<?= htmlspecialchars($sticky_cta_url) ?>"><?= htmlspecialchars($sticky_cta_label ?? 'Candidater') ?> <span>→</span></a>
  <?php else: ?>
    <a href="candidature.php">Candidater <span>→</span></a>
  <?php endif; ?>
</div>

<script src="<?= htmlspecialchars($page_js) ?>" defer></script>
</body>
</html>
