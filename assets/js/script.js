/**
 * Okawa Theme - Main Script
 * モジュールごとに初期化を実行
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
    hamburger.setAttribute('aria-expanded', false);
    nav.setAttribute('aria-hidden', true);
    document.body.style.overflow = '';
  };

  const openMenu = () => {
    hamburger.classList.add('active');
    nav.classList.add('active');
    hamburger.setAttribute('aria-expanded', true);
    nav.setAttribute('aria-hidden', false);
    document.body.style.overflow = 'hidden';
  };

  hamburger.addEventListener('click', () => {
    const isOpen = hamburger.classList.contains('active');
    isOpen ? closeMenu() : openMenu();
  });

  navLinks.forEach((link) => link.addEventListener('click', closeMenu));

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) closeMenu();
  });
}

/**
 * 下からふわっと表示（IntersectionObserver）
 */
function initRevealAnimation() {
  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) entry.target.classList.add('is-inview');
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -10% 0px' }
  );

  document.querySelectorAll('.reveal').forEach((el) => io.observe(el));
}

/**
 * スキルセクション
 * PC: ホバーで表示 / クリックで閉じる
 * スマホ: タップで表示 / 外側クリックでは閉じない（スクロールで閉じるのを防ぐ）
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

  const hideSkillInfo = () => infoBox.classList.remove('visible');

  items.forEach((item) => {
    item.addEventListener('mouseenter', () => showSkillInfo(item));
    item.addEventListener('mouseleave', hideSkillInfo);
    item.addEventListener('click', (e) => {
      e.stopPropagation();
      showSkillInfo(item);
    });
  });

  // クリックで閉じる（PC のみ / タッチデバイスではスクロール時に閉じる問題を回避）
  const isTouchDevice = window.matchMedia?.('(pointer: coarse)').matches;
  if (!isTouchDevice) {
    document.addEventListener('click', hideSkillInfo);
  }
}
