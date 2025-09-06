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