$(document).ready(function(){
	var icono = $('#icono'),
        icono1 = $('#icono1'),
        icono2 = $('#icono2'),
        icono3 = $('#icono3'),
        icono4 = $('#icono4'),
        icono5 = $('#icono5'),
        menuDatos = $('#menuDatos'),
		datos = $('#datos'),
		menuTramites = $('#menuTramites'),
		tramites = $('#tramites'),
        menuGestion = $('#menuGestion'),
        gestion = $('#gestion');
    menuDatos.off();
    icono1.hide();
    icono3.hide();
    datos.hide();
	menuDatos.on('click', function(){
        datos.slideToggle(500, function(){
            icono.toggle();
            icono1.toggle();
        });
        datos.css({
            display: 'block'
        });
	})
	menuTramites.off();
    tramites.hide();
	menuTramites.on('click', function(){
        tramites.slideToggle(500, function(){
            icono2.toggle();
            icono3.toggle();
        });
        tramites.css({
				display: 'block'
		});
	})
    menuGestion.off();
    gestion.hide();
	menuGestion.on('click', function(){
        gestion.slideToggle(500, function(){
            icono4.toggle();
            icono5.toggle();
        });
        gestion.css({
				display: 'block'
		});
	})
});