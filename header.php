<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSSやJSをhead内に挿入するWordPressのフック関数 -->
  <?php wp_head(); ?>
</head>

<body>
  <header class="site-header">
    <div class="site-header__inner container">
      <h1 class="site-header__logo">
        <a href="/" class="site-header__logo-link">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/okawa-logo.png')); ?>" alt="" class="site-header__logo-image">
          <span class="site-header__logo-title u-underline">Okawa Web</span>
        </a>
      </h1>
      <nav class="site-header__main-nav">
        <div class="site-header__hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul>
          <li class="u-underline u-underline--whiteshadow"><a href="#works">Works</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#skills">Skills</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#about">About</a></li>
          <li class="u-underline u-underline--whiteshadow"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>