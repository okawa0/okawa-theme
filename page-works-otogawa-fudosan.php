<?php
/*
Template Name: 実績詳細ページ（乙川不動産サイト）
*/
get_header();
?>
<main class="works-otogawa-fudosan">

  <!-- ============================
       Hero（タイトル・リード文・メインビジュアル・ボタン）
  ============================ -->
  <section class="works-otogawa-fudosan__hero">
    <p class="works-otogawa-fudosan__eyebrow">WORKS DETAIL</p>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="works-otogawa-fudosan__title"><?php the_title(); ?></h1>
      <?php endwhile; ?>
    <?php endif; ?>

    <p class="works-otogawa-fudosan__lead">
      地域密着の不動産会社を想定したコーポレートサイト。<br>
      信頼感と見やすさを重視したデザインと、更新しやすいWordPress構築を行いました。
    </p>

    <div class="works-otogawa-fudosan__actions">
      <a href="https://okawa-web.com/works1/" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--primary" target="_blank">
        <span class=" works-otogawa-fudosan__btn-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ddd" width="24" height="24">
            <path d="M4 16H20V5H4V16ZM13 18V20H17V22H7V20H11V18H2.9918C2.44405 18 2 17.5511 2 16.9925V4.00748C2 3.45107 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44892 22 4.00748V16.9925C22 17.5489 21.5447 18 21.0082 18H13Z"></path>
          </svg>
          </svg></span>
        サイトを見る
      </a>
      <a href="https://github.com/okawa0/otogawa-fudosan" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--secondary" target="_blank">
        <span class=" works-otogawa-fudosan__btn-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z"></path>
          </svg></span>
        GitHubを見る
      </a>
    </div>

    <div class="works-otogawa-fudosan__visual">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/main-pc.webp')); ?>" alt="岡崎不動産サイト PC表示イメージ" class="works-otogawa-fudosan__visual-pc">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/main-sp.webp')); ?>" alt="岡崎不動産サイト SP表示イメージ" class="works-otogawa-fudosan__visual-sp">
    </div>
  </section>

  <!-- ============================
       プロジェクト概要
  ============================ -->
  <section class="works-otogawa-fudosan__overview">
    <h2 class="works-otogawa-fudosan__overview-title">プロジェクト概要</h2>

    <ul class="works-otogawa-fudosan__overview-list">
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM8 13V15H6V13H8ZM13 13V15H11V13H13ZM18 13V15H16V13H18ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">制作期間</span>
        <span class="works-otogawa-fudosan__overview-value">約4週間</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">制作形態</span>
        <span class="works-otogawa-fudosan__overview-value">自主制作（架空案件）</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">使用技術</span>
        <span class="works-otogawa-fudosan__overview-value">HTML / SCSS / JavaScript / PHP / WordPress（オリジナルテーマ）</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">担当範囲</span>
        <span class="works-otogawa-fudosan__overview-value">デザイン再現 / コーディング / WordPress構築 / 保守・最適化</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">公開URL</span>
        <span class="works-otogawa-fudosan__overview-value">
          <a href="https://okawa-web.com/works1/" target="_blank" rel="noopener noreferrer">https://okawa-web.com/works1/</a>
        </span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="24" height="24">
            <path d="M19 8H21C21.5523 8 22 8.44772 22 9V21C22 21.5523 21.5523 22 21 22H13C12.4477 22 12 21.5523 12 21V20H4C3.44772 20 3 19.5523 3 19V3C3 2.44772 3.44772 2 4 2H18C18.5523 2 19 2.44772 19 3V8ZM17 8V4H5V18H12V9C12 8.44772 12.4477 8 13 8H17ZM14 10V20H20V10H14Z"></path>
          </svg>
        </span>
        <span class="works-otogawa-fudosan__overview-label">対応デバイス</span>
        <span class="works-otogawa-fudosan__overview-value">PC / SP（レスポンシブ対応）</span>
      </li>
    </ul>
  </section>

  <!-- ============================
       制作背景・ターゲット・デザインで意識したこと
  ============================ -->
  <section class="works-otogawa-fudosan__intro">
    <div class="works-otogawa-fudosan__intro-grid">

      <div class="works-otogawa-fudosan__intro-card">
        <h3 class="works-otogawa-fudosan__intro-card-title">制作背景</h3>
        <p class="works-otogawa-fudosan__intro-card-text">
          地元・岡崎エリアで不動産を探すユーザーに向けて、信頼感・安心感を感じてもらえるサイトを目指し制作しました。更新性・保守性を意識し、WordPressで構築しています。
        </p>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-house.webp')); ?>" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
      </div>

      <div class="works-otogawa-fudosan__intro-card">
        <h3 class="works-otogawa-fudosan__intro-card-title">ターゲット</h3>
        <ul class="works-otogawa-fudosan__intro-card-list">
          <li>30〜50代のファミリー層</li>
          <li>岡崎市・豊田市周辺に在住</li>
          <li>初めて住宅を探している方</li>
          <li>スマホで情報収集をする方</li>
        </ul>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-man.webp')); ?>" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
      </div>

      <div class="works-otogawa-fudosan__intro-card">
        <h3 class="works-otogawa-fudosan__intro-card-title">デザインで意識したこと</h3>
        <ul class="works-otogawa-fudosan__intro-card-list">
          <li>信頼感のある配色と余白設計</li>
          <li>情報を探しやすいナビゲーション</li>
          <li>視線の流れを意識したレイアウト</li>
          <li>CTAを目立たせて行動を促す設計</li>
        </ul>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-pencil.svg')); ?>" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
      </div>

    </div>
  </section>

  <!-- ============================
       コーディングで工夫したこと
  ============================ -->
  <section class="works-otogawa-fudosan__coding">
    <h2 class="works-otogawa-fudosan__section-title">コーディングで工夫したこと</h2>

    <div class="works-otogawa-fudosan__coding-grid">

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-html5.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">HTML</h3>
        <p class="works-otogawa-fudosan__coding-card-text">セマンティックなHTML構造を意識し、見出し構造・alt属性・aria属性を適切に設定しました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-sass.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">SCSS</h3>
        <p class="works-otogawa-fudosan__coding-card-text">BEM設計やmixin・変数を活用し、再利用性と保守性の高いCSS設計を行いました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-js.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">JavaScript</h3>
        <p class="works-otogawa-fudosan__coding-card-text">タブ切替・モーダル・スライダーなどのUI実装を行い、ユーザビリティの向上を図りました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-wordpress.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">WordPress</h3>
        <p class="works-otogawa-fudosan__coding-card-text">オリジナルテーマを作成し、カスタム投稿・カスタムフィールドで更新しやすい構造を実現しました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-responsive.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">レスポンシブ対応</h3>
        <p class="works-otogawa-fudosan__coding-card-text">モバイルファーストで設計し、ブレークポイントごとに最適なレイアウトに調整しました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-speed.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">表示速度の最適化</h3>
        <p class="works-otogawa-fudosan__coding-card-text">画像のWebP化・遅延読み込み・不要なCSS/JSの削減など、LCP改善を意識した実装を行いました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-maintain.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">保守性・拡張性</h3>
        <p class="works-otogawa-fudosan__coding-card-text">ファイル構成・命名規則を統一し、将来的な機能追加や修正がしやすい構成にしました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
          </span>
        </div>
      </div>

      <div class="works-otogawa-fudosan__coding-card">
        <span class="works-otogawa-fudosan__coding-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-accessibility.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__coding-card-title">アクセシビリティ</h3>
        <p class="works-otogawa-fudosan__coding-card-text">コントラスト比の確保やキーボード操作への対応など、アクセシビリティに配慮しました。</p>
        <div class="works-otogawa-fudosan__coding-card-points">
          <span class="works-otogawa-fudosan__coding-card-points-label">ポイント</span>
          <span class="works-otogawa-fudosan__coding-card-points-dots">
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot works-otogawa-fudosan__dot--active"></span>
            <span class="works-otogawa-fudosan__dot"></span>
          </span>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================
       レスポンシブ対応（PC/SPスクリーンショット）
  ============================ -->
  <section class="works-otogawa-fudosan__responsive">
    <h2 class="works-otogawa-fudosan__section-title">レスポンシブ対応</h2>

    <div class="works-otogawa-fudosan__responsive-grid">
      <div class="works-otogawa-fudosan__responsive-item">
        <span class="works-otogawa-fudosan__responsive-badge">PC</span>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/responsive-pc.png')); ?>" alt="岡崎不動産サイト PC表示" class="works-otogawa-fudosan__responsive-image">
      </div>
      <div class="works-otogawa-fudosan__responsive-item">
        <span class="works-otogawa-fudosan__responsive-badge">SP</span>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/responsive-sp.png')); ?>" alt="岡崎不動産サイト SP表示" class="works-otogawa-fudosan__responsive-image">
      </div>
    </div>
  </section>

  <!-- ============================
       苦労した点・解決方法・AIの活用について・学んだこと・今後改善したいこと・見てほしいポイント
  ============================ -->
  <section class="works-otogawa-fudosan__summary">
    <div class="works-otogawa-fudosan__summary-grid">

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-drop.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">苦労した点</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>Gridレイアウトの調整（画像とテキストの配置）</li>
          <li>画像サイズの最適化とLCP改善</li>
          <li>WordPressのカスタム投稿の設計</li>
          <li>SPでのメニュー開閉アニメーション</li>
        </ul>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-bulb.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">解決方法</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>grid-template-areasを活用して柔軟に対応</li>
          <li>WebP変換・srcset・遅延読み込みを実装</li>
          <li>カスタム投稿＋カスタムフィールドで管理</li>
          <li>transformを使ったスライドアニメーション実装</li>
        </ul>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-ai.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">AIの活用について</h3>
        <p class="works-otogawa-fudosan__summary-card-text">
          レイアウト案の壁打ちやエラーの原因調査、コードレビューにAI（ChatGPT）を活用しました。最終的な実装・設計・判断はすべて自分で行っています。
        </p>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-book.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">学んだこと</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>WordPressでのテーマ開発の流れを理解できた</li>
          <li>パフォーマンス改善の重要性を実感した</li>
          <li>設計を意識することで保守性が大きく向上すること</li>
        </ul>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-graph.svg')); ?>" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">今後改善したいこと</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>Vue.jsを使ったフロント実装</li>
          <li>モジュール化・コンポーネント設計の強化</li>
          <li>アニメーション・インタラクションの拡充</li>
        </ul>
      </div>

      <div class="works-otogawa-fudosan__summary-card works-otogawa-fudosan__summary-card--dark">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">&#9733;</span>
        <h3 class="works-otogawa-fudosan__summary-card-title">この作品で見てほしいポイント</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>デザイン再現力と細部へのこだわり</li>
          <li>保守性・拡張性を意識したコーディング</li>
          <li>WordPressでの実装力と更新のしやすさ</li>
          <li>表示速度の改善への取り組み</li>
          <li>ユーザビリティ・アクセシビリティへの配慮</li>
        </ul>
      </div>

    </div>
  </section>

</main>
<?php get_footer(); ?>