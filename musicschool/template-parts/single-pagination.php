<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
$add_class_result = '';

if (is_singular('result')) {
  $add_class_result = ' c-single-pagination--result';
}
?>

<ul class="p-blog-details__pagination c-single-pagination<?php echo $add_class_result; ?>">
  <li>
    <?php if (!empty($prev_post)): ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="c-single-pagination__block c-single-pagination-block">
        <div class="c-single-pagination-block__heading">
          <p>◀︎ 前の記事</p>
        </div>
        <div class="c-single-pagination-block__item c-single-pagination-block-item">
          <div class="c-single-pagination-block-item__img sp-none">
            <?php if (has_post_thumbnail($prev_post->ID)): ?>
              <?php echo get_the_post_thumbnail($prev_post->ID); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
            <?php endif; ?>
          </div>
          <div class="c-single-pagination-block-item__title">
            <p><?php echo wp_trim_words($prev_post->post_title, 25, '...'); ?></p>
          </div>
        </div>
      </a>
    <?php endif; ?>
  </li>

  <li>
    <?php if (!empty($next_post)): ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="c-single-pagination__block c-single-pagination-block">
        <div class="c-single-pagination-block__heading">
          <p>次の記事 ▶︎</p>
        </div>
        <div class="c-single-pagination-block__item c-single-pagination-block-item">
          <div class="c-single-pagination-block-item__img sp-none">
            <?php if (has_post_thumbnail($next_post->ID)): ?>
              <?php echo get_the_post_thumbnail($next_post->ID); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
            <?php endif; ?>
          </div>
          <div class="c-single-pagination-block-item__title">
            <p><?php echo wp_trim_words($next_post->post_title, 25, '...'); ?></p>
          </div>
        </div>
      </a>
    <?php endif; ?>
  </li>
</ul>
