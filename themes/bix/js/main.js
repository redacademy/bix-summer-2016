(function($){
$(document).ready(function(){

	console.log('hello');

	$('.menu-button').on('click', function(){
	    $('#primary-menu').slideToggle(750);
	    $('.menu-main-menu-container').fadeToggle(750);
	    $('.fa-bars').slideToggle(750);
	    $('.fa-chevron-up').slideToggle(750);
	});

	$('.menu-main-menu-container').on('click', function(){
		if($('#primary-menu').is(event.target)) {
			// do none
		}
		else {
			$('#primary-menu').slideToggle(750);
	    	$('.menu-main-menu-container').fadeToggle(750);
	    	$('.fa-bars').slideToggle(750);
	    	$('.fa-chevron-up').slideToggle(750);
		}
	});

});
}(jQuery));