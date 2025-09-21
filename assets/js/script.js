document.addEventListener('DOMContentLoaded', () => {
  const title = document.getElementById('hero-title');
  // 描画が一度走ってからクラス付与（iOSの取りこぼし回避）
  requestAnimationFrame(() => {
    title.classList.add('is-active');
  });
});