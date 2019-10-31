
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

  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

    $('.dropdown-button').dropdown('open');

