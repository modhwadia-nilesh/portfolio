$(document).ready(function () {
  /* Mobile Menu Open and Close */
  $(".dropdown").click(function () {
    $(".dropdown-menu").not($(this).find(".dropdown-menu")).slideUp(400);
    $(this).find(".dropdown-menu").slideToggle(400);
    $(this).toggleClass("iconChange");
    $(".dropdown").not(this).removeClass("iconChange");
  });

  /* Screen resize that the class is add on 991px screen */
  $(window).resize(function () {
    if ($("body").width() <= 991) {
      $(".dropdown-menu").css("display", "none");
      $(".dropdown").removeClass("iconChange");
    } else {
      $(".dropdown-menu").css("display", "block");
    }
  });

  /* On load Screen the class is add on 991px screen */
  if ($(window).width() <= 991) {
    $(".dropdown-menu").css("display", "none");
    $(".dropdown").removeClass("iconChange");
  } else {
    $(".dropdown-menu").css("display", "block");
  }

  $(".navbar-toggler").click(function () {
    $("body").toggleClass("openMenu");
  });

  /* On Scroll Navbar Background Change */
  let didScroll;
  let lastScrollTop = 102;
  let navbarHeight = $("header").outerHeight();

  $(window).scroll(function (event) {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      let currentScrollTop = $(this).scrollTop();

      if (currentScrollTop > lastScrollTop && currentScrollTop > navbarHeight) {
        // Scroll Down
        $(".site__header").removeClass("navbar-down").addClass("navbar-up");
      } else {
        // Scroll Up
        if (currentScrollTop + $(window).height() < $(document).height()) {
          $(".site__header").removeClass("navbar-up").addClass("navbar-down");
        }
      }
      if (currentScrollTop < navbarHeight) {
        $(".site__header").removeClass("navbar-down");
      }
      lastScrollTop = currentScrollTop;
      didScroll = false;
    }
  }, 250);

  /* Video Play and Pause */

  /* Play btn */
  $(".playBtn").on("click", function (event) {
    if (
      $(this).siblings("#video").get(0).pause &&
      $(this).siblings("#video").prop("muted")
    ) {
      $(this).prev().get(0).play();
      $(this).siblings("#video").prop("muted", true);
      $(this).next().css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).siblings(".mutedVolumeBtn").css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).css({
        visibility: "hidden",
        opacity: "0",
      });
    } else if ($(this).siblings("#video").get(0).pause) {
      $(this).prev().get(0).play();
      $(this).nextUntil(".mutedVolumeBtn").css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).css({
        visibility: "hidden",
        opacity: "0",
      });
    } else {
      $(this).prev().get(0).pause();
      $(this).nextUntil(".mutedVolumeBtn").css({
        visibility: "hidden",
        opacity: "0",
      });
      $(this).css({
        visibility: "visible",
        opacity: "1",
      });
    }
  });

  /* Video ended */
  $("#video").on("ended", function (event) {
    $(this).nextAll().css({
      visibility: "hidden",
      opacity: "0",
    });
    $(this).next().css({
      visibility: "visible",
      opacity: "1",
    });
  });

  /* Pause btn */
  $(".pauseBtn").on("click", function (event) {
    if ($(this).siblings("#video").get(0).pause) {
      $(this).siblings("#video").get(0).pause();
      $(this).nextAll().css({
        visibility: "hidden",
        opacity: "0",
      });
      $(this).prev().css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).css({
        visibility: "hidden",
        opacity: "1",
      });
    } else {
      $(this).siblings("#video").get(0).play();
      $(this).nextUntil(".mutedVolumeBtn").css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).prev().css({
        visibility: "hidden",
        opacity: "0",
      });
      $(this).css({
        visibility: "visible",
        opacity: "1",
      });
    }
  });

  /* Volume btn */
  $(".volumeBtn").on("click", function (event) {
    if ($(this).siblings("#video").prop("muted")) {
      $(this).siblings("#video").prop("muted", false);
      $(this).css({
        visibility: "visible",
        opacity: "1",
      });
      $(this).next().css({
        visibility: "hidden",
        opacity: "0",
      });
    } else {
      $(this).siblings("#video").prop("muted", true);
      $(this).css({
        visibility: "hidden",
        opacity: "0",
      });
      $(this).next().css({
        visibility: "visible",
        opacity: "1",
      });
    }
  });

  /* Muted Volume btn */
  $(".mutedVolumeBtn").on("click", function (event) {
    $(this).siblings("#video").prop("muted", false);
    $(this).css({
      visibility: "hidden",
      opacity: "0",
    });
    $(this).prev().css({
      visibility: "visible",
      opacity: "1",
    });
  });
});
