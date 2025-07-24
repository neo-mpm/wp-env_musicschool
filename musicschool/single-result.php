<?php get_header(); ?>

<main>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- 卒業実績詳細 -->
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post();
  ?>
      <section class="p-result-details">
        <div class="inner">
          <div class="p-result-details__head">
            <div class="p-result-details__img-area">
              <div class="p-result-details__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                <?php endif; ?>
              </div>
              <div class="p-result-details__tag">
                <p class="c-tag-icon">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'genre');
                  if (!empty($terms) && !is_wp_error($terms)) {
                    echo $terms[0]->name;
                  }
                  ?>
                </p>
              </div>
            </div>
            <div class="p-result-details__title">
              <h1 class="c-article-details-title"><?php the_title(); ?></h1>
            </div>
            <div class="p-result-details__date">
              <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
          <div class="p-result-details__contents">

            <div class="p-result-details__profile p-result-details-profile">
              <div class="p-result-details-profile__table">
                <dl>
                  <dt>名前</dt>
                  <dd><?php the_field('name'); ?></dd>
                </dl>
                <dl>
                  <dt>職業</dt>
                  <dd><?php the_field('job'); ?></dd>
                </dl>
                <dl>
                  <dt>ジャンル</dt>
                  <dd>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'genre');
                    echo $terms[0]->name;
                    ?>
                  </dd>
                </dl>
                <dl>
                  <dt>実績</dt>
                  <dd><?php the_field('achievements'); ?></dd>
                </dl>
                <dl>
                  <dt>SNS</dt>
                  <dd><?php the_field('sns'); ?></dd>
                </dl>
              </div>
              <div class="p-result-details-profile__text">
                <?php the_content(); ?>
              </div>
            </div>

            <!-- ページネーション（シングル） -->
            <?php get_template_part('template-parts/single-pagination'); ?>

            <!-- 関連記事 -->
            <?php get_template_part('template-parts/related-articles'); ?>
          </div>
        </div>
      </section> <?php
                endwhile;
              endif;
                  ?>
  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
