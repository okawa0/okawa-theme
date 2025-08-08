<?php

echo "<!-- THIS IS FUNCTIONS.PHP -->"; // ← デバッグ出力（確認用）

function my_theme_enqueue_styles()
{
  echo "<!-- CSS enqueue function called -->"; // ← ここ出るかチェック用

  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/style.css'),
    'all'
  );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
