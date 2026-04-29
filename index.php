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
<section class="flex justify-center items-center py-25 px-4">
  <ul class="flex justify-around w-full max-w-7xl">
    <li class="feature-item">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/growchart-icon.png" alt="star logo" class="w-40">
      <h3>مسائل توسعه فردی</h3>
      <p>قراره براتون کلی از مسائل توسعه فردی مثل روش های برنامه ریزی و غیره رو توضیح بدم</p>
    </li>
    <li class="feature-item lg:mt-24">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/book-icon.png" alt="star logo" class="w-40">
      <h3>معرفی کتاب</h3>
      <p>قراره که کلی کتاب خوب تو زمینه های مختلف مثل روانشناسی بهتون معرفی کنم</p>
    </li>
    <li class="feature-item lg:mt-48">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/star-icon.png" alt="star logo" class="w-40">
      <h3>و خیلی چیزهای دیگه</h3>
      <p>کلا سعی میکنم هر سوژه جالبی پیدا کردم براتون بنویسم.</p>
    </li>
  </ul>
</section>
<!-- Latest posts section -->
<section></section>
<!-- Latest post -->
<section></section>
<!-- Footer -->
<?php get_footer(); ?>