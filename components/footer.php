<?php
// Attend que $formations soit disponible (chargé via data/formations.php)
$page_js = $page_js ?? '/assets/js/home.js';

// Réseaux sociaux — remplacer les URL par les vrais profils si besoin.
$social_links = [
  'Instagram' => 'https://www.instagram.com/skalysbusiness.school/',
  'LinkedIn'  => 'https://fr.linkedin.com/company/skalys-business-school',
  'TikTok'    => 'https://www.tiktok.com/@skalysbusiness.school?is_from_webapp=1&sender_device=pc',
  'Facebook'  => 'https://www.facebook.com/skalysbusinessschool',
  'YouTube'   => 'https://www.youtube.com/@skalysbusinessschool',
];
$social_rel    = fn(string $href) => $href === '#' ? 'nofollow noopener noreferrer' : 'noopener noreferrer';
$social_target = fn(string $href) => $href === '#' ? '' : ' target="_blank"';
?>

<!-- ===== FOOTER ===== -->
<footer id="contact">
  <div class="footer-massive">Sk<span class="yel">a</span>lys</div>
  <div class="footer-grid">
    <div class="footer-brand-block">
      <img src="/assets/images/skalys-logo.webp" alt="Skalys Business School" width="200px">
      <p class="footer-brand-text">L'école qui connecte aux métiers de demain. Formations en alternance du Bac au Bac+5, à Compiègne.</p>
      <div class="footer-socials">
        <a href="<?= htmlspecialchars($social_links['Instagram']) ?>"<?= $social_target($social_links['Instagram']) ?> rel="<?= $social_rel($social_links['Instagram']) ?>" class="social-icon" aria-label="Instagram">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="3" width="18" height="18" rx="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
          </svg>
        </a>
        <a href="<?= htmlspecialchars($social_links['LinkedIn']) ?>"<?= $social_target($social_links['LinkedIn']) ?> rel="<?= $social_rel($social_links['LinkedIn']) ?>" class="social-icon" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
            <path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3V9zm7 0h3.8v1.7h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.65 4.78 6.1V21H18.6v-5.4c0-1.29-.02-2.95-1.8-2.95-1.8 0-2.08 1.4-2.08 2.85V21H10V9z"/>
          </svg>
        </a>
        <a href="<?= htmlspecialchars($social_links['TikTok']) ?>"<?= $social_target($social_links['TikTok']) ?> rel="<?= $social_rel($social_links['TikTok']) ?>" class="social-icon" aria-label="TikTok">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
            <path d="M16.5 2c.36 1.97 1.5 3.6 3.5 4v3.2c-1.3.04-2.55-.3-3.7-.92v6.62c0 4.16-3.36 7.1-7.4 7.1-2.93 0-5.45-2.04-5.45-5 0-3.05 2.6-5.1 5.55-5.1.41 0 .82.04 1.2.12v3.27a3.2 3.2 0 00-1.2-.23c-1.5 0-2.65.95-2.65 2.2 0 1.18 1.05 2 2.4 2 1.6 0 2.9-1.25 2.9-3.2V2h4.85z"/>
          </svg>
        </a>
        <a href="<?= htmlspecialchars($social_links['Facebook']) ?>"<?= $social_target($social_links['Facebook']) ?> rel="<?= $social_rel($social_links['Facebook']) ?>" class="social-icon" aria-label="Facebook">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
            <path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.55-1.5H17V4.6c-.27-.04-1.2-.1-2.27-.1-2.25 0-3.78 1.37-3.78 3.9V11H8.25v3.1h2.7V22h2.55z"/>
          </svg>
        </a>
        <a href="<?= htmlspecialchars($social_links['YouTube']) ?>"<?= $social_target($social_links['YouTube']) ?> rel="<?= $social_rel($social_links['YouTube']) ?>" class="social-icon" aria-label="YouTube">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
            <path d="M21.6 7.2a2.5 2.5 0 00-1.76-1.76C18.25 5 12 5 12 5s-6.25 0-7.84.44A2.5 2.5 0 002.4 7.2C2 8.8 2 12 2 12s0 3.2.4 4.8c.23.92.94 1.63 1.86 1.86C5.85 19 12 19 12 19s6.15 0 7.74-.44a2.5 2.5 0 001.86-1.86C22 15.2 22 12 22 12s0-3.2-.4-4.8zM10 15V9l5 3-5 3z"/>
          </svg>
        </a>
      </div>

      <!-- Logo Qualiopi -->
      <div class="footer-qualiopi">
        <a href="/qualiopi.php" aria-label="Skalys Business School — Certifié Qualiopi" class="footer-qualiopi-badge">
          <img src="/assets/images/AFC-CFA-768x401.png" alt="Certification Qualiopi — Actions de formation &amp; apprentissage" width="768" height="401" loading="lazy" decoding="async" class="footer-qualiopi-img">
        </a>
      </div>
    </div>
    <div class="footer-col">
      <h5>Formations</h5>
      <ul>
        <?php foreach ($formations as $f): ?>
        <li><a href="/formation/<?= htmlspecialchars($f['slug']) ?>"><?= htmlspecialchars($f['badge']) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="footer-col">
      <h5>L'école</h5>
      <ul>
        <li><a href="/equipe.php">Notre équipe</a></li>
        <li><a href="/blog.php">Blog</a></li>
        <li><a href="/faq.php">FAQ</a></li>
        <li><a href="/accessibilite.php">Accessibilité</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Contact</h5>
      <ul>
        <li>8 av. Flandres Dunkerque<br>60200 Compiègne</li>
        <li><a href="mailto:contact@skalys-bs.fr">contact@skalys-bs.fr</a></li>
      </ul>
      <div class="footer-map" data-consent-map>
        <!-- Bloc affiché tant que l'utilisateur n'a pas accepté les cookies « cartes ». RGPD : pas de requête tiers (OpenStreetMap) sans consentement préalable. -->
        <div class="footer-map-consent" data-consent-placeholder>
          <p class="footer-map-consent-text">La carte est fournie par OpenStreetMap. Pour l'afficher, votre adresse IP est transmise à un service tiers.</p>
          <button type="button" class="footer-map-consent-btn" data-consent-accept>Afficher la carte</button>
          <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener noreferrer" class="footer-map-consent-link">Ouvrir dans Google Maps →</a>
        </div>
        <a href="https://maps.google.com/?q=8+avenue+Flandres+Dunkerque+60200+Compiègne" target="_blank" rel="noopener noreferrer" class="footer-map-link" aria-label="Voir Skalys sur Google Maps" data-consent-frame hidden>
          <img
            src="/assets/images/image.png"
            data-consent-src="https://staticmap.openstreetmap.de/staticmap.php?center=49.4179,2.8260&zoom=15&size=400x200&markers=49.4179,2.8260,red-pushpin"
            alt="Carte — Skalys Business School à Compiègne"
            width="400"
            height="200"
            loading="lazy"
            decoding="async"
            onerror="this.style.display='none'; this.parentElement.classList.add('footer-map-fallback');"
          >
          <span class="footer-map-cta">Voir sur la carte <span>→</span></span>
        </a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 Skalys Business School / AJ-Formation SARL</span>
    <span class="footer-legal-links">
      <a href="/mentions-legales.php">Mentions légales</a> /
      <a href="/politique-confidentialite.php">Politique de confidentialité</a> /
      <a href="/cgv.php">CGV</a> /
      <a href="/accessibilite.php">Accessibilité</a> /
      <a href="/qualiopi.php">Qualiopi</a> /
      <button type="button" class="footer-cookie-prefs" data-consent-open>Gérer mes cookies</button>
    </span>
  </div>
