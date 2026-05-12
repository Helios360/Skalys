<?php
require_once 'data/formations.php';

$page_title = 'Je candidate — Skalys Business School';
$page_desc  = 'Candidatez à Skalys en alternance : découvrez les 5 étapes de notre processus d\'admission, déposez votre CV et contactez nos équipes à Compiègne.';
$home_url   = '/';
$extra_css  = ['/assets/css/candidature.css'];

require 'components/header.php';
?>

<!-- ===== HERO ===== -->
<section class="candidature-hero">
  <div class="candidature-hero-inner">

    <div>
      <div class="section-label section-label--on-dark">
        <span class="num">→</span> Candidature
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
          <div class="candidature-quick-item quick-item--spaced">
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

<!-- ===== DÉPÔT CANDIDATURE ===== -->
<section class="candidature-deposit" id="deposer">
  <div class="candidature-deposit-inner">
    <div class="candidature-deposit-card">
      <div class="candidature-deposit-head">
        <div class="section-label"><span class="num">→</span> Déposer ma candidature</div>
        <h2 class="section-h2">Envoyez votre dossier<br><em>en quelques clics.</em></h2>
        <p>Un CV, deux mots sur votre projet, et une voie de contact. Notre équipe vous rappelle sous 48h pour valider votre profil et déclencher la suite.</p>
      </div>

      <div class="deposit-actions">
        <a href="mailto:contact@skalys-bs.fr?subject=Candidature%20Skalys%20Business%20School&body=Bonjour%2C%0A%0AJe%20souhaite%20candidater%20%C3%A0%20Skalys%20Business%20School.%0A%0AFormation%20vis%C3%A9e%20%3A%0ANom%20%26%20pr%C3%A9nom%20%3A%0AT%C3%A9l%C3%A9phone%20%3A%0AProjet%20professionnel%20%3A%0A%0AMerci%20de%20joindre%20mon%20CV%20%C3%A0%20cet%20email."
           class="deposit-btn deposit-btn--primary">
          <span class="deposit-btn-label">
            <span class="deposit-btn-title">Envoyer mon dossier par email</span>
            <small>Joindre CV + court projet</small>
          </span>
          <span class="deposit-btn-arrow">→</span>
        </a>
        <a href="tel:0652670444" class="deposit-btn">
          <span class="deposit-btn-label">
            <span class="deposit-btn-title">M'appeler / être rappelé</span>
            <small>06 52 67 04 44 — Lun-Ven 9h-18h</small>
          </span>
          <span class="deposit-btn-arrow">→</span>
        </a>
        <a href="#contact" class="deposit-btn">
          <span class="deposit-btn-label">
            <span class="deposit-btn-title">Venir nous rencontrer</span>
            <small>8 av. Flandres Dunkerque — Compiègne</small>
          </span>
          <span class="deposit-btn-arrow">→</span>
        </a>
      </div>

      <ul class="deposit-tips">
        <li><span>01</span> Précisez la formation visée (CAP, BTS, Bachelor, Mastère).</li>
        <li><span>02</span> Joignez un CV à jour — un CV simple suffit, pas besoin d'être designer.</li>
        <li><span>03</span> Indiquez vos disponibilités pour un échange téléphonique.</li>
      </ul>

      <aside class="deposit-rgpd" aria-label="Information RGPD">
        <strong>Données personnelles —</strong> les informations transmises (CV, identité, contact, projet) sont traitées par AJ-Formation SARL aux seules fins de l'étude de votre candidature et de la mise en relation avec nos entreprises partenaires. Elles sont conservées 2 ans à compter du dernier contact. Vous disposez d'un droit d'accès, de rectification, d'effacement, d'opposition et de portabilité — détails sur la <a href="/politique-confidentialite.php">politique de confidentialité</a>.
      </aside>
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
        <span class="text-meta-small">
          Lun – Ven · 9h – 18h
        </span>
      </div>
    </div>

    <!-- Carte (avec gate de consentement RGPD) -->
    <div class="candidature-map">
      <div
        class="map-consent"
        id="mapConsent"
        data-map-src="https://maps.google.com/maps?q=8+avenue+Flandres+Dunkerque+60200+Compiegne+France&hl=fr&z=16&output=embed"
        data-map-title="Skalys Business School — Compiègne">
        <div class="map-consent-inner">
          <div class="map-consent-label">Carte interactive</div>
          <h3 class="map-consent-title">Affichage de la carte</h3>
          <p class="map-consent-text">
            En activant la carte, vous acceptez le chargement d'un contenu fourni par Google Maps.
            Des cookies et un échange de données avec Google peuvent en découler, conformément à leur
            <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">politique de confidentialité</a>.
          </p>
          <div class="map-consent-actions">
            <button type="button" class="btn btn-yellow map-consent-accept" data-scope="session">
              Accepter cette fois <span class="arrow">→</span>
            </button>
            <button type="button" class="btn map-consent-accept" data-scope="persistent">
              Accepter et mémoriser
            </button>
          </div>
          <p class="map-consent-fallback">
            Vous pouvez aussi nous trouver directement sur
            <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener noreferrer">Google Maps</a>.
          </p>
        </div>
      </div>
      <div class="map-caption">Skalys Business School — 60200 Compiègne</div>
    </div>

    <script>
      (function () {
        var STORAGE_KEY = 'skalys.consent.gmaps';
        var gate = document.getElementById('mapConsent');
        if (!gate) return;

        function loadMap() {
          var src   = gate.getAttribute('data-map-src');
          var title = gate.getAttribute('data-map-title') || 'Carte';
          var iframe = document.createElement('iframe');
          iframe.src = src;
          iframe.title = title;
          iframe.loading = 'lazy';
          iframe.referrerPolicy = 'no-referrer-when-downgrade';
          iframe.setAttribute('allowfullscreen', '');
          gate.replaceWith(iframe);
        }

        try {
          if (localStorage.getItem(STORAGE_KEY) === 'granted') {
            loadMap();
            return;
          }
        } catch (e) { /* localStorage indispo (mode privé) — on demande le consentement */ }

        gate.querySelectorAll('.map-consent-accept').forEach(function (btn) {
          btn.addEventListener('click', function () {
            if (btn.getAttribute('data-scope') === 'persistent') {
              try { localStorage.setItem(STORAGE_KEY, 'granted'); } catch (e) {}
            }
            loadMap();
          });
        });
      })();
    </script>

  </div>
</section>

<?php require 'components/footer.php'; ?>
