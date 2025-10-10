document.addEventListener('DOMContentLoaded', () => {
  const title = document.getElementById('hero-title');
  // 描画が一度走ってからクラス付与（iOSの取りこぼし回避）
  requestAnimationFrame(() => {
    title.classList.add('is-active');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const title = document.getElementById('hero-subtitle');
  // 描画が一度走ってからクラス付与（iOSの取りこぼし回避）
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
    threshold: 0.15,           // 15%見えたら
    rootMargin: '0px 0px -10% 0px' // 少し早めに発火
  });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el)); 