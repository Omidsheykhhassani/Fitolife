<?php get_header() ?>
<main class="flex justify-center pt-32">
  <div class="w-full max-w-7xl">
    <h1>آرشیو مقالات</h1>
    <h2 class="text-center">موضوعی که بهش علاقه داری رو جستجو کن...</h2>
    <form class="flex gap-4 my-8 mx-4" role="search" method="get" action="<?php echo home_url('/'); ?>">
      <input type="search" name="s" id="search" placeholder="جستجوی مقاله..." class="border-4 border-whites-500 rounded-lg py-2 px-4 w-full">
      <button class="bg-primary-500 rounded-lg py-2 px-4 cursor-pointer">جستجو</button>
    </form>
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-blacks-500 py-4 px-8 mt-4 rounded-lg w-full max-w-7xl">
      <?php

      if (have_posts()) :

        while (have_posts()) :
          the_post();

          $img = get_the_post_thumbnail_url(get_the_ID(), 'full');
          if (empty($img)) {
            $img = get_template_directory_uri() . "/assets/images/Image placeholder.png";
          }
          $thumbnail_id = get_post_thumbnail_id(get_the_ID());
          $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          if (empty($alt)) {
            $alt = get_the_title(); // fallback
          }
          $link = get_permalink();
          $excerpt = get_the_excerpt();
          $excerpt = wp_trim_words(get_the_excerpt(), 25, '...');
          $title = get_the_title();

          post_card($img, $alt, $link, $excerpt, $title);

        endwhile;

        wp_reset_postdata();
      else :
        echo '<p class="text-whites-500 w-full text-center py-8">هیچ پستی یافت نشد.</p>';
      endif;
      ?>
    </ul>
    <div class="w-full flex justify-center items-center gap-2 mt-8">
      <?php
      global $wp_query;

      $paged = get_query_var('paged');

      if (!$paged) {
        $paged = get_query_var('page');
      }

      if (!$paged) {
        $paged = 1;
      }

      echo paginate_links([
        'total' => $wp_query->max_num_pages,
        'current' => $paged,
        'mid_size' => 2,
        'prev_text' => 'قبلی',
        'next_text' => 'بعدی'
      ]);
      ?>
    </div>
  </div>
</main>
<?php get_footer() ?>