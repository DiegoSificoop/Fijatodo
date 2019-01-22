'use strict';

$(document).ready(main);

var contador = 1;

function main() {
	$('.cont-menu_menu').click(function () {
		if (contador == 1) {
			$('.cont-menu').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.cont-menu').animate({
				left: '-100%'
			});
		}
	});
}