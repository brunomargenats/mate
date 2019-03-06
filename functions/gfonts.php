<?php
if ( (! function_exists( 'mate_google_fonts' )) && (! is_admin()) ) {
    function mate_google_fonts() {
        wp_register_style('mate_fonts', '//fonts.googleapis.com/css?family=Alegreya+Sans:700|Barlow:400,400i,700,700i' );
        wp_enqueue_style( 'mate_fonts');
    }
    add_action( 'wp_enqueue_scripts', 'mate_google_fonts' );

    /*Preconnect makes google fonts faster! */
    function mate_gfonts_prefetch() {
        echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
       }
    add_action( 'wp_head', 'mate_gfonts_prefetch' );

}