</footer>

<!-- ===== STICKY CTA ===== -->
<div class="sticky-cta" id="stickyCta">
  <?php if (!empty($sticky_cta_url)): ?>
    <a href="<?= htmlspecialchars($sticky_cta_url) ?>"><?= htmlspecialchars($sticky_cta_label ?? 'Candidater') ?> <span>→</span></a>
  <?php else: ?>
    <a href="/candidature.php">Candidater <span>→</span></a>
  <?php endif; ?>
</div>

<!-- ===== BANNIÈRE COOKIES RGPD ===== -->
<div class="cookie-banner" id="cookieBanner" role="dialog" aria-labelledby="cookieBannerTitle" aria-describedby="cookieBannerDesc" hidden>
  <div class="cookie-banner-inner">
    <div class="cookie-banner-content">
      <h2 id="cookieBannerTitle" class="cookie-banner-title">Cookies &amp; vie privée</h2>
      <p id="cookieBannerDesc" class="cookie-banner-text">
        Nous utilisons des ressources externes (polices Google Fonts, cartes OpenStreetMap) qui nécessitent votre consentement avant tout chargement. Aucun cookie de traçage publicitaire n'est déposé. <a href="/politique-confidentialite.php">En savoir plus</a>.
      </p>
    </div>
    <div class="cookie-banner-actions">
      <button type="button" class="cookie-btn cookie-btn-refuse" data-consent-refuse>Tout refuser</button>
      <button type="button" class="cookie-btn cookie-btn-accept" data-consent-accept-all>Tout accepter</button>
    </div>
  </div>
</div>

<script src="/assets/js/consent.js" defer></script>
<script src="<?= htmlspecialchars($page_js) ?>" defer></script>
</body>
</html>
