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

// on mask
$(function () {
  var scroll;
  const changeEle = $(".js-on-mask");
  const changeElePoint = changeEle.offset().top;
  $(window).on("scroll", function () {
    scroll = $(window).scrollTop();
    if (scroll >= changeElePoint) {
      changeEle.addClass("on-mask");
    } else {

    }
  });
});

// anchor-link
$(function () {
  $('a.js-anchor-link[href^="#"]').click(function () {
    var adjust;
    if ($(window).width() <= 768) {
      adjust = 0;
    } else {
      adjust = 40;
    }
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - adjust;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

// slider generic
$(function () {
  function sliderSetting() {
    var width = $(window).width();
    if (width <= 768) {
      $(".slide").not(".slick-initialized").slick({
        autoplay: true,
        autoplayspeed: 6000,
        dots: true,
        arrows: true,
        prevArrow: '<span class="slide-arrow prev-arrow"></span>',
        nextArrow: '<span class="slide-arrow next-arrow"></span>',
        variableWidth: false,
        adaptiveHeight: false,
        slidesToShow: 1,
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

// slider flow
$(function () {
  function sliderSetting() {
    var width = $(window).width();
    if (width <= 768) {
      $(".slide-flow").not(".slick-initialized").slick({
        autoplayspeed: 6000,
        infinite: false,
        dots: true,
        arrows: true,
        prevArrow: '<span class="slide-arrow prev-arrow"></span>',
        nextArrow: '<span class="slide-arrow next-arrow"></span>',
        variableWidth: false,
        adaptiveHeight: false,
        slidesToShow: 1,
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

// Typing animation
function TextTypingAnime() {
  $(".js-typing").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var thisChild = "";
    if (scroll >= elemPos - windowHeight) {
      thisChild = $(this).children(); //spanタグを取得
      //spanタグの要素の１つ１つ処理を追加
      thisChild.each(function (i) {
        var time = 62;
        //時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
        $(this)
          .delay(time * i)
          .fadeIn(time);
      });
    } else {
      thisChild = $(this).children();
      thisChild.each(function () {
        $(this).stop(); //delay処理を止める
        // $(this).css("display", "none"); //spanタグ非表示
      });
    }
  });
}
$(window).scroll(function () {
  TextTypingAnime(); /* アニメーション用の関数を呼ぶ*/
});
$(window).on("load", function () {
  //spanタグを追加する
  var element = $(".js-typing");
  element.each(function () {
    var text = $(this).html();
    var textbox = "";
    text.split("").forEach(function (t) {
      if (t !== " ") {
        textbox += "<span>" + t + "</span>";
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  TextTypingAnime(); /* アニメーション用の関数を呼ぶ*/
});

// switch tab
$(function () {
  var tabSwitchBtn = $(".js-tab-switch-btn");
  var tabContents = $(".js-tab-contents");

  tabSwitchBtn.click(function () {
    var target = $(this).data("target");
    tabSwitchBtn.removeClass("-active");
    tabSwitchBtn.filter('[data-target="' + target + '"]').addClass("-active");
    tabContents.removeClass("-active");
    tabContents.filter('[data-target="' + target + '"]').addClass("-active");

    var currentUrl = new URL(window.location);
    currentUrl.searchParams.set("tab", target);
    history.pushState({}, "", currentUrl);
  });
});
