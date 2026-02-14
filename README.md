# Okawa Web - Portfolio

Webコーダー「おおかわ」のポートフォリオサイトです。
企画・デザインからWordPressオリジナルテーマの構築までを一貫して行いました。

**URL**: [https://okawa-web.com/](https://okawa-web.com/)

---

## **コンセプト・概要**

**「Contribution - 貢献」**

コーディングを通じてクライアントの収益向上や、エンドユーザーの快適な体験に貢献することをテーマにしています。
デザインには「誠実さ」や「信頼」を想起させる青と、和紙のテクスチャや筆跡などの和の要素を取り入れ、落ち着きのある世界観を表現しました。
ロゴは円がOkawaのOを、中央の三本線が大川の川を表しています。

- **ターゲット**: Web制作の依頼を検討している企業の担当者、採用担当者
- **コンセプト**: 信頼感と誠実さを伝える、ホワイトスペースを活かしたミニマルなデザイン
- **制作期間**: 3週間（デザイン：1週間 / 実装：2週間）

---

## **技術スタック**

静的サイトではなく、**WordPressのオリジナルテーマ**として構築しています。

- **CMS**: WordPress 6.x
- **Languages**:
    - HTML5 (Semantic Markup)
    - CSS3 (SCSS / BEM notation)
    - JavaScript (ES6+ / Vanilla JS)
    - PHP
- **Design Tool**: Figma
- **Infrastructure**: Xserver / Local / FileZilla
- **Version Control**: GitHub

---

## **こだわり**

### **1. パフォーマンスとLCP対策**
PageSpeed Insightsでの高得点（PC: 100 / SP: 93）を目指し、以下の施策を行いました。
- **画像の最適化**: WebP形式の採用、`fetchpriority="high"` によるLCP画像の優先読み込み、`decoding="async"` の活用。
- **脱jQuery**: ライブラリに依存せず、すべての動的処理（ハンバーガーメニュー、スクロールアニメーション等）をVanilla JSで実装し、読み込みリソースを軽量化。
- **アセット管理**: CSS/JSの読み込みを `functions.php` で適切に管理し、スクリプトには `defer` 属性を付与。

### **2. メンテナンス性を意識した設計**
- **BEM記法**: クラス名の衝突を防ぎ、再利用可能なCSS設計。
- **コンポーネント指向**: `template-parts` ディレクトリを活用し、セクション区切り（`section-divider`）などを部品化。
- **変数管理**: 配色やフォントなどをSCSS変数およびCSSカスタムプロパティで管理し、ダークモードやテーマ変更への拡張性を確保。

### **3. UI/UX デザイン**
- **インタラクション**: `IntersectionObserver` を利用した「じわっと」表示されるスクロールアニメーション（Reveal）を実装。
- **レスポンシブ**: スマートフォン（SP）、タブレット、PCそれぞれの閲覧環境に合わせ、ナビゲーションや画像の出し分け（`<picture>`タグ）を最適化。
- **アクセシビリティ**: `aria-expanded` や `aria-hidden` 等のWAI-ARIA属性を適切に付与し、マシンリーダブルな構造を意識。

---

## **ディレクトリ構造**

```text
okawa-theme/
├── assets/
│   ├── css/       # Compiled CSS
│   ├── images/    # WebP images, SVGs
│   └── js/        # Main scripts (Vanilla JS)
├── template-parts/# Reusable components
├── footer.php
├── front-page.php # Top page template
├── functions.php  # Theme logic & Enqueue scripts
├── header.php
├── index.php
└── style.css      # Theme meta data

```

---

## **開発履歴**

* **2025.08**: プロジェクト開始、デザイン・構成策定
* **2025.09**: WordPressテーマ化、主要セクションの実装
* **2025.10 - 12**:
* アニメーション調整（GSAP等のライブラリを使わず軽量化）
* お問い合わせフォーム（Contact Form 7）の実装
* プライバシーポリシーページの追加
* **2026.01 - 02**:
* LCP / Core Web Vitals 改善（画像の非同期読み込み設定など）
* アクセシビリティ向上（ARIA属性の追加）
* 制作実績（Works）の追加・更新

---

## **課題・今後の改善予定**

- 制作実績の増加
- 管理画面だけで編集できるカスタムフィールドの導入
- GSAPを用いた高度なアニメーション
- テンプレート化した作品詳細ページの追加
- スキルセクションのシンプル化
- ダークモード対応

---

## **制作者**

**おおかわ (Okawa)**
Web Coder / Front-end Developer

* **Portfolio**: [https://okawa-web.com](https://okawa-web.com/)
* **GitHub**: [okawa0](https://github.com/okawa0)
* **X (Twitter)**: [@okawa_0](https://x.com/okawa_0)

```
