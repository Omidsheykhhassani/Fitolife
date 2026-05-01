<div id="comments" class="bg-blacks-700 border border-whites-900 rounded-lg py-8 px-4 w-full max-w-7xl">

  <?php if (have_comments()) : ?>

    <h3 class="mb-6">
      <?php comments_number('کامنتی وجود ندارد', '1 کامنت', '% کامنت'); ?>
    </h3>

    <ul class="space-y-6">
      <?php
      wp_list_comments([
        'style' => 'ul',
        'short_ping' => true,
        'avatar_size' => 40,
        'callback' => 'custom_comment_markup',
      ]);
      ?>
    </ul>

    <div class="mt-6">
      <?php the_comments_pagination(); ?>
    </div>

  <?php endif; ?>

  <div class="mt-10">
    <?php
    comment_form([
      'title_reply' => 'یک کامنت بنویسید',
      'logged_in_as' => '<p class="text-sm mb-4">نویسنده: </br><strong>' . wp_get_current_user()->display_name . '</strong>. <a href="' . wp_logout_url(get_permalink()) . '">Logout</a></p>',
      'comment_notes_before' => '',
      'class_submit' => 'bg-primary-500 hover:bg-primary-700 text-whites-500 px-4 py-2 rounded-lg mt-4 cursor-pointer',
      'comment_field' =>
      '<textarea id="comment" name="comment" rows="4" required
          class="w-full my-2 p-3 rounded bg-blacks-800 border border-whites-900 outline-none text-whites-500"></textarea>',
      'title_reply_to' => 'پاسخ به: %s',
      'cancel_reply_link' => '| لغو پاسخ',
      'fields' => [
        'author' => '
            <p>
                <label class="block mb-2" for="author">نام *</label>
                <input id="author" name="author" type="text"
                       class="w-full border border-whites-900 rounded px-3 py-2"
                       required />
            </p>
        ',

        'email' => '
            <p>
                <label class="block my-2" for="email">ایمیل *</label>
                <input id="email" name="email" type="email"
                       class="w-full border border-whites-900 rounded px-3 py-2"
                       required />
            </p>
        ',

        'url' => '',

        'cookies' => '
            <p class="flex items-center gap-2 mt-2">
                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox"
                       class="h-4 w-4" />
                <label for="wp-comment-cookies-consent">
                    اطلاعات من رو به خاطر بسپار
                </label>
            </p>
        ',
      ],
    ]);
    ?>
  </div>

</div>