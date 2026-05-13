<?php
require_once 'data/formations.php';

$raw_slug = $_GET['slug'] ?? '';
$slug = (is_string($raw_slug) && preg_match('/^[a-z0-9-]{1,80}$/i', $raw_slug)) ? $raw_slug : '';
$formation = null;
if ($slug !== '') {
  foreach ($formations as $f) {
    if ($f['slug'] === $slug) {
      $formation = $f;
      break;
    }
  }
}

if (!$formation) {
  header('Location: /', true, 302);
  exit;
}

// 301 vers la pretty URL si on arrive en query string (formation.php?slug=...)
$req_uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($req_uri, '/formation.php') === 0) {
  header('Location: /formation/' . $formation['slug'], true, 301);
  exit;
}

$autres = array_filter($formations, fn($f) => $f['slug'] !== $formation['slug']);

$page_title = $formation['badge'] . ' — ' . $formation['title'] . ' | Skalys';
$page_desc  = $formation['desc'];
$home_url   = '/';
$extra_css  = ['/assets/css/formation.css'];

// Canonical en pretty URL (servi par le rewrite .htaccess)
$canonical_url = 'https://skalys-bs.fr/formation/' . $formation['slug'];

// Si la formation est "à venir", on demande aux moteurs de ne pas l'indexer pour l'instant
if (!empty($formation['a_venir'])) {
  $robots_meta = 'noindex, follow';
}

$jsonld_blocks = [
  array_filter([
    '@context'    => 'https://schema.org',
    '@type'       => 'Course',
    'name'        => $formation['title'],
    'description' => $formation['desc'],
    'url'         => $canonical_url,
    'provider'    => [
      '@type' => 'EducationalOrganization',
      'name'  => 'Skalys Business School',
      'url'   => 'https://skalys-bs.fr/',
    ],
    'inLanguage'         => 'fr-FR',
    'educationalLevel'   => $formation['niveau']  ?? null,
    'timeRequired'       => $formation['heures']  ?? null,
    'coursePrerequisites'=> $formation['prereqs'] ?? null,
    'hasCourseInstance'  => [
      '@type'           => 'CourseInstance',
      'courseMode'      => 'Blended',
      'courseWorkload'  => $formation['heures'] ?? null,
      'location'        => [
        '@type'   => 'Place',
        'name'    => 'Skalys Business School',
        'address' => [
          '@type'           => 'PostalAddress',
          'streetAddress'   => '8 avenue Flandres Dunkerque',
          'postalCode'      => '60200',
          'addressLocality' => 'Compiègne',
          'addressCountry'  => 'FR',
        ],
      ],
    ],
    'offers' => [
      '@type'         => 'Offer',
      'price'         => '0',
      'priceCurrency' => 'EUR',
      'category'      => 'Alternance — prise en charge OPCO',
      'availability'  => 'https://schema.org/InStock',
    ],
  ]),
  [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil',    'item' => 'https://skalys-bs.fr/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Formations', 'item' => 'https://skalys-bs.fr/#formations'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => $formation['title'], 'item' => $canonical_url],
    ],
  ],
];

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="formation-hero">
  <div class="formation-hero-inner">

    <a href="home.php#formations" class="formation-back">Toutes les formations</a>

    <div class="formation-badge-row">
      <span class="formation-badge"><?= htmlspecialchars($formation['badge']) ?></span>
      <span class="formation-niveau-tag"><?= htmlspecialchars($formation['niveau']) ?></span>
      <span class="formation-duration-tag"><?= htmlspecialchars($formation['duration']) ?></span>
    </div>

    <h1><?= htmlspecialchars($formation['title']) ?></h1>

    <p class="formation-hero-desc"><?= htmlspecialchars($formation['desc']) ?></p>

    <!-- Infos clés -->
    <div class="formation-key-info">
      <div class="formation-key-item">
        <span class="formation-key-label">Volume horaire</span>
        <span class="formation-key-value"><?= htmlspecialchars($formation['heures']) ?></span>
      </div>
      <div class="formation-key-item">
        <span class="formation-key-label">Rythme</span>
        <span class="formation-key-value"><?= htmlspecialchars($formation['rythme']) ?></span>
      </div>
      <div class="formation-key-item">
        <span class="formation-key-label">Horaires</span>
        <span class="formation-key-value"><?= htmlspecialchars($formation['horaires']) ?></span>
      </div>
      <div class="formation-key-item">
        <span class="formation-key-label">Localisation</span>
        <span class="formation-key-value"><?= htmlspecialchars($formation['localisation']) ?></span>
      </div>
      <?php if ($formation['rncp']): ?>
      <div class="formation-key-item">
        <span class="formation-key-label">Certification</span>
        <span class="formation-key-value"><?= htmlspecialchars($formation['rncp']) ?><?= $formation['rncp_date'] ? ' · ' . htmlspecialchars($formation['rncp_date']) : '' ?></span>
      </div>
      <?php endif; ?>
    </div>

    <div class="formation-hero-cta">
      <a href="/candidature.php" class="btn btn-yellow">Je candidate <span class="arrow">→</span></a>
      <a href="#details" class="btn formation-btn-outline">Découvrir la formation</a>
    </div>

  </div>
