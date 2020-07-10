<?php
/**
 * FUNCTIONS: GOOGLE FONTS
 * Description: Little function for load google fonts. Now we can also setup the display! See link below.
 * @link https://font-display.glitch.me/ (&display=swap)
 * @link https://fonts.google.com/
 */


/************* GOOGLE FONTS ********************/
if ( (! function_exists( 'mate_google_fonts' ))) {
    add_action( 'wp_head', 'mate_google_fonts' );
    function mate_google_fonts() {?>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="dns-prefetch" href="fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link rel="preconnect" href="fonts.googleapis.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <?php /* We use %7C instead of | on the URL for security reasons */
    }
}