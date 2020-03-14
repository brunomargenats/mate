<?php
/**
 * FUNCTIONS: ADD SMOOTH-SCROLL JAVASCRIPT
 * Description: This function will add a JavaScript with a smooth-scroll effect.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/scroll-behavior
 * @link https://developer.mozilla.org/en-US/docs/Web/HTTP/Browser_detection_using_the_user_agent
 */


/*

//IF YOU WANT TO USE THIS JAVASCRIPT ONLY LIKE A PONYFILL FOT BROWSERS THAT DON'T SUPPORT scroll-behavior: smooth; YOU CAN DO IT LIKE THIS:

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') === FALSE &&
strpos($_SERVER['HTTP_USER_AGENT'], 'Chromium') === FALSE &&
strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') === FALSE)
{
//THE mate_smooth_scroll FUNCTION GOES HERE
}

*/


if ( ! function_exists( 'mate_smooth_scroll' ) ) {
	function mate_smooth_scroll() {
			wp_register_script( 'mate_smooth-scroll', get_theme_file_uri('/assets/js/smooth-scroll.min.js'), array(), wp_get_theme( 'mate' )->get( 'Version' ), false );
			wp_enqueue_script('mate_smooth-scroll');
	}
	add_action( 'get_footer', 'mate_smooth_scroll' );

}