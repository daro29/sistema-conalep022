$(document).ready(function(){

	// MOSTRANDO Y OCULTANDO MENU
	$('#button-menu').click(function(){
		if($('#button-menu').attr('class') == 'fa fa-bars' ){

			$('.navegacion').css({'width':'100%', 'background':'rgba(0,0,0,.5)'}); // Mostramos al fondo transparente
			$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); // Agregamos el icono X
			$('.navegacion .menu').css({'left':'0px'}); // Mostramos el menu

		} else{

			$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
			$('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); // Agregamos el icono del Menu
			$('.navegacion .submenu').css({'left':'-320px'}); // Ocultamos los submenus
			$('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

		}
	});

	// MOSTRANDO SUBMENU
	$('.navegacion .menu > .item-submenu a').click(function(){

		var positionMenu = $(this).parent().attr('menu'); // Buscamos el valor del atributo menu y lo guardamos en una variable
		console.log(positionMenu);

		$('.item-submenu[menu='+positionMenu+'] .submenu').css({'left':'0px'}); // Mostramos El submenu correspondiente

	});

	// OCULTANDO SUBMENU
	$('.navegacion .submenu li.go-back').click(function(){

		$(this).parent().css({'left':'-320px'}); // Ocultamos el submenu

	});

});

//formulario
document.addEventListener("DOMContentLoaded", () => {
	let form = document.getElementById('form_subir');
	form.addEventListener("submit", function(event) {
		event.preventDefault();
		subir_archivos(this);
	});
});

function subir_archivos(form){
	let barra_estado = form.children[1].children[0],
		span = barra_estado.children[0],
		boton_cancelar = form.children[2].children[1];

		barra_estado.classList.remove('barra_verde', 'barra_roja');

		//peticion ajax

		let peticion = new XMLHttpRequest();

		//progreso

		peticion.upload.addEventListener("progress", (event) => {
			let porcentaje = Math.round((event.loaded / event.total) * 100);
			console.log(porcentaje);

			barra_estado.style.width = porcentaje+'%';
			span.innerHTML = porcentaje+'%';

		});
		//finalizado
		peticion.addEventListener("load", () => {
			barra_estado.classList.add('barra_verde');
			span.innerHTML = "proceso completado";
		});

		//enviar datos
		peticion.open('post', 'subir.php');
		peticion.send(new FormData(form));

		//cancelar

		boton_cancelar.addEventListener("click", () => {
			peticion.abort();
			barra_estado.classList.remove('barra_verde');
			barra_estado.classList.add('barra_roja');
			span.innerHTML = "proceso cancelado";
		});

}
