<?php
require_once 'data/formations.php';

$page_title       = 'Notre équipe — Skalys Business School';
$page_desc        = 'Découvrez l\'équipe Skalys Business School : direction, administration et formateurs experts. Des professionnels engagés à Compiègne pour votre réussite en alternance.';
$home_url         = 'home.php';
$extra_css        = ['assets/css/equipe.css'];
$sticky_cta_url   = 'candidature.php';
$sticky_cta_label = 'Je candidate';
$page_js          = 'assets/js/equipe.js';

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="equipe-hero">
  <div class="equipe-hero-wrap">
    <div class="equipe-hero-inner">
      <div class="section-label" style="color:rgba(244,239,227,0.55);">
        <span class="num" style="color:var(--yellow);">→</span> Notre équipe
      </div>
      <h1>Des humains,<br><em>avant tout.</em></h1>
      <p class="equipe-hero-sub">Une école, c'est avant tout des personnes. Voici celles et ceux qui forment, accompagnent et soutiennent chaque alternant Skalys au quotidien.</p>

      <div class="equipe-hero-tags">
        <span class="eq-tag">Proximité</span>
        <span class="eq-tag">Engagement</span>
        <span class="eq-tag">Professionnalisation</span>
        <span class="eq-tag">Responsabilité</span>
      </div>
    </div>

    <div class="equipe-hero-portrait">
      <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/brooke-cagle-g1Kr4Ozfoac-unsplash-scaled.jpg" alt="L'équipe Skalys Business School">
      <div class="equipe-hero-caption">Fig. 01 — Équipe Skalys, Compiègne 2026</div>
    </div>
  </div>
</section>

<!-- ===== MARQUEE VALEURS ===== -->
<div class="mega-marquee equipe-marquee">
  <div class="mega-marquee-track">
    <span>
      <em>Proximité</em> <span class="star">✦</span>
      <em>Engagement</em> <span class="star">✦</span>
      <em>Professionnalisation</em> <span class="star">✦</span>
      <em>Responsabilité</em> <span class="star">✦</span>
      <em>Proximité</em> <span class="star">✦</span>
      <em>Engagement</em> <span class="star">✦</span>
      <em>Professionnalisation</em> <span class="star">✦</span>
      <em>Responsabilité</em> <span class="star">✦</span>
    </span>
  </div>
</div>

<!-- ===== QUI SOMMES-NOUS ===== -->
<section class="equipe-mission">
  <div class="container">
    <div class="equipe-mission-grid">
      <div class="equipe-mission-left reveal">
        <div class="section-label"><span class="num">01</span> Notre mission</div>
        <h2 class="section-h2">Former des pros<br><em>opérationnels.</em></h2>
      </div>
      <div class="equipe-mission-right">
        <p class="reveal">Skalys Business School est un organisme de formation dédié aux métiers du commerce, de la gestion et des services. Notre ambition : former des professionnels compétents, autonomes et engagés, capables de s'adapter aux évolutions des métiers.</p>
        <div class="equipe-valeurs stagger">
          <div class="equipe-valeur-item">
            <div class="valeur-num">/01</div>
            <h4>Proximité</h4>
            <p>Une école accessible, à l'écoute des apprenants et des entreprises partenaires, réactive et disponible.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/02</div>
            <h4>Engagement</h4>
            <p>Un accompagnement individualisé tout au long du parcours, de l'admission jusqu'à l'insertion professionnelle.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/03</div>
            <h4>Professionnalisation</h4>
            <p>Des formations ancrées dans la réalité du terrain, avec des formateurs issus du monde professionnel.</p>
          </div>
          <div class="equipe-valeur-item">
            <div class="valeur-num">/04</div>
            <h4>Responsabilité</h4>
            <p>Des programmes accessibles qui lèvent les obstacles à la formation et favorisent l'égalité des chances.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ÉQUIPE ADMINISTRATIVE ===== -->
<section class="equipe-admin" id="admin">
  <div class="container">
    <div class="equipe-section-header reveal">
      <div class="section-label"><span class="num">02</span> Administration</div>
      <h2 class="section-h2">L'équipe<br><em>qui fait tourner l'école.</em></h2>
    </div>

    <div class="membres-grid stagger">

      <div class="membre-card membre-card--large">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2026/04/DSC02135.webp" alt="Abdelkader Barakat" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Directeur général</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Abdelkader Barakat</h3>
          <span class="membre-role">Directeur général</span>
        </div>
      </div>

      <div class="membre-card">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/doro-1-scaled-1.webp" alt="Dorothée Bouvignies" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Relations entreprises</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Dorothée Bouvignies</h3>
          <span class="membre-role">Responsable relations entreprises &amp; recrutement</span>
        </div>
      </div>

      <div class="membre-card">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2026/01/DSC01036-3-e1767608256973.webp" alt="Anouchka Blanchard" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Relations entreprises</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Anouchka Blanchard</h3>
          <span class="membre-role">Chargée des relations entreprises</span>
        </div>
      </div>

      <div class="membre-card">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/WhatsApp-Image-2025-03-06-a-08.39.27_eb1dffff.webp" alt="Laetitia Toussaints" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Administration</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Laetitia Toussaints</h3>
          <span class="membre-role">Responsable administrative &amp; pédagogique</span>
        </div>
      </div>

      <div class="membre-card">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/IMG-20250328-WA0000.webp" alt="Cassandre Bailly" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Administration</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Cassandre Bailly</h3>
          <span class="membre-role">Chargée administrative</span>
        </div>
      </div>

      <div class="membre-card">
        <div class="membre-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/YLANN-LAMIEN-PHOTO-PROFESSIONEL.webp" alt="Ylann Lamien" loading="lazy">
          <div class="membre-overlay">
            <span class="membre-role-tag">Communication</span>
          </div>
        </div>
        <div class="membre-info">
          <h3>Ylann Lamien</h3>
          <span class="membre-role">Chargé de communication</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== FORMATEURS ===== -->
