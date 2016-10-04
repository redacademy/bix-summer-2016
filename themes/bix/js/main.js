(function($){
$(document).ready(function(){
    // On scroll behaviours
        window.onscroll = function() {
            // variables
            var $navContainer = $(".desktop-nav-wrapper .desktop-nav-container"),
                $mainNavigation = $(".mobile-nav-wrapper .main-navigation"),
                $navWrapper = $(".mobile-nav-wrapper"),
                $toolbarWrapper = $(".bottom-toolbar-wrapper"),    
                that = this;
            // desktop
            if (window.pageYOffset > 60) {
                $navContainer.addClass("transparent-background");
            }
            else {
                $navContainer.removeClass("transparent-background");
            };
            // desktop homepage
            if($(".home").length > 0) {
                if (window.pageYOffset > window.innerHeight) {
                    $navContainer.addClass("desktop-nav-fixed");
                }
                else {
                    $navContainer.removeClass("desktop-nav-fixed");
                };
            }
            // mobile
            if (window.pageYOffset > 47) {
                $mainNavigation.addClass("transparent-background");
            }
            else {
                $mainNavigation.removeClass("transparent-background");
            };
            // mobile homepage
            if($(".home").length > 0) {
                if (window.pageYOffset > window.innerHeight) {
                    $navWrapper.removeClass("mobile-nav-wrapper-home");
                    $mainNavigation.addClass("transparent-background");
                }
                else {
                    $navWrapper.addClass("mobile-nav-wrapper-home");
                    $mainNavigation.removeClass("transparent-background");
                };
            }
            // single story tool bar show on stop scroll
                $toolbarWrapper.removeClass("bottom-toolbar-wrapper-slide-up");
                clearTimeout( $.data( that, "scrollCheck" ) );
                $.data( that, "scrollCheck", setTimeout(function() {
                	var $bottomHeight = $( document ).height() - 1500;
                    if (window.pageYOffset > 500 && window.pageYOffset < $bottomHeight) {
                        $toolbarWrapper.addClass("bottom-toolbar-wrapper-slide-up");
                    }
                }, 750) );
        },false;

    // Mobile nav bar menu button toggle
        var $menuContainer = $('.mobile-nav-wrapper .menu-main-menu-container'),
            $mobileMenu = $('.mobile-nav-wrapper #mobile-primary-menu');
        $('.menu-button').on('click', function(){
            $mobileMenu.slideToggle(400);
            $menuContainer.fadeToggle(400);
            $('.fa-bars').slideToggle(400);
            $('.fa-chevron-up').slideToggle(400);
        });
        $menuContainer.on('click', function(event){
            var event = window.event || event;
            if($('.mobile-nav-wrapper #mobile-primary-menu, .menu-item').is(event.target)) {
                // do none
            }
            else {
                $mobileMenu.slideToggle(400);
                $menuContainer.fadeToggle(400);
                $('.fa-bars').slideToggle(400);
                $('.fa-chevron-up').slideToggle(400);
            }
        });
    	// sub menu display only on single post page
	        if ($('.single-story').length > 0 || $('.page-template-teaser-stories').length > 0) {
		            $('.mobile-nav-wrapper ul.sub-menu').show();
		        }
		    });

    // Flickity Carousel
        $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          contain: true
        });

    // Smooth Scroll
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

    // Single Story Modal Buttons
	    var $desktopNavContainer = $('.desktop-nav-container'),
	    	$singleStoryModalOverlay = $('.single-story-modal-overlay');

	    $('.comment-modal-button').on('click', function(){
	        $singleStoryModalOverlay.fadeIn('slow');
	        $desktopNavContainer.fadeOut('slow');
	        $('.comment-modal').fadeIn('slow');
	    });
	    $('.highlight-modal-button').on('click', function(){
	        $singleStoryModalOverlay.fadeIn('slow');
	        $desktopNavContainer.fadeOut('slow');
	        $('.highlight-modal').fadeIn('slow');
	    });
	    $('.download-modal-button').on('click', function(){
	        $singleStoryModalOverlay.fadeIn('slow');
	        $desktopNavContainer.fadeOut('slow');
	        $('.download-modal').fadeIn('slow');
	    });

	    var $closeOnClick = $('.single-story-modal-container, .comment-section-link, .download-page-link, .highlight-modal-button, i.single-fa-close');

	    $closeOnClick.on('click', function(event){
            var event = window.event || event;
	        if(!$closeOnClick.is(event.target)) {
	            // do nothing
	        }
	        else {
	            $singleStoryModalOverlay.fadeOut('slow');
	            $desktopNavContainer.fadeIn('slow');
	            $('.comment-modal, .highlight-modal, .download-modal').fadeOut('slow');
	        }
	    });

    // BixBook Page Modals
	    var $bixbookModalOverlay = $('.bix-book-modal-overlay');

	    $('.donate-later-button').on('click', function(event){
	        $bixbookModalOverlay.fadeIn('slow');
	        $desktopNavContainer.fadeOut('slow');
	        $('.unlock-download-modal').fadeIn('slow');
	    });
	    $('.bix-book-modal-container, i.download-fa-close').on('click', function(event){
            var event = window.event || event;
	        if(!$('.bix-book-modal-container, i.download-fa-close').is(event.target)) {
	            // do nothing
	        }
	        else {
	            $bixbookModalOverlay.fadeOut('slow');
	            $desktopNavContainer.fadeIn('slow');
	            $('.unlock-download-modal, .start-download-modal, .thankyou-modal').fadeOut('slow');
	        }
	    });

    // Bix Book Download Process / Modals
    	$('.wpcf7-form-download').submit(function(event){
            if ($('.wpcf7-form-download').valid()) {
        		alert('Thank you for your interest in the book!');
                $('.unlock-download-modal').fadeOut('slow');
                $('.start-download-modal').fadeIn('slow');
            } else {
                event.preventDefault();
            }
    	});

    	$('a.download-link').click(function(event){
            var event = window.event || event;
            $('.start-download-modal').fadeOut('slow');
            $('.thankyou-modal').fadeIn('slow');      
    	});

    // Footer Comments
        $('.wpcf7-form-footer').submit(function(event){
            if ($('.wpcf7-form-footer').valid()) {
                alert('Your message has been sent!');
            } else {
                event.preventDefault();
            }
        });


    //Email Alert Message
        $(function() {
          $('#updates').on('submit', 'form', function(event) {
            event.preventDefault();
            var $emailInput = $('#email-input')
            if ( $emailInput.val().length > 5 ) {
              alert($emailInput.val() + " -> The Bix Book thanks you :)");
              $emailInput.val('');
            } else {
              alert('Please submit a valid email address.');
              event.preventDefault();
            }
          });
        });
}(jQuery));
