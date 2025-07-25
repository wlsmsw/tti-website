$(window).scroll(function() {

    if ($(this).scrollTop()) {

        $('#top').fadeIn();

    } else {

        $('#top').fadeOut();

    }

});



 $(window).load(function(){        

   $('#myModal').modal('show');

    }); 

$(window).on('orientationchange resize load', function(){
  ww = $(window).width();
  if(ww > 1024){
  
    $(".navik-menu ul li:nth-last-child(4)").addClass("submenu-right");
    $(".navik-menu ul li:nth-last-child(3)").addClass("submenu-right");
    $(".navik-menu ul li:nth-last-child(2)").addClass("submenu-right");
    $(".navik-menu ul li:last-child").addClass("submenu-right");
  }
  else {
    $(".navik-menu ul li:nth-last-child(4)").removeClass("submenu-right");
    $(".navik-menu ul li:nth-last-child(3)").removeClass("submenu-right");
    $(".navik-menu ul li:nth-last-child(2)").removeClass("submenu-right");
    $(".navik-menu ul li:last-child").removeClass("submenu-right");
  }
});

$(function(){



      $('.partners-slider').owlCarousel({

        loop:true,

        margin:30,

        nav:false,

        dots:false,

        mouseDrag:true,

        autoplay:true,

        autoplayTimeout:1500,

        autoplayHoverPause:true,

        responsive:{

            0:{

                items:3

            }

        },

        navText: ['<img src="assets/img/tti-previous.png" />','<img src="assets/img/tti-next.png" />']

    });



    $('.ads-slider').owlCarousel({

        animateOut: 'fadeOut',

        animateIn: 'fadeIn',

        items:1,

        loop: true,

        mouseDrag:false,

        autoplay:true,

        autoplayTimeout: 3000,

        autoplayHoverPause:true,

        margin:0,

        smartSpeed:450

    });



    $('.dedhosting-slider').owlCarousel({

      loop:false,

      margin:30,

      nav:true,

      dots: false,

      autoplay:false,

      autoplayTimeout:1500,

      autoplayHoverPause:true,

      responsive:{

          0:{

              items:1

          },

          600:{

              items:2

          },

          1000:{

              items:4

          }

      },

      navText: ['<img src="assets/img/tti-previous.png" />','<img src="assets/img/tti-next.png" />']

  });



    $('.feat-slider').owlCarousel({

        items:1,

        dots: true,

        loop: true,

        mouseDrag:false,

        autoplay:true,

        smartSpeed: 500,

        autoplayTimeout: 5000,

        autoplayHoverPause:true,

        margin:0

    });
    
    $('.clients-slider').owlCarousel({

        loop:true,

        margin:20,

        nav:false,

        dots:true,

        mouseDrag:true,

        autoplay:true,

        autoplayTimeout:2000,

        autoplayHoverPause:false,
        
        smartSpeed: 1000,

        responsive:{

            0:{

                items:1

            }

        },

        navText: ['<img src="assets/img/tti-previous.png" />','<img src="assets/img/tti-next.png" />']

    });

	

	$("#top").click(function () {

		$("html").animate({scrollTop: 0}, 500);

	});

	

});

jQuery(document).ready(function($) {

  "use strict";

  //  TESTIMONIALS CAROUSEL HOOK

  $('#customers-testimonials').owlCarousel({

      loop: true,

      center: true,

      items: 3,

      margin: 0,

      nav: true,

      autoplay: true,

      dots: true,

      autoplayTimeout: 5000,

      smartSpeed: 450,

      responsive: {

        0: {

          items: 1

        },

        768: {

          items: 2

        },

        1170: {

          items: 3

        }

      },

      navText: ['<img src="assets/img/tti-previous.png" />','<img src="assets/img/tti-next.png" />']

  });

});

$(document).ready(function(){
    
		$("#myModal").modal('show');
		
	});