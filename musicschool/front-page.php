<?php get_header(); ?>

<main>
  <!-- MV -->
  <section class="p-top-mv">
    <div class="p-top-mv__image">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/FV.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/FV-sp.jpg" alt="「音楽で生きる」を叶えるミュージックスクール">
      </picture>
    </div>
    <div class="p-top-mv__contents">
      <h2>「音楽で生きる」<br class="pc-none">を叶える<br>ミュージックスクール</h2>
    </div>
  </section>

  <!-- コンセプト -->
  <section id="concept" class="p-concept">
    <div class="inner">
      <div class="p-concept__head">
        <div class="p-concept__title">
          <h2>全人類、<br class="pc-none">ミュージシャン計画。</h2>
        </div>
        <div class="p-concept__description">
          <p>私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
        </div>
      </div>
      <div class="p-concept__contents">
        <div class="p-concept__top-deco">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/semicircle.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/semicircle-sp.svg" alt="">
          </picture>
        </div>
        <div class="p-concept__items">
          <div class="p-concept__item p-concept-item">
            <div class="p-concept-item__pri">enthusiasm</div>
            <div class="p-concept-item__circle"></div>
            <div class="p-concept-item__sec">熱狂し</div>
          </div>
          <div class="p-concept__item p-concept-item">
            <div class="p-concept-item__pri">envision</div>
            <div class="p-concept-item__circle"></div>
            <div class="p-concept-item__sec">想像し</div>
          </div>
          <div class="p-concept__item p-concept-item">
            <div class="p-concept-item__pri">effulgent</div>
            <div class="p-concept-item__circle">
              <span></span>
            </div>
            <div class="p-concept-item__sec">輝く存在へ</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- メッセージ -->
  <section id="message" class="p-message bg-red">
    <div class="inner">
      <div class="p-message__title">
        <h2 class="c-head-middle c-head-middle--white">音楽業界初！<br>収益化までサポートする<br class="pc-none">ミュージックスクール</h2>
      </div>
      <div class="p-message__contents">
        <div class="p-message__text">
          <p>楽器や作詞作曲などの<br class="pc-none">技術・知識はもちろんのこと<br>自分で稼ぎつづけるための<br class="pc-none">ビジネス面もサポートします！</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 選ばれる理由 -->
  <section id="reason" class="p-reason">
    <div class="inner">
      <div class="p-reason__title">
        <h2 class="c-head-middle">きたむらミュージック<br class="pc-none">スクールが選ばれる理由</h2>
      </div>
      <div class="p-reason__contents">
        <div class="p-reason__items">
          <div class="p-reason__item p-reason-item">
            <div class="p-reason-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/reason01.jpg" alt="技術面はプロによるマンツーマン授業！">
            </div>
            <div class="p-reason-item__textarea">
              <div class="p-reason-item__head">
                <h3>技術面はプロによるマンツーマン授業！</h3>
              </div>
              <div class="p-reason-item__text">
                <p>第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
              </div>
            </div>
          </div>
          <div class="p-reason-item">
            <div class="p-reason-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/reason02.jpg" alt="収益化するためのビジネスサポート！">
            </div>
            <div class="p-reason-item__textarea">
              <div class="p-reason-item__head">
                <h3>収益化するためのビジネスサポート！</h3>
              </div>
              <div class="p-reason-item__text">
                <p>コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。</p>
              </div>
            </div>
          </div>
          <div class="p-reason-item">
            <div class="p-reason-item__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/reason03.jpg" alt="24時間365日使える練習ROOMを完備！">
            </div>
            <div class="p-reason-item__textarea">
              <div class="p-reason-item__head">
                <h3>24時間365日使える練習ROOMを完備！</h3>
              </div>
              <div class="p-reason-item__text">
                <p>一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 生徒さんたちの声 -->
  <section id="voice" class="p-voice bg-red">
    <div class="inner">
      <div class="p-voice__title">
        <h2 class="c-head-middle c-head-middle--white">生徒さんたちの声</h2>
      </div>
      <div class="p-voice__contents">
        <div class="p-voice__items slider">
          <?php
          $args = array(
            'post_type' => 'result',
            'posts_per_page' => 6,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="p-voice__item p-voice-item slick-slide">
                <div class="p-voice-item__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/no-image.png" alt="No image">
                  <?php endif; ?>
                </div>
                <div class="p-voice-item__head">
                  <h3><?php the_field('job'); ?>&emsp;<?php the_field('name'); ?>さん</h3>
                </div>
                <div class="p-voice-item__text">
                  <p><?php echo wp_trim_words(get_the_content(), 42, '...'); ?></p>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ご利用の流れ -->
  <section id="flow" class="p-flow">
    <div class="inner">
      <div class="p-flow__title">
        <h2 class="c-head-middle">ご利用の流れ</h2>
      </div>
      <div class="p-flow__contents">
        <div class="p-flow__items">

          <div class="p-flow__item p-flow-item">
            <div class="p-flow-item__circle">
              <span></span>
            </div>
            <div class="p-flow-item__head">
              <h3>お問い合わせ</h3>
            </div>
            <div class="p-flow-item__text">
              <p>まずはフォームまたはメールにてお問い合わせください。<br>ヒアリングの日程を調整します。</p>
            </div>
          </div>
          <div class="p-flow__item p-flow-item">
            <div class="p-flow-item__circle"></div>
            <div class="p-flow-item__head">
              <h3>ヒアリング</h3>
            </div>
            <div class="p-flow-item__text">
              <p>現在の技術面や将来の目標などをお伺いします。<br>悩みや不安な事もお気軽にご相談ください。</p>
            </div>
          </div>
          <div class="p-flow__item p-flow-item">
            <div class="p-flow-item__circle"></div>
            <div class="p-flow-item__head">
              <h3>プランのご提案</h3>
            </div>
            <div class="p-flow-item__text">
              <p>ライフスタイルや目標によって最適なプランをご提案します。<br>継続できるようサポートいたします。</p>
            </div>
          </div>
          <div class="p-flow__item p-flow-item">
            <div class="p-flow-item__circle"></div>
            <div class="p-flow-item__head">
              <h3>ご入学</h3>
            </div>
            <div class="p-flow-item__text">
              <p>お申し込み完了後、レッスンがスタートします。<br>マンツーマン指導なので、いつからでもスタートが可能です。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- よくあるご質問 -->
  <section id="faq" class="p-faq">
    <div class="inner">
      <div class="p-faq__title">
        <h2 class="c-head-middle">よくあるご質問</h2>
      </div>
      <div class="p-faq__contents">
        <div class="p-faq__items">
          <dl class="p-faq__item p-faq-item">
            <dt class="p-faq-item__question">
              <div class="p-faq-item__marker u-bg-black">Q</div>
              <div class="p-faq-item__text">
                <p>どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
              </div>
              <div class="p-faq-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽">
              </div>
            </dt>
            <dd class="p-faq-item__answer">
              <div class="p-faq-item__marker u-bg-red">A</div>
              <div class="p-faq-item__text">
                <p>音楽好きな方が約半年で平均月15万円稼げるようになっています。</p>
              </div>
            </dd>
          </dl>
          <dl class="p-faq__item p-faq-item">
            <dt class="p-faq-item__question">
              <div class="p-faq-item__marker u-bg-black">Q</div>
              <div class="p-faq-item__text">
                <p>途中でプランを変更することは可能ですか？</p>
              </div>
              <div class="p-faq-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽">
              </div>
            </dt>
            <dd class="p-faq-item__answer">
              <div class="p-faq-item__marker u-bg-red">A</div>
              <div class="p-faq-item__text">
                <p>途中でプラン変更も可能です。<br class="pc-none">毎月15日までに申請すれば翌月からプランが変更となります。</p>
              </div>
            </dd>
          </dl>
          <dl class="p-faq__item p-faq-item">
            <dt class="p-faq-item__question">
              <div class="p-faq-item__marker u-bg-black">Q</div>
              <div class="p-faq-item__text">
                <p>入学金などの分割払いはできますか？</p>
              </div>
              <div class="p-faq-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽">
              </div>
            </dt>
            <dd class="p-faq-item__answer">
              <div class="p-faq-item__marker u-bg-red">A</div>
              <div class="p-faq-item__text">
                <p>入学金はクレジットカードのみ分割払い可能です。</p>
              </div>
            </dd>
          </dl>
          <dl class="p-faq__item p-faq-item">
            <dt class="p-faq-item__question">
              <div class="p-faq-item__marker u-bg-black">Q</div>
              <div class="p-faq-item__text">
                <p>休学することも可能ですか？</p>
              </div>
              <div class="p-faq-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽">
              </div>
            </dt>
            <dd class="p-faq-item__answer">
              <div class="p-faq-item__marker u-bg-red">A</div>
              <div class="p-faq-item__text">
                <p>休学理由によりますが、基本的に休学することは可能です。</p>
              </div>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- ブログ -->
  <section id="blog" class="p-blog">
    <div class="inner">
      <div class="p-blog__title">
        <h2 class="c-head-middle">ブログ</h2>
      </div>
      <div class="p-blog__contents">
        <div class="p-blog__items u-grid-pc3sp1-g5">
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
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="p-blog__item c-blog-item">
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
                      $terms = get_the_terms(get_the_ID(), 'blog_cate');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?>
                    </p>
                  </div>
                </div>
                <div class="c-blog-item__title">
                  <h3 class="sp-none"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></h3>
                  <h3 class="pc-none"><?php echo wp_trim_words(get_the_title(), 35, '...'); ?></h3>
                </div>
                <div class="c-blog-item__date">
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
        <div class="p-blog__link">
          <a href="<?php echo esc_url(home_url('blog')); ?>">ブログ一覧へ</a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
