<?php
/* Template: Front Page (refactor) */
get_header(); ?>

<main id="main">
  <!-- Hero -->
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
      <p class="hero__subtitle">by web coder Okawa</p>
    </div>
  </section>

  <!-- Works -->
  <section class="section section--texture" aria-labelledby="works-title" id="works">
    <div class="container">
      <header class="section__head">
        <h2 id="works-title" class="section__title jp">作品</h2>
        <p class="section__subtitle en">Works</p>
      </header>

      <div class="works">
        <a class="works__item" href="<?php echo esc_url('https://okawa0.github.io/mywork/'); ?>">
            <img
              class="works__image"
              src="<?php echo esc_url(get_theme_file_uri('assets/images/work-mywork.png')); ?>"
              alt="模写・個人制作まとめ（GitHub Pages）"
              loading="lazy" decoding="async" width="1200" height="750">
            <img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/work-mywork-sp.png')); ?>" height="400" class="works__image-sp">
        </a>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section class="section section--texture" aria-labelledby="skills-title">
    <div class="container">
      <header class="section__head">
        <h2 id="skills-title" class="section__title jp">技術</h2>
        <p class="section__subtitle en">Skills</p>
      </header>

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
</main>

<?php get_footer(); ?>