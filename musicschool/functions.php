<?php
// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
function custom_theme_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');

// --------------------------------------------------
//ファイル読み込み
// --------------------------------------------------
function add_files()
{
    $now = date('YmdHis');

    // css登録
    wp_register_style('common-style', get_theme_file_uri('/css/style.css'), array(), $now);

    // 共通CSS
    wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), NULL);
    wp_enqueue_style('common-style');

    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', "", NULL, false);

    //JS登録
    wp_register_script('common-script', get_theme_file_uri('/js/script.js'), array('jquery'), $now, true);

    // 共通のJS
    wp_enqueue_script('slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), NULL, true);
    wp_enqueue_script('common-script');

    if (is_front_page()) {
        wp_enqueue_script('top-script', get_theme_file_uri('/js/top.js'), array('jquery'), $now, true);
    }
}
add_action('wp_enqueue_scripts', 'add_files');

/**
 * メインクエリーの場合、カスタム投稿のアーカイブページの表示件数を指定
 *
 * @param WP_Query $query WP_Queryインスタンス
 */
function my_page_conditions($query)
{
    // 管理画面ではなく、メインクエリの場合のみ実行
    if (!is_admin() && $query->is_main_query()) {

        // カスタム投稿タイプ 'blog' または 'result' のアーカイブページの場合
        if (is_post_type_archive(['blog', 'result'])) {
            $query->set('posts_per_page', 10);
        }

        // 検索結果ページの場合
        if ($query->is_search()) {
            $query->set('post_type', 'blog');
        }
    }
}
add_action('pre_get_posts', 'my_page_conditions');

//管理画面で 投稿メニュー を非表示
function remove_menus()
{
    global $menu;
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

//管理画面「外観＞メニュー」 を表示
function register_my_menus()
{
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'register_my_menus');
