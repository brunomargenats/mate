<?php
/**
 * FUNCTIONS: WEBSITE SITE MENUS (WordPress default navigation)
 * Description: Register the main navigation of this site and secondary navigation if needed.
 * @link https://developer.wordpress.org/reference/functions/register_nav_menu/
 */

if ( ! function_exists( 'mate_register_menus' ) ) {

	function mate_register_menus() {
		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'mate' ) );
		//register_nav_menu( 'secondary-menu', __( 'Secondary Menu', 'mate' ) );
	}
	add_action( 'after_setup_theme', 'mate_register_menus' );

}