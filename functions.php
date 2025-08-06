<?php
function my_theme_enqueue_styles()
{
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
}