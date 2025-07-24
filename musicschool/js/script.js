'use strict';

$(function () {
  $('body').show();

  // ハンバーガーメニュー
  $('.c-hamburger').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.l-header__nav').removeClass('open');
    } else {
      $(this).addClass('active');
      $('.l-header__nav').addClass('open');
    }
  });

  //問い合わせボタンとトップへ戻るボタンを途中から表示
  const fixArea = $('.p-fix-area');
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 100) {
      fixArea.fadeIn();
    } else {
      fixArea.fadeOut();
    }
  });

  //画面の高さまで表示領域を広げる
  const $footer = $('.l-footer');
  if (window.innerHeight > $footer.offset().top + $footer.outerHeight()) {
    console.log($footer.offset().top);
    $footer.attr({
      style: 'position:fixed; width:100%; top:' + (window.innerHeight - $footer.outerHeight()) + 'px;',
    });
  }
});

$(function () {});

$(function () {});
