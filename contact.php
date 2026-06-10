<?php
require_once 'data/formations.php';

$page_title       = 'Contact — Skalys Business School';
$page_desc        = 'Contactez Skalys Business School à Compiègne : formulaire, email, téléphone et adresse. Réponse sous 48h pour candidats, entreprises et familles.';
$home_url         = '/';
$extra_css        = ['/assets/css/contact.css'];
$sticky_cta_url   = '/candidature.php';
$sticky_cta_label = 'Je candidate';

$jsonld_blocks = [
  [
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    'name'     => 'Contact — Skalys Business School',
    'url'      => 'https://skalys-bs.fr/contact.php',
  ],
  [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => 'https://skalys-bs.fr/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => 'https://skalys-bs.fr/contact.php'],
    ],
  ],
];

require 'components/header.php';

$mailto_subject = rawurlencode('Contact depuis le site Skalys');
$mailto_body    = rawurlencode("Bonjour Skalys,\n\n");
$mailto_href    = 'mailto:contact@skalys-bs.fr?subject=' . $mailto_subject . '&body=' . $mailto_body;
?>

<!-- ===== HERO ===== -->
<section class="contact-hero">
  <div class="contact-hero-bg-text">Contact</div>
  <div class="contact-hero-inner">

    <div>
      <div class="section-label section-label--on-dark">
        <span class="num">→</span> Nous écrire
      </div>
      <h1>Parlons<br><em>de votre projet.</em></h1>
      <p class="contact-hero-sub">Candidat, entreprise, famille ou partenaire — une seule équipe pour vous répondre. Pas de standard automatisé : un humain reprend contact sous 48h.</p>
      <div class="contact-hero-actions">
        <a href="<?= htmlspecialchars($mailto_href) ?>" class="btn btn-yellow">Écrire un email <span class="arrow">→</span></a>
        <a href="tel:0670934298" class="btn contact-btn-ghost">06 70 93 42 98</a>
      </div>
    </div>

    <div class="contact-hero-aside">
      <div class="contact-quick">
        <div>
          <div class="contact-quick-label">Email</div>
          <div class="contact-quick-item">
            <a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a>
            <small>Réponse sous 48h</small>
          </div>
          <div class="contact-quick-item quick-item--spaced">
            <a href="tel:0670934298">06 70 93 42 98</a>
            <small>Lun – Ven, 9h – 18h</small>
          </div>
        </div>
        <div class="contact-quick-cert">
          <div class="contact-quick-label">Adresse</div>
          <div class="contact-quick-item">
            <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener">8 av. Flandres Dunkerque<br>60200 Compiègne</a>
            <small>Accès libre sur rendez-vous</small>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== ÉCRIRE UN EMAIL ===== -->
<section class="contact-form-section" id="form">
  <div class="contact-form-inner">

    <aside class="contact-form-aside">
      <div class="section-label"><span class="num">01</span> Nous écrire</div>
      <h2 class="section-h2">Un email,<br><em>une réponse.</em></h2>
      <p class="contact-form-aside-text">Un clic ouvre votre messagerie avec notre adresse pré-remplie. L'équipe Skalys vous répond sous 48h ouvrées.</p>

      <ul class="contact-form-aside-list">
        <li><span>01</span>Réponse humaine sous 48h ouvrées.</li>
        <li><span>02</span>Pas de standard automatisé.</li>
        <li><span>03</span>Aucune transmission à des tiers commerciaux.</li>
      </ul>

      <div class="contact-form-aside-channels">
        <a href="tel:0670934298" class="contact-form-aside-channel">
          <span>Préférer un appel</span>
          <strong>06 70 93 42 98 <span class="arrow">→</span></strong>
        </a>
      </div>
    </aside>

    <div class="contact-form-card">
      <div class="contact-form-alert contact-form-alert--success" role="status">
        <div class="contact-form-alert-label">Email direct</div>
        <h3>Écrivez-nous à <a href="<?= htmlspecialchars($mailto_href) ?>">contact@skalys-bs.fr</a></h3>
        <p>Précisez votre profil (candidat·e, parent, entreprise, partenaire…) et l'objet de votre demande. L'équipe Skalys vous redirige vers le bon interlocuteur dès la réception.</p>
        <div class="contact-form-alert-actions">
          <a href="<?= htmlspecialchars($mailto_href) ?>" class="btn btn-primary">Ouvrir mon email <span class="arrow">→</span></a>
          <a href="tel:0670934298" class="btn">Appeler 06 70 93 42 98</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ===== POURQUOI NOUS ÉCRIRE ===== -->
