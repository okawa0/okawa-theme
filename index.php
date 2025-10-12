<!-- ヘッダーの読み込み -->
<?php get_header(); ?>

<!-- ローディング -->
<div id="loading">
  <video id="loading-video" autoplay muted playsinline>
    <source
      src="<?php echo esc_url(get_theme_file_uri('assets/videos/fallen-leaves--sp.mp4')); ?>"
      type="video/mp4"
      media="(max-width: 768px)">
    <source
      src="<?php echo esc_url(get_theme_file_uri('assets/videos/fallen-leaves.mp4')); ?>"
      type="video/mp4"
      media="(min-width: 769px)">
  </video>
</div>

<main>
  <!-- ヒーロー -->
  <section class="hero">
    <div class="hero__inner container">
      <div id="hero-title" class="hero__title">
        <span class="char" style="--char-index: 10">P</span><span class="char" style="--char-index: 11">o</span><span class="char" style="--char-index: 12">r</span><span class="char" style="--char-index: 13">t</span><span class="char" style="--char-index: 14">f</span><span class="char" style="--char-index: 15">o</span><span class="char" style="--char-index: 16">l</span><span class="char" style="--char-index: 17">i</span><span class="char" style="--char-index: 18">o</span>
      </div>
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/brush.webp')); ?>" alt="筆跡" class="hero__brush-image">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/brush--sp.webp')); ?>" alt="筆跡" class="hero__brush-image--sp">
      <p id="hero-subtitle" class="hero__subtitle">
        <span class="char" style="--char-index: 19">b</span><span class="char" style="--char-index: 20">y</span>
        <span class="char" style="--char-index: 21"> </span><span class="char" style="--char-index: 22">W</span><span class="char" style="--char-index: 23">e</span><span class="char" style="--char-index: 24">b</span><span class="char" style="--char-index: 25"> </span><span class="char" style="--char-index: 26">C</span><span class="char" style="--char-index: 27">o</span><span class="char" style="--char-index: 28">d</span><span class="char" style="--char-index: 29">e</span><span class="char" style="--char-index: 30">r</span>
        <span class="char" style="--char-index: 31"> </span><span class="char" style="--char-index: 32">O</span><span class="char" style="--char-index:33">k</span><span class="char" style="--char-index: 34">a</span><span class="char" style="--char-index: 35">w</span><span class="char" style="--char-index: 36">a</span>
      </p>
    </div>
  </section>

  <!-- 区切り -->
  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <!-- 作品セクション -->
  <section class="section section--texture" id="works">
    <div class="container">
      <div class="section__head reveal">
        <h2 id="works-title" class="section__title jp">作品</h2>
        <p class="section__subtitle en">Works</p>
      </div>
      <div class="works">
        <a class="works__item reveal" href="<?php echo esc_url('https://okawa0.github.io/mywork/'); ?>">
          <img
            class="works__image"
            src="<?php echo esc_url(get_theme_file_uri('assets/images/work-mywork.webp')); ?>"
            alt="模写サイトmyworkのモックアップ"
            loading="lazy" decoding="async" width="600" height="340">
          <ul class="works__tags">
            <li class="works__tag">HTML</li>
            <li class="works__tag">CSS</li>
        </a>
      </div>
    </div>
  </section>

  <!-- 区切り -->
  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <!-- 技術セクション -->
  <section class="section section--texture" aria-labelledby="skills-title">
    <div class="container">
      <div class="section__head reveal">
        <h2 id="skills-title" class="section__title jp">技術</h2>
        <p class="section__subtitle en">Skills</p>
      </div>
      <ul class="logos reveal" role="list">
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

      <ul class="qualifications reveal" role="list">
        <li class="qualifications__item">ITパスポート</li>
        <li class="qualifications__item">ウェブデザイン技能検定2級</li>
        <li class="qualifications__item">色彩検定3級</li>
      </ul>
    </div>
  </section>

  <!-- 区切り -->
  <div class="section-divider">
    <svg viewBox="0 0 1440 150" preserveAspectRatio="none">
      <path d="M0,0 L1440,0 L1440,150 L0,150 Z" fill="rgba(123, 169, 173, 0.25)"></path>
      <path d="M0,0 C480,120 960,-40 1440,100 L1440,150 L0,150 Z" fill="rgba(250, 244, 240, 0.5)"></path>
    </svg>
  </div>

  <!-- 自己紹介セクション -->
  <section class="section section--texture" aria-labelledby="skills-title">
    <div class="container">
      <div class="section__head reveal">
        <h2 id="skills-title" class="section__title jp">自己紹介</h2>
        <p class="section__subtitle en">About</p>
      </div>

</main>

<!-- フッタ -->
<?php get_footer(); ?>