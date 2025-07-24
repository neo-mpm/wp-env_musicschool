<div class="p-fix-area">
  <div class="p-fix-area__inner">
    <a href="#" class="c-arrow">
      <div class="c-arrow__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-t.svg" alt="△">
      </div>
    </a>
    <?php if (!is_page('contact')) : ?>
      <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-button c-button--bottom">お問い合わせ</a>
    <?php endif; ?>
  </div>
</div>
