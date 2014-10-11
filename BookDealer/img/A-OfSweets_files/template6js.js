$(document).ready(function(){
  // Calculates the height of nav position
  // Use outerHeight() instead of height() if have padding
  var aboveHeight = $('nav').outerHeight() +66 ;

  // when scroll
  $(window).scroll(function(){

    // if scrolled down more than the header's height 
    if($(window).scrollTop() > aboveHeight){

      // if yes, add "fixed" class to the <nav> 
      // add padding top to the #content 
      // (value is same as the height of the nav)
      $('nav').addClass('scrolled')

    }
    else{
      $('nav').removeClass('scrolled')
    }
  });
});

