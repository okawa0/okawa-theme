<?php
/* Template: Front Page (refactor) */
get_header(); ?>

<main id="main">
  <section class="hero reveal-on-load" aria-labelledby="hero-title">
    <div class="hero__inner container">
      <div id="hero-title" class="hero__title">
        <span class="char" style="--char-index: 0">P</span>
        <span class="char" style="--char-index: 1">o</span>
        <span class="char" style="--char-index: 2">r</span>
        <span class="char" style="--char-index: 3">t</span>
        <span class="char" style="--char-index: 4">f</span>
        <span class="char" style="--char-index: 5">o</span>
        <span class="char" style="--char-index: 6">l</span>
        <span class="char" style="--char-index: 7">i</span>
        <span class="char" style="--char-index: 8">o</span>
      </div>
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/brush.webp')); ?>" alt="筆跡" class="hero__brush-image">
      <p class="hero__subtitle">by web coder Okawa</p>
    </div>
  </section>

  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <!-- 下の川 -->
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <!-- 上の波 -->
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <section class="section section--texture" id="works">
    <div class="container">
      <div class="section__head">
        <h2 id="works-title" class="section__title jp">作品</h2>
        <p class="section__subtitle en">Works</p>
      </div>

      <div class="works">
        <a class="works__item" href="<?php echo esc_url('https://okawa0.github.io/mywork/'); ?>">
          <img
            class="works__image"
            src="<?php echo esc_url(get_theme_file_uri('assets/images/work-mywork.webp')); ?>"
            alt="模写サイトmyworkのモックアップ"
            loading="lazy" decoding="async" width="600" height="340">
        </a>
      </div>
    </div>
  </section>

  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <!-- 下の川 -->
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <!-- 上の波 -->
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <section class="section section--texture" aria-labelledby="skills-title">
    <div class="container">
      <div class="section__head">
        <h2 id="skills-title" class="section__title jp">技術</h2>
        <p class="section__subtitle en">Skills</p>
      </div>

      <ul class="logos" role="list">
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/html-logo.png')); ?>" alt="HTML" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/css-logo.png')); ?>" alt="CSS" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/JavaScript-logo.png')); ?>" alt="JavaScript" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/vscode-logo.png')); ?>" alt="Visual Studio Code" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/figma-logo.png')); ?>" alt="Figma" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/github-logo.png')); ?>" alt="GitHub" loading="lazy" width="180" height="180">
        </li>
        <li class="logos__item">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/wordpress-logo.png')); ?>" alt="WordPress" loading="lazy" width="180" height="180">
        </li>
      </ul>

      <ul class="qualifications" role="list">
        <li class="qualifications__item">ITパスポート</li>
        <li class="qualifications__item">ウェブデザイン技能検定2級</li>
        <li class="qualifications__item">色彩検定3級</li>
      </ul>
    </div>
  </section>

  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <!-- 下の川 -->
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <!-- 上の波 -->
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <section class="section section--texture" aria-labelledby="skills-title">
    <div class="container">
      <div class="section__head">
        <h2 id="skills-title" class="section__title jp">自己紹介</h2>
        <p class="section__subtitle en">About</p>
      </div>

</main>

<?php get_footer(); ?>