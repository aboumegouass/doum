(function ($) {
  $.simpleTicker = function (element, options) {
    var defaults = {
      speed: 500,
      delay: 4000,
      easing: "swing",
      effectType: "fade",
    };
    var param = {
      ul: "",
      li: "",
      initList: "",
      ulWidth: "",
      liHeight: "",
      tickerHook: "tickerHook",
      effect: {},
    };

    var plugin = this;
    plugin.settings = {};
    var $element = $(element),
      element = element;

    plugin.init = function () {
      plugin.settings = $.extend({}, defaults, options);
      param.ul = element.children("ul");
      param.li = element.find("li");
      param.initList = element.find("li:first");
      param.ulWidth = param.ul.width();
      param.liHeight = param.li.height();

      element.css({ height: param.liHeight });
      param.li.css({ top: "0", left: "0", position: "absolute" });

      switch (plugin.settings.effectType) {
        case "fade":
          plugin.effect.fade();
          break;
        case "roll":
          plugin.effect.roll();
          break;
        case "slide":
          plugin.effect.slide();
          break;
      }
      plugin.effect.exec();
    };

    plugin.effect = {};
    plugin.effect.exec = function () {
      param.initList
        .css(param.effect.init.css)
        .animate(
          param.effect.init.animate,
          plugin.settings.speed,
          plugin.settings.easing
        )
        .addClass(param.tickerHook);
      setInterval(function () {
        element
          .find("." + param.tickerHook)
          .animate(
            param.effect.start.animate,
            plugin.settings.speed,
            plugin.settings.easing
          )
          .next()
          .css(param.effect.next.css)
          .animate(
            param.effect.next.animate,
            plugin.settings.speed,
            plugin.settings.easing
          )
          .addClass(param.tickerHook)
          .end()
          .appendTo(param.ul)
          .css(param.effect.end.css)
          .removeClass(param.tickerHook);
      }, plugin.settings.delay);
    };

    plugin.effect.fade = function () {
      param.effect = {
        init: {
          css: { display: "block", opacity: "0" },
          animate: { opacity: "1", zIndex: "98" },
        },
        start: {
          animate: { opacity: "0" },
        },
        next: {
          css: { display: "block", opacity: "0", zIndex: "99" },
          animate: { opacity: "1" },
        },
        end: {
          css: { display: "none", zIndex: "98" },
        },
      };
    };

    plugin.effect.roll = function () {
      param.effect = {
        init: {
          css: { top: "3em", display: "block", opacity: "0" },
          animate: { top: "0", opacity: "1", zIndex: "98" },
        },
        start: {
          animate: { top: "-3em", opacity: "0" },
        },
        next: {
          css: { top: "3em", display: "block", opacity: "0", zIndex: "99" },
          animate: { top: "0", opacity: "1" },
        },
        end: {
          css: { zIndex: "98" },
        },
      };
    };

    plugin.effect.slide = function () {
      param.effect = {
        init: {
          css: { left: 200, display: "block", opacity: "0" },
          animate: { left: "0", opacity: "1", zIndex: "98" },
        },
        start: {
          animate: { left: -200, opacity: "0" },
        },
        next: {
          css: {
            left: param.ulWidth,
            display: "block",
            opacity: "0",
            zIndex: "99",
          },
          animate: { left: "0", opacity: "1" },
        },
        end: {
          css: { zIndex: "98" },
        },
      };
    };

    plugin.init();
  };

  $.fn.simpleTicker = function (options) {
    return this.each(function () {
      if (undefined == $(this).data("simpleTicker")) {
        var plugin = new $.simpleTiecker(this, options);
        $(this).data("simpleTicker", plugin);
      }
    });
  };
})(jQuery);

$(function () {
  $.simpleTicker($("#js-ticker-roll"), { effectType: "roll" });
});

// Carousel
$(".posts-carousel").slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  prevArrow:
    '<button type="button" data-role="none" class="slick-prev">Previous</button>',
  nextArrow:
    '<button type="button" data-role="none" class="slick-next">Next</button>',
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
// Carousel
$(".posts-carousel-photos").slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  prevArrow:
    '<button type="button" data-role="none" class="slick-prev">Previous</button>',
  nextArrow:
    '<button type="button" data-role="none" class="slick-next">Next</button>',
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});
$(document).ready(function () {
  $(".snapep-latest-news .btn-close").click(function () {
    $(".snapep-latest-news").fadeOut();
  });
  $(".snapep-search-form .btn-close").click(function () {
    $(".snapep-search-form").fadeOut();
  });
  $(".show-seachform-btn").click(function () {
    $(".snapep-search-form").fadeIn().css("display", "flex");
  });
  $(".toggle-primary-navs").click(function () {
    $(".snapep-primary-navbar .menu").slideToggle();
  });
  $(".toggle-top-primary-navs").click(function () {
    $(".snapep-top-navbar .menu").slideToggle();
  });

  $(".carousel-nav.right").click(function () {
    $(".posts-carousel").slickNext();
  });

  $(".fixed-sidebar-content-logo .btn-close").click(function () {
    $(".fixed-sidebar").addClass("hidden");
    $(".fixed-sidebar").removeClass("showen");
    $(".socials .search-bar").slideUp();
  });

  $(".togglenavbar").click(function () {
    $(".fixed-sidebar").removeClass("hidden");
    $(".fixed-sidebar").addClass("showen");
    $(".socials .search-bar").slideUp();
  });
  $(".search-toggle-btn").click(function () {
    $(".fixed-sidebar").addClass("hidden");
    $(".fixed-sidebar").removeClass("showen");
    $(".socials .search-bar").slideToggle();
  });
});
var swiper2 = new Swiper(".mySwiper2", {
  slidesPerView: 3,
  spaceBetween: 10,
  autoplay: true,
  dynamicBullets: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 9,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 9,
    },
    // when window width is >= 640px
    840: {
      slidesPerView: 1,
      spaceBetween: 9,
    },
  },
});
var swiperHero = new Swiper(".hero-swiper", {
  slidesPerView: 1,
  autoplay: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var snapepSlidshow = new Swiper(".snapep-slideshow", {
  grabCursor: true,
  navigation: true,
  autoplay: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
var snapepSlidshow = new Swiper(".snapep-slideshow-for-page", {
  grabCursor: true,
  navigation: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
$(".moreless-button").click(function () {
  $(".moretext").slideToggle();
  if ($(".moreless-button").text() !== "قراءة مزيد...") {
    $(this).text("قراءة أقل...");
  } else {
    $(this).text("قراءة مزيد...");
  }
});

jQuery(function ($) {
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function () {
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $(".animatable");

    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off("scroll", doAnimations);
    }

    // Check all animatables and animate them if necessary
    $animatables.each(function (i) {
      var $animatable = $(this);
      if ($animatable.offset().top + $animatable.height() - 20 < offset) {
        $animatable.removeClass("animatable").addClass("animated");
      }
    });
  };

  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on("scroll", doAnimations);
  $(window).trigger("scroll");
});
$(function () {
  var header = $(".najd-navbar");

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
      header.addClass("scrolled");
    } else {
      header.removeClass("scrolled");
    }
  });
});
$(document).ready(function () {
  $(".demo").slick({
    // prev arrow
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev">Previous</button>',
    // next arrow
    nextArrow:
      '<button type="button" data-role="none" class="slick-next">Next</button>',
    autoplay: true,

    // # of slides to show at a time
    slidesToShow: 4,
    centerMode: true,
    centerPadding: "60px",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          dots: true,
        },
      },
      {
        breakpoint: 300,
        settings: "unslick", // destroys slick
      },
    ],
  });
});

$(".hero-slider").slick({
  slidesToShow: 1,
});
$(".hero-carousel").slick({
  centerMode: true,
  centerPadding: "60px",
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 1,
      },
    },
  ],
});
