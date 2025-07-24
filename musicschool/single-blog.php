<?php get_header(); ?>

<main>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <div class="l-two-col-container inner">
    <!-- メイン -->
    <div class="l-two-col-container__main">
      <!-- ブログ詳細 -->
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
      ?>
          <section class="p-blog-details">
            <div class="p-blog-details__head">
              <div class="p-blog-details__img-area">
                <div class="p-blog-details__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                  <?php endif; ?>
                </div>

                <div class="p-blog-details__tag">
                  <p class="c-tag-icon">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'blog_cate');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      echo esc_html($terms[0]->name);
                    }
                    ?>
                  </p>
                </div>
              </div>
              <div class="p-blog-details__title">
                <h1 class="c-article-details-title"><?php the_title(); ?></h1>
              </div>
              <div class="p-blog-details__date">
                <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time>
              </div>
              <div class="p-blog-details__sns c-sns-share">
                <?php
                $url = urlencode(get_permalink());
                $title = urlencode(get_the_title());
                ?>
                <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>"
                  class="c-sns-share__item c-sns-share-item c-sns-share-item--facebook" target="_blank" rel="noopener noreferrer">
                  <span class="sns-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blog/icon-share-facebook.svg" alt="facebook">
                  </span>
                  <span class="sns-name sp-none">Facebook</span>
                </a>
                <a href="<?php echo esc_url('https://x.com/share?url=' . $url . '&text=' . $title); ?>"
                  class="c-sns-share__item c-sns-share-item c-sns-share-item--twitter" target="_blank" rel="noopener noreferrer">
                  <span class="sns-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blog/icon-share-twitter.svg" alt="twitter">
                  </span>
                  <span class="sns-name sp-none">Twitter</span>
                </a>
                <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>"
                  class="c-sns-share__item c-sns-share-item c-sns-share-item--hatena" target="_blank" rel="noopener noreferrer">
                  <span class="sns-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blog/icon-share-hatena.svg" alt="hatena">
                  </span>
                  <span class="sns-name sp-none">Hatena</span>
                </a>
                <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $url); ?>"
                  class="c-sns-share__item c-sns-share-item c-sns-share-item--line" target="_blank" rel="noopener noreferrer">
                  <span class="sns-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blog/icon-share-line.svg" alt="line">
                  </span>
                  <span class="sns-name sp-none">LINE</span>
                </a>
                <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>"
                  class="c-sns-share__item c-sns-share-item c-sns-share-item--pocket" target="_blank" rel="noopener noreferrer">
                  <span class="sns-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/images/blog/icon-share-pocket.svg" alt="pocket">
                  </span>
                  <span class="sns-name sp-none">Pocket</span>
                </a>
              </div>
            </div>
            <div class="p-blog-details__contents">

              <div class="p-blog-details__wp-editor c-article-details-body">
                <?php the_content(); ?>
              </div>

              <?php get_template_part('template-parts/single-pagination'); ?>

            </div>
          </section>
      <?php
        endwhile;
      endif;
      ?>

      <?php get_template_part('template-parts/related-articles'); ?>

    </div>

    <?php get_sidebar(); ?>

  </div>

  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
