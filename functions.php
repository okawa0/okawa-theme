<?php

// CSSの読み込み
function my_theme_enqueue_styles()
{
  wp_enqueue_style(
    'main-style',get_template_directory_uri() . '/assets/css/style.css',
    // キャッシュクリア
    filemtime(get_template_directory() . '/assets/css/style.css')
  );
}
// フック
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// サムネイル
add_theme_support('/assets/images/thumbnail.webp');

// 管理バー非表示
// add_filter('show_admin_bar', '__return_false');

// Googleフォントの読み込み
function my_theme_enqueue_fonts()
{
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Shippori+Mincho&display=swap',
    false
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_fonts');


function mytheme_enqueue_scripts()
{
  wp_enqueue_script(
    'mytheme-script',
    get_template_directory_uri() . '/assets/js/script.js',
    array(),
    '1.0.0',
    true // フッターで読み込み
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function add_defer_attribute($tag, $handle, $src)
{
  // 対象のハンドル名だけに適用
  if ($handle === 'mytheme-script') {
    return '<script src="' . esc_url($src) . '" defer></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 3);