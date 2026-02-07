<?php
/**
 * Okawa Theme Functions
 */

// テーマサポート
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

/**
 * スクリプトに defer を付与
 */
function okawa_add_defer_attribute(string $tag, string $handle, string $src): string
{
  if ($handle === 'okawa-script') {
    return '<script src="' . esc_url($src) . '" defer></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'okawa_add_defer_attribute', 10, 3);

/**
 * アセットの読み込み
 */
function okawa_enqueue_assets(): void
{
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();

  wp_enqueue_style(
    'okawa-style',
    $theme_uri . '/assets/css/style.css',
    [],
    filemtime($theme_dir . '/assets/css/style.css')
  );

  wp_enqueue_script(
    'okawa-script',
    $theme_uri . '/assets/js/script.js',
    [],
    filemtime($theme_dir . '/assets/js/script.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'okawa_enqueue_assets');

/**
 * jQuery の読み込み解除
 */
function okawa_deregister_jquery(): void
{
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'okawa_deregister_jquery', 100);

/**
 * 制作実績カスタム投稿タイプ
 */
function okawa_register_works_post_type(): void
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
add_action('init', 'okawa_register_works_post_type');
