$(function() {
	$('.main-navigation li.dropdown ul').each(function() {
		if($(this).hasClass('sub-menu')) {
			$(this).addClass('dropdown-menu');
		}
	});
});