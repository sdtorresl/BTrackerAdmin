$(document).ready(function() {
	$(".dropdown-button").dropdown();
	$(".button-collapse").sideNav();
	$('select').material_select();
	$('ul.tabs').tabs();
	$('.col .card-panel').hover(
		function() {
			$(this).css("opacity", "0.7");
		}, function() {
			$(this).css("opacity", "1");
		}
	);
});