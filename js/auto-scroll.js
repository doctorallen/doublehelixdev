/*
 *
 *  Auto Size Function
 *
 *  Version 0.1
 *
 *  Author David Allen
 *
 *  Double Helix Development 2012
 *
 */
$.fn.autoSize = function(options){
	options = $.extend({}, $.fn.autoSize.defaultOptions, options);
	$(this).on('keydown', function(){
		var innerHeight = $(this).scrollTop() + $(this).innerHeight();
		console.log(innerHeight);
		var outerHeight = $(this).outerHeight();
		if( innerHeight > outerHeight & innerHeight <= options.maxHeight){
			$(this).height(innerHeight);
		}
		if( innerHeight >= options.maxHeight ){
			$(this).css( 'overflow' , 'auto' );
		}
	});
}
$.fn.autoSize.defaultOptions = {
	maxHeight: 500,
}
