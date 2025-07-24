<?php get_header(); ?>

<main>

  <!-- MV -->
  <div class="p-child-mv">
    <div class="p-child-mv__image">
      <picture>
        <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-mv-sp.jpg" alt="ブログ">
      </picture>
    </div>
    <div class="p-child-mv__contents">
      <h1 class="c-headline-text">ブログ</h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- ブログ一覧 -->
  <section class="p-blog-list">
    <div class="inner">
      <div class="p-blog-list__title">
        <?php
        $term = get_queried_object();
        $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
        ?>
        <h2 class="c-head-lower"><?php echo esc_html($term_name); ?></h2>
      </div>
      <div class="p-blog-list__contents">
        <div class="p-blog-list__items">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="p-blog-list__item c-blog-list-item">
                <div class="c-blog-list-item__img-area">
                  <div class="c-blog-list-item__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                    <?php endif; ?>
                  </div>
                  <div class="c-blog-list-item__tag">
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
                <div class="c-blog-list-item__textarea">
                  <div class="c-blog-list-item__title">
                    <h3><?php echo wp_trim_words(get_the_title(), 26, '...'); ?></h3>
                  </div>
                  <div class="c-blog-list-item__date">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                  <div class="c-blog-list-item__text">
                    <p><?php echo wp_trim_words(get_the_content(), 120, '...'); ?></p>
                  </div>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          ?>
        </div>
        <div class="p-blog-list__pager">
          <div class="c-pager">
            <?php wp_pagenavi(); ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
