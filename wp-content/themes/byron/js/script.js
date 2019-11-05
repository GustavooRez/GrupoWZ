
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
  $('#saopaulo').mouseenter(function(){
    $('#msg-saopaulo').show();
    $('#bases-saopaulo').show();    
  });
  $('#saopaulo').mouseleave(function(){
    $('#msg-saopaulo').hide();
    $('#bases-saopaulo').hide();     
  });

  $('#riograndedosul').mouseenter(function(){
    $('#msg-rgs').show();
        $('#bases-rgs').show(); 
  });
  $('#riograndedosul').mouseleave(function(){
    $('#msg-rgs').hide();
        $('#bases-rgs').hide(); 
  });

   $('#minasgerais').mouseenter(function(){
    $('#msg-mg').show();
  });
  $('#minasgerais').mouseleave(function(){
    $('#msg-mg').hide();
  });

  $('#toca').mouseenter(function(){
    $('#msg-toca').show();
  });
  $('#toca').mouseleave(function(){
    $('#msg-toca').hide();
  });

  $('#bahia').mouseenter(function(){
    $('#msg-bahia').show();
  });
  $('#bahia').mouseleave(function(){
    $('#msg-bahia').hide();
  });

    $('#parana').mouseenter(function(){
    $('#msg-parana').show();
  });
  $('#parana').mouseleave(function(){
    $('#msg-parana').hide();
  });

      $('#ms').mouseenter(function(){
    $('#msg-mgs').show();
  });
  $('#ms').mouseleave(function(){
    $('#msg-mgs').hide();
  });

});