</section>

<!-- ===== CORPS ===== -->
<section class="formation-body" id="details">
  <div class="formation-body-inner">

    <!-- Colonne gauche : intro + objectifs + prérequis -->
    <div>
      <p class="formation-intro"><?= htmlspecialchars($formation['intro']) ?></p>

      <?php if (!empty($formation['objectifs'])): ?>
      <div class="formation-objectifs">
        <div class="formation-list-title">Objectifs</div>
        <ul class="formation-list formation-list--check">
          <?php foreach ($formation['objectifs'] as $obj): ?>
          <li>
            <span class="li-num">✓</span>
            <?= htmlspecialchars($obj) ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>

      <div class="formation-prereqs">
        <div class="formation-prereqs-label">Prérequis</div>
        <p><?= htmlspecialchars($formation['prereqs']) ?></p>
      </div>
    </div>

    <!-- Colonne droite : blocs de compétences + débouchés + poursuites -->
    <div>
      <div class="formation-list-block">
        <div class="formation-list-title">Débouchés métiers</div>
        <ul class="formation-list">
          <?php foreach ($formation['debouches'] as $item): ?>
          <li>
            <span class="li-num">→</span>
            <?= htmlspecialchars($item) ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <?php if (!empty($formation['poursuites'])): ?>
      <div class="formation-list-block">
        <div class="formation-list-title">Poursuite d'études</div>
        <ul class="formation-list">
          <?php foreach ($formation['poursuites'] as $item): ?>
          <li>
            <span class="li-num">↑</span>
            <?= htmlspecialchars($item) ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ===== PROGRAMME ===== -->
<?php if (!empty($formation['programme'])): ?>
<section class="formation-programme">
  <div class="formation-programme-inner">

    <div class="formation-programme-header">
      <div class="section-label-light"><span class="num">→</span> Programme</div>
      <h2 class="section-h2-light"><?= count($formation['programme']) ?> blocs de <em>compétences</em>.</h2>
    </div>

    <div class="formation-blocs">
      <?php foreach ($formation['programme'] as $bloc): ?>
      <details class="formation-bloc">
        <summary class="formation-bloc-summary">
          <div class="formation-bloc-num"><?= sprintf('%02d', $bloc['num']) ?></div>
          <div class="formation-bloc-info">
            <span class="formation-bloc-title"><?= htmlspecialchars($bloc['title']) ?></span>
            <div class="formation-bloc-meta">
              <?php if ($bloc['heures']): ?><span><?= htmlspecialchars($bloc['heures']) ?></span><?php endif; ?>
              <?php if ($bloc['coeff']): ?><span>Coef <?= htmlspecialchars($bloc['coeff']) ?></span><?php endif; ?>
              <?php if ($bloc['epreuve']): ?><span><?= htmlspecialchars($bloc['epreuve']) ?></span><?php endif; ?>
            </div>
          </div>
          <span class="formation-bloc-arrow">+</span>
        </summary>
        <div class="formation-bloc-body">
          <?php if (!empty($bloc['objectifs'])): ?>
          <div class="formation-bloc-col">
            <div class="formation-bloc-col-label">Objectifs</div>
            <ul>
              <?php foreach ($bloc['objectifs'] as $o): ?>
              <li><?= htmlspecialchars($o) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if (!empty($bloc['contenus'])): ?>
          <div class="formation-bloc-col">
            <div class="formation-bloc-col-label">Contenus</div>
            <ul>
              <?php foreach ($bloc['contenus'] as $c): ?>
              <li><?= htmlspecialchars($c) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </details>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php endif; ?>

