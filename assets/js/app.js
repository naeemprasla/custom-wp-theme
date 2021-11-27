(function ($) {
  //Check OS
  if (navigator.userAgent.indexOf("Mac OS X") != -1) {
    $("body").addClass("mac");
  } else {
    $("body").addClass("pc");
  }

  /* Scrool top */
  $("a.scroll_top").click(function (e) {
    //e.preventDefault();
    $("html,body").scrollTop();
  });

  // Jquery COunter
  var a = false;
  $(window).scroll(function () {
    if (a == false) {
      $(".count").each(function () {
        $(this)
          .prop("Counter", 0)
          .animate(
            {
              Counter: $(this).text(),
            },
            {
              duration: 4000,
              easing: "swing",
              step: function (now) {
                $(this).text(Math.ceil(now));
              },
            }
          );
      });
      a = true;
    }
  });

  //Fixed Header On Scroll
  $(window).scroll(function () {
    var sticky = $(".site-header"),
      scroll = $(window).scrollTop();
    if (scroll > 150) sticky.addClass("fixed");
    else sticky.removeClass("fixed");
  });



  
})(jQuery);
