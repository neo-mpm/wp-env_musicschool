<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
  <input type="search" name="s" placeholder="検索ワード">
  <button type="submit" class="search-btn">
    <span>
      <img src="<?php echo get_template_directory_uri() ?>/images/common/icon-search.svg" alt="検索">
    </span>
  </button>
</form>
