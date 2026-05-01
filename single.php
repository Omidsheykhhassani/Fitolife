<?php get_header() ?>
<main class="pt-32">
  <?php

  if (have_posts()) :
    while (have_posts()) : the_post();

      $img = get_the_post_thumbnail_url(get_the_ID(), 'full');
      if (empty($img)) {
        $img = get_template_directory_uri() . "/assets/images/Image placeholder.png";
      }

      $thumbnail_id = get_post_thumbnail_id(get_the_ID());
      $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      if (empty($alt)) {
        $alt = get_the_title(); // fallback
      }

  ?>

      <header class="relative overflow-hidden">
        <img src="<?php echo $img ?>" alt="<?php echo $alt ?>" class="absolute inset-0 w-full h-full object-cover -z-1">
        <h1><?php echo get_the_title() ?></h1>
        <div class="flex flex-col justify-center items-center py-25 px-4 bg-black/70">
          <h2><?php echo get_the_title() ?></h2>
          <p><?php echo get_post_jalali_date(); ?></p>
        </div>
      </header>

      <div class="flex flex-col gap-8 items-center px-2">
        <article class="post-content w-full max-w-7xl rounded-lg bg-blacks-700 border border-whites-900 py-8 px-4 -mt-8 z-1 leading-4">
          <?php the_content() ?>
        </article>
        <?php
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;
        ?>
      </div>

  <?php
    endwhile;
  endif;
  ?>
</main>
<?php get_footer() ?>