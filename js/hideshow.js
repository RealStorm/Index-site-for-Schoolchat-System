$(document).ready(function() {
	$("#button-signup").click(function() {
		$("#form-divlog").fadeOut(1);
		$("#form-divreg").fadeIn(1000);
});
	$("#button-signin").click(function() {
		$("#form-divreg").fadeOut(1);
		$("#form-divlog").fadeIn(1000);
	});
});
