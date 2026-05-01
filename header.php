<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Fitolife</title>
</head>

<body class="bg-blacks-900">
  <!-- Navbar -->
  <nav class="fixed flex justify-center items-center p-4 z-1 w-full">
    <div class="flex justify-between items-center w-full max-w-7xl rounded-full py-4 px-16 backdrop-blur-xs bg-white/5 border border-white/20 shadow-lg">
      <ul class="flex flex-row gap-6">
        <li class="lg:inline hidden"><a href="/">خانه</a></li>
        <li><a href="/blog">آرشیو مقالات</a></li>
        <li><a href="/about-me">درباره من</a></li>
      </ul>
      <a href="/" class="flex justify-center items-center w-28 h-auto">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/text-logo-no-bg.png" alt="site logo">
      </a>
    </div>
  </nav>