// :::SECTION:Scroll Animations:::
const animatedElements = document.querySelectorAll('.animate-on-scroll');

if (animatedElements.length > 0) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  animatedElements.forEach(el => observer.observe(el));
}

// :::SECTION:Smooth Scrolling:::
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href');
    if (targetId === '#') return;
    
    const target = document.querySelector(targetId);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// :::SECTION:Parallax Depth:::
// Subtle parallax on the hero background for depth
let heroSection = document.querySelector('.hero');
let ticking = false;

if (heroSection) {
  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        const scrolled = window.pageYOffset;
        const heroHeight = heroSection.offsetHeight;
        
        if (scrolled < heroHeight) {
          const parallaxOffset = scrolled * 0.3;
          heroSection.style.backgroundPositionY = `calc(center + ${parallaxOffset}px)`;
        }
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
}

// :::SECTION:Card Hover Glow:::
// Add a dynamic glow effect tracking mouse position on class cards
const classCards = document.querySelectorAll('.class-card');

classCards.forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;
    card.style.setProperty('--glow-x', x + '%');
    card.style.setProperty('--glow-y', y + '%');
  });
});

// Add CSS for the glow effect dynamically
const glowStyle = document.createElement('style');
glowStyle.textContent = `
  .class-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(
      circle 200px at var(--glow-x, 50%) var(--glow-y, 50%),
      rgba(123, 47, 190, 0.12) 0%,
      transparent 70%
    );
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: 3;
  }
  .class-card:hover::after {
    opacity: 1;
  }
`;
document.head.appendChild(glowStyle);

// :::SECTION:Feature Counter Animation:::
// Animate roman numerals with a subtle glow pulse when they enter view
const featureItems = document.querySelectorAll('.feature-number');
const featureObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.transition = 'color 0.6s ease, text-shadow 0.6s ease';
      entry.target.style.color = '#7B2FBE';
      entry.target.style.textShadow = '0 0 30px rgba(123,47,190,0.4)';
      
      setTimeout(() => {
        entry.target.style.color = '';
        entry.target.style.textShadow = '';
      }, 1200);
      
      featureObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

featureItems.forEach(el => featureObserver.observe(el));