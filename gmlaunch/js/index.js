(function($) {
	$( () => {


//On Scroll
$(window).scroll( () => {
	var windowTop = $(window).scrollTop();
	windowTop > 80 ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
});


//Smooth Scrolling 
$('a[href*="#"]').on('click', function(e){
	$('html,body').animate({
		scrollTop: $($(this).attr('href')).offset().top - 100
	},500);
	e.preventDefault();
});


//Toggle Menu
$('.dots').on('click', () => {
	$('.dots').toggleClass('on');
	$('.header-logo-menu-wrapper').toggleClass('open');

	$('li').on('click', () => {
		$('.header-logo-menu-wrapper').removeClass('open');
	});

});



$('.category-more').on('click', () => {
	$('.category-more').toggleClass('on');
	$('.category-ul').toggleClass('open');

	$('li').on('click', () => {
		$('.category-ul').removeClass('open');
	});

});






});
})(jQuery);