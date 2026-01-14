<?php

// タイトルタグの自動生成
add_theme_support('title-tag');

// サムネイル
add_theme_support('post-thumbnails');

// ページ読み込み後スクリプト実行
function add_defer_attribute($tag, $handle, $src)
{
  if ($handle === 'mytheme-script') {
    return '<script src="' . esc_url($src) . '" defer></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 3);

// CSS・JSの読み込み
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

// 制作実績カスタム投稿タイプ
function register_works_post_type()
{
  register_post_type('works', [
    'label' => '制作実績',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'works'],
  ]);
}
add_action('init', 'register_works_post_type');
