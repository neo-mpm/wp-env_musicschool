<!-- フッター -->
<footer class="l-footer">
  <nav class="l-footer__nav" aria-label="フッターナビゲーション">
    <?php
    wp_nav_menu(
      array(
        'menu_class' => 'l-footer__nav-ul',
        'theme_location' => 'footer',
        'container'       => false,
      )
    );
    ?> </nav>
  <div class="l-footer__logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-white.svg" alt="きたむらミュージックスクール">
    </a>
  </div>
  <div class="l-footer__copyright">
    <p>Copyright © 0000 KITAMURA music school Inc. All Rights</p>
  </div>
  <ul class="l-footer__sns-area">
    <li>
      <a href="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-twitter.svg" alt="twitterへのリンク(別タブで開きます)">
      </a>
    </li>
    <li>
      <a href="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook.svg" alt="facebookへのリンク(別タブで開きます)">
      </a>
    </li>
    <li>
      <a href="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-youtube.svg" alt="youtubeへのリンク(別タブで開きます)">
      </a>
    </li>
    <li>
      <a href="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram.svg" alt="instagramへのリンク(別タブで開きます)">
      </a>
    </li>
  </ul>
</footer>

<?php wp_footer(); ?>

</body>

</html>
