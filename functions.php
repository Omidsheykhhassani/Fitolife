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

add_theme_support('post-thumbnails');

function primary_button(string $text, string $href)
{
?>
  <a href="<?php echo $href; ?>" class="bg-primary-500 rounded-lg text-lg py-2 px-4 hover:bg-primary-700"><?php echo $text; ?></a>
<?php
}

function post_card(string $img, string $alt , string $link, string $excerpt, string $title) {
  ?>
    <li class="flex flex-col w-full">
      <div class="w-full">
        <img src="<?php echo $img ?>" alt="<?php echo $alt ?>" class="w-full h-auto">
      </div>
      <div class="p-4">
        <h3><?php echo $title ?></h3>
        <p><?php echo $excerpt ?></p>
        <a href="<?php echo $link ?>">مشاهده پست...</a>
      </div>
    </li>
  <?php
}