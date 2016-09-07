(function($){
$(document).ready(function(){

	console.log('hello');

	$('.menu-button').on('click', function(){
	    $('#primary-menu').toggleClass('menu-active');
	    $('.menu-main-menu-container').toggleClass('display-show');
	});

});
}(jQuery));