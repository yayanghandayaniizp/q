$(document).ready(function() {
	$(document.body).on('submit', '.js-confirm', function() {
		var $el = $(this)
		var text = $el.data('confirm') ? $el.data('confirm') : 'Anda Yakin Melakukan Tindakan Ini ?'
		var c = confirm(text);
		return c;
	});
<<<<<<< HEAD
	$('js-selectize').selectize({
		sortfield:'text'
=======
	$('.js-selectize').selectize({
		sortField:'text'
>>>>>>> b4196be09117dab5d01105c295d7b073d6429004
	});
});