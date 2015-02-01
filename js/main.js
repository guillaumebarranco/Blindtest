$(document).ready(function() {
	$('.french').hide();

	$('.button-english').on('click', function() {
		$('.english').hide();
		$('.french').show();
	});

	$('.button-french').on('click', function() {
		$('.french').hide();
		$('.english').show();
	});

});