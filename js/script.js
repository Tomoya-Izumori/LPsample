var width = $(window).width();

$(function () {
  function sliderSetting() {
    var width = $(window).width();
    if (width <= 768) {
      $('.slide').not('.slick-initialized').slick({
        autoplay: true,
        autoplayspeed: 6000,
        dots: true,
        arrows: false,
        variableWidth: false,
        adaptiveHeight: false,
      });
    } else {
      $('.slide.slick-initialized').slick('unslick');
    }
  }
  sliderSetting();

  $(window).resize(function () {
    sliderSetting();
  });
});


const stickyItem = document.querySelectorAll('.sticky');
Stickyfill.add(stickyItem);

$(function () {
  $('#js-open-btn').on("click", function () {
    $(this).toggleClass('open');  // メニューにopenクラスをつけ外しする
    $('#js-open-nav').toggleClass('open');
  });
});