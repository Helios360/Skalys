<?php
http_response_code(404);
require_once 'data/formations.php';

$page_title = 'Page introuvable — Skalys Business School';
$page_desc  = '';
$home_url   = 'home.php';
$extra_css  = ['assets/css/404.css'];
$page_js    = 'assets/js/equipe.js';

require 'components/header.php';
?>

<section class="notfound">
  <div class="notfound-inner">
    <div class="notfound-num">404</div>
    <div class="section-label">
      <span class="num">→</span> Page introuvable
    </div>
    <h1>Cette page<br><em>n'existe pas.</em></h1>
    <p>Le lien est peut-être cassé, ou la page a été déplacée. Revenez à l'accueil pour retrouver votre chemin.</p>
    <div class="notfound-actions">
      <a href="home.php" class="btn btn-primary">Retour à l'accueil <span class="arrow">→</span></a>
      <a href="candidature.php" class="btn">Je candidate</a>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>