<!-- ===== ADMISSION + FINANCEMENT ===== -->
<section class="formation-info-grid">
  <div class="formation-info-inner">

    <!-- Admission -->
    <div class="formation-info-card">
      <div class="formation-info-card-label">Admission</div>
      <h3 class="formation-info-card-title">Comment nous rejoindre ?</h3>

      <?php if (!empty($formation['admission']['etapes'])): ?>
      <ol class="formation-admission-steps">
        <?php foreach ($formation['admission']['etapes'] as $i => $step): ?>
        <li>
          <span class="step-num"><?= $i + 1 ?></span>
          <span><?= htmlspecialchars($step) ?></span>
        </li>
        <?php endforeach; ?>
      </ol>
      <?php endif; ?>

      <div class="formation-info-metas">
        <?php if (!empty($formation['admission']['delai'])): ?>
        <div class="formation-info-meta">
          <span class="meta-label">Délai d'accès</span>
          <span class="meta-value"><?= htmlspecialchars($formation['admission']['delai']) ?></span>
        </div>
        <?php endif; ?>
        <?php if (!empty($formation['admission']['effectif'])): ?>
        <div class="formation-info-meta">
          <span class="meta-label">Effectif</span>
          <span class="meta-value"><?= htmlspecialchars($formation['admission']['effectif']) ?></span>
        </div>
        <?php endif; ?>
        <?php if (!empty($formation['conseil_classe'])): ?>
        <div class="formation-info-meta">
          <span class="meta-label">Conseil de classe</span>
          <span class="meta-value"><?= htmlspecialchars($formation['conseil_classe']) ?></span>
        </div>
        <?php endif; ?>
      </div>

      <?php if (!empty($formation['admission']['conditions'])): ?>
      <div class="formation-conditions">
        <div class="formation-conditions-label">Conditions d'accès</div>
        <ul>
          <?php foreach ($formation['admission']['conditions'] as $cond): ?>
          <li><?= htmlspecialchars($cond) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
    </div>

    <!-- Financement -->
    <div class="formation-info-card">
      <div class="formation-info-card-label">Financement</div>
      <h3 class="formation-info-card-title">Coût & prise en charge</h3>

      <?php if (!empty($formation['financement']['cout'])): ?>
      <div class="formation-cout">
        <span class="formation-cout-label">Coût de la formation</span>
        <span class="formation-cout-value"><?= htmlspecialchars($formation['financement']['cout']) ?></span>
      </div>
      <?php endif; ?>

      <div class="formation-financement-blocks">
        <?php if (!empty($formation['financement']['etudiant'])): ?>
        <div class="formation-financement-block">
          <div class="financement-block-label">Pour l'apprenant</div>
          <p><?= htmlspecialchars($formation['financement']['etudiant']) ?></p>
        </div>
        <?php endif; ?>
        <?php if (!empty($formation['financement']['entreprise'])): ?>
        <div class="formation-financement-block">
          <div class="financement-block-label">Pour l'entreprise</div>
          <p><?= htmlspecialchars($formation['financement']['entreprise']) ?></p>
        </div>
        <?php endif; ?>
        <?php if (!empty($formation['financement']['public'])): ?>
        <div class="formation-financement-block">
          <div class="financement-block-label">Secteur public</div>
          <p><?= htmlspecialchars($formation['financement']['public']) ?></p>
        </div>
        <?php endif; ?>
      </div>

      <div class="formation-salaire">
        <div class="financement-block-label">Salaire apprenti 2026</div>
        <div class="formation-salaire-table-wrap">
          <table class="formation-salaire-table">
            <thead>
              <tr>
                <th>Tranche d'âge</th>
                <th>Année</th>
                <th>Base</th>
                <th>Brut / mois</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Moins de 18 ans</td><td>1ère</td><td>27 % SMIC</td><td>492,22 €</td></tr>
              <tr><td>Moins de 18 ans</td><td>2ème</td><td>39 % SMIC</td><td>710,98 €</td></tr>
              <tr><td>Moins de 18 ans</td><td>3ème</td><td>55 % SMIC</td><td>1 002,67 €</td></tr>
              <tr><td>18 à 20 ans</td><td>1ère</td><td>43 % SMIC</td><td>783,90 €</td></tr>
              <tr><td>18 à 20 ans</td><td>2ème</td><td>51 % SMIC</td><td>929,75 €</td></tr>
              <tr><td>18 à 20 ans</td><td>3ème</td><td>67 % SMIC</td><td>1 221,43 €</td></tr>
              <tr><td>21 à 25 ans</td><td>1ère</td><td>53 % SMIC*</td><td>966,21 €</td></tr>
              <tr><td>21 à 25 ans</td><td>2ème</td><td>61 % SMIC*</td><td>1 112,05 €</td></tr>
              <tr><td>21 à 25 ans</td><td>3ème</td><td>78 % SMIC*</td><td>1 421,96 €</td></tr>
              <tr class="formation-salaire-row--highlight"><td>26 ans et plus</td><td>—</td><td>100 % SMIC*</td><td>1 823,03 €</td></tr>
            </tbody>
          </table>
        </div>
        <p class="formation-salaire-note">* ou salaire minimum conventionnel correspondant à l'emploi occupé s'il est plus favorable</p>
      </div>
    </div>

  </div>
