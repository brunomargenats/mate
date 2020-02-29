<?php
/**
 * FUNCTIONS: ADD SMOOTH-SCROLL JAVASCRIPT (only loaded on some browsers)
 * Description: This function will add a JavaScript with a smooth-scroll effect. In other browsers we use just the CSS: scroll-behavior: smooth;
 */


if ( ! function_exists( 'mate_smooth_scroll' ) ) {

	function mate_smooth_scroll() {
			wp_register_script( 'mate_smooth-scroll', get_theme_file_uri('/assets/js/smooth-scroll.min.js'), array(), wp_get_theme( 'mate' )->get( 'Version' ), false );
			wp_enqueue_script('mate_smooth-scroll');
	}
	add_action( 'get_footer', 'mate_smooth_scroll' );

}