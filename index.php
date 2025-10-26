<!-- ヘッダーの読み込み -->
<?php get_header(); ?>

<!-- ローディング -->
<div id="loading">
  <video id="loading-video" autoplay muted playsinline preload="auto">
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
    <div class="hero__inner">
      <!-- タイトル -->
      <div id="hero-title" class="hero__title">
        <span class="char" style="--char-index: 10">P</span><span class="char" style="--char-index: 11">o</span><span class="char" style="--char-index: 12">r</span><span class="char" style="--char-index: 13">t</span><span class="char" style="--char-index: 14">f</span><span class="char" style="--char-index: 15">o</span><span class="char" style="--char-index: 16">l</span><span class="char" style="--char-index: 17">i</span><span class="char" style="--char-index: 18">o</span>
      </div>
      <!-- 墨跡 -->
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/brush.webp')); ?>" alt="筆跡" class="hero__brush-image">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/brush--sp.webp')); ?>" alt="筆跡" class="hero__brush-image--sp">
      <!-- サブタイトル -->
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
        <h2 class="section__title">作品</h2>
        <p class="section__subtitle">Works</p>
      </div>
      <div class="works">
        <div class="works__item reveal">
          <a href="<?php echo esc_url('https://okawa0.github.io/mywork/'); ?>" target="_blank" rel="noopener noreferrer">
            <img
              class="works__image"
              src="<?php echo esc_url(get_theme_file_uri('assets/images/work-mywork.webp')); ?>"
              alt="模写サイトmyworkのモックアップ"
              loading="lazy" decoding="async" width="600" height="340">
          </a>
          <div class="works__info">
            <p><strong>My Work</strong><br>フォトグラファーのポートフォリオ</p>
            <p>コーディングを担当<br>デザインはCodeJump提供の模写課題<br></p>
            <p>使用スキル：HTML / Sass<br>ツール：VS Code / Figma / GitHub</p>
            <p>制作期間：1日(約8時間)<br>制作時期：2025年6月</p>
            <p>
          </div>
        </div>
        <div class="works__item reveal">
          <a href="<?php echo esc_url('https://okawa0.github.io/interior-store/index.html'); ?>" target="_blank" rel="noopener noreferrer">
            <img
              class="works__image"
              src="<?php echo esc_url(get_theme_file_uri('assets/images/furniture-design.webp')); ?>"
              alt="模写サイトfurniture designのモックアップ"
              loading="lazy" decoding="async" width="600" height="340">
          </a>
          <div class="works__info">
            <p><strong>Furniture Design</strong><br>インテリアショップのストアサイト</p>
            <p>コーディングを担当<br>デザインはCodeJump提供の模写課題<br></p>
            <p>使用スキル：HTML / Sass / JavaScript<br>ツール：VS Code / Figma / GitHub</p>
            <p>制作期間：4日(約30時間)<br>制作時期：2025年7月</p>
            <p>
          </div>
        </div>
        <div class="works__item reveal">
          <a href="<?php echo esc_url('https://okawa-web.com/'); ?>" target="_blank" rel="noopener noreferrer">
            <img
              class="works__image"
              src="<?php echo esc_url(get_theme_file_uri('assets/images/portfolio.webp')); ?>"
              alt="ポートフォリオサイトのモックアップ"
              loading="lazy" decoding="async" width="600" height="340">
          </a>
          <div class="works__info">
            <p><strong>Okawa Web</strong><br>自身のポートフォリオ</p>
            <p>デザインとコーディングを担当</p>
            <p>使用スキル：HTML / Sass / JavaScript / WordPress<br>ツール：VS Code / Figma / GitHub / Local / FileZilla</p>
            <p>制作期間：10日(約80時間)<br>制作時期：2025年9月</p>
            <p>
          </div>
        </div>
      </div>
      <!-- </div> -->
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
  <section class="section section--texture" id="skills">
    <div class="container">
      <div class="section__head reveal">
        <h2 class="section__title jp">技術</h2>
        <p class="section__subtitle en">Skills</p>
      </div>
      <section class="skill-section reveal">
        <div class="skill-section__inner">
          <div class="skill-tree">
            <div class="skill-tree__wrapper">
              <ul class="skill-tree__branches">
                <li class="skill-tree__item" data-skill="HTML" data-desc="BEMやセマンティックHTMLを意識して構造を組める。"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/html-logo.png')); ?>"></li>
                <li class="skill-tree__item" data-skill="CSS / Sass" data-desc="SassやBEM設計を使って、保守性の高いCSSを書ける。"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/css-logo.png')); ?>"></li>
                <li class="skill-tree__item" data-skill="JavaScript" data-desc="DOM操作やイベント処理を使って簡単な動きを実装できる。"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/javascript-logo.png')); ?>"></li>
                <li class="skill-tree__item" data-skill="WordPress" data-desc="パーマリンク設定やメニュー、ウィジェットを操作できる。"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/wordpress-logo.png')); ?>"></li>
                <li class="skill-tree__item" data-skill="Figma / XD" data-desc="デザインデータを正確に読み取り、構造やスタイルを理解してHTML/CSSに落とし込める"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/figma-logo.png')); ?>"></li>
                <li class="skill-tree__item" data-skill="GitHub" data-desc="コミットやプッシュなどの基本操作をVSCode経由で行い、GitHub Pagesで作品を公開できる。"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/github-logo.png')); ?>"></li>
              </ul>
            </div>
            <!-- 右：説明パネル -->
            <div class="skill-info">
              <h3 class="skill-info__name">スキル名</h3>
              <p class="skill-info__desc">ここに説明文が表示されます。</p>
            </div>
          </div>
      </section>

      <div class="skill-qualification reveal">
        <p class="pc-hidden">資格</p>
        <table class="skill-qualification-table">
          <tr>
            <th class="mobile-hidden">資格</th>
            <td>2024年8月</td>
            <td>ITパスポート試験 合格</td>
          </tr>
          <tr>
            <th class="mobile-hidden"></th>
            <td>2025年7月</td>
            <td>文部科学省後援 色彩検定3級 合格</td>
          </tr>
          <tr>
            <th class="mobile-hidden"></th>
            <td>2025年9月</td>
            <td>2級ウェブデザイン技能士 合格</td>
          </tr>
        </table>
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

  <!-- 自己紹介セクション -->
  <section class="section section--texture" id="about">
    <div class="container">
      <div class="section__head reveal">
        <h2 class="section__title">自己紹介</h2>
        <p class="section__subtitle">About</p>
      </div>

      <div class="about">
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/profile.webp')); ?>"
          alt="自己紹介画像"
          class="about__image reveal">
        <div class="about__info reveal">
          <p class="about__info__name">大川 誠　|　Webコーダー</p>
          <p>1992年10月生まれ。愛知県在住。趣味はハイキング。猫飼い。</p>
          <p>コードでデザインを正確に再現し、見る人に心地よさを感じてもらえるサイトづくりを目指しています。</p>
          <p>日々、より良いコードを書くために学びを重ね、模写を通して実装力を高めています。</p>
        </div>
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

</main>

<!-- フッタ -->
<?php get_footer(); ?>