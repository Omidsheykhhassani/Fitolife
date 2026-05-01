<?php get_header() ?>
<main class="pt-32 pb-48">
  <header class="relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/post image.jpg" ?>" alt="عکس 404" class="absolute inset-0 w-full h-full object-cover -z-1">
    <h1>404 پیدا نشد</h1>
    <div class="flex flex-col justify-center items-center py-25 px-4 bg-black/70 gap-4">
      <h2>404 پیدا نشد</h2>
      <p>متاسفانه صفحه مورد نظر شما پیدا نشد. لطفا دوباره امتحان کنید.</p>
      <?php primary_button("بازگشت به خانه", "/") ?>
    </div>
  </header>
</main>
<?php get_footer(); ?>