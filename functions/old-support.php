<?php
/**
 * FUNCTIONS: OLD SUPPORT (only applied on IE and other older browsers)
 * Description: This function will add support for CSS variables in IE and other old browsers. Also, a custom ie.css file.
 * @link https://github.com/jhildenbiddle/css-vars-ponyfill
 */


if ( ! function_exists( 'mate_old_support' ) ) {

	function mate_old_support() {
			wp_register_script( 'mate_ponyfill', get_theme_file_uri('/assets/js/css-vars-ponyfill.min.js'), array(), MATE_VERSION, false );
			wp_enqueue_script('mate_ponyfill');
	}
	add_action( 'get_footer', 'mate_old_support' );

}
/* Only IE */
if ((!empty($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) ||
(!empty($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)) {
	if ( ! function_exists( 'mate_ie_style' ) ) {

		function mate_ie_style() {
			wp_register_style('mate_ie_css',get_theme_file_uri( '/assets/css/ie.css' ), array(), MATE_VERSION );
			wp_enqueue_style('mate_ie_css');
		}
		add_action( 'get_footer', 'mate_ie_style');

	}
}