jQuery(document).ready(function() {

    // Initiate jQuery Dropdown navigation
    jQuery('ul.sf-menu').superfish();
	
	// Initiate looped slider
	jQuery(".flexslider").flexslider({
		namespace: "flex-",
		selector: ".slides > .slide",
		animation: "slide",
		smoothHeight: my_fslider.autoHeight,
		slideshow: my_fslider.autoStart,
		slideshowSpeed: parseInt(my_fslider.slidespeed),
		pauseOnHover: true,
		start: function(slider){
			jQuery('.flexslider').removeClass('loading');
			flexslider = slider;
		},
	});

});