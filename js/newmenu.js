$(document).ready(main);

var contador = 1;
//var $menu = document.getElementById('menu');
var $burguerButton = document.getElementById('burguer-button');

function main() {
	$('.cont-menu_menu').click(function () {
		//$menu.classList.toggle('active');
		if (contador == 1) {
			showMenu();
			contador = 0;
		} else {
			contador = 1;
			hideMenu();
		}
	});
}

function showMenu(){
	$('.cont-menu').animate({
		left: '0'
	});
	//$menu.classList.add('active');
	$burguerButton.classList.toggle('icon-close');
};

function hideMenu(){
	$('.cont-menu').animate({
		left: '-100%'
	});
	//$menu.classList.remove('active');
	$burguerButton.classList.toggle('icon-close');
};

//GESTOS TOUCH
  var $body = document.body; 
  var gestos = new Hammer($body);
  gestos.on('swipeleft', hideMenu);
  gestos.on('swiperight', showMenu);