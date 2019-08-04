// Demo.js
// ====================================================================
// Set user options for current page.
// This file is only used for demonstration purposes.
// ====================================================================
// - squaredesigns.net -


$(document).ready(function () {


	var elems = Array.prototype.slice.call(document.querySelectorAll('.demo-switch'));
	elems.forEach(function (html) {
		var switchery = new Switchery(html);
	});



	// ASIDE
	// =================================================================
	// Toggle Visibe
	// =================================================================
	$('#demo-toggle-aside').on('click', function (ev) {
		ev.preventDefault();
		if (!jasmine.container.hasClass('aside-in')) {
			$.jasmineAside('show');
			asdVisCheckbox.jasmineCheck('toggleOn')
		} else {
			$.jasmineAside('hide');
			asdVisCheckbox.jasmineCheck('toggleOff')
		}
	});

// Fullscreen
// ==========

$('[data-toggle="fullscreen"]').click(function(){
        if (screenfull.enabled) {
          screenfull.toggle();
        }
		
	    return false;
});

      if (screenfull.enabled) {
        document.addEventListener(screenfull.raw.fullscreenchange, function() {
          $('[data-toggle="fullscreen"]').toggleClass('active', screenfull.isFullscreen);
        });
      }

});
