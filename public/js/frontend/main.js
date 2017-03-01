$(document).ready(function(){

   var windowHeight = $(window).height();

   $('.head').height(windowHeight);

   var animationTimeout = null;


 if($(window).scrollTop() <= 30){
      animationTimeout = setTimeout(function(){
          $('.navbar-fixed-top').stop();
          $('.navbar-fixed-top').animate({
             'left': '15',
             'right': '15',
             'top': '30',
             'borderRadius' : '0',
          }, 'fast');
      }, 50);
  }

   
   $(window).on('scroll', function(){
      
      clearTimeout(animationTimeout);

      if($(window).scrollTop() >= 30){
      	  animationTimeout = setTimeout(function(){
      	  	  $('.navbar-fixed-top').stop();
      	  	  $('.navbar-fixed-top').animate({
      	  	  	 'left': '0',
                 'right': '0',
                 'top': '0',
                 'borderRadius' : '0',
      	  	  }, 'fast');
          }, 50);
      } else {
      	  animationTimeout = setTimeout(function(){
             $('.navbar-fixed-top').stop();
      	  	  $('.navbar-fixed-top').animate({
      	  	  	 'left': '15px',
                 'right': '15px',
                 'top': '30px',
                 'borderRadius' : '5px',
      	  	  }, 'fast');
          }, 50);
      }
      

   }); // scroll


   // Trigger MixitUp

   $('#portfolio').mixItUp();

});