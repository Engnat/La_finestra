(function() {

	var hamburger = {
		navToggle: document.querySelector('.nav-toggle'),
		nav: document.getElementById('navM'),
		velo: document.getElementById('contenedor-velo'),


		doToggle: function(e) {
			e.preventDefault();
			this.navToggle.classList.toggle('expanded');
			this.nav.classList.toggle('expanded');
			this.velo.classList.toggle('expanded');
		}
	};

	hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

	/*Botones Links*/
	$('a[href^="#"]').on('click', function(event) {

	    var target = $(this.getAttribute('href'));

	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top
	        }, 1000);
	      }
	    });

	/*Menu oculto*/
	$("#btn-lista-hotel").click(function(){
		if(!$(this).find("#lista-hotel").hasClass("menu-oculto")){
			$("#lista-hotel").slideToggle();
			$("#lista-hotel").removeClass("menu-oculto");
		}
			$(this).find("#lista-hotel").slideToggle();
			$(this).find("#lista-hotel").toggleClass("menu-oculto");
	});

	/*Cambiar texto menu hamburguesa*/
	$(".nav-toggle").click(function(){
		$("#menu-texto").text($("#menu-texto").text() == 'MENU' ? 'CERRAR' : 'MENU');
});

}());
