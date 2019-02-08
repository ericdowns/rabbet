(function($){
	$(document).on("ready", function() {

//https://jsfiddle.net/elbecita/mna64waw/3/

// var sticky = new Waypoint.Sticky({
// 	element: $('.sticky')[0]
// })

// $('.footer').waypoint(function(direction) {
// 	$('.sticky').toggleClass('stuck', direction === 'up');
// 	$('.sticky').toggleClass('sticky-surpassed', direction === 'down');
// }, 

// {
// 	offset: function() {
// 		return $('.sticky').outerHeight();
// 	}
// });




// $('.stickywrapper').each(function() {
// 	$('.footer').waypoint(function(direction) {
// 		$('.sticky').toggleClass('stuck', direction === 'up');
// 		$('.sticky').toggleClass('sticky-surpassed', direction === 'down');
// 	},
// 	{
// 		offset: function() {
// 			return $('.sticky').outerHeight();
// 		}


// 	});




// });




$('.gm-staggered-animation-container').waypoint(function(direction) {

	if (direction ==='down') {
		$(".gm-staggered-animation-container .gm-staggered-animation-item").addClass('animated fadeInUp');
	}
	else {
		$(".gm-staggered-animation-container .gm-staggered-animation-item").removeClass('animated fadeInUp');

	}
},
{
	offset: '70%',
	triggerOnce: false
});



// $('.section-developers-how-it-works_wrapper').waypoint(function(direction) {

// 	if (direction ==='down') {
// 		$(".section-developers-how-it-works_img").addClass('animated fadeInRight');

// 	}
// 	else {
// 		$(".section-developers-how-it-works_img").removeClass('animated fadeInRight');

// 	}
// },

// {
// 	offset: '0%'
// 	context: '.section-developers-how-it-works_wrapper'
// });



$('.section-developers-how-it-works_img.animateme').each(function(){

	var self = $(this);

	$(this).waypoint({
		handler: function(direction){

			if (direction ==='down') {
				self.addClass('animated fadeIn');
			}
			else {
				self.removeClass('animated fadeIn');

			}
		},

		offset: '15%',
		triggerOnce: false

	});
})




// $('.gm-staggered-animation-container').waypoint(function(direction) {

// 	if (direction ==='down') {
// 		$(".gm-staggered-animation-container .gm-staggered-animation-item").addClass('animated fadeInUp');
// 	}
// 	else {
// 		$(".gm-staggered-animation-container .gm-staggered-animation-item").removeClass('animated fadeInUp');

// 	}
// },
// {
// 	offset: '70%',
// 	triggerOnce: false
// });








$('.section-home-travelers').waypoint(function(direction) {

	if (direction ==='down') {
		$(".travel-scene").addClass('animated fadeInDown');
		$(".travel-scene2").addClass('animated fadeInUp');
		$(".travel-scene3").addClass('animated fadeInUp');
		$(".travel-scene4").addClass('animated fadeInDown');
		$(".travel-scene5").addClass('animated fadeInRight');


	}
	else {
		$(".travel-scene").removeClass('animated fadeInDown');
		$(".travel-scene2").removeClass('animated fadeInUp');  
		$(".travel-scene3").removeClass('animated fadeInUp');       
		$(".travel-scene4").removeClass('animated fadeInDown');
		$(".travel-scene5").removeClass('animated fadeInRight');

	}
},

{
	offset: '50%',
	triggerOnce: false
});







// https://codepen.io/hartless/pen/NGBMBB

function onScrollInit( items, trigger ) {

	items.each( function() {
		var osElement = $(this),
		osAnimationClass = osElement.attr('data-os-animation'),
		osAnimationDelay = osElement.attr('data-os-animation-delay');
        osAnimationDuration = osElement.attr('data-os-animation-duration'); // added variable for animation duration
        osElement.css({
        	'-webkit-animation-delay':  osAnimationDelay,
        	'-moz-animation-delay':     osAnimationDelay,
        	'animation-delay':          osAnimationDelay,
          'animation-duration':       osAnimationDuration // added for animation duration

      });


        var osTrigger = ( trigger ) ? trigger : osElement;
        
          // modified this section to add waypoint direction
          osTrigger.waypoint(function(direction) {

          	if (direction ==='down') {
          		osElement.addClass('animated').toggleClass(osAnimationClass);
          	}

          	else {
          		osElement.removeClass('animated').toggleClass(osAnimationClass);
          	}

          },

          {
          	triggerOnce: false,
          	offset: '20%'
          });
      });
}

onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );





  }); // END $(document).on("ready",
})(jQuery); // END (function($){