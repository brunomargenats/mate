<?php
/**
 * HEADER styles and scripts (Just those that are necessary to load first)
 */

if ( ! function_exists( 'mate_scripts_styles_header' ) ) {

function mate_scripts_styles_header() {

		/*   REGISTER ALL CSS FOR SITE
				 array(), wp_get_theme( 'mate' )->get( 'Version' ), true ); (true = in_footer)
		*/



	//	wp_register_style('site_style', get_stylesheet_uri(), '', null, 'all' );
		wp_register_style('mate_variables',get_theme_file_uri( '/config/variables.css' ), array(), wp_get_theme()->get( 'Version' ) );
		wp_register_style('mate_reset',get_theme_file_uri( '/assets/css/reset.css' ), array(), wp_get_theme()->get( 'Version' ) );
		wp_register_style('mate_base',get_theme_file_uri( '/assets/css/base.css' ), array(), wp_get_theme()->get( 'Version' ) );
		wp_register_style('mate_grid',get_theme_file_uri( '/assets/css/grid.css' ), array(), wp_get_theme()->get( 'Version' ) );
		wp_register_style('mate_typography',get_theme_file_uri( '/assets/css/typography.css' ), array(), wp_get_theme()->get( 'Version' ) );


		/*   REGISTER ALL JS FOR SITE */


		if ( ! is_admin() ) {
			/* CALL ALL CSS*/
			wp_enqueue_style( 'mate_variables');
			wp_enqueue_style( 'mate_reset');
			wp_enqueue_style( 'mate_base');
			wp_enqueue_style( 'mate_grid');
			wp_enqueue_style( 'mate_typography');

		}

	}
	add_action( 'wp_enqueue_scripts', 'mate_scripts_styles_header', 80 );

}



if ( ! function_exists( 'mate_scripts_styles_footer' ) ) {

	function mate_scripts_styles_footer() {
		wp_register_style('mate_forms',get_theme_file_uri( '/assets/css/forms.css' ), array(), wp_get_theme( 'mate' )->get( 'Version' ) );
		wp_enqueue_style( 'mate_forms');
		wp_register_style('site_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'site_style');
	}
	add_action( 'get_footer', 'mate_scripts_styles_footer', 80 );

}



	/**
	 * Let's remove jquery migrate if not used
	 */

if ( ! function_exists( 'mate_remove_jquery_migrate' ) ) {
	//Remove JQuery migrate (loaded by WordPress)
	function mate_remove_jquery_migrate($scripts)
	{
		if (!is_admin() && isset($scripts->registered['jquery'])) {
			$script = $scripts->registered['jquery'];
			if ($script->deps) { // Check whether the script has any dependencies
				$script->deps = array_diff($script->deps, array(
					'jquery-migrate'
				));
			}
		}
	}

	add_action('wp_default_scripts', 'mate_remove_jquery_migrate');
}