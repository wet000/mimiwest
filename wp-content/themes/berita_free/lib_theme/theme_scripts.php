<?php

/*

  FILE STRUCTURE:

- THEME SCRIPTS

*/

/* THEME SCRIPTS */
/*------------------------------------------------------------------*/

// Add Theme Javascript
if (!is_admin()) add_action( 'wp_print_scripts', 'bizz_add_javascript' );
function bizz_add_javascript( ) {

	wp_enqueue_script( 'loopedSlider', BIZZ_THEME_JS .'/jquery.flexslider-min.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme-js', BIZZ_THEME_JS .'/theme.js', array( 'jquery' ) ); // footer
	wp_localize_script( 'theme-js', 'my_fslider', localize_vars());

}

// Localize Theme Javascript
function localize_vars() {
            
	$autoStart = false; // Set to positive number for true. This number will be the time between transitions.
	$slidespeed = 6000; // Speed of slide animation, 1000 = 1second.
	$autoheight = true; // Set to positive number for true. This number will be the speed of the animation.
	
	if ( isset($GLOBALS['opt']['bizzthemes_slider_auto']) && $GLOBALS['opt']['bizzthemes_slider_auto'] == "true" )
		$autoStart = true;
	if ( isset($GLOBALS['opt']['bizzthemes_slider_speed']) && $GLOBALS['opt']['bizzthemes_slider_speed'] != '' )
		$slidespeed = $GLOBALS['opt']['bizzthemes_slider_speed'] * 1000;
	if ( isset($GLOBALS['opt']['bizzthemes_slider_adjust']) && $GLOBALS['opt']['bizzthemes_slider_adjust'] == "true" )
		$autoheight = false;
				
    return array(
        'autoStart' => $autoStart,
        'slidespeed' => $slidespeed,
		'autoHeight' => $autoheight
    );
}