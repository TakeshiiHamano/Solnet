$(document).ready(function(){
	var altura = $('.containers').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.containers').addClass('navbar-fixed');
		} else {
			$('.containers').removeClass('navbar-fixed');
		}
	});
 
});