<section class="contact-reasons">
  <div class="container">
    <div class="contact-reasons-header reveal">
      <div class="section-label"><span class="num">02</span> Qui sommes-nous pour vous ?</div>
      <h2 class="section-h2">Un seul contact,<br><em>plusieurs réponses.</em></h2>
    </div>

    <div class="contact-reasons-grid">
      <a href="/candidature.php" class="contact-reason-card reveal">
        <div class="contact-reason-num">/01</div>
        <h3>Vous êtes candidat·e</h3>
        <p>Découvrez nos formations, déposez votre dossier ou demandez à être rappelé pour un échange d'orientation.</p>
        <span class="contact-reason-link">Je candidate <span class="arrow">→</span></span>
      </a>

      <a href="/recruter.php" class="contact-reason-card reveal">
        <div class="contact-reason-num">/02</div>
        <h3>Vous êtes entreprise</h3>
        <p>Accueillez un alternant formé à l'IA, zéro frais pédagogiques, et un accompagnement administratif complet.</p>
        <span class="contact-reason-link">Recruter un alternant <span class="arrow">→</span></span>
      </a>

      <a href="/faq.php" class="contact-reason-card reveal">
        <div class="contact-reason-num">/03</div>
        <h3>Vous avez une question</h3>
        <p>Admission, financement, alternance, diplômes : la plupart des réponses se trouvent déjà dans notre FAQ.</p>
        <span class="contact-reason-link">Consulter la FAQ <span class="arrow">→</span></span>
      </a>

      <a href="mailto:contact@skalys-bs.fr?subject=Demande%20presse%20%2F%20institutionnelle" class="contact-reason-card reveal">
        <div class="contact-reason-num">/04</div>
        <h3>Presse &amp; institutions</h3>
        <p>Demandes médias, partenariats institutionnels, interventions : un email dédié et une réponse rapide.</p>
        <span class="contact-reason-link">Écrire à l'équipe <span class="arrow">→</span></span>
      </a>
    </div>
  </div>
</section>

<!-- ===== CONTACT + CARTE ===== -->
<section class="contact-locate" id="locate">
  <div class="contact-locate-inner">

    <div class="contact-locate-details">
      <div class="section-label"><span class="num">03</span> Nous trouver</div>
      <h2 class="contact-locate-title">À deux pas du<br><em>centre de Compiègne.</em></h2>

      <div class="contact-block">
        <span class="contact-block-label">Adresse</span>
        <span class="contact-block-value">
          8 av. Flandres Dunkerque<br>60200 Compiègne
        </span>
        <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener" class="contact-mailto">
          Ouvrir l'itinéraire <span class="arrow">→</span>
        </a>
      </div>

      <div class="contact-block">
        <span class="contact-block-label">Horaires</span>
        <span class="contact-block-value">
          Lun – Ven<br>9h – 18h
        </span>
        <span class="text-meta-small">Accueil sur rendez-vous</span>
      </div>

      <div class="contact-block">
        <span class="contact-block-label">Téléphone</span>
        <span class="contact-block-value">
          <a href="tel:0670934298">06 70 93 42 98</a>
        </span>
      </div>
    </div>

    <div class="contact-map">
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
