    <!-- サイドバー -->
    <div class="l-two-col-container__side">
      <div class="p-side-mail-magazine">
        <div class="p-side-mail-magazine__title c-side-title">
          <p>無料メールマガジン</p>
        </div>
        <div class="p-side-mail-magazine__contents">
          <div class="p-side-mail-magazine__banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/banner.jpg" alt="">
            <p>バナー広告</p>
          </div>
        </div>
      </div>
      <div class="p-side-search">
        <div class="p-side-search__title c-side-title">
          <p>ブログ内を検索</p>
        </div>
        <div class="p-side-search__contents">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="p-side-recommend">
        <div class="p-side-recommend__title c-side-title">
          <p>おすすめの記事</p>
        </div>
        <div class="p-side-recommend__contents">
          <div class="p-side-recommend__items">
            <?php
            $args = array(
              'posts_per_page' => 3,
              'post_type' => 'blog',
              'taxonomy' => 'blog_recommend',
              'term' => 'recommend',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
              while ($the_query->have_posts()): $the_query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="p-side-recommend__item c-blog-list-item c-blog-list-item--recommend">
                  <div class="c-blog-list-item__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                    <?php endif; ?>
                  </div>
                  <div class="c-blog-list-item__textarea">
                    <div class="c-blog-list-item__title">
                      <h3><?php echo wp_trim_words(get_the_title(), 15, '...'); ?></h3>
                    </div>
                  </div>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>

          </div>
        </div>
      </div>
      <div class="p-side-category">
        <div class="p-side-category__title c-side-title">
          <p>カテゴリー</p>
        </div>
        <div class="p-side-category__contents">
          <ul>
            <?php
            $terms = get_terms([
              'taxonomy' => 'blog_cate',
              'hide_empty' => true,
            ]);
            if (!is_wp_error($terms) && !empty($terms)) :
              foreach ($terms as $term):
                $term_link = get_term_link($term->term_id);
            ?>
                <li>
                  <a href="<?php echo esc_url($term_link); ?>" class="c-blog-section__category-link">
                    <?php echo esc_html($term->name); ?>
                  </a>
                </li>
            <?php
              endforeach;
            endif;
            ?>
          </ul>
        </div>
      </div>
    </div>
