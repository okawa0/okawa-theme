<?php

// タイトルタグの自動生成
add_theme_support('title-tag');

// サムネイル
add_theme_support('/assets/images/thumbnail.webp');

// ページ読み込み後スクリプト実行
function add_defer_attribute($tag, $handle, $src)
{
  if ($handle === 'mytheme-script') {
    return '<script src="' . esc_url($src) . '" defer></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 3);


function my_theme_enqueue_assets()
{

  // CSS
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    filemtime(get_template_directory() . '/assets/css/style.css')
  );

  // JS
  wp_enqueue_script(
    'mytheme-script',
    get_template_directory_uri() . '/assets/js/script.js',
    [],
    filemtime(get_template_directory() . '/assets/js/script.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// jQueryの読み込み解除
add_action('wp_enqueue_scripts', function () {
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');
}, 100);
