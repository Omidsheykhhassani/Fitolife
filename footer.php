<footer class="relative flex flex-col justify-center items-center py-25 px-4">
  <div class="flex justify-between items-center w-full max-w-7xl">
    <section>
      <ul class="flex flex-col gap-4 text-xl">
        <li><a href="#">خانه</a></li>
        <li><a href="#">آرشیو مقالات</a></li>
        <li><a href="#">یک لینک</a></li>
      </ul>
    </section>
    <section class="lg:block hidden">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-logo-no-bg.png" alt="icon logo" class="w-full max-w-20">
    </section>
    <section>
      <ul class="flex flex-col gap-6 text-xl">
        <?php
        social_link("Instagram", "#");
        social_link("Telegram", "#");
        social_link("Discord", "#");
        ?>
      </ul>
    </section>
  </div>
  <p class="absolute bottom-4" style="color: var(--color-whites-900);">copyright &copy; 2026 | Fitomato (Omid Sheikhhasani)</p>
</footer>
</body>

</html>