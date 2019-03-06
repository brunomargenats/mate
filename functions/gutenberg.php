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