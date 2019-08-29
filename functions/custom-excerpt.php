<?php
/**
 * CUSTOM EXCERPT FUNCTIONS
 * Description: Set custom excerpt length and add a Read More link with an arrow.
 * @link https://github.com/jhildenbiddle/css-vars-ponyfill
 */


// custom excerpt length
if ( ! function_exists( 'mate_custom_excerpt_length' ) ) {
        function mate_custom_excerpt_length( $length ) {
            return 20;
        }
    add_filter( 'excerpt_length', 'mate_custom_excerpt_length', 999 );
}

// add more link to excerpt
if ( ! function_exists( 'mate_custom_excerpt_more' ) ) {
    function mate_custom_excerpt_more($more) {
        return '<div><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'. __('Read More <span>&rarr;</span>', 'mate') .'</a></div>';
    }
    add_filter('excerpt_more', 'mate_custom_excerpt_more');
}
