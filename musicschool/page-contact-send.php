<?php get_header(); ?>

<main>

  <div class="p-child-mv">
    <div class="p-child-mv__image">
      <picture>
        <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mv-sp.jpg" alt="お問い合わせ">
      </picture>
    </div>
    <div class="p-child-mv__contents">
      <h1 class="c-headline-text">お問い合わせ</h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- お問い合わせ -->
  <section class="p-contact-form p-contact-send">
    <div class="inner">
      <div class="p-contact-form__contents">
        <div class="p-contact-form__text">
          <p>お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。</p>
        </div>
        <div class="p-contact-form__link">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button c-button--main">ホームへ戻る</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
