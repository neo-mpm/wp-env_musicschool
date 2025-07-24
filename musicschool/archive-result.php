<?php get_header(); ?>

<main>

  <!-- MV -->
  <div class="p-child-mv">
    <div class="p-child-mv__image">
      <picture>
        <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/images/result/result-mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-mv-sp.jpg" alt="卒業実績">
      </picture>
    </div>
    <div class="p-child-mv__contents">
      <h1 class="c-headline-text">卒業実績</h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- 卒業実績一覧 -->
  <section class="result-list">
    <div class="inner">
      <div class="result-list__title">
        <h2 class="c-head-lower">卒業実績一覧</h2>
      </div>
      <div class="result-list__contents">
        <div class="result-list__items u-grid-pc3sp1-g106">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="result-list__item c-blog-item c-blog-item--result">
                <div class="c-blog-item__img-area">
                  <div class="c-blog-item__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                    <?php endif; ?>
                  </div>
                  <div class="c-blog-item__tag">
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
                <div class="c-blog-item__title">
                  <h3><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></h3>
                </div>
                <div class="c-blog-item__date">
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          ?>
        </div>
        <!-- ページャー -->
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