</section>

<!-- ===== ÉVALUATIONS + PASSERELLES ===== -->
<section class="formation-eval">
  <div class="formation-eval-inner">

    <!-- Évaluations -->
    <?php if (!empty($formation['examens'])): ?>
    <div class="formation-eval-col">
      <div class="formation-list-title">Évaluations et examens</div>
      <?php foreach ($formation['examens']['sections'] as $section): ?>
      <div class="formation-exam-section">
        <div class="formation-exam-section-label"><?= htmlspecialchars($section['label']) ?></div>
        <ul class="formation-exam-list">
          <?php foreach ($section['items'] as $item): ?>
          <li>
            <span class="exam-title"><?= htmlspecialchars($item['title']) ?></span>
            <span class="exam-detail"><?= htmlspecialchars($item['detail']) ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
      <?php if (!empty($formation['examens']['note'])): ?>
      <p class="formation-eval-note"><?= htmlspecialchars($formation['examens']['note']) ?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Passerelles -->
    <?php if (!empty($formation['passerelles'])): ?>
    <div class="formation-eval-col">
      <div class="formation-list-title">Correspondances et passerelles</div>
      <ul class="formation-passerelles-list">
        <?php foreach ($formation['passerelles'] as $p): ?>
        <li><?= htmlspecialchars($p) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>

  </div>
</section>

<!-- ===== ACCESSIBILITÉ ===== -->
<?php if (!empty($formation['accessibilite'])): ?>
<section class="formation-access">
  <div class="formation-access-inner">
    <div class="formation-access-icon">♿</div>
    <div class="formation-access-content">
      <div class="formation-access-label">Accessibilité</div>
      <p><?= htmlspecialchars($formation['accessibilite']['note']) ?></p>
    </div>
    <?php if (!empty($formation['accessibilite']['referent'])): ?>
    <div class="formation-access-contact">
      <div class="formation-access-contact-name"><?= htmlspecialchars($formation['accessibilite']['referent']) ?></div>
      <div class="formation-access-contact-role">Référente handicap</div>
      <?php if (!empty($formation['accessibilite']['email'])): ?>
      <a href="mailto:<?= htmlspecialchars($formation['accessibilite']['email']) ?>" class="formation-access-link">
        <?= htmlspecialchars($formation['accessibilite']['email']) ?>
      </a>
      <?php endif; ?>
      <?php if (!empty($formation['accessibilite']['tel'])): ?>
      <a href="tel:<?= htmlspecialchars(str_replace(' ', '', $formation['accessibilite']['tel'])) ?>" class="formation-access-link">
        <?= htmlspecialchars($formation['accessibilite']['tel']) ?>
      </a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- ===== AUTRES FORMATIONS ===== -->
<section class="formation-others">
  <div class="formation-others-inner">
    <div class="formation-others-header">
      <div class="section-label"><span class="num">→</span> Autres formations</div>
      <h2 class="section-h2">Continuez à <em>explorer</em>.</h2>
    </div>
    <div class="formation-grid">
      <?php foreach ($autres as $f): ?>
        <?php require 'components/formation-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>
