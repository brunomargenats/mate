<?php
/**
 * FUNCTIONS: IE SUPPORT (only applied on IE)
 * Description: This function will add support for CSS variables in IE and a custom ie.css file.
 * @link https://github.com/jhildenbiddle/css-vars-ponyfill
 */


if ( ! function_exists( 'mate_ie_support' ) ) {

	function mate_ie_support() {
			wp_register_script( 'mate_ponyfill', get_theme_file_uri('/assets/js/css-vars-ponyfill.min.js'), array(), wp_get_theme( 'mate' )->get( 'Version' ), true );
			wp_enqueue_script('mate_ponyfill');
			wp_register_style('mate_ie_css',get_theme_file_uri( '/assets/css/ie.css' ), array(), wp_get_theme()->get( 'Version' ) );
			wp_enqueue_style('mate_ie_css');
	}
	add_action( 'wp_enqueue_scripts', 'mate_ie_support' );

}