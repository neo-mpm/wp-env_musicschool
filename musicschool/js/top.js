'use strict';

$(function () {
  //TOP スライダー
  $(".slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  //TOP FAQのアコーディオン
  $(".p-faq-item__answer").hide();
  $(".p-faq-item").on("click", function () {
    $(this).find(".p-faq-item__img").toggleClass("is-active");
    $(this).find(".p-faq-item__answer").slideToggle(400).toggleClass("u-flex");
  });

})