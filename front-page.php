<!-- ヘッダーの読み込み -->
<?php get_header(); ?>

<main>
  <!-- ヒーロー -->
  <section class="hero">
    <picture class="hero__bg">
      <source
        srcset="<?php echo esc_url(get_theme_file_uri('assets/images/hero-v2.webp')); ?>"
        media="(min-width: 768px)" alt="青みがかった山と川の風景">
      <img
        src="<?php echo esc_url(get_theme_file_uri('assets/images/hero--sp-v2.webp')); ?>"
        alt="青みがかった山と川の風景"
        width="750"
        height="1334"
        fetchpriority="high"
        decoding="async"
        class="hero__bg-image">
    </picture>

    <!-- グラデーション -->
    <div class="hero__overlay"></div>

    <!-- 麻の葉（装飾レイヤー） -->
    <div class="hero__pattern" aria-hidden="true"></div>

    <div class="hero__inner">
      <!-- タイトル -->
      <div class="hero-titles">
        <h1 id="hero-title" class="hero__title">-Contribution-</h1>
        <!-- サブタイトル -->
        <p id="hero-subtitle" class="hero__subtitle">コーディングを通してクライアントの収益を上げる</p>
      </div>

      <picture class="hero__brush">
        <!-- PC -->
        <source
          srcset="<?php echo esc_url(get_theme_file_uri('assets/images/brush-v2.webp')); ?>"
          media="(min-width: 768px)">

        <!-- SP（LCP確定用） -->
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/brush--sp.webp')); ?>"
          alt="筆跡"
          width="750"
          height="188"
          decoding="async"
          loading="lazy"
          fetchpriority="high"
          class="hero__brush-image">
      </picture>

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
        <p class="section__subtitle">Who I am</p>
      </div>

      <div class="about reveal">
        <img
          src="<?php echo esc_url(get_theme_file_uri('assets/images/profile-img.webp')); ?>"
          alt="大川誠のプロフィール画像"
          class="about__image reveal">
        <div class="about__info reveal">
          <p class="about__info__name">おおかわ　|　Webコーダー</p>
          <p>現在Web制作の現場でコーディング業務に取り組んでいます。</p>
          <p>コードでデザインを正確に再現し、<br>見る人に心地よさを感じてもらえるサイトづくりを目指しています。</p>
          <p>日々、より良いコードを書くために学びを重ね、<br>実案件や仮想案件を通して実装力を高めています。</p>
          <div class="social-links">
            <a href="https://github.com/okawa0" target="_blank">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/github-logo.png')); ?>" alt="GitHub" width="32" height="32" class="social-links__icon">
            </a>
            <a href="https://x.com/okawa_0" target="_blank">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/x-logo.webp')); ?>" alt="X" width="32" height="32" class="social-links__icon">
            </a>
          </div>
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

  <!-- 技術セクション -->
  <section class="section section--texture" id="skills">
    <div class="container">
      <div class="section__head reveal">
        <h2 class="section__title jp">技術</h2>
        <p class="section__subtitle en">What I can do</p>
      </div>
      <section class="skill-section reveal">
        <div class="skill-section__inner">
          <div class="skill-tree">
            <div class="skill-tree__wrapper">
              <ul class="skill-tree__branches">
                <li
                  class="skill-tree__item"
                  data-skill="HTML"
                  data-desc="【できること】<br>• hタグ・section などを適切に使い、divに依存しないセマンティックなマークアップ<br>• 画像の内容を正しく伝える alt 属性、ページごとの title 要素など、SEOを意識したマークアップ<br>• CSSに頼らなくても、HTMLだけで情報の構造が伝わる整理されたマークアップ<br>• カードやCTAなど、再利用を前提としたコンポーネント設計<br>【課題】<br>• 文字数の増減を想定した崩れにくいコーディング<br>• 他人が見ても内容や役割が一目で分かるクラス命名">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/html-logo.png')); ?>"
                    alt="htmlのロゴ">
                </li>
                <li
                  class="skill-tree__item"
                  data-skill="CSS / Sass"
                  data-desc="【できること】<br>• position に過度に依存しないレイアウト<br>• 行間・字間・文字サイズを意識したタイポグラフィー<br>• 小型スマホ〜ワイドスクリーンまで対応したレスポンシブ設計<br>• 移動・透過を中心とした控えめなアニメーション実装<br>• BEM に則ったクラス命名による可読性・保守性の確保<br>• 影響範囲を想定したセレクタ設計<br>• clamp / min を用いた柔軟なサイズ設計<br>• モバイルファーストを前提としたコーディング<br>【課題】<br>• 不要なセレクタを増やさない設計<br>• ブラウザの再描画・再計算コストを意識したスタイル記述<br>• カスタムプロパティ（CSS変数）の活用">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/css-logo.png')); ?>"
                    alt="CSSのロゴ">
                </li>
                <li
                  class="skill-tree__item"
                  data-skill="JavaScript"
                  data-desc="【できること】<br>• 条件分岐・繰り返し処理など、言語仕様の基礎理解<br>• 要素取得、クラス操作、属性操作、イベント登録などの基本的な DOM 操作<br>• ハンバーガーメニューやモーダル表示など、UI 制御の基礎実装<br>【課題】<br>• 複雑な DOM 構造を前提とした UI 制御<br>• forEach などを用いた配列操作<br>• setTimeout 等の非同期処理の理解と実装">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/javascript-logo.png')); ?>"
                    alt="JavaScriptのロゴ">
                </li>
                <li
                  class="skill-tree__item"
                  data-skill="WordPress"
                  data-desc="【できること】<br>• テンプレート階層を含むテーマ構造の理解<br>• オリジナルテーマの構築経験<br>• <?php ?> の役割など、PHP の基礎的な文法理解<br>【課題】<br>• 配列・ループ処理の理解と実装<br>• カスタム投稿タイプ / カスタムタクソノミー / カスタムフィールドの活用<br>• テンプレート設計力（拡張・保守を前提とした構造）<br>• 顧客運用でも壊れないテーマ設計">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/wordpress-logo.png')); ?>"
                    alt="WordPressのロゴ">
                </li>
                <li
                  class="skill-tree__item"
                  data-skill="Figma / XD"
                  data-desc="【できること】<br>• ブレンドモードやエフェクト等の加工<br>• オートレイアウト<br>• ホバーやループ等のアニメーション<br>• コンポーネントの活用<br>【課題】<br>• デザイン意図の読み取り<br>• 設計提案">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/figma-logo.png')); ?>"
                    alt="Figmaのロゴ">
                </li>
                <li
                  class="skill-tree__item"
                  data-skill="GitHub"
                  data-desc="【できること】<br>• リポジトリ作成・クローンなどの基本操作<br>• 変更内容が追えるよう意識した、粒度の細かいコミット<br>• ブランチ運用の基本理解<br>【課題】<br>• プルリクエストの運用<br>• 差分（diff）を読む力<br>• コンフリクト発生時の対応">
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/images/github-logo.png')); ?>"
                    alt="GitHubのロゴ">
                </li>
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
          <tr>
            <th class="mobile-hidden"></th>
            <td>2026年2月</td>
            <td>Webクリエイター能力認定試験スタンダード 合格</td>
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

  <!-- 作品セクション -->
  <section class="section section--texture" id="works">
    <div class="container">
      <div class="section__head reveal">
        <h2 class="section__title">作品</h2>
        <p class="section__subtitle">What I can make</p>
      </div>
      <ul class="works">
        <li class="works__item reveal">
          <article>
            <a href="<?php echo esc_url('https://okawa0.github.io/aqua-horizon/'); ?>" target="_blank" rel="noopener noreferrer" class="works__link">
              <img
                class="works__image"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/aqua-horizon-v2.webp')); ?>"
                alt="ダイビングショップのモックアップ"
                loading="lazy" decoding="async" width="600" height="340">
              <img
                class="works__image--sp"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/aqua-horizon--sp-v2.webp')); ?>"
                alt="ダイビングショップのモックアップ"
                loading="lazy" decoding="async" width="375" height="667">
            </a>
            <div class="works__info">
              <p><strong>Aqua Horizon</strong><br>ダイビングショップ公式サイト</p>
              <p>実装：コーディング<br></p>
              <p>使用スキル：HTML / CSS / JavaScript<br>ツール：VS Code / Figma / GitHub<br>開発環境：macOS / Chrome</p>
              <p>制作期間：7日（約56時間）<br>制作時期：2025年12月</p>
            </div>
          </article>
        </li>
        <li class="works__item reveal">
          <article>
            <a href="<?php echo esc_url('https://okawa0.github.io/lumina-production/'); ?>" target="_blank" rel="noopener noreferrer" class="works__link">
              <img
                class="works__image"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/lumina-production.webp')); ?>"
                alt="芸能プロダクションのモックアップ"
                loading="lazy" decoding="async" width="600" height="340">
              <img
                class="works__image--sp"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/lumina-production--sp.webp')); ?>"
                alt="芸能プロダクションのモックアップ"
                loading="lazy" decoding="async" width="375" height="667">
            </a>
            <div class="works__info">
              <p><strong>Lumina Production</strong><br>芸能プロダクション スタッフ紹介ページ</p>
              <p>実装：コーディング<br></p>
              <p>使用スキル：HTML / CSS / JavaScript<br>ツール：VS Code / Figma / GitHub<br>開発環境：macOS / Chrome</p>
              <p>制作期間：7日（約56時間）<br>制作時期：2026年1月</p>
            </div>
          </article>
        </li>
        <li class="works__item reveal">
          <article>
            <a href="<?php echo esc_url('https://okawa0.github.io/interior-store/index.html'); ?>" target="_blank" rel="noopener noreferrer" class="works__link">
              <img
                class="works__image"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/furniture-design-v2.webp')); ?>"
                alt="模写サイトfurniture designのモックアップ"
                loading="lazy" decoding="async" width="600" height="340">
              <img
                class="works__image--sp"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/furniture-design--sp-v2.webp')); ?>"
                alt="模写サイトfurniture designのモックアップ"
                loading="lazy" decoding="async" width="375" height="667">
            </a>
            <div class="works__info">
              <p><strong>Furniture Design</strong><br>インテリアショップのストアサイト</p>
              <p>実装：コーディング<br></p>
              <p>使用スキル：HTML / CSS（Sass） / JavaScript<br>ツール：VS Code / Figma / GitHub<br>開発環境：macOS / Chrome</p>
              <p>制作期間：5日（約40時間）<br>制作時期：2025年7月</p>
            </div>
          </article>
        </li>
        <li class="works__item reveal">
          <article>
            <a href="<?php echo esc_url('https://okawa-web.com/'); ?>" target="_blank" rel="noopener noreferrer" class="works__link">
              <img
                class="works__image"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/portfolio-v2.webp')); ?>"
                alt="ポートフォリオサイトのモックアップ"
                loading="lazy" decoding="async" width="600" height="340">
              <img
                class="works__image--sp"
                src="<?php echo esc_url(get_theme_file_uri('assets/images/portfolio--sp-v2.webp')); ?>"
                alt="ポートフォリオサイトのモックアップ"
                loading="lazy" decoding="async" width="375" height="667">
            </a>
            <div class="works__info">
              <p><strong>Okawa Web</strong><br>自身のポートフォリオ</p>
              <p>実装：デザイン、コーディング</p>
              <p>使用スキル：HTML / CSS（Sass） / JavaScript / WordPress<br>ツール：VS Code / Figma / GitHub / Local / FileZilla<br>開発環境：macOS / Chrome</p>
              <p>制作期間：12日（約96時間）<br>制作時期：2025年9月</p>
              <p>Lighthouseスコア：PC 100点 / SP 93点</p>
            </div>
          </article>
        </li>
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

  <!-- お問い合わせセクション -->
  <section class="section section--texture" id="contact">
    <div class="container contact-container">
      <div class="section__head reveal contact-head">
        <div class="section__title-wrapper">
          <h2 class="section__title jp">お問合わせ</h2>
          <p class="section__subtitle en">What do you want?</p>
        </div>
        <p class='contact-message'>お気軽にご相談ください</p>
      </div>
      <div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="5ef3a3a" title="お問い合わせ"]'); ?></div>
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