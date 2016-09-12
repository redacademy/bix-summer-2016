(function($){
$(document).ready(function(){

	console.log('hello');

	// desktop nav bar fading
		window.onscroll = function() {
		    if (window.scrollY > 76) {
		    	$(".desktop-nav-wrapper .desktop-nav-container").addClass("transparent-background");
		    }
		    else {
		    	$(".desktop-nav-wrapper .desktop-nav-container").removeClass("transparent-background");
		    };
		},false;
   
   // mobile nav bar
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

		window.onscroll = function() {
		    if (window.scrollY > 47) {
		    	$(".mobile-nav-wrapper .main-navigation").addClass("transparent-background");
		    }
		    else {
		    	$(".mobile-nav-wrapper .main-navigation").removeClass("transparent-background");
		    };
		},false;

	// mobile nav bar homepage
	if($(".home").length > 0) 
		{window.onscroll = function() {
		    if (window.scrollY > window.innerHeight) {
		    	$(".mobile-nav-wrapper").removeClass("mobile-nav-wrapper-home");
		    	$(".mobile-nav-wrapper .main-navigation").addClass("transparent-background");
		    }
		    else {
		    	$(".mobile-nav-wrapper").addClass("mobile-nav-wrapper-home");
		    	$(".mobile-nav-wrapper .main-navigation").removeClass("transparent-background");
		    };
		},false;
	}
		


//Flickity Carousel
	$('.main-carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true
	});


});
}(jQuery));