<section class="equipe-formateurs" id="formateurs">
  <div class="container">
    <div class="equipe-section-header reveal">
      <div class="section-label"><span class="num">03</span> Corps enseignant</div>
      <h2 class="section-h2">Des formateurs<br><em>experts du terrain.</em></h2>
      <p class="reveal">Des professionnels en activité ou issus du monde de l'entreprise. Ils n'enseignent pas la théorie — ils transmettent ce qu'ils vivent au quotidien.</p>
    </div>

    <div class="formateurs-grid stagger">

      <div class="formateur-card">
        <div class="formateur-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/marcpatiou-vh-HD1_reduite.jpg" alt="Marc Patiou" loading="lazy">
        </div>
        <div class="formateur-body">
          <div class="formateur-specialite">Commerce &amp; Vente</div>
          <h3>Marc Patiou</h3>
          <p>25 ans d'expérience dans le commerce, l'immobilier et le conseil en entreprise. Expert en techniques de vente et en accompagnement commercial, il transmet une vision pragmatique et directement applicable du métier.</p>
          <div class="formateur-tags">
            <span>BTS NDRC</span>
            <span>TP NTC</span>
            <span>Vente</span>
          </div>
        </div>
      </div>

      <div class="formateur-card">
        <div class="formateur-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/2024-01-25-BENJAMIN-JONNEAU4719-1-e1766764325896.jpg" alt="Benjamin Jonneaux" loading="lazy">
        </div>
        <div class="formateur-body">
          <div class="formateur-specialite">Digital &amp; IA</div>
          <h3>Benjamin Jonneaux</h3>
          <p>Spécialiste de la montée en compétences digitales, il accompagne les professionnels dans leur transformation numérique. Ses formations sont interactives, concrètes et directement applicables en entreprise.</p>
          <div class="formateur-tags">
            <span>BTS NDRC</span>
            <span>BTS GPME</span>
            <span>Digital</span>
          </div>
        </div>
      </div>

      <div class="formateur-card">
        <div class="formateur-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/JULIE_MARCHETEAU-17-scaled.jpg" alt="Julie Marcheteau" loading="lazy">
        </div>
        <div class="formateur-body">
          <div class="formateur-specialite">LinkedIn &amp; Marketing</div>
          <h3>Julie Marcheteau</h3>
          <p>Ancienne directrice marketing dans l'industrie pharmaceutique, aujourd'hui stratège en personal branding et coach d'entrepreneurs sur LinkedIn. Elle forme à la visibilité professionnelle et au marketing de contenu.</p>
          <div class="formateur-tags">
            <span>BTS NDRC</span>
            <span>Marketing</span>
            <span>Réseaux sociaux</span>
          </div>
        </div>
      </div>

      <div class="formateur-card">
        <div class="formateur-photo">
          <img src="https://skalys-bs.fr/wp-content/uploads/2025/12/Pilote-Marion-Fouquet-scaled.jpg" alt="Marion Fouquet" loading="lazy">
        </div>
        <div class="formateur-body">
          <div class="formateur-specialite">Communication &amp; Gestion de projet</div>
          <h3>Marion Fouquet</h3>
          <p>Fondatrice du cabinet Pilote, elle allie communication stratégique et gestion de projet. Ses cours sont axés sur des outils pratiques, directement utiles sur le terrain.</p>
          <div class="formateur-tags">
            <span>BTS GPME</span>
            <span>Communication</span>
            <span>Projet</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="equipe-cta">
  <div class="equipe-cta-inner">
    <div class="section-label reveal" style="color:rgba(244,239,227,0.55);">
      <span class="num" style="color:var(--yellow);">→</span> Rejoignez l'aventure
    </div>
    <h2 class="reveal">Prêt à intégrer<br><em>l'école ?</em></h2>
    <p class="reveal">Candidatez dès maintenant et rejoignez une promotion motivée, entourée d'une équipe qui vous accompagne jusqu'à l'emploi.</p>
    <div class="equipe-cta-actions reveal">
      <a href="candidature.php" class="btn btn-yellow">Je candidate <span class="arrow">→</span></a>
      <a href="recruter.php" class="btn equipe-btn-ghost">Recruter un alternant</a>
    </div>
  </div>
</section>

<?php require 'components/footer.php'; ?>
