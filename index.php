<?php get_header(); ?>
<!-- Hero header -->
<header class="relative w-full h-screen">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg" alt="hero image" class="absolute w-full h-full -z-1">
  <div class="absolute w-full h-full bg-black/60 flex justify-center items-center">
    <div class="w-full h-full flex flex-col justify-center items-center gap-4">
      <h2 class="">من رو در سفر زندگیم همراهی کن</h2>
      <p class="">این وبلاگ شخصی منه که داخلش قراره براتون کلی پست جالب راجع به کارایی که داخل زندگیم میکنم بگذارم.</p>
      <?php primary_button("مشاهده پست ها", "#") ?>
    </div>
  </div>
</header>
<!-- Features -->
<section class="flex justify-center items-center py-25 px-4 bg-primary-900">
  <ul class="flex justify-around w-full max-w-7xl">
    <li class="feature-item">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/growchart-icon.png" alt="growchart icon" class="w-40">
      <h3>مسائل توسعه فردی</h3>
      <p>قراره براتون کلی از مسائل توسعه فردی مثل روش های برنامه ریزی و غیره رو توضیح بدم</p>
    </li>
    <li class="feature-item lg:mt-24">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/book-icon.png" alt="book icon" class="w-40">
      <h3>معرفی کتاب</h3>
      <p>قراره که کلی کتاب خوب تو زمینه های مختلف مثل روانشناسی بهتون معرفی کنم</p>
    </li>
    <li class="feature-item lg:mt-48">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/star-icon.png" alt="star icon" class="w-40">
      <h3>و خیلی چیزهای دیگه</h3>
      <p>کلا سعی میکنم هر سوژه جالبی پیدا کردم براتون بنویسم.</p>
    </li>
  </ul>
</section>
<!-- Latest posts section -->
<section class="flex justify-center items-center bg-blacks-700 py-25 px-4">
  <div class="flex flex-col items-center text-center w-full">
    <h2>جدید ترین پست ها</h2>
    <ul class="flex gap-4 md:flex-nowrap flex-wrap bg-blacks-500 py-4 px-8 mt-4 rounded-lg w-full max-w-7xl">
      <?php
      $args = [
        'posts_per_page' => 3,
        'post_status'    => 'publish',
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()) :

        while ($query->have_posts()) :
          $query->the_post();

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
          $title = get_the_title();

          post_card($img, $alt, $link, $excerpt, $title);

        endwhile;

        wp_reset_postdata();
      else :
        echo '<p class="text-whites-500 w-full text-center py-8">هیچ پستی یافت نشد.</p>';
      endif;
      ?>
    </ul>
  </div>
</section>
<!-- Latest post -->
<section></section>
<!-- Footer -->
<?php get_footer(); ?>