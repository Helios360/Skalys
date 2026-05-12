/**
 * Skalys — Gestionnaire de consentement RGPD (CNIL délib. 2020-091).
 *
 * Aucune ressource tierce (Google Fonts, OpenStreetMap) n'est chargée
 * tant que l'utilisateur n'a pas explicitement accepté.
 * Le refus est aussi accessible que l'acceptation (boutons jumeaux).
 * Le choix est stocké 13 mois maximum, conformément aux recommandations CNIL.
 */
(function () {
  'use strict';

  var STORAGE_KEY = 'skalys_consent_v1';
  var MAX_AGE_DAYS = 390; // ~13 mois (recommandation CNIL)

  var FONTS_URL = 'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Manrope:wght@300;400;500;600;700;800&family=Fraunces:opsz,wght@9..144,200..900;1,200..900&family=JetBrains+Mono:wght@400;500;700&display=swap';

  function readConsent() {
    try {
      var raw = localStorage.getItem(STORAGE_KEY);
      if (!raw) return null;
      var data = JSON.parse(raw);
      if (!data || !data.ts) return null;
      var ageDays = (Date.now() - data.ts) / 86400000;
      if (ageDays > MAX_AGE_DAYS) return null;
      return data;
    } catch (e) {
      return null;
    }
  }

  function writeConsent(value) {
    try {
      localStorage.setItem(STORAGE_KEY, JSON.stringify({
        value: value,
        ts: Date.now()
      }));
    } catch (e) {}
  }

  function loadGoogleFonts() {
    if (document.getElementById('skalys-google-fonts')) return;
    var link = document.createElement('link');
    link.id = 'skalys-google-fonts';
    link.rel = 'stylesheet';
    link.href = FONTS_URL;
    document.head.appendChild(link);
  }

  function loadMaps() {
    var frames = document.querySelectorAll('[data-consent-frame]');
    frames.forEach(function (frame) {
      var placeholder = frame.parentElement
        ? frame.parentElement.querySelector('[data-consent-placeholder]')
        : null;
      if (placeholder) placeholder.hidden = true;
      frame.hidden = false;
      var imgs = frame.querySelectorAll('img[data-consent-src]');
      imgs.forEach(function (img) {
        if (!img.src) img.src = img.getAttribute('data-consent-src');
      });
    });
  }

  function applyAccepted() {
    loadGoogleFonts();
    loadMaps();
  }

  function showBanner() {
    var banner = document.getElementById('cookieBanner');
    if (banner) banner.hidden = false;
  }

  function hideBanner() {
    var banner = document.getElementById('cookieBanner');
    if (banner) banner.hidden = true;
  }

  function accept() {
    writeConsent('accepted');
    hideBanner();
    applyAccepted();
  }

  function refuse() {
    writeConsent('refused');
    hideBanner();
  }

  function openPrefs(e) {
    if (e) e.preventDefault();
    showBanner();
  }

  function init() {
    document.querySelectorAll('[data-consent-accept-all], [data-consent-accept]').forEach(function (btn) {
      btn.addEventListener('click', accept);
    });
    document.querySelectorAll('[data-consent-refuse]').forEach(function (btn) {
      btn.addEventListener('click', refuse);
    });
    document.querySelectorAll('[data-consent-open]').forEach(function (btn) {
      btn.addEventListener('click', openPrefs);
    });

    var consent = readConsent();
    if (consent && consent.value === 'accepted') {
      applyAccepted();
    } else if (!consent) {
      showBanner();
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
