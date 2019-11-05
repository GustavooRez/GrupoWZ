
     $(window).on("scroll", function() {
     	AOS.refresh();
      if($(window).scrollTop() == 0) {
        $("nav").addClass("nav-white" );
        $("nav").removeClass("nav-black");
      } else {
        $("nav").addClass("nav-black");
        $("nav").removeClass("nav-white");
      }
    });

$(document).ready(function(){
  $('#toca').mouseenter(function(){
    $('#msg-toca').show();
  });
  $('#toca').mouseleave(function(){
    $('#msg-toca').hide();
  });
});

