<?php
/**
 * FUNCTIONS: ADD SCROLLBAR FIX JAVASCRIPT
 * Description: This function will detect scrollbar width and let us calculate de right width when using 100vw in .alignfull and .alignwide
 */


if ( ! function_exists( 'mate_scrollbar_fix' ) ) {
	function mate_scrollbar_fix() {
			wp_register_script( 'mate_scrollbar_fix', get_theme_file_uri('/assets/js/mate-scrollbar-fix.js'), array(), wp_get_theme( 'mate' )->get( 'Version' ), false );
			wp_enqueue_script('mate_scrollbar_fix');
	}
	add_action( 'get_footer', 'mate_scrollbar_fix' );

}