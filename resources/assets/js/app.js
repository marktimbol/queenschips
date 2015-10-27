//app.js

new WOW().init();

$(document).ready(function() {
	console.log($('.home__bg').height());
	$('.home__concept').css('padding-top', $('.home__bg').height());
});