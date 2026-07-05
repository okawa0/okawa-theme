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
      <a href="https://okawa-web.com/works1/" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--primary" target="_blank" rel="noopener noreferrer">
        <span class=" works-otogawa-fudosan__btn-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ddd" width="24" height="24">
            <path d="M4 16H20V5H4V16ZM13 18V20H17V22H7V20H11V18H2.9918C2.44405 18 2 17.5511 2 16.9925V4.00748C2 3.45107 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44892 22 4.00748V16.9925C22 17.5489 21.5447 18 21.0082 18H13Z"></path>
          </svg>
        </span>
        サイトを見る
      </a>
      <a href="https://github.com/okawa0/otogawa-fudosan" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--secondary" target="_blank" rel="noopener noreferrer">
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
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/works-otogawa-fudosan/icon-design.webp')); ?>" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M12 18.1778L16.6192 16.9222L17.2434 10.1444H9.02648L8.82219 7.88889H17.4477L17.6747 5.67778H6.32535L6.96091 12.3556H14.7806L14.5195 15.2222L12 15.8889L9.48045 15.2222L9.32156 13.3778H7.0517L7.38083 16.9222L12 18.1778ZM3 2H21L19.377 20L12 22L4.62295 20L3 2Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M5.00006 3L4.35006 6.34H17.9401L17.5001 8.5H3.92006L3.26006 11.83H16.8501L16.0901 15.64L10.6101 17.45L5.86006 15.64L6.19006 14H2.85006L2.06006 18L9.91006 21L18.9601 18L20.1601 11.97L20.4001 10.76L21.9401 3H5.00006Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M6 3C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6ZM13.3344 16.055C14.0531 16.6343 14.7717 16.9203 15.4904 16.913C15.9304 16.913 16.2677 16.8323 16.5024 16.671C16.7297 16.517 16.8434 16.297 16.8434 16.011C16.8434 15.7177 16.7297 15.4683 16.5024 15.263C16.2677 15.0577 15.8241 14.8523 15.1714 14.647C14.3867 14.4197 13.7817 14.1263 13.3564 13.767C12.9384 13.4077 12.7257 12.9053 12.7184 12.26C12.7184 11.6513 12.9824 11.1417 13.5104 10.731C14.0237 10.3203 14.6801 10.115 15.4794 10.115C16.5941 10.115 17.4887 10.3863 18.1634 10.929L17.3934 12.128C17.1221 11.9153 16.8104 11.7613 16.4584 11.666C16.1064 11.556 15.7911 11.501 15.5124 11.501C15.1311 11.501 14.8267 11.5707 14.5994 11.71C14.3721 11.8493 14.2584 12.0327 14.2584 12.26C14.2584 12.5093 14.3977 12.722 14.6764 12.898C14.9551 13.0667 15.4317 13.2537 16.1064 13.459C16.9204 13.701 17.4997 14.0237 17.8444 14.427C18.1891 14.8303 18.3614 15.3437 18.3614 15.967C18.3614 16.605 18.1157 17.155 17.6244 17.617C17.1404 18.0717 16.4364 18.31 15.5124 18.332C14.3024 18.332 13.2904 17.969 12.4764 17.243L13.3344 16.055ZM7.80405 16.693C8.03872 16.8397 8.32105 16.913 8.65105 16.913C8.99572 16.913 9.28172 16.814 9.50905 16.616C9.73639 16.4107 9.85005 16.055 9.85005 15.549V10.247H11.3351V15.835C11.3131 16.7003 11.0637 17.3237 10.5871 17.705C10.3157 17.9323 10.0187 18.0937 9.69605 18.189C9.37339 18.2843 9.06172 18.332 8.76105 18.332C8.21105 18.332 7.72339 18.2367 7.29805 18.046C6.84339 17.8407 6.46205 17.4777 6.15405 16.957L7.18805 16.11C7.37872 16.3667 7.58405 16.561 7.80405 16.693Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            fill="#1f2a44" width="36" height="36">
            <path d="M3.32308 12C3.32308 15.4385 5.32308 18.4 8.21538 19.8077L4.07692 8.46923C3.57998 9.57999 3.3231 10.7831 3.32308 12ZM12 20.6769C13.0077 20.6769 13.9769 20.5 14.8846 20.1846L14.8231 20.0692L12.1538 12.7615L9.55385 20.3231C10.3231 20.5538 11.1462 20.6769 12 20.6769ZM13.1923 7.93077L16.3308 17.2615L17.2 14.3692C17.5692 13.1692 17.8538 12.3077 17.8538 11.5615C17.8538 10.4846 17.4692 9.74615 17.1462 9.17692C16.7 8.45385 16.2923 7.84615 16.2923 7.13846C16.2923 6.33846 16.8923 5.6 17.7538 5.6H17.8615C16.2627 4.13224 14.1704 3.31946 12 3.32308C10.5629 3.32281 9.14834 3.67979 7.88347 4.3619C6.61861 5.04402 5.54315 6.02987 4.75385 7.23077L5.30769 7.24615C6.21538 7.24615 7.61539 7.13077 7.61539 7.13077C8.09231 7.10769 8.14615 7.79231 7.67692 7.84615C7.67692 7.84615 7.20769 7.90769 6.67692 7.93077L9.84615 17.3308L11.7462 11.6385L10.3923 7.93077C10.0891 7.91404 9.78636 7.88838 9.48462 7.85385C9.01538 7.82308 9.06923 7.10769 9.53846 7.13077C9.53846 7.13077 10.9692 7.24615 11.8231 7.24615C12.7308 7.24615 14.1308 7.13077 14.1308 7.13077C14.6 7.10769 14.6615 7.79231 14.1923 7.84615C14.1923 7.84615 13.7231 7.9 13.1923 7.93077ZM16.3615 19.5C17.6742 18.7368 18.7636 17.6424 19.5208 16.3263C20.2781 15.0102 20.6767 13.5184 20.6769 12C20.6769 10.4923 20.2923 9.07692 19.6154 7.83846C19.7529 9.20099 19.5466 10.5762 19.0154 11.8385L16.3615 19.5ZM12 22C9.34784 22 6.8043 20.9464 4.92893 19.0711C3.05357 17.1957 2 14.6522 2 12C2 9.34784 3.05357 6.8043 4.92893 4.92893C6.8043 3.05357 9.34784 2 12 2C14.6522 2 17.1957 3.05357 19.0711 4.92893C20.9464 6.8043 22 9.34784 22 12C22 14.6522 20.9464 17.1957 19.0711 19.0711C17.1957 20.9464 14.6522 22 12 22Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M19 8H21C21.5523 8 22 8.44772 22 9V21C22 21.5523 21.5523 22 21 22H13C12.4477 22 12 21.5523 12 21V20H4C3.44772 20 3 19.5523 3 19V3C3 2.44772 3.44772 2 4 2H18C18.5523 2 19 2.44772 19 3V8ZM17 8V4H5V18H12V9C12 8.44772 12.4477 8 13 8H17ZM14 10V20H20V10H14Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM12 5C13.018 5 13.9852 5.21731 14.8579 5.60806L13.2954 7.16944C12.8822 7.05892 12.448 7 12 7C9.23858 7 7 9.23858 7 12C7 13.3807 7.55964 14.6307 8.46447 15.5355L7.05025 16.9497L6.89445 16.7889C5.71957 15.5368 5 13.8525 5 12C5 8.13401 8.13401 5 12 5ZM18.3924 9.14312C18.7829 10.0155 19 10.9824 19 12C19 13.933 18.2165 15.683 16.9497 16.9497L15.5355 15.5355C16.4404 14.6307 17 13.3807 17 12C17 11.552 16.9411 11.1178 16.8306 10.7046L18.3924 9.14312ZM16.2426 6.34315L17.6569 7.75736L13.9325 11.483C13.9765 11.6479 14 11.8212 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C12.1788 10 12.3521 10.0235 12.517 10.0675L16.2426 6.34315Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M24 12L18.3431 17.6569L16.9289 16.2426L21.1716 12L16.9289 7.75736L18.3431 6.34315L24 12ZM2.82843 12L7.07107 16.2426L5.65685 17.6569L0 12L5.65685 6.34315L7.07107 7.75736L2.82843 12ZM9.78845 21H7.66009L14.2116 3H16.3399L9.78845 21Z"></path>
          </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1f2a44" width="36" height="36">
            <path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12 8.5C12.8284 8.5 13.5 7.82843 13.5 7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7C10.5 7.82843 11.1716 8.5 12 8.5ZM12 9.49988C10.4427 9.49988 8.82151 9.14306 7.37106 8.57129L6.62891 10.4285C7.70479 10.8579 8.8573 11.1468 9.99989 11.3301C9.99989 12.2004 10.0849 13.0939 9.68317 13.8974L8.10546 17.0528L9.89432 17.9472L11.4471 14.8416C11.5518 14.6322 11.7658 14.5 11.9999 14.5C12.234 14.5 12.448 14.6323 12.5527 14.8416L14.1055 17.9472L15.8943 17.0528L14.3166 13.8974C13.9149 13.0939 13.9999 12.2004 13.9999 11.3301C15.1409 11.1471 16.2818 10.8534 17.359 10.4332C17.3843 10.4233 16.6291 8.57118 16.6264 8.57225C15.1728 9.13901 13.5595 9.49988 12 9.49988Z"></path>
          </svg>
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
       苦労した点・解決方法・AIの活用について・学んだこと・今後改善したいこと・見てほしいポイント
  ============================ -->
  <section class="works-otogawa-fudosan__summary">
    <div class="works-otogawa-fudosan__summary-grid">

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 36px; height: 36px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #1f2a44;
              }
            </style>
            <g>
              <path class="st0" d="M390.223,268.074c-18.234-36.438-33.824-66.008-47.578-92.102c-34.722-65.848-55.675-105.59-68.695-161.649
		C271.961,5.754,264.746,0,255.996,0c-8.746,0-15.961,5.754-17.95,14.324c-13.023,56.051-33.977,95.79-68.683,161.633
		c-13.758,26.094-29.348,55.668-47.586,92.118c-30.609,61.172-31.175,121.238-1.59,169.129C148.262,482.641,201.57,512,256,512
		c54.43,0,107.734-29.359,135.808-74.797C421.399,389.317,420.832,329.246,390.223,268.074z M196.262,295.371
		c-2.762,17.442-4.242,35.851-4.242,54.894c0,26.652,2.902,52.054,8.149,75.274c2.859,12.668-12.622,21.305-21.871,12.191
		c-20.398-20.106-33.055-48.058-33.055-78.93c0-28.406,10.68-54.32,28.227-73.922C182.192,275.137,198.308,282.457,196.262,295.371z
		" style="fill: rgb(75, 75, 75);"></path>
            </g>
          </svg>
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
          <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #374149;
              }
            </style>
            <g>
              <path class="st0" d="M329.871,151.742c-0.203-0.137-0.402-0.293-0.61-0.43c-3.195-2.129-6.48-4.066-9.832-5.898
		c-0.625-0.344-1.242-0.691-1.871-1.023c-3.262-1.719-6.582-3.286-9.973-4.719c-0.691-0.293-1.386-0.566-2.082-0.847
		c-3.485-1.402-7.004-2.688-10.602-3.79c-0.402-0.121-0.813-0.218-1.211-0.339c-14.305-4.223-29.386-6.028-44.828-5.227
		c-1.246,0.066-2.484,0.161-3.73,0.262c-2.141,0.168-4.266,0.171-6.414,0.441c-23.378,2.946-45.683,12.278-64.187,26.867
		c-32.746,25.813-51.07,63.778-51.07,104.586c0,43.398,17.91,79.695,54.75,110.89c4.382,3.703,8.086,17.981,10.773,28.414
		c3.867,14.984,8.68,33.496,20.082,44.824c2.222,2.211,5.289,3.363,8.426,3.363h77.02c3.133,0,6.203-1.152,8.426-3.367
		c11.367-11.309,16.183-29.84,20.082-44.82c2.719-10.434,6.422-24.711,10.774-28.414c36.836-31.195,54.746-67.492,54.746-110.89
		c0-35.41-13.762-68.684-38.809-93.73C343.61,161.773,336.894,156.484,329.871,151.742z M311.836,346.586
		c-12.606,10.672-17.23,28.512-21.715,45.778c-3.058,11.894-7.714,29.839-13.254,29.839h-41.699
		c-5.539,0-10.195-17.945-13.289-29.839c-4.454-17.266-9.106-35.106-21.68-45.778c-29.16-24.707-42.754-51.691-42.754-84.961
		c0-26.34,10.262-51.082,28.886-69.703c18.625-18.59,43.363-28.852,69.668-28.852c26.34,0,51.082,10.262,69.703,28.852
		c18.625,18.621,28.851,43.363,28.851,69.703C354.554,294.895,340.996,321.879,311.836,346.586z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M211.82,464.172c0,24.398,19.782,44.18,44.18,44.18c23.969,0,43.434-19.102,44.117-42.906
		c0.012-0.375,0.059-0.738,0.063-1.117h-0.008c0-0.051,0.008-0.106,0.008-0.157H211.82z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M256,73.406c4.274,0,7.738-3.465,7.738-7.738l4.312-49.972c0-6.653-5.398-12.047-12.05-12.047
		c-6.656,0-12.05,5.394-12.05,12.047l4.312,49.972C248.262,69.941,251.726,73.406,256,73.406z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M124.305,117.012L92.019,78.629c-0.382-0.383-0.878-0.543-1.297-0.864c-0.449-0.343-0.91-0.648-1.394-0.926
		c-0.934-0.523-1.863-0.906-2.875-1.164c-0.43-0.11-0.859-0.191-1.301-0.254c-1.113-0.157-2.187-0.157-3.304,0
		c-0.442,0.062-0.871,0.144-1.301,0.254c-1.012,0.258-1.942,0.641-2.871,1.164c-0.489,0.278-0.95,0.582-1.394,0.926
		c-0.422,0.321-0.918,0.481-1.301,0.864c-4.703,4.706-4.703,12.336,0,17.042l38.382,32.282c3.02,3.023,7.922,3.023,10.942,0
		C127.328,124.93,127.328,120.032,124.305,117.012z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M62.016,251.91l-49.966-4.309c-6.656,0-12.05,5.395-12.05,12.047c0,6.656,5.394,12.05,12.05,12.05
		l49.966-4.312c4.277,0,7.742-3.465,7.742-7.738C69.758,255.375,66.293,251.91,62.016,251.91z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M435.718,77.765c-0.445-0.343-0.906-0.648-1.39-0.922c-0.934-0.527-1.863-0.91-2.878-1.168
		c-0.426-0.11-0.86-0.191-1.298-0.254c-1.117-0.157-2.191-0.157-3.304,0c-0.442,0.062-0.875,0.144-1.301,0.254
		c-1.008,0.258-1.938,0.637-2.867,1.16c-0.489,0.278-0.958,0.586-1.41,0.938c-0.414,0.317-0.91,0.477-1.289,0.856l-32.286,38.382
		c-3.023,3.02-3.023,7.918,0,10.942c3.02,3.023,7.922,3.023,10.946,0l38.378-32.282c4.707-4.706,4.707-12.336,0-17.042
		C436.637,78.246,436.137,78.086,435.718,77.765z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M499.95,247.601l-49.966,4.309c-4.277,0-7.742,3.465-7.742,7.738c0,4.274,3.465,7.738,7.742,7.738
		l49.966,4.312c6.656,0,12.05-5.394,12.05-12.05C512,252.996,506.606,247.601,499.95,247.601z" style="fill: rgb(31, 42, 68);"></path>
            </g>
          </svg>
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
          <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #374149;
              }
            </style>
            <g>
              <path class="st0" d="M129.221,371.645h253.558c14.817,0,26.867-12.051,26.867-26.942v-194.27c0-14.859-12.082-26.942-26.941-26.942
		h-253.41c-14.859,0-26.942,12.082-26.942,26.942v194.348C102.354,359.594,114.405,371.645,129.221,371.645z M387.607,344.782
		c0,2.66-2.164,4.828-4.902,4.828H129.221c-2.664,0-4.828-2.168-4.828-4.906v-194.27c0-2.707,2.195-4.902,4.902-4.902h253.41
		c2.702,0,4.902,2.195,4.902,4.902V344.782z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M471.334,213.707c-6.559-6.558-15.622-10.622-25.633-10.622h-11.34v72.09v0.218l0,0v0.16h11.34
		c20.023,0,36.242-16.218,36.242-36.226C481.943,229.317,477.881,220.254,471.334,213.707z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M40.666,213.707c-6.547,6.546-10.61,15.61-10.61,25.621c0,20.008,16.218,36.226,36.242,36.226h11.343v-72.469
		H66.299C56.287,203.086,47.229,207.149,40.666,213.707z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M244.799,42.977c3.453,1.91,5.438,5.582,4.996,9.476l-6.77,56.696l-0.797,6.542h0.015l-0.015,0.16h27.621
		l-7.566-63.398c-0.442-3.894,1.543-7.566,4.922-9.476c6.832-3.894,11.461-11.242,11.461-19.688
		c0-12.484-10.055-22.538-22.531-22.625l0.078-0.504l-0.015-0.144l-0.07,0.648c-0.008,0-0.012-0.004-0.012-0.004L256.038,0
		l-0.074,0.66c-12.489,0.074-22.551,10.137-22.551,22.629C233.412,31.734,237.967,39.082,244.799,42.977z M251.482,10.652
		c4.555,0,8.226,3.672,8.226,8.153c0,4.554-3.671,8.23-8.226,8.23c-4.554,0-8.226-3.676-8.226-8.23
		C243.256,14.324,246.928,10.652,251.482,10.652z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M388.846,402.359h-265.64c-21.586,0-39.145,17.558-39.145,39.141v70.125v0.215l0,0V512h343.926v-70.5
		C427.986,419.918,410.428,402.359,388.846,402.359z M106.1,441.5c0-9.43,7.675-17.102,17.106-17.102h265.64
		c9.43,0,17.102,7.672,17.102,17.102v48.461H106.1V441.5z" style="fill: rgb(31, 42, 68);"></path>
              <polygon class="st0" points="198.237,284.594 198.237,284.594 198.076,284.594 198.076,310.894 313.928,310.894 313.928,284.594 
		198.588,284.594 	" style="fill: rgb(31, 42, 68);"></polygon>
              <path class="st0" d="M338.584,214.965c-0.187-1.508-0.477-2.984-0.886-4.41c-0.082-0.297-0.211-0.574-0.305-0.863
		c-0.363-1.129-0.782-2.234-1.278-3.301c-0.21-0.453-0.449-0.894-0.683-1.336c-0.465-0.878-0.973-1.734-1.524-2.558
		c-0.285-0.426-0.562-0.851-0.867-1.258c-0.664-0.89-1.39-1.73-2.152-2.539c-0.242-0.254-0.453-0.535-0.703-0.782
		c-1.004-0.992-2.09-1.902-3.23-2.738c-0.402-0.297-0.836-0.547-1.25-0.821c-0.801-0.523-1.618-1.023-2.466-1.469
		c-0.523-0.274-1.054-0.527-1.594-0.77c-0.843-0.374-1.71-0.703-2.59-1.004c-0.535-0.179-1.062-0.374-1.61-0.523
		c-1.289-0.351-2.613-0.625-3.969-0.797c-0.234-0.031-0.465-0.062-0.699-0.086c-1.434-0.149-2.902-0.18-4.394-0.106
		c-0.426,0.015-0.859,0.078-1.289,0.117c-1.274,0.114-2.558,0.297-3.859,0.582c-0.36,0.078-0.723,0.16-1.086,0.254
		c-3.445,0.883-6.945,2.344-10.426,4.551c-2.141,1.359-3.988,3.207-5.348,5.347c-2.304,3.629-3.836,7.286-4.703,10.871
		c-0.003,0.016-0.011,0.035-0.015,0.055c-3.004,12.5,2.125,24.117,11.16,30.664c0.122,0.086,0.242,0.168,0.363,0.254
		c1.141,0.801,2.344,1.516,3.598,2.149c0.176,0.09,0.348,0.183,0.528,0.269c2.769,1.329,5.781,2.219,8.949,2.61
		c0.367,0.047,0.75,0.047,1.125,0.078c1.051,0.086,2.122,0.106,3.203,0.078c1.282-0.038,2.531-0.183,3.766-0.378
		c0.555-0.082,1.106-0.137,1.668-0.254c11.016-2.422,19.649-11.042,22.082-22.007c0.133-0.622,0.191-1.234,0.281-1.852
		c0.184-1.187,0.332-2.386,0.367-3.617c0.027-1.066,0.008-2.118-0.078-3.157C338.635,215.805,338.635,215.375,338.584,214.965z" style="fill: rgb(31, 42, 68);"></path>
              <polygon class="st0" points="263.678,233.906 248.534,233.906 248.486,233.906 248.486,233.906 248.326,233.906 248.326,256.531 
		263.678,256.531 	" style="fill: rgb(31, 42, 68);"></polygon>
              <path class="st0" d="M204.623,247.406c0.371-0.031,0.754-0.031,1.125-0.078c3.168-0.39,6.176-1.281,8.946-2.61
		c0.18-0.086,0.351-0.183,0.531-0.273c1.25-0.629,2.457-1.344,3.598-2.145c0.121-0.082,0.246-0.168,0.367-0.254
		c9.031-6.547,14.156-18.164,11.156-30.664c-0.007-0.02-0.011-0.039-0.015-0.059c-0.867-3.586-2.402-7.238-4.703-10.867
		c-1.359-2.14-3.207-3.988-5.348-5.347c-3.48-2.207-6.984-3.668-10.426-4.551c-0.363-0.094-0.726-0.175-1.086-0.254
		c-1.301-0.286-2.586-0.469-3.863-0.582c-0.43-0.039-0.864-0.102-1.286-0.117c-1.492-0.074-2.957-0.043-4.394,0.106
		c-0.234,0.023-0.465,0.054-0.699,0.086c-1.355,0.172-2.68,0.446-3.973,0.797c-0.546,0.149-1.07,0.344-1.606,0.523
		c-0.882,0.301-1.746,0.626-2.59,1.004c-0.539,0.242-1.074,0.496-1.594,0.77c-0.848,0.446-1.664,0.946-2.461,1.469
		c-0.418,0.274-0.852,0.524-1.258,0.821c-1.137,0.836-2.222,1.742-3.226,2.734c-0.25,0.25-0.465,0.535-0.707,0.793
		c-0.762,0.805-1.484,1.641-2.148,2.531c-0.305,0.406-0.582,0.832-0.867,1.258c-0.551,0.824-1.058,1.68-1.527,2.558
		c-0.23,0.442-0.469,0.883-0.68,1.336c-0.496,1.066-0.918,2.172-1.278,3.301c-0.098,0.29-0.222,0.566-0.304,0.863
		c-0.41,1.426-0.703,2.902-0.887,4.41c-0.054,0.41-0.054,0.84-0.086,1.254c-0.086,1.039-0.106,2.09-0.078,3.157
		c0.035,1.23,0.18,2.43,0.367,3.617c0.09,0.618,0.149,1.23,0.282,1.852c2.434,10.965,11.066,19.586,22.082,22.007
		c0.558,0.118,1.114,0.172,1.668,0.254c1.23,0.195,2.481,0.34,3.762,0.378C202.498,247.512,203.569,247.492,204.623,247.406z" style="fill: rgb(31, 42, 68);"></path>
            </g>
          </svg>
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">AIの活用について</h3>
        <p class="works-otogawa-fudosan__summary-card-text">
          レイアウト案の壁打ちやエラーの原因調査、コードレビューにAI（ChatGPT）を活用しました。最終的な実装・設計・判断はすべて自分で行っています。
        </p>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #374149;
              }
            </style>
            <g>
              <path class="st0" d="M471.629,58.293L265.656,78.336c-3.293,0.148-6.507,0.656-9.656,1.535c-3-0.879-5.922-1.313-8.558-1.387
		L41.844,58.371l-1.618-0.078C18.07,58.293,0,76.363,0,98.523v314.953c0,22.165,18.07,40.231,40.742,40.231h0.586l205.457-20.114
		c3.07-0.152,6.141-0.656,9.141-1.465c2.852,0.809,5.782,1.313,8.558,1.394l205.528,20.114l1.617,0.07
		c22.234,0,40.371-18.066,40.371-40.231V98.523C512,76.363,493.863,58.293,471.629,58.293z M263.578,160.714v-3.187h23.586v3.187
		H263.578z M263.578,225.32v-3.183h23.586v3.183H263.578z M263.578,289.938v-3.195h23.586v3.195H263.578z M263.578,354.543v-3.188
		h23.586v3.188H263.578z M263.535,391.714h0.043V361.5h23.586v2.976c0,1.997,1.621,3.626,3.614,3.626h13.594
		c1.992,0,3.613-1.629,3.613-3.626v-23.14c0-1.993-1.621-3.614-3.613-3.614h-13.594c-1.993,0-3.614,1.621-3.614,3.614v3.062h-23.586
		V296.89h23.586v2.981c0,1.992,1.621,3.613,3.614,3.613h13.594c1.992,0,3.613-1.621,3.613-3.613v-23.145
		c0-1.992-1.621-3.621-3.613-3.621h-13.594c-1.993,0-3.614,1.629-3.614,3.621v3.058h-23.586v-47.508h23.586v2.981
		c0,2,1.621,3.621,3.614,3.621h13.594c1.992,0,3.613-1.621,3.613-3.621v-23.137c0-2-1.621-3.621-3.613-3.621h-13.594
		c-1.993,0-3.614,1.621-3.614,3.621v3.058h-23.586v-47.507h23.586v2.976c0,1.993,1.621,3.626,3.614,3.626h13.594
		c1.992,0,3.613-1.633,3.613-3.626v-23.14c0-1.993-1.621-3.618-3.613-3.618h-13.594c-1.993,0-3.614,1.625-3.614,3.618v3.062h-23.586
		v-30.297h-0.043v-1.637c0-1.68,1.313-3.074,3.07-3.145l204.953-20.114c1.75,0,3.211,1.395,3.211,3.145v314.953
		c0,1.758-1.461,3.145-3.211,3.074l-204.953-20.113c-1.758,0-3.07-1.394-3.07-3.074V391.714z M37.086,413.476V98.523
		c0-1.75,1.465-3.145,3.215-3.145l205.019,20.114c1.688,0.07,3,1.465,3,3.145v31.934h-23.594v-3.062
		c0-1.993-1.621-3.618-3.621-3.618h-13.586c-2,0-3.621,1.625-3.621,3.618v23.14c0,1.993,1.621,3.626,3.621,3.626h13.586
		c2,0,3.621-1.633,3.621-3.626v-2.976h23.594v47.507h-23.594v-3.058c0-2-1.621-3.621-3.621-3.621h-13.586
		c-2,0-3.621,1.621-3.621,3.621v23.137c0,2,1.621,3.621,3.621,3.621h13.586c2,0,3.621-1.621,3.621-3.621v-2.981h23.594v47.508
		h-23.594v-3.058c0-1.992-1.621-3.621-3.621-3.621h-13.586c-2,0-3.621,1.629-3.621,3.621v23.145c0,1.992,1.621,3.613,3.621,3.613
		h13.586c2,0,3.621-1.621,3.621-3.613v-2.981h23.594v47.508h-23.594v-3.062c0-1.993-1.621-3.614-3.621-3.614h-13.586
		c-2,0-3.621,1.621-3.621,3.614v23.14c0,1.997,1.621,3.626,3.621,3.626h13.586c2,0,3.621-1.629,3.621-3.626V361.5h23.594v31.863
		c0,1.68-1.312,3.074-3,3.074L40.301,416.55C38.55,416.621,37.086,415.234,37.086,413.476z M248.32,157.527v3.187h-23.594v-3.187
		H248.32z M248.32,222.137v3.183h-23.594v-3.183H248.32z M248.32,286.742v3.195h-23.594v-3.195H248.32z M248.32,351.355v3.188
		h-23.594v-3.188H248.32z" style="fill: rgb(31, 42, 68);"></path>
              <polygon class="st0" points="446.793,141.781 446.402,137.797 331.172,149.11 331.562,153.086 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="446.481,183.008 331.672,189.766 331.406,189.781 331.406,189.781 331.25,189.789 331.484,193.781 
		446.328,187.023 446.554,187.008 446.554,187.008 446.715,187 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="331.406,234.476 445.934,232.226 446.477,232.218 446.477,232.218 446.637,232.214 446.562,228.382 
		446.562,228.375 446.558,228.375 446.558,228.214 332.039,230.461 331.484,230.473 331.484,230.473 331.328,230.476 	" style="fill: rgb(31, 42, 68);"></polygon>

              <rect x="386.982" y="216.669" transform="matrix(-0.0196 0.9998 -0.9998 -0.0196 670.8471 -109.2377)" class="st0" width="4.001" height="115.253" style="fill: rgb(31, 42, 68);"></rect>
              <polygon class="st0" points="446.481,322.633 446.715,318.641 331.484,311.859 331.258,315.687 331.258,315.691 331.258,315.691 
		331.25,315.851 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="446.793,363.859 331.75,352.574 331.718,352.57 331.718,352.57 331.562,352.554 331.187,356.355 
		331.187,356.371 331.187,356.371 331.172,356.531 446.402,367.843 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="180.438,153.086 180.828,149.11 65.793,137.816 65.758,137.812 65.758,137.812 65.598,137.797 
		65.222,141.61 65.218,141.621 65.222,141.621 65.207,141.781 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="65.519,183.008 65.293,186.836 65.293,186.84 65.293,186.84 65.285,187 180.516,193.781 
		180.75,189.789 	" style="fill: rgb(31, 42, 68);"></polygon>

              <rect x="65.391" y="229.345" transform="matrix(0.9998 0.0196 -0.0196 0.9998 4.5634 -2.3694)" class="st0" width="115.253" height="4.001" style="fill: rgb(31, 42, 68);"></rect>
              <polygon class="st0" points="65.442,277.426 179.969,275.179 180.508,275.168 180.508,275.168 180.672,275.164 180.594,271.332 
		180.594,271.324 180.594,271.324 180.594,271.164 66.074,273.41 65.523,273.422 65.523,273.422 65.363,273.426 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="180.516,311.859 65.707,318.617 65.446,318.633 65.446,318.633 65.285,318.641 65.519,322.633 
		180.363,315.875 180.586,315.859 180.586,315.859 180.75,315.851 	" style="fill: rgb(31, 42, 68);"></polygon>
              <polygon class="st0" points="180.828,356.531 180.438,352.554 65.207,363.859 65.598,367.843 	" style="fill: rgb(31, 42, 68);"></polygon>
            </g>
          </svg>
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
          <svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #374149;
              }
            </style>
            <g>
              <path class="st0" d="M501.365,0.156h-0.004V0H10.635v54.844h30.457v260.625v0.797l0,0v0.16h429.813V55.481v-0.637h30.457V0.324
		L501.365,0.156z M430.076,278.453H81.92V54.844H430.08V277.25L430.076,278.453z" style="fill: rgb(31, 42, 68);"></path>
              <path class="st0" d="M363.318,456.84l-91.281-76.215v-44.301h-32.074v44.301l-91.285,76.215c-8.797-3.418-19.102-2.195-26.86,4.281
		c-11.355,9.485-12.874,26.375-3.394,37.73c9.481,11.356,26.375,12.875,37.73,3.395c0.602-0.504,0.989-1.149,1.535-1.692
		c0.637-0.633,1.234-1.293,1.797-1.984c1.043-1.274,1.942-2.594,2.715-4.008c0.297-0.546,0.57-1.102,0.828-1.668
		c0.726-1.582,1.293-3.187,1.691-4.867c0.157-0.644,0.278-1.297,0.387-1.957c0.242-1.512,0.378-3,0.363-4.535
		c0-1.114-0.074-2.23-0.211-3.352c-0.07-0.534,0-1.074-0.102-1.601l45.762-38.211l29.043-24.114v48.481
		c-6.789,4.961-11.246,12.922-11.246,21.977c0,15.066,12.214,27.285,27.281,27.285c15.07,0,27.286-12.218,27.286-27.285
		c0-9.055-4.458-17.016-11.246-21.977v-29.914l0.102-18.617l74.699,62.375c-0.164,0.847-0.078,1.71-0.16,2.57
		c-0.062,0.661-0.11,1.317-0.126,1.977c-0.042,1.722,0.086,3.406,0.371,5.106c0.098,0.594,0.207,1.183,0.348,1.766
		c0.398,1.687,0.969,3.297,1.695,4.886c0.262,0.57,0.535,1.137,0.836,1.688c0.774,1.41,1.672,2.726,2.715,4
		c0.558,0.687,1.152,1.343,1.789,1.973c0.546,0.546,0.934,1.195,1.539,1.699c11.355,9.48,28.246,7.961,37.73-3.395
		c9.48-11.355,7.961-28.246-3.398-37.73C382.42,454.645,372.119,453.422,363.318,456.84z" style="fill: rgb(31, 42, 68);"></path>
              <polygon class="st0" points="376.139,117.711 383.056,86.711 382.967,86.738 383.006,86.558 323.018,105.539 292.869,114.992 
		292.936,115.054 292.764,115.11 315.9,136.266 316.014,136.375 265.74,191.359 218.475,149.703 138.619,227.317 160.67,250.012 
		219.525,192.809 268.127,235.641 339.369,157.726 354.784,171.82 362.467,178.957 362.49,178.867 362.623,178.992 	" style="fill: rgb(31, 42, 68);"></polygon>
            </g>
          </svg>
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">今後改善したいこと</h3>
        <ul class="works-otogawa-fudosan__summary-card-list">
          <li>Vue.jsを使ったフロント実装</li>
          <li>モジュール化・コンポーネント設計の強化</li>
          <li>アニメーション・インタラクションの拡充</li>
        </ul>
      </div>

      <div class="works-otogawa-fudosan__summary-card works-otogawa-fudosan__summary-card--dark">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true"><svg version="1.1" id="_x31_0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #B9893F;
              }
            </style>
            <g>
              <path class="st0" d="M509.106,193.516c-7.876-24.237-30.293-40.522-55.778-40.522H345.194L311.777,50.152
		c-7.872-24.24-30.289-40.526-55.778-40.526c-25.485,0-47.902,16.286-55.778,40.526l-33.414,102.842H58.674
		c-25.489,0-47.902,16.286-55.778,40.522c-7.88,24.24,0.68,50.59,21.301,65.574l87.484,63.56L78.267,425.495
		c-5.879,18.09-2.91,37.203,8.147,52.425c11.127,15.315,28.966,24.454,47.714,24.454c12.316,0,24.206-3.91,34.387-11.312
		l87.484-63.563l87.484,63.563c10.185,7.402,22.075,11.312,34.391,11.312c18.748,0,36.586-9.146,47.71-24.454
		c11.061-15.222,14.03-34.334,8.15-52.429L400.322,322.65l87.48-63.56C508.422,244.105,516.982,217.756,509.106,193.516z
		 M131.019,467.551c-1.737-0.233-3.433-0.642-5.06-1.241l0,0c-3.455-1.27-6.602-3.312-9.181-5.928c0,0-0.007-0.011-0.015-0.019
		c-5.127-5.218-7.974-12.722-6.414-20.962c0.012-0.068,0.03-0.136,0.042-0.203c0.199-0.997,0.451-2,0.778-3.015l35.786-110.13
		c3.218-9.91-0.309-20.767-8.737-26.887l-93.684-68.063c-18.849-13.699-9.162-43.511,14.139-43.511H174.47
		c10.421,0,19.654-6.706,22.872-16.617L233.127,60.84c3.598-11.075,13.237-16.616,22.872-16.616c9.639,0,19.274,5.541,22.876,16.616
		l35.782,110.134c3.222,9.91,12.454,16.617,22.875,16.617h115.797c23.3,0,32.988,29.812,14.138,43.511l-93.683,68.063
		c-8.429,6.12-11.958,16.977-8.737,26.887l35.782,110.13c0.331,1.015,0.582,2.018,0.782,3.015c0.011,0.067,0.026,0.135,0.041,0.203
		c1.557,8.225-1.278,15.718-6.39,20.935c-0.019,0.015-0.03,0.034-0.05,0.053c-3.789,3.846-8.819,6.429-14.229,7.162
		c-0.206,0.026-0.41,0.053-0.62,0.075c-0.824,0.09-1.654,0.15-2.489,0.15c-4.703,0-9.564-1.436-14.053-4.703l-93.683-68.066
		c-4.214-3.061-9.177-4.59-14.139-4.59c-4.958,0-9.921,1.53-14.135,4.59l-93.683,68.066c-4.489,3.263-9.35,4.703-14.053,4.703
		c-0.838,0-1.666-0.06-2.493-0.15C131.429,467.604,131.222,467.577,131.019,467.551z" style="fill: #B9893F;"></path>
            </g>
          </svg></span>
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
