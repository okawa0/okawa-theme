/**
 * Okawa Theme - Main Script
 */
document.addEventListener('DOMContentLoaded', () => {
  initHamburgerMenu();
  initRevealAnimation();
  initSkillSection();
});

/**
 * ハンバーガーメニュー
 */
function initHamburgerMenu() {
  const hamburger = document.querySelector('.hamburger-overlay');
  const nav = document.querySelector('.nav-overlay');
  const navLinks = document.querySelectorAll('.nav-overlay__link');

  if (!hamburger || !nav) return;

  const closeMenu = () => {
    hamburger.classList.remove('active');
    nav.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    nav.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');

    const isOpen = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isOpen);
    nav.setAttribute('aria-hidden', !isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  navLinks.forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) {
      closeMenu();
    }
  });
}

/**
 * IntersectionObserver によるスクロール表示アニメーション
 */
function initRevealAnimation() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-inview');
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -10% 0px' }
  );

  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
}

/**
 * スキルセクション（ホバー/タップで説明表示）
 */
function initSkillSection() {
  const items = document.querySelectorAll('.skill-tree__item');
  const infoBox = document.querySelector('.skill-info');
  const skillName = document.querySelector('.skill-info__name');
  const skillDesc = document.querySelector('.skill-info__desc');

  if (!items.length || !infoBox || !skillName || !skillDesc) return;

  const showSkillInfo = (item) => {
    skillName.textContent = item.dataset.skill;
    skillDesc.innerHTML = item.dataset.desc;
    infoBox.classList.add('visible');
  };

  const hideSkillInfo = () => {
    infoBox.classList.remove('visible');
  };

  items.forEach((item) => {
    item.addEventListener('mouseenter', () => showSkillInfo(item));
    item.addEventListener('mouseleave', hideSkillInfo);
    item.addEventListener('click', (e) => {
      e.stopPropagation();
      showSkillInfo(item);
    });
  });

  const isTouchDevice =
    window.matchMedia && window.matchMedia('(pointer: coarse)').matches;
  if (!isTouchDevice) {
    document.addEventListener('click', hideSkillInfo);
  }
}
