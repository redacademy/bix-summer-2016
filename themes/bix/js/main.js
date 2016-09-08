(function($){
$(document).ready(function(){

	console.log('hello');

   
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