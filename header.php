<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- LCP対策 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <style></style>
  <!-- CSSやJSをhead内に挿入するWordPressのフック関数 -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header__inner container">
      <h1 class="site-header__logo">
        <a href="/" class="site-header__logo-link">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/okawa-logo.png')); ?>" alt="" class="site-header__logo-image">
          <span class="site-header__logo-title u-underline">Okawa Web</span>
        </a>
      </h1>
      <nav class="site-header__main-nav">
        <ul>
          <li class="u-underline u-underline--whiteshadow"><a href="#works">Works</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#skills">Skills</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#about">About</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- SP用ナビゲーション -->
      <button class="hamburger-overlay">
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
      </button>
      <nav id="overlay-menu" class="nav-overlay">
        <div class="nav-overlay__content">
          <ul class="nav-overlay__list">
            <li class="nav-overlay__item"><a href="#works" class="nav-overlay__link">Works</a></li>
            <li class="nav-overlay__item"><a href="#skills" class="nav-overlay__link">Skills</a></li>
            <li class="nav-overlay__item"><a href="#about" class="nav-overlay__link">About</a></li>
            <li class="nav-overlay__item"><a href="#contact" class="nav-overlay__link">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>