(function($){
$(document).ready(function(){

	console.log('hello');

	$('.menu-button').on('click', function(){
	    $('#primary-menu').slideToggle("slow");
	    $('.menu-main-menu-container').fadeToggle("slow");
	});

	$('.menu-main-menu-container').on('click', function(){
		if($('#primary-menu').is(event.target)) {
			// do none
		}
		else {
			$('#primary-menu').slideToggle("slow");
	    	$('.menu-main-menu-container').fadeToggle("slow");
		}
	});

});
}(jQuery));