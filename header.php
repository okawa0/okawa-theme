<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- LCP対策 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- CSSやJSをhead内に挿入するWordPressのフック関数 -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header__inner container">
      <p class="site-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-header__logo-link">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo-mark.png')); ?>" alt="" class="site-header__logo-image">
          <span class="site-header__logo-title u-underline">Okawa Web</span>
        </a>
      </p>
      <nav class="site-header__main-nav">
        <ul>
          <li class="u-underline u-underline--whiteshadow"><a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="<?php echo esc_url(home_url('/#skills')); ?>">Skills</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
        </ul>
      </nav>
      <!-- SP用ナビゲーション -->
      <button class="hamburger-overlay" type="button" aria-label="メニューを開閉する" aria-controls="overlay-menu" aria-expanded="false">
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
        <span class="hamburger-overlay__line"></span>
      </button>
      <nav id="overlay-menu" class="nav-overlay" aria-hidden="true">
        <div class="nav-overlay__content">
          <ul class="nav-overlay__list">
            <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/#works')); ?>" class="nav-overlay__link">Works</a></li>
            <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/#skills')); ?>" class="nav-overlay__link">Skills</a></li>
            <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/#about')); ?>" class="nav-overlay__link">About</a></li>
            <li class="nav-overlay__item"><a href="<?php echo esc_url(home_url('/#contact')); ?>" class="nav-overlay__link">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
