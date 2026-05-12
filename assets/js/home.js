// ===== Loader =====
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loader')?.classList.add('done');
    document.body.classList.remove('loading');
    document.querySelector('.hero')?.classList.add('loaded');
  }, 1000);
});

// ===== Custom cursor =====
const dot = document.getElementById('cursorDot');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;
window.addEventListener('mousemove', (e) => {
  mx = e.clientX; my = e.clientY;
  dot.style.transform = `translate(${mx}px, ${my}px)`;
});
const followRing = () => {
  rx += (mx - rx) * 0.15;
  ry += (my - ry) * 0.15;
  ring.style.transform = `translate(${rx}px, ${ry}px)`;
  requestAnimationFrame(followRing);
};
followRing();
document.querySelectorAll('a, button, .formation-card, .testimonial, .ai-card').forEach(el => {
  el.addEventListener('mouseenter', () => ring.classList.add('hover'));
  el.addEventListener('mouseleave', () => ring.classList.remove('hover'));
});
window.addEventListener('mousedown', () => ring.classList.add('click'));
window.addEventListener('mouseup', () => ring.classList.remove('click'));

// ===== Scroll progress =====
const progressBar = document.getElementById('scrollProg');
window.addEventListener('scroll', () => {
  const t = window.scrollY;
  const h = document.documentElement.scrollHeight - window.innerHeight;
  progressBar.style.width = ((t / h) * 100) + '%';
}, { passive: true });

// ===== Sticky CTA =====
const sticky = document.getElementById('stickyCta');
window.addEventListener('scroll', () => {
  if (window.scrollY > window.innerHeight) sticky.classList.add('show');
  else sticky.classList.remove('show');
}, { passive: true });

// ===== Nav scroll =====
const nav = document.querySelector('nav.main');
window.addEventListener('scroll', () => {
  if (window.scrollY > 80) nav.classList.add('scrolled');
  else nav.classList.remove('scrolled');
}, { passive: true });

// ===== Tabs =====
document.querySelectorAll('.level-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    const lvl = tab.dataset.level;
    document.querySelectorAll('.level-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.level-content').forEach(c => c.classList.remove('active'));
    tab.classList.add('active');
    document.querySelector(`.level-content[data-level="${lvl}"]`).classList.add('active');
  });
});

// ===== FAQ =====
document.querySelectorAll('.faq-question').forEach(q => {
  q.addEventListener('click', () => q.parentElement.classList.toggle('open'));
});

// ===== Reveal on scroll =====
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
document.querySelectorAll('.reveal, .stagger').forEach(el => obs.observe(el));

// ===== Side index tracking =====
const sections = ['hero','manifesto','formations','ia','why','process','testimonials','faq'];
const links = document.querySelectorAll('.side-index a');
window.addEventListener('scroll', () => {
  let current = 'hero';
  sections.forEach(id => {
    const el = document.getElementById(id);
    if (el && el.getBoundingClientRect().top < window.innerHeight * 0.4) {
      current = id;
    }
  });
  links.forEach(l => {
    l.classList.toggle('active', l.getAttribute('href') === '#' + current);
  });
}, { passive: true });

// ===== 3D tilt on cards =====
document.querySelectorAll('.formation-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const r = card.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width - 0.5;
    const y = (e.clientY - r.top) / r.height - 0.5;
    card.style.transform = `perspective(1000px) rotateX(${y * -5}deg) rotateY(${x * 5}deg) translateY(-4px)`;
  });
  card.addEventListener('mouseleave', () => { card.style.transform = ''; });
});

// ===== Magnetic buttons =====
document.querySelectorAll('.btn').forEach(btn => {
  btn.addEventListener('mousemove', (e) => {
    const r = btn.getBoundingClientRect();
    const x = e.clientX - r.left - r.width / 2;
    const y = e.clientY - r.top - r.height / 2;
    btn.style.transform = `translate(${x * 0.2}px, ${y * 0.3}px)`;
  });
  btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
});

// ===== Hero parallax =====
const heroSide = document.querySelector('.hero-side');
window.addEventListener('scroll', () => {
  const s = window.scrollY;
  if (s < 900 && heroSide) heroSide.style.transform = `translateY(${s * 0.07}px)`;
}, { passive: true });

// ===== Mobile menu =====
document.querySelector('.menu-burger')?.addEventListener('click', () => {
  document.querySelector('.nav-links')?.classList.toggle('mobile-open');
});

// ===== Dropdown formations (mobile toggle) =====
document.querySelector('.has-dropdown > a')?.addEventListener('click', (e) => {
  if (window.innerWidth <= 1100) {
    e.preventDefault();
    document.querySelector('.has-dropdown').classList.toggle('open');
  }
});