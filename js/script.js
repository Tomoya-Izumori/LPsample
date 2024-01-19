var width = $(window).width();

// logo change color
$(function () {
  const changeEle = $("#js-change-color");
  const changePointEle = $("#js-copy-change-point");

  if (changePointEle.length) {
    $(window).scroll(function () {
      const changeEleBottom = changeEle.offset().top + changeEle.outerHeight();
      const changePoint =
        changePointEle.offset().top + changePointEle.outerHeight();
      if (changeEleBottom > changePoint) {
        changeEle.addClass("black");
      } else {
        changeEle.removeClass("black");
      }
    });
  }
});

// slider
$(function () {
  function sliderSetting() {
    var width = $(window).width();
    if (width <= 768) {
      $(".slide").not(".slick-initialized").slick({
        autoplay: true,
        autoplayspeed: 6000,
        dots: true,
        arrows: false,
        variableWidth: false,
        adaptiveHeight: false,
      });
    } else {
      $(".slide.slick-initialized").slick("unslick");
    }
  }
  sliderSetting();

  $(window).resize(function () {
    sliderSetting();
  });
});

// sticky
const stickyItem = document.querySelectorAll(".sticky");
Stickyfill.add(stickyItem);

// nav open-btn
$(function () {
  $("#js-open-btn").on("click", function () {
    $(this).toggleClass("open"); // メニューにopenクラスをつけ外しする
    $("#js-open-nav").toggleClass("open");
  });
});
