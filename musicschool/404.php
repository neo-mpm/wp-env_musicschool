<?php get_header(); ?>

<main>

  <!-- MV -->
  <div class="p-child-mv">
    <div class="p-child-mv__image">
      <picture>
        <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/images/404/404-mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/404/404-mv-sp.jpg" alt="404 not found">
      </picture>
    </div>
    <div class="p-child-mv__contents">
      <h1 class="c-headline-text">404 not found</h1>
    </div>
  </div>

  <!-- 404メッセージ -->
  <section class="p-not-found">
    <div class="inner">
      <div class="p-not-found__contents">
        <div class="p-not-found__text">
          <p>申し訳ございませんが、お探しのページが見つかりませんでした。<br>お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。</p>
        </div>
        <div class="p-not-found__link">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button c-button--main">ホームへ戻る</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
