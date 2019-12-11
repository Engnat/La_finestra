(function() {

	var hamburger = {
		navToggle: document.querySelector('.nav-toggle'),
		nav: document.getElementById('navM'),

		doToggle: function(e) {
			e.preventDefault();
			this.navToggle.classList.toggle('expanded');
			this.nav.classList.toggle('expanded');
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

}());
