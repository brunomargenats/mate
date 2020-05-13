<?php
/**
 * FUNCTIONS: REGISTER AND EBQUEUE HEADER STYLES AND SCRIPTS
 * Description: Register and load only important styles and scripts on header
 * @link https://codex.wordpress.org/Function_Reference/wp_register_style
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link https://developer.wordpress.org/reference/functions/wp_register_script/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://www.wpbeginner.com/wp-tutorials/how-to-properly-add-javascripts-and-styles-in-wordpress/
 */

global $mate_version;
$mate_version = wp_get_theme()->get( 'Version' );


/**
 * FUNCTIONS: ADD HEADER STYLES AND SCRIPTS (Just those that are necessary to load first)
 */

if ( ! function_exists( 'mate_scripts_styles_header' ) ) {

function mate_scripts_styles_header() {
		global $mate_version;
		/*   REGISTER ALL CSS FOR THIS SITE
				 wp_register_style( 'mate_name', get_theme_file_uri( '/assets/css/file.css' ), array(), $mate_version, $media );
		*/
		wp_register_style('mate_variables',get_theme_file_uri( '/config/variables.css' ), array(), $mate_version );
		wp_register_style('mate_reset',get_theme_file_uri( '/assets/css/reset.css' ), array(), $mate_version );
		wp_register_style('mate_utility_classes',get_theme_file_uri( '/assets/css/utility-classes.css' ), array(), $mate_version );
		wp_register_style('mate_base',get_theme_file_uri( '/assets/css/base.css' ), array(), $mate_version );
		wp_register_style('mate_grid',get_theme_file_uri( '/assets/css/grid.css' ), array(), $mate_version );
		wp_register_style('mate_typography',get_theme_file_uri( '/assets/css/typography.css' ), array(), $mate_version );
		wp_register_style('mate_print',get_theme_file_uri( '/assets/css/print.css' ), array(), $mate_version, 'print' );
		wp_register_style('site_style', get_stylesheet_uri(), array(), $mate_version );

		/*   REGISTER ALL JS FOR THIS SITE
		wp_register_script( 'mate_name', get_theme_file_uri( '/assets/js/file.js' ), array(), $mate_version, true );
	    true = in_footer
		*/


		/* ENQUEUE ALL CSS*/
			wp_enqueue_style( 'mate_variables');
			wp_enqueue_style( 'mate_grid');
			wp_enqueue_style( 'mate_reset');
			wp_enqueue_style( 'mate_utility_classes');
			wp_enqueue_style( 'mate_base');
			wp_enqueue_style( 'mate_typography');
			wp_enqueue_style( 'mate_print');
			wp_enqueue_style( 'site_style');

	}
	add_action( 'wp_enqueue_scripts', 'mate_scripts_styles_header', 80 );

}


if ( ! function_exists( 'mate_scripts_styles_footer' ) ) {

	function mate_scripts_styles_footer() {
		global $mate_version;
		wp_register_style('mate_forms',get_theme_file_uri( '/assets/css/forms.css' ), array(), $mate_version );
		wp_enqueue_style( 'mate_forms');
		wp_register_style('mate_buttons',get_theme_file_uri( '/assets/css/buttons.css' ), array(), $mate_version );
		wp_enqueue_style( 'mate_buttons');
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


	/**
	 * LOAD STYLES WE NEED IN TO SEE IN GUTENBERG
	 */


if ( ! function_exists( 'mate_admin_style_editor' ) ) {

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	/**
	 * Registers our editor stylesheet.
	 */
	function mate_admin_style_editor() {
		add_editor_style( 'assets/css/style-editor.css' );
	}
	add_action( 'after_setup_theme', 'mate_admin_style_editor' );
}



if ( ! function_exists( 'mate_admin_style_blocks' ) ) {

	add_action( 'enqueue_block_editor_assets', 'mate_admin_style_blocks' );
	function mate_admin_style_blocks(){
		global $mate_version;
		wp_enqueue_style('mate_variables',get_theme_file_uri( '/config/variables.css' ),array( 'wp-edit-blocks' ), $mate_version);
		wp_enqueue_style('mate_buttons',get_theme_file_uri( '/assets/css/buttons.css' ),array( 'wp-edit-blocks' ), $mate_version);
	}

}



