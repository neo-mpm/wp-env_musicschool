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
  <section class="p-contact-form">
    <div class="inner">
      <div class="p-contact-form__contents">
        <div class="p-contact-form__text">
          <p>当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>通常３営業日以内にメールにてご連絡させていただきます。</p>
        </div>
        <div class="p-contact-form__form c-form">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              remove_filter('the_content', 'wpautop');
              the_content();
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
