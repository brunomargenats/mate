<?php
/**
 * FUNCTIONS: DISABLE GUTENBERG ON FRONTPAGE
 * Description: If you don't use Gutenberg Blocks on front-page you don't need all the extra CSS.
 * @link: https://wpassist.me/how-to-remove-block-library-css-from-wordpress/
 */

function mate_disable_gutenberg_frontpage(){
    if (is_front_page( )){
        wp_dequeue_style( 'wp-block-library' );
    }
}
add_action( 'wp_enqueue_scripts', 'mate_disable_gutenberg_frontpage' );
