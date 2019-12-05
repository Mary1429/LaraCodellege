$('.carousel').carousel({
    pause: "false"
});
$( document ).ready(function() {
	$('#menu_on').click(function(){
	   $('body').toggleClass('visible_menu');
    })
});
$( document ).ready(function() {
	$('.menu').click(function(){
	   $('body').toggleClass('visible_menu');
	})
});

	$( document ).ready(function() {
		$('#menu_on').click(function(){ // Al hacer click...
		   $('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
		 })
	});

$(document).ready(function(){
    $("#imagen2").mouseenter(function imagen(){
        $(".imagen1").css("opacity", "0");
    });
});

	$( document ).ready(function() {
		$('#menu_on').click(function(){
		   $('body').toggleClass('visible_menu');
		 })
	});
	$( document ).ready(function() {
		$('.menu').click(function(){
		   $('body').toggleClass('visible_menu');
		 })
	});
