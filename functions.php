<?php

function fitolife_enqueue_styles()
{
  wp_enqueue_style(
    'tailwindcss',
    get_template_directory_uri() . '/assets/css/dist/output.css',
    array(),
  );
}
add_action('wp_enqueue_scripts', 'fitolife_enqueue_styles');
