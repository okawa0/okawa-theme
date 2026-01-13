// ハンバーガーメニュー
document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('.hamburger-overlay');
  const nav = document.querySelector('.nav-overlay');
  const navLinks = document.querySelectorAll('.nav-overlay__link');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');

    const isOpen = hamburger.classList.contains('active');
    hamburger.setAttribute('aria-expanded', isOpen);
    nav.setAttribute('aria-hidden', !isOpen);

    // メニューオープン時に背景スクロールを防止
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // ✅ メニュー内リンクをクリックしたら閉じる
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      nav.classList.remove('active');
      hamburger.setAttribute('aria-expanded', false);
      nav.setAttribute('aria-hidden', true);
      document.body.style.overflow = '';
    });
  });

  // ESCキーでメニューを閉じる
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('active')) {
      hamburger.classList.remove('active');
      nav.classList.remove('active');
      hamburger.setAttribute('aria-expanded', false);
      nav.setAttribute('aria-hidden', true);
      document.body.style.overflow = '';
    }
  });
});

// // タイトルのアニメーション
// document.addEventListener('DOMContentLoaded', () => {
//   const title = document.getElementById('hero-title');
//   requestAnimationFrame(() => {
//     title.classList.add('is-active');
//   });
// });
// // サブタイトルのアニメーション
// document.addEventListener('DOMContentLoaded', () => {
//   const title = document.getElementById('hero-subtitle');
//   requestAnimationFrame(() => {
//     title.classList.add('is-active');
//   });
// });

// 下からふわっと表示
  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-inview');
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -10% 0px'
  });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el)); 

// スキルセクション
const items = document.querySelectorAll('.skill-tree__item');
const infoBox = document.querySelector('.skill-info');
const skillName = document.querySelector('.skill-info__name');
const skillDesc = document.querySelector('.skill-info__desc');

items.forEach(item => {
  item.addEventListener('mouseenter', () => {
    skillName.textContent = item.dataset.skill;
    skillDesc.innerHTML = item.dataset.desc;
    infoBox.classList.add('visible');
  });

  item.addEventListener('mouseleave', () => {
    infoBox.classList.remove('visible');
  });

  // スマホ用：タップで表示
  item.addEventListener('click', e => {
    e.stopPropagation();
    skillName.textContent = item.dataset.skill;
    skillDesc.innerHTML = item.dataset.desc;
    infoBox.classList.add('visible');
  });
});

document.addEventListener('click', () => {
  infoBox.classList.remove('visible');
});