<?php
require_once 'data/formations.php';

$page_title = 'Je candidate — Skalys Business School';
$page_desc  = 'Candidatez en alternance à Skalys. Découvrez les 5 étapes de notre processus d\'admission et contactez-nous directement.';
$home_url   = 'home.php';
$extra_css  = ['assets/css/candidature.css'];

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="candidature-hero">
  <div class="candidature-hero-inner">

    <div>
      <div class="section-label" style="color:rgba(244,239,227,0.55);">
        <span class="num" style="color:var(--yellow);">→</span> Candidature
      </div>
      <h1>Commençons<br>par un premier <em>pas.</em></h1>
      <p class="candidature-hero-sub">Pas de dossier interminable. Un échange humain, une mise en relation directe avec nos partenaires — et vous démarrez. C'est aussi simple que ça.</p>
    </div>

    <div class="candidature-hero-aside">
      <div class="candidature-quick">
        <div>
          <div class="candidature-quick-label">Nous contacter</div>
          <div class="candidature-quick-item">
            <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>
            <small>Réponse sous 48h</small>
          </div>
          <div class="candidature-quick-item" style="margin-top:1.2rem;">
            <a href="tel:0652670444">06 52 67 04 44</a>
            <small>Lun – Ven, 9h – 18h</small>
          </div>
        </div>
        <div>
          <div class="candidature-quick-label">Nous trouver</div>
          <div class="candidature-quick-item">
            <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener">8 av. Flandres Dunkerque<br>60200 Compiègne</a>
            <small>Accès libre sur rendez-vous</small>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="candidature-process" id="process">
  <div class="candidature-process-inner">
    <div class="candidature-process-header">
      <div class="section-label">Admission</div>
      <h2 class="section-h2">Cinq étapes vers <em>votre alternance</em>.</h2>
    </div>

    <div class="process-steps">
      <div class="step reveal">
        <div class="step-num">01</div>
        <h4>Candidature en ligne</h4>
        <p>Vous remplissez notre formulaire en 5 minutes — c'est tout.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">02</div>
        <h4>Entretien individuel</h4>
        <p>Un échange de 30 minutes pour valider votre projet et votre motivation.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">03</div>
        <h4>Mise en relation</h4>
        <p>Nous vous présentons aux entreprises partenaires correspondant à votre profil.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">04</div>
        <h4>Signature du contrat</h4>
        <p>Notre équipe gère pour vous toutes les démarches administratives et OPCO.</p>
      </div>
      <div class="step reveal">
        <div class="step-num">05</div>
        <h4>C'est parti.</h4>
        <p>Vous démarrez votre alternance avec un suivi pédagogique personnalisé.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT + MAP ===== -->
<section class="candidature-contact" id="contact">
  <div class="candidature-contact-inner">

    <!-- Coordonnées -->
    <div class="candidature-contact-details">
      <div class="section-label"><span class="num">→</span> Contact</div>

      <div class="contact-block">
        <span class="contact-block-label">Adresse</span>
        <span class="contact-block-value">
          8 av. Flandres Dunkerque<br>60200 Compiègne
        </span>
      </div>

      <div class="contact-block">
        <span class="contact-block-label">Email</span>
        <span class="contact-block-value">
          <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>
        </span>
        <a href="mailto:contact@skalys-bs.fr?subject=Candidature%20Skalys&body=Bonjour%2C%0A%0AJe%20souhaite%20candidater%20%C3%A0%20Skalys%20Business%20School.%0A%0AMon%20projet%20%3A%0A" class="contact-mailto">
          Envoyer un email <span class="arrow">→</span>
        </a>
      </div>

      <div class="contact-block">
        <span class="contact-block-label">Téléphone</span>
        <span class="contact-block-value">
          <a href="tel:0652670444">06 52 67 04 44</a>
        </span>
        <span style="font-family:var(--mono);font-size:0.68rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-soft);margin-top:0.4rem;">
          Lun – Ven · 9h – 18h
        </span>
      </div>
    </div>

    <!-- Carte -->
    <div class="candidature-map">
      <iframe
        src="https://maps.google.com/maps?q=8+avenue+Flandres+Dunkerque+60200+Compiegne+France&hl=fr&z=16&output=embed"
        loading="lazy"
        title="Skalys Business School — Compiègne"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <div class="map-caption">Skalys Business School — 60200 Compiègne</div>
    </div>

  </div>
</section>

<?php require 'components/footer.php'; ?>
