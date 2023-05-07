$(document).ready(function(){
 $(window).scroll(function(){
	 parallax();
 })	
 
 goLightning();
 window.onblur = stopLightning;
 window.onfocus = goLightning;
 
 var int1, int2, int3 ;

 function goLightning() {
   int1 = setInterval ( function() {
      lightning_one();
   },300 );

   int2 = setInterval ( function() {
      lightning_two();
   },600 );

   int3 = setInterval ( function() {
      lightning_three();
   },900 );
 }

 function stopLightning() {
   window.clearInterval (int1);
   window.clearInterval (int2);
   window.clearInterval (int3);
 }

  function lightning_one(){
    $("#logo #arc1").fadeIn(1).fadeOut(1);};

  function lightning_two(){
    $("#logo #arc2").fadeIn(250).fadeOut(250);};

  function lightning_three(){
    $("#logo #arc3").fadeIn(500).fadeOut(500);};

  function parallax() {
	  var wScroll = $(window).scrollTop();
	  
	  $('.parallax-bg').css('background-position', 'center ' +(wScroll*0.75)+'px')
  }
	
  $('#slider').cycle({
    fx:        'fade',
    timeout:    3000,
    next:       '#next',
    prev:       '#prev',
    pager:      '#pager'
  });
  
  $('#textslider').cycle({
    fx:        'scrollLeft',
    timeout:    3000,
    next:       '#tnext',
    prev:       '#tprev',
    pager:      '#tpager'
  });
});
         








       
      