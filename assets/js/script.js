// ローディングアニメーション
window.addEventListener("load", () => {
  const loading = document.getElementById("loading");
  const video = document.getElementById("loading-video");
  //動画の再生補助
  if (video) {
    const playPromise = video.play();
    if (playPromise !== undefined) {
      playPromise.catch(() => {
        // 自動再生がブロックされたときの保険
        video.muted = true;
        video.load();
        video.play();
      });
    }
  }
  setTimeout(() => {
    loading.classList.add("loaded");
  }, 400);
});


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

// タイトルのアニメーション
document.addEventListener('DOMContentLoaded', () => {
  const title = document.getElementById('hero-title');
  requestAnimationFrame(() => {
    title.classList.add('is-active');
  });
});
// サブタイトルのアニメーション
document.addEventListener('DOMContentLoaded', () => {
  const title = document.getElementById('hero-subtitle');
  requestAnimationFrame(() => {
    title.classList.add('is-active');
  });
});

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
  // スマホでタップしたとき説明文をトグル表示
document.querySelectorAll('.skill-tree__item').forEach(item => {
  item.addEventListener('click', e => {
    // 他のactiveを消す
    document.querySelectorAll('.skill-tree__item').forEach(i => {
      if (i !== item) i.classList.remove('active');
    });
    // 自分のactiveを切り替え
    item.classList.toggle('active');
  });
});