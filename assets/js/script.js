// ローディングアニメーション
window.addEventListener("load", () => {
  const loading = document.getElementById("loading");
  setTimeout(() => {
    loading.classList.add("loaded");
  }, 200);
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