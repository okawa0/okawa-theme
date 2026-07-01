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
      信頼感と見やすさを重視したデザインと、更新しやすい<br>
      WordPress構築を行いました。
    </p>

    <div class="works-otogawa-fudosan__actions">
      <a href="#" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--primary">
        <span class="works-otogawa-fudosan__btn-icon" aria-hidden="true">&#128279;</span>
        サイトを見る
      </a>
      <a href="#" class="works-otogawa-fudosan__btn works-otogawa-fudosan__btn--secondary">
        <span class="works-otogawa-fudosan__btn-icon" aria-hidden="true">&#128187;</span>
        GitHubを見る
      </a>
    </div>

    <div class="works-otogawa-fudosan__visual">
      <img src="/images/works-otogawa-fudosan/main-pc.png" alt="岡崎不動産サイト PC表示イメージ" class="works-otogawa-fudosan__visual-pc">
      <img src="/images/works-otogawa-fudosan/main-sp.png" alt="岡崎不動産サイト SP表示イメージ" class="works-otogawa-fudosan__visual-sp">
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
          <img src="/images/works-otogawa-fudosan/icon-calendar.svg" alt="">
        </span>
        <span class="works-otogawa-fudosan__overview-label">制作期間</span>
        <span class="works-otogawa-fudosan__overview-value">約4週間</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-user.svg" alt="">
        </span>
        <span class="works-otogawa-fudosan__overview-label">制作形態</span>
        <span class="works-otogawa-fudosan__overview-value">自主制作（架空案件）</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-code.svg" alt="">
        </span>
        <span class="works-otogawa-fudosan__overview-label">使用技術</span>
        <span class="works-otogawa-fudosan__overview-value">HTML / SCSS / JavaScript / PHP / WordPress（オリジナルテーマ）</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-user.svg" alt="">
        </span>
        <span class="works-otogawa-fudosan__overview-label">担当範囲</span>
        <span class="works-otogawa-fudosan__overview-value">デザイン再現 / コーディング / WordPress構築 / 保守・最適化</span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-link.svg" alt="">
        </span>
        <span class="works-otogawa-fudosan__overview-label">公開URL</span>
        <span class="works-otogawa-fudosan__overview-value">
          <a href="https://okawa-web.com/works1/" target="_blank" rel="noopener noreferrer">https://okawa-web.com/works1/</a>
        </span>
      </li>
      <li class="works-otogawa-fudosan__overview-item">
        <span class="works-otogawa-fudosan__overview-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-device.svg" alt="">
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
        <img src="/images/works-otogawa-fudosan/icon-house.svg" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
      </div>

      <div class="works-otogawa-fudosan__intro-card">
        <h3 class="works-otogawa-fudosan__intro-card-title">ターゲット</h3>
        <ul class="works-otogawa-fudosan__intro-card-list">
          <li>30〜50代のファミリー層</li>
          <li>岡崎市・豊田市周辺に在住</li>
          <li>初めて住宅を探している方</li>
          <li>スマホで情報収集をする方</li>
        </ul>
        <img src="/images/works-otogawa-fudosan/icon-family.svg" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
      </div>

      <div class="works-otogawa-fudosan__intro-card">
        <h3 class="works-otogawa-fudosan__intro-card-title">デザインで意識したこと</h3>
        <ul class="works-otogawa-fudosan__intro-card-list">
          <li>信頼感のある配色と余白設計</li>
          <li>情報を探しやすいナビゲーション</li>
          <li>視線の流れを意識したレイアウト</li>
          <li>CTAを目立たせて行動を促す設計</li>
        </ul>
        <img src="/images/works-otogawa-fudosan/icon-pencil.svg" alt="" class="works-otogawa-fudosan__intro-card-icon" aria-hidden="true">
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
          <img src="/images/works-otogawa-fudosan/icon-html5.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-sass.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-js.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-wordpress.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-responsive.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-speed.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-maintain.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-accessibility.svg" alt="">
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
        <img src="/images/works-otogawa-fudosan/responsive-pc.png" alt="岡崎不動産サイト PC表示" class="works-otogawa-fudosan__responsive-image">
      </div>
      <div class="works-otogawa-fudosan__responsive-item">
        <span class="works-otogawa-fudosan__responsive-badge">SP</span>
        <img src="/images/works-otogawa-fudosan/responsive-sp.png" alt="岡崎不動産サイト SP表示" class="works-otogawa-fudosan__responsive-image">
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
          <img src="/images/works-otogawa-fudosan/icon-drop.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-bulb.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-ai.svg" alt="">
        </span>
        <h3 class="works-otogawa-fudosan__summary-card-title">AIの活用について</h3>
        <p class="works-otogawa-fudosan__summary-card-text">
          レイアウト案の壁打ちやエラーの原因調査、コードレビューにAI（ChatGPT）を活用しました。最終的な実装・設計・判断はすべて自分で行っています。
        </p>
      </div>

      <div class="works-otogawa-fudosan__summary-card">
        <span class="works-otogawa-fudosan__summary-card-icon" aria-hidden="true">
          <img src="/images/works-otogawa-fudosan/icon-book.svg" alt="">
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
          <img src="/images/works-otogawa-fudosan/icon-graph.svg" alt="">
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