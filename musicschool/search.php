<?php get_header(); ?>

<main>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- 検索一覧 -->
  <section class="p-blog-list p-search-result">
    <div class="inner">
      <div class="p-blog-list__contents">
        <?php if (!empty(get_search_query())): ?>
          <?php
          if (have_posts()):
            $total_posts = $wp_query->found_posts;
          ?>
            <div class="p-search-result__text">
              <p>「<span><?php echo get_search_query(); ?></span>」の検索結果</p>
              <p><?php echo $total_posts ?>件</p>
            </div>
            <div class="p-blog-list__items">
              <?php

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
              ?>
            </div>
            <!-- ページャー -->
            <div class="p-blog-list__pager">
              <div class="c-pager">
                <?php wp_pagenavi(); ?>
              </div>
            </div>
          <?php else : ?>
            <div class="p-search-result__no-result">
              <p>検索されたキーワードにマッチする<br class="pc-none">記事はありませんでした。</p>
              <a onclick="history.back()" class="c-button c-button--main">戻る</a>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <div class="p-search-result__no-result">
            <p>検索キーワードが未入力です。</p>
            <a onclick="history.back()" class="c-button c-button--main">戻る</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
