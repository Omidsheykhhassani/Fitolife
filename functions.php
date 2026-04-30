<?php

function fitolife_enqueue_styles()
{
  wp_enqueue_style(
    'tailwindcss',
    get_template_directory_uri() . '/assets/css/dist/output.css',
    array(),
  );
}

function mytheme_excerpt_length($length)
{
  return 120;
}

add_action('wp_enqueue_scripts', 'fitolife_enqueue_styles');

add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_length', 'mytheme_excerpt_length');

add_theme_support('post-thumbnails');

function primary_button(string $text, string $href)
{
?>
  <a href="<?php echo $href; ?>" class="bg-primary-500 rounded-lg text-lg py-2 px-4 hover:bg-primary-700"><?php echo $text; ?></a>
<?php
}

function post_card(string $img, string $alt, string $link, string $excerpt, string $title)
{
?>
  <li class="flex flex-col rounded-lg bg-blacks-700 overflow-hidden">
    <div class="w-full">
      <img src="<?php echo $img ?>" alt="<?php echo $alt ?>" class="w-full h-auto">
    </div>
    <div class="flex flex-col justify-between h-60 text-right p-4">
      <div>
        <h3><?php echo $title ?></h3>
        <p class="mt-2"><?php echo $excerpt ?></p>
      </div>
      <a href="<?php echo $link ?>" class="mt-4 text-2xl text-primary-300">مشاهده پست...</a>
    </div>
  </li>
<?php
}

function social_link(string $name, string $href)
{
?>
  <li class="flex flex-row-reverse gap-2"><img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $name; ?>-icon.png" alt="<?php echo $name ?> logo" class="w-6 h-6"><a href="<?php echo $href; ?>"><?php echo $name ?></a></li>
<?php
}
