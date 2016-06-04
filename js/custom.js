(function($){

	// added active class with boostrap slider item
	$(".carousel-inner .item:first").addClass("active");
	$(".carousel-indicators li:first").addClass("active");

	// Instantiate MixItUp:
	$('#wrapper').mixItUp();

})(jQuery);