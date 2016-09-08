(function($){
$(document).ready(function(){

	console.log('hello');

	// nav bar fading
	window.onscroll = function() {
	    if (window.scrollY > 76) {
	    	$(".desktop-nav-wrapper .main-navigation").addClass("transparent-background");
	    	// $(".desktop-nav-wrapper ul").addClass("transparent-background");
	    }
	    else {
	    	$(".desktop-nav-wrapper .main-navigation").removeClass("transparent-background");
	    	// $(".desktop-nav-wrapper ul").removeClass("transparent-background");
	    };
	},false;
   
  	$('.menu-button').on('click', function(){
	    $('.mobile-nav-wrapper #primary-menu').slideToggle(750);
	    $('.mobile-nav-wrapper .menu-main-menu-container').fadeToggle(750);
	    $('.fa-bars').slideToggle(750);
	    $('.fa-chevron-up').slideToggle(750);
	});

	$('.mobile-nav-wrapper .menu-main-menu-container').on('click', function(){
		if($('.mobile-nav-wrapper #primary-menu').is(event.target)) {
			// do none
		}
		else {
			$('.mobile-nav-wrapper #primary-menu').slideToggle(750);
	    	$('.mobile-nav-wrapper .menu-main-menu-container').fadeToggle(750);
	    	$('.fa-bars').slideToggle(750);
	    	$('.fa-chevron-up').slideToggle(750);
		}
	});


});
}(jQuery));