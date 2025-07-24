<?php get_header(); ?>

<main>

  <div class="p-child-mv">
    <div class="p-child-mv__image">
      <picture>
        <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/images/plan/plan-mv.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/plan/plan-mv-sp.jpg" alt="プラン・料金">
      </picture>
    </div>
    <div class="p-child-mv__contents">
      <h1 class="c-headline-text">プラン・料金</h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- 料金体系 -->
  <section class="plan-structure">
    <div class="inner">
      <div class="plan-structure__title">
        <h2 class="c-head-lower">料金体系</h2>
      </div>
      <div class="plan-structure__contents">
        <div class="plan-structure__items">
          <div class="plan-structure__item">
            <p>入会金 39,000円</p>
          </div>
          <div class="plan-structure__sign">
            <span class="c-plus-icon"></span>
          </div>
          <div class="plan-structure__item">
            <p>月額料金</p>
          </div>
        </div>
        <div class="plan-structure__text">
          <p>きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- プラン内容・月額料金 -->
  <section class="plan-table">
    <div class="inner">
      <div class="plan-table__title">
        <h2 class="c-head-lower head-lower--plan-table">プラン内容・月額料金</h2>
      </div>
      <div class="plan-table__contents">
        <div class="plan-table__table">
          <div class="plan-table__table-inner">
            <table class="plan-table__table plan-table-table">
              <thead>
                <tr>
                  <th></th>
                  <td>
                    <div class="th-inner">
                      <p>ベーシック<br class="pc-none">プラン</p>
                    </div>
                  </td>
                  <td>
                    <div class="th-inner">
                      <p><span>おすすめ</span>スタンダード<br class="pc-none">プラン</p>
                    </div>
                    </th>
                  <td>
                    <div class="th-inner">
                      <p>プレミアム<br class="pc-none">プラン</p>
                    </div>
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>月額料金</th>
                  <td>39,000円</td>
                  <td>59,000円</td>
                  <td>128,000円</td>
                </tr>
                <tr>
                  <th>マンツーマン授業</th>
                  <td>
                    <span class="c-circle"></span>
                    <p>週１回</p>
                  </td>
                  <td>
                    <span class="c-circle c-circle--red"></span>
                    <p>週２回</p>
                  </td>
                  <td>
                    <span class="c-circle"></span>
                    <p>無制限</p>
                  </td>
                </tr>
                <tr>
                  <th>ビジネス基本講座</th>
                  <td>
                    <span class="c-circle"></span>
                  </td>
                  <td>
                    <span class="c-circle c-circle--red"></span>
                  </td>
                  <td>
                    <span class="c-circle"></span>
                  </td>
                </tr>
                <tr>
                  <th>練習ROOM利用</th>
                  <td>
                    <span class="c-circle"></span>
                    <p>月10時間</p>
                  </td>
                  <td>
                    <span class="c-circle c-circle--red"></span>
                    <p>月20時間</p>
                  </td>
                  <td>
                    <span class="c-circle"></span>
                    <p>無制限</p>
                  </td>
                </tr>
                <tr>
                  <th>ビジネスコンサル</th>
                  <td>
                    <span class="c-line"></span>
                  </td>
                  <td>
                    <span class="c-circle c-circle--red"></span>
                    <p>月２回</p>
                  </td>
                  <td><span class="c-circle"></span>
                    <p>月３回</p>
                  </td>
                </tr>
                <tr>
                  <th>コミュニティ<br class="pc-none">参加資格</th>
                  <td>
                    <span class="c-line"></span>
                  </td>
                  <td>
                    <span class="c-line"></span>
                  </td>
                  <td>
                    <span class="c-circle"></span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="plan-table__anno">
          <p class="plan-table-attention">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/fix-area'); ?>

</main>

<?php get_footer(); ?>
