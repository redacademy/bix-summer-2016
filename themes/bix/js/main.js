(function($){
$(document).ready(function(){

	console.log('hello');

	// nav bar
		window.onscroll = function() {
			// desktop
		    if (window.scrollY > 60) {
		    	$(".desktop-nav-wrapper .desktop-nav-container").addClass("transparent-background");
		    }
		    else {
		    	$(".desktop-nav-wrapper .desktop-nav-container").removeClass("transparent-background");
		    };
	// nav bar fading
	window.onscroll = function() {
	    if (window.scrollY > 76) {
	    	$(".desktop-nav-wrapper .desktop-nav-container").addClass("transparent-background");
	    }
	    else {
	    	$(".desktop-nav-wrapper .desktop-nav-container").removeClass("transparent-background");
	    };
	},false;

  	$('.menu-button').on('click', function(){
	    $('.mobile-nav-wrapper #primary-menu').slideToggle(750);
	    $('.mobile-nav-wrapper .menu-main-menu-container').fadeToggle(750);
	    $('.fa-bars').slideToggle(750);
	    $('.fa-chevron-up').slideToggle(750);
	});

		    // desktop homepage
		    if($(".home").length > 0) {
			    if (window.scrollY > window.innerHeight) {
			    	$(".desktop-nav-container").addClass("desktop-nav-fixed");
			    }
			    else {
			    	$(".desktop-nav-container").removeClass("desktop-nav-fixed");
			    };
			}

		    // mobile
		    if (window.scrollY > 47) {
		    	$(".mobile-nav-wrapper .main-navigation").addClass("transparent-background");
		    }
		    else {
		    	$(".mobile-nav-wrapper .main-navigation").removeClass("transparent-background");
		    };

		    // mobile homepage
		    if($(".home").length > 0) {
			    if (window.scrollY > window.innerHeight) {
			    	$(".mobile-nav-wrapper").removeClass("mobile-nav-wrapper-home");
			    	$(".mobile-nav-wrapper .main-navigation").addClass("transparent-background");
			    }
			    else {
			    	$(".mobile-nav-wrapper").addClass("mobile-nav-wrapper-home");
			    	$(".mobile-nav-wrapper .main-navigation").removeClass("transparent-background");
			    };
			}

		},false;

	   // mobile nav bar menu button toggle
		  	$('.menu-button').on('click', function(){
			    $('.mobile-nav-wrapper #primary-menu').slideToggle(750);
			    $('.mobile-nav-wrapper .menu-main-menu-container').fadeToggle(750);
			    $('.fa-bars').slideToggle(750);
			    $('.fa-chevron-up').slideToggle(750);
			});

			$('.mobile-nav-wrapper .menu-main-menu-container').on('click', function(){
				if($('.mobile-nav-wrapper #primary-menu, .menu-item').is(event.target)) {
					// do none
				}
				else {
					$('.mobile-nav-wrapper #primary-menu').slideToggle(750);
			    	$('.mobile-nav-wrapper .menu-main-menu-container').fadeToggle(750);
			    	$('.fa-bars').slideToggle(750);
			    	$('.fa-chevron-up').slideToggle(750);
				}
			});

//Flickity Carousel
	$('.main-carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true
	});


});
}(jQuery));
