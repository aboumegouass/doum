jQuery(document).ready(function ($) {
  $("#newsTicker1").breakingNews();
  //$('#newsTicker2').data('breakingNews').next();

  $("#newsTicker2").breakingNews({
    direction: "rtl",
  });

  $("#newsTicker3").breakingNews({
    themeColor: "#f9a828",
    effect: "slide-left",
  });

  $("#newsTicker4").breakingNews({
    themeColor: "#11cbd7",
    source: {
      type: "rss",
      usingApi: "rss2json",
      rss2jsonApiKey: "02nuttg6qloiouhhvh4wg40oykk710khiy74nxwq",
      url: "https://a7rarpress.blogspot.com/feeds/posts/default?alt=rss",
      limit: 7,
      showingField: "title",
      linkEnabled: true,
      target: "_blank",
      seperator:
        '<span class="bn-seperator" style="background-image:url(https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5Nm3hEdfbFa5CVyDk2q5w2FnVR94Ut9Ge4X38-l0JdtxjcZKDCz0_9xPWErTbho_VKrVIL7JAJcTgu3jqRdw38gR_avDeNYGEoXiUxJg8J4CnNq9hFiYI03lZnn-nHMaUl9u_Bcj29YonyQrPCkGVGsUmrjqFDFPhbAINKtx6iztC2jXb25EuDyafoKs/s1600/logerstampp.png);"></span>',
      errorMsg: "RSS Feed not loaded. Please try again.",
    },
  });

  $("#newsTicker5").breakingNews({
    effect: "typography",
  });

  $("#newsTicker6").breakingNews({
    source: {
      type: "json",
      url: "https://jsonplaceholder.typicode.com/posts",
      limit: 20,
      showingField: "title",
      linkEnabled: false,
      target: "_blank",
      seperator:
        '<span class="bn-seperator" style="background-image:url(img/cnn-logo.png);"></span>',
      errorMsg: "Json file not loaded. Please check the settings.",
    },
  });

  $("#newsTicker9").breakingNews({
    effect: "fade",
    themeColor: "#ef7b7b",
  });

  $("#newsTicker10").breakingNews({
    effect: "slide-down",
    themeColor: "#2eb872",
    height: 50,
    fontSize: "18px",
  });

  $("#newsTicker11").breakingNews({
    effect: "slide-up",
  });

  $("#newsTicker12").breakingNews({
    effect: "typography",
    direction: "rtl",
    themeColor: "#08c299",
  });

  $("#newsTicker13").breakingNews({
    effect: "slide-right",
  });

  $("#newsTicker14").breakingNews();

  $("#newsTicker15").breakingNews({
    position: "fixed-bottom",
    borderWidth: 3,
    height: 50,
    themeColor: "#ce2525",
  });
});
var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-36251023-1"]);
_gaq.push(["_setDomainName", "jqueryscript.net"]);
_gaq.push(["_trackPageview"]);

(function () {
  var ga = document.createElement("script");
  ga.type = "text/javascript";
  ga.async = true;
  ga.src =
    ("https:" == document.location.protocol ? "https://ssl" : "http://www") +
    ".google-analytics.com/ga.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(ga, s);
})();

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
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 2,
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
