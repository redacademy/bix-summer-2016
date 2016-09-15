(function($){
$(document).ready(function(){

	// on scroll behaviours

        // show on scroll up
		// var lastScrollTop = 0;

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

			// single story tool bar show on scroll up
			// var st = $(this).scrollTop();
			// if (st > lastScrollTop){
			// 	$(".bottom-toolbar-wrapper").removeClass("bottom-toolbar-wrapper-slide-up");
			// } else {
				// if (st > 500) {
				// 	$(".bottom-toolbar-wrapper").addClass("bottom-toolbar-wrapper-slide-up");
				// }
			// }
			// lastScrollTop = st;

			// single story tool bar show on stop scroll
				$(".bottom-toolbar-wrapper").removeClass("bottom-toolbar-wrapper-slide-up");
                clearTimeout( $.data( this, "scrollCheck" ) );
                $.data( this, "scrollCheck", setTimeout(function() {
                    if (window.scrollY > 500) {
						$(".bottom-toolbar-wrapper").addClass("bottom-toolbar-wrapper-slide-up");
					}
                }, 750) );

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
	if ($('.single-post').length > 0 || $('.page-template-teaser-stories').length > 0) {
		$('.mobile-nav-wrapper ul.sub-menu').show();
	}

	});

//Smooth Scroll
 
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 800);
            return false;
          }
        }
      });
    });

}(jQuery));














