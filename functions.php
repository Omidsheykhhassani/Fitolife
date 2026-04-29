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

add_filter('show_admin_bar', '__return_false');

function primary_button($text, $href)
{
?>
  <a href="<?php echo $href; ?>" class="text-whites-500 bg-primary-500 rounded-lg text-lg py-2 px-4 hover:bg-primary-700"><?php echo $text; ?></a>
<?php
}
