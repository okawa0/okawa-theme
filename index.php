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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-mywork.png" alt="" class="work-image-mywork">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-mywork-sp.png" alt="" class="work-image-mywork-sp">
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>