<?php
require_once 'data/formations.php';

$page_title       = 'Certification Qualiopi — Skalys Business School';
$page_desc        = 'Skalys Business School est certifié Qualiopi pour les actions de formation et l\'apprentissage. Détails et accès au document officiel de certification.';
$home_url         = '/';
$extra_css        = ['/assets/css/legal.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="legal-hero">
  <div class="legal-hero-bg-text">Qualiopi</div>
  <div class="legal-hero-inner">
    <div class="section-label section-label--on-dark">
      <span class="num">→</span> Certification qualité
    </div>
    <h1>Certifié <em>Qualiopi.</em></h1>
    <p class="legal-hero-sub">Skalys Business School (AJ-Formation SARL) est titulaire de la certification qualité Qualiopi, marque délivrée par l'État pour les actions de formation professionnelle et les actions de formation par apprentissage.</p>
    <div class="legal-hero-meta">Dernière mise à jour : <?= date('d/m/Y') ?></div>
  </div>
</section>

<!-- ===== BODY ===== -->
<section class="legal-body">
  <div class="legal-body-inner">

    <div class="legal-section">
      <h2>Qu'est-ce que Qualiopi&nbsp;?</h2>
      <p>La <strong>certification Qualiopi</strong> est la marque de certification qualité unique des prestataires de formation, instaurée par la loi du 5 septembre 2018 « Pour la liberté de choisir son avenir professionnel ». Elle atteste de la qualité des processus mis en œuvre par les organismes de formation et conditionne l'accès aux fonds publics et mutualisés (OPCO, France Travail, État, régions).</p>
      <p>La certification est délivrée à l'issue d'un audit conduit par un organisme certificateur accrédité par le Comité Français d'Accréditation (Cofrac), sur la base d'un référentiel national unique (RNQ) composé de 7 critères et 32 indicateurs.</p>
    </div>

    <div class="legal-section">
      <h2>Notre certification</h2>
      <div class="legal-table">
        <div>Organisme certifié</div>
        <div><strong>AJ-Formation SARL</strong> — Skalys Business School</div>

        <div>Catégories d'actions</div>
        <div>Actions de formation &amp; Actions de formation par apprentissage</div>

        <div>Adresse</div>
        <div>8 avenue Flandres Dunkerque, 60200 Compiègne, France</div>

        <div>Numéro de certificat</div>
        <div><span class="legal-todo">À compléter</span></div>

        <div>Date d'obtention</div>
        <div><span class="legal-todo">À compléter</span></div>

        <div>Date de validité</div>
        <div><span class="legal-todo">À compléter</span></div>

        <div>Organisme certificateur</div>
        <div><span class="legal-todo">À compléter</span></div>
      </div>
    </div>

    <div class="legal-section">
      <h2>Consulter le certificat</h2>
      <p>Le certificat Qualiopi de Skalys Business School est disponible sur simple demande à <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>. Une fois disponible, il sera également téléchargeable directement ci-dessous.</p>
      <p><a href="#" class="legal-todo">Télécharger le certificat (PDF — à venir)</a></p>
    </div>

    <div class="legal-section">
      <h2>Les 7 critères du référentiel Qualiopi</h2>
      <ol>
        <li>Information du public sur les prestations proposées, les délais d'accès et les résultats obtenus&nbsp;;</li>
        <li>Identification précise des objectifs des prestations et adaptation aux publics bénéficiaires&nbsp;;</li>
        <li>Adaptation aux publics : prise en compte du contexte, des besoins et des contraintes des apprenants&nbsp;;</li>
        <li>Adéquation des moyens pédagogiques, techniques et d'encadrement aux prestations mises en œuvre&nbsp;;</li>
        <li>Qualification et développement des compétences des personnels chargés de la formation&nbsp;;</li>
        <li>Inscription dans son environnement professionnel et veille permanente&nbsp;;</li>
        <li>Recueil et prise en compte des appréciations et des réclamations.</li>
      </ol>
    </div>

    <div class="legal-section">
      <h2>Une question sur la certification&nbsp;?</h2>
      <p>Vous pouvez nous contacter à <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a> ou au <a href="tel:0652670444">06 52 67 04 44</a>. Pour en savoir plus sur la marque Qualiopi, consultez le site du <a href="https://travail-emploi.gouv.fr/formation-professionnelle/qualite-de-la-formation/qualiopi-marque-de-certification-qualite-des-prestataires-de-formation/" target="_blank" rel="noopener">Ministère du Travail</a>.</p>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>
