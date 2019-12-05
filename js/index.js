// var AJAX_PATH = WEB_ROOT+"/ajax/account-create.php";

function openNew(){
	$('html,body').animate({
					scrollTop: $("#divProo").offset().top
				}, 2000);
}

function openNewN(){
	$('html,body').animate({
					scrollTop: $("#divNosotros").offset().top
				}, 2000);
}



function openNewP(){
	$('html,body').animate({
					scrollTop: $("#divProo5").offset().top
				}, 2000);
}

$(window).load(function(){
$('.bloque').smoove({offset:'40%'});
})