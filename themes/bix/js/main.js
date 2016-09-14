(function($){
$(document).ready(function(){

	console.log('hello');

	// on scroll behaviours
		var lastScrollTop = 0;
		window.onscroll = function() {
			// desktop
		    if (window.scrollY > 60) {
		    	$(".desktop-nav-wrapper .desktop-nav-container").addClass("transparent-background");
		    }
		    else {
		    	$(".desktop-nav-wrapper .desktop-nav-container").removeClass("transparent-background");
		    };

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

			// single story tool bar
			var st = $(this).scrollTop();
			if (st > lastScrollTop){
				$(".bottom-toolbar-wrapper").removeClass("bottom-toolbar-wrapper-slide-up");
			} else {
				if (st > 500) {
					$(".bottom-toolbar-wrapper").addClass("bottom-toolbar-wrapper-slide-up");
				}
			}
			lastScrollTop = st;

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

	// sub menu display only on single post page
	if ($('.single-post').length > 0 ) {
		$('.mobile-nav-wrapper ul.sub-menu').show();
	}

});
}(jQuery));
