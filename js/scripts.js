(function(WGR, $) {
	'use strict';
	
	// Set variables
	var $input = $('.js-search-input'),
		$products = $('.js-product');
	
	// Bind events
	$input.on('input', filterProducts);

	function filterProducts()
	{
		var filterValue = $input.val();

		$products.each(function(index) {
			var title = $(this).data('title');

			if(title.includes(filterValue)){
				$(this).addClass('is-visible');
				$(this).removeClass('is-hidden');
			}
			else {
				$(this).addClass('is-hidden');
				$(this).removeClass('is-visible');
			}
		});
	}

	function example()
	{
		console.log('Hello world');
	}

	WGR.example = example;

}(window.WGR = window.WGR || {}, jQuery));
