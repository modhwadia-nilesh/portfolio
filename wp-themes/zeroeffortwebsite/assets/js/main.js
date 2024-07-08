$(function () {
  let didScroll;
  let lastScrollTop = 102;
  let navbarHeight = $(".navbar").outerHeight();

  $(window).scroll(function (event) {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      let currentScrollTop = $(this).scrollTop();

      if (currentScrollTop > lastScrollTop && currentScrollTop > navbarHeight) {
        // Scroll Down
        $(".navbar").removeClass("navDown").addClass("navUp");
      } else {
        // Scroll Up
        if (currentScrollTop + $(window).height() < $(document).height()) {
          $(".navbar").removeClass("navUp").addClass("navDown");
        }
      }
      if (currentScrollTop < navbarHeight) {
        $(".navbar").removeClass("navDown");
      }
      lastScrollTop = currentScrollTop;
      didScroll = false;
    }
  }, 250);

  $(".contactUs__reachOut li").hover(function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  if ($(window).width() < 992) {
    $(".hasChildren").click(function () {
      $(".hasChildren")
        .not(this)
        .find("ul")
        .hide("slow")
        .end()
        .removeClass("rotateArrow");
      $(this)
        .children("ul")
        .slideToggle("slow")
        .end()
        .toggleClass("rotateArrow");
    });
  }

  $("#customSwitch1").change(function () {
    const checked = $(this).is(":checked");
    $(".first-label, .pricingPlans__packages-monthly")
      .toggleClass("bold", !checked)
      .toggleClass("normal", checked);
    $(".last-label, .pricingPlans__packages-yearly")
      .toggleClass("normal", !checked)
      .toggleClass("bold", checked);
  });

  $(".navbar-toggler-icon").click(function () {
    $(".navbar-toggler-icon").toggleClass("menuOpen");
  });
});
