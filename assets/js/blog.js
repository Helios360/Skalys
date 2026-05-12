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
document.querySelectorAll('a, button, .blog-card').forEach(el => {
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

// ===== Reveal on scroll =====
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.10, rootMargin: '0px 0px -60px 0px' });
document.querySelectorAll('.reveal, .stagger').forEach(el => obs.observe(el));

// ===== Blog search =====
const input = document.getElementById('blogSearch');
const meta = document.getElementById('blogSearchMeta');
const empty = document.getElementById('blogEmpty');
const cards = Array.from(document.querySelectorAll('.blog-card'));

const normalize = (s) => (s || '')
  .toLowerCase()
  .normalize('NFD')
  .replace(/[\u0300-\u036f]/g, '');

const updateFilter = () => {
  if (!input) return;
  const q = normalize(input.value).trim();

  let visibleCount = 0;
  cards.forEach(card => {
    const hay = normalize(`${card.dataset.title || ''} ${card.dataset.excerpt || ''}`);
    const ok = !q || hay.includes(q);
    card.hidden = !ok;
    if (ok) visibleCount += 1;
  });

  const total = cards.length;
  if (meta) {
    if (!q) meta.textContent = `${total} article${total > 1 ? 's' : ''} chargés depuis le RSS.`;
    else meta.textContent = `${visibleCount} / ${total} article${total > 1 ? 's' : ''} affiché${visibleCount > 1 ? 's' : ''}.`;
  }

  if (empty) empty.hidden = (visibleCount > 0) || !q;
};

input?.addEventListener('input', updateFilter);
updateFilter();

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

// ===== Mobile menu =====
document.querySelector('.menu-burger')?.addEventListener('click', () => {
  const links = document.querySelector('.nav-links');
  const open = links.style.display === 'flex';
  links.style.display = open ? 'none' : 'flex';
  if (!open) {
    Object.assign(links.style, {
      position: 'absolute', top: '100%', left: '0', right: '0',
      flexDirection: 'column', background: 'var(--cream)',
      padding: '1.5rem', gap: '0.5rem', borderBottom: '1px solid var(--border)'
    });
  }
});

// ===== Dropdown (mobile toggle) =====
document.querySelectorAll('.has-dropdown > a').forEach(a => {
  a.addEventListener('click', (e) => {
    if (window.innerWidth <= 1100) {
      e.preventDefault();
      a.closest('.has-dropdown').classList.toggle('open');
    }
  });
});
