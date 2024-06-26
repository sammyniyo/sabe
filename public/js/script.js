$(document).ready(function () {
  "use strict";

  //Copyright Date
  var newYear = document.querySelector(".newYear");
  var newYearDesktop = document.querySelector(".newYearDesktop");
  var newYearMobile = document.querySelector(".newYearMobile");
  newYear.innerHTML = new Date().getFullYear();
  newYearDesktop.innerHTML = new Date().getFullYear();
  newYearMobile.innerHTML = new Date().getFullYear();

  $(window).on("scroll", function () {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
      $("#navigationBar").addClass("sticky-nav");
    } else {
      $("#navigationBar").removeClass("sticky-nav");
    }
  });

  // my slick slider options
  $(".testimonial-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-previous"><i class="ph-arrow-left"></i> Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next <i class="ph-arrow-right"></i></button>',
    autoplay: true,
    autoplaySpeed: 2000,
  });
  // Feedback slider
  $(".feedback-slider").slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    prevArrow: '<button type="button" class="slick-previous"><i class="ph-arrow-left"></i> Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next <i class="ph-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  //  Isotope Js
  // init Isotope
  var $grid = $(".grid").isotope({
    // options
  });
  // filter functions

  // bind filter button click
  // filter items on button click
  $(".filters-button-group").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({filter: filterValue});
  });

  // change is-checked class on buttons
  $(".button-group").each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on("click", "button", function () {
      $buttonGroup.find(".is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });
  });

  // counter-up
  $(".counter--content-number").counterUp({});

  // more blog load
  if (window.innerWidth < 768) {
    $(function () {
      $("body").on("click touchstart", ".load-more", function (e) {
        e.preventDefault();
        $(".next-team-member:hidden").slice(0, 2).slideDown();
        if ($(".next-team-member:hidden").length == 0) {
          $(".load-more").css("display", "none");
        }
      });
    });
  }
  //Scroll It
  $(function () {
    $.scrollIt({
      scrollTime: 600, // how long (in ms) the animation takes
      activeClass: "active", // class given to the active nav element
      topOffset: -175,
    });
  });

  // Enable Tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Show share button
  $(window).on("scroll", function () {
    var windscroll = $(window).scrollTop();
    if (windscroll <= 450) {
      $(".blog-single-share").hide();
    } else {
      $(".blog-single-share").show();
    }

    if (windscroll >= 470) {
      $("#blog-share").addClass("active");
      $(".tooltip").addClass("active");
    } else {
      $("#blog-share").removeClass("active");
      $(".tooltip").removeClass("active");
    }
  });

  // magnific popup
  $(".property-details-banner").magnificPopup({
    delegate: "a", // child items selector, by clicking on it popup will open
    gallery: {
      enabled: true,
    },
    type: "image",
    // other options
  });

  $(".property-details-banner-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".property-details-banner-nav",
  });
  $(".property-details-banner-nav").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: ".property-details-banner-for",
    dots: false,
    arrows: false,
    focusOnSelect: true,
    vertical: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          vertical: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  if (document.getElementById("property-details") != null) {
    if (screen.width >= 992) {
      var totalPages = $(".property-details-banner-nav .slick-slide:not(.slick-cloned)").length;
      console.log(totalPages);
      document.getElementById("totalslide").innerHTML = totalPages + " photos";
    }
  }

  //  AOS Initialize
  AOS.init();
});

//Custom Dropdown Select
var selectBtn = document.getElementsByClassName("customdropdown"),
  dropdownMenu = document.getElementsByClassName("dropdownMenu");

for (i = 0; i < selectBtn.length; i++) {
  selectBtn[i].onclick = function () {
    if (this.className.indexOf("active") > -1) {
      for (j = 0; j < selectBtn.length; j++) {
        removeClass(selectBtn[j], "active");
      }
    } else {
      addClass(this, "active");
    }
  };
}
for (i = 0; i < dropdownMenu.length; i++) {
  var child = dropdownMenu[i].children;
  for (j = 0; j < child.length; j++) {
    child[j].onclick = function () {
      var text = this.innerHTML;
      this.parentNode.previousElementSibling.children[0].innerHTML = text;
      toggleClass(this.parentNode, "showMenu");
    };
  }
}

window.addEventListener("click", function (event) {
  for (i = 0; i < selectBtn.length; i++) {
    if (event.target != selectBtn[i].children[0]) {
      removeClass(selectBtn[i], "active");
    }
  }
});

function toggleClass(el, classToToggle) {
  var classN = el.className;
  if (classN.indexOf(classToToggle) > -1) {
    el.className = classN.replace(" " + classToToggle, "");
  } else {
    el.className = classN + " " + classToToggle;
  }
}
function addClass(el, classToToggle) {
  var classN = el.className;
  if (classN.indexOf(classToToggle) < 1) {
    el.className = classN + " " + classToToggle;
  }
}
function removeClass(el, classToToggle) {
  var classN = el.className;
  if (classN.indexOf(classToToggle) > -1) {
    el.className = classN.replace(" " + classToToggle, "");
  }
}

$(".filter-content .dropdown-menu").click(function (e) {
  e.stopPropagation();
});
$("a.close-filter-content").click(function () {
  $("#dlDropDown").dropdown("toggle");
});
