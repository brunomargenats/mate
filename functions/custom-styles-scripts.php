<?php
/**
 * FUNCTIONS: CUSTOM STYLES AND SCRIPTS FUNCTIONS
 * Description: Here we will load all new scripts and styles. Try to put your scripts and styles in footer function first to avoid render blocking. If it doesn't work, try the other function.
 * @link https://developers.google.com/speed/docs/insights/BlockingJS
 * @link https://www.wpbeginner.com/wp-tutorials/how-to-properly-add-javascripts-and-styles-in-wordpress/
 */

/* == SCRIPTS AND STYLES LOADED IN FOOTER == */
if ( ! function_exists( 'custom_mate_scripts_styles_footer' ) ) {

	function custom_mate_scripts_styles_footer() {
			/* == CUSTOM CSS FOR THIS THEME. YOU CAN ALSO JUST USE style.css IN ROOT == */
			//wp_register_style('new_style',get_theme_file_uri( '/assets/css/new.css' ), array(), MATE_VERSION );
			//wp_enqueue_style( 'new_style');

			/* == CUSTOM JS FOR THIS THEME == */
			wp_register_script( 'site_scripts', get_theme_file_uri( '/assets/js/scripts.js'), array(), MATE_VERSION, true);
			wp_enqueue_script('site_scripts');

	}
	add_action( 'get_footer', 'custom_mate_scripts_styles_footer' );

}


/* == SCRIPTS AND STYLES LOADED IN HEADER == */
/* //REMOVE THIS LINE AND LINE 48 TO ACTIVATE

if ( ! function_exists( 'custom_mate_scripts_styles' ) ) {

function custom_mate_scripts_styles() {
		// == CUSTOM CSS IN HEADER ==
			//wp_register_style('new_style',get_theme_file_uri( '/assets/css/new.css' ), array(), MATE_VERSION );
			//wp_enqueue_style( 'new_style');

		// == CUSTOM JS IN HEADER ==
		//wp_enqueue_script('jquery');
		//wp_register_script( 'custom_script', get_theme_file_uri( '/assets/js/scripts.js'), array(), MATE_VERSION, false);
		//wp_enqueue_script('custom_script');

	}
	add_action( 'wp_enqueue_scripts', 'custom_mate_scripts_styles' );

}
 // REMOVE THIS LINE AND LINE 29 TO ACTIVATE */