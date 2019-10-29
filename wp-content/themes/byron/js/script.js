
     $(window).on("scroll", function() {
      if($(window).scrollTop() == 0) {
        $("nav").addClass("nav-white" );
        $("nav").removeClass("nav-black");
      } else {
        $("nav").addClass("nav-black");
        $("nav").removeClass("nav-white");
      }
    });
