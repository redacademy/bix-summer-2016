(function($){
$(document).ready(function(){

	console.log('hello');

	$('.menu-button').on('click', function(){
	    $('#primary-menu').slideToggle("slow");
	    $('.menu-main-menu-container').fadeToggle("slow");
	});

});
}(jQuery));