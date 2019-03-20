<?php

//Disable gutenberg style in Front
function mate_deregister_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'mate_deregister_gutenberg_styles', 100 );

//Add custom gutenberg style in Front
if ( ! function_exists( 'mate_gutenberg_custom_styles' ) ) {

    function mate_gutenberg_custom_styles() {
        if ( ! is_admin() ) {
            wp_register_style('mate_gutenberg',get_theme_file_uri( '/assets/css/gutenberg.css' ));
            wp_enqueue_style( 'mate_gutenberg' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'mate_gutenberg_custom_styles' );

}


/* ---------------------------------------------------------------------------------------------
   SPECIFY GUTENBERG SUPPORT
------------------------------------------------------------------------------------------------ */


if ( ! function_exists( 'mate_add_gutenberg_features' ) ) :

	function mate_add_gutenberg_features() {

		/* Gutenberg Palette --------------------------------------- */

		add_theme_support( 'editor-color-palette', array(
			array(
				'name' 	=> _x( 'Black', 'Name of the black color in the Gutenberg palette', 'mate' ),
				'slug' 	=> 'black',
				'color' => '#000',
			),
			array(
				'name' 	=> _x( 'White', 'Name of the white color in the Gutenberg palette', 'mate' ),
				'slug' 	=> 'white',
				'color' => '#fff',
			),
		) );

	}
	add_action( 'after_setup_theme', 'mate_add_gutenberg_features' );

endif;
