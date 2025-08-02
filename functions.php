<?php
function okawa_theme_scripts()
{
  wp_enqueue_style('okawa-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'okawa_theme_scripts');
