$(document).ready(function() {
	$(".dropdown-button").dropdown();
	$(".button-collapse").sideNav();
	$('select').material_select();
	$('ul.tabs').tabs();
	$('.stats .wrapper .card-panel').hover(
		function() {
			$(this).removeClass("z-depth-3 cyan");
			$(this).addClass("z-depth-3 teal");
		}, function() {
			$(this).addClass("z-depth-3 cyan");
			$(this).removeClass("z-depth-3 teal");
		}
	);
});