<?php get_header(); ?>

<main>
  <div class="mainvisual fade-zoom">
    <div class="title-wrap">
      <h1 class="mainvisual-title">Portfolio</h1>
      <h2 class="mainvisual-subtitle">by web coder Okawa</h2>
    </div>
  </div>
  <div class="works-section fade-zoom">
    <div class="works-contents">
      <div class="works-titles">
        <h2 class="works-title">作品</h2>
        <h3 class="works-subtitle">Works</h3>
      </div>
      <div class="work-image">
        <a href="https://okawa0.github.io/mywork/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-mywork.png" alt="" class="work-image-mywork"></a>
        <a href="https://okawa0.github.io/mywork/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-mywork-sp.png" alt="" class="work-image-mywork-sp"></a>
      </div>
    </div>
  </div>
  <div class="skills-section">
    <div class="skills-contents">
      <div class="skills-titles">
        <h2 class="skills-title">技術</h2>
        <h3 class="skills-subtitle">Skills</h3>
      </div>
      <div class="skill-images">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/html-logo.png" alt="htmlのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css-logo.png" alt="cssのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/JavaScript-logo.png" alt="javascriptのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vscode-logo.png" alt="vscodeのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/figma-logo.png" alt="figmaのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/github-logo.png" alt="githubのロゴ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress-logo.png" alt="wordpressのロゴ">
          </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>