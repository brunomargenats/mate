<?php
/**
 * FUNCTIONS: CUSTOM EXCERPT
 * Description: Set custom excerpt length and add a Read More link with an arrow. Read the link for more customization.
 * @link: https://codex.wordpress.org/Customizing_the_Read_More
 */


// custom excerpt length
if ( ! function_exists( 'mate_custom_excerpt_length' ) ) {
        function mate_custom_excerpt_length( $length ) {
            return 20;
        }
    add_filter( 'excerpt_length', 'mate_custom_excerpt_length', 999 );
}

// add more link to excerpt
if ( ! function_exists( 'mate_excerpt_more_link' ) ) {
    function mate_excerpt_more_link() {
        global $post;
        return '<div><a class="read-more" href="'. get_permalink( $post->ID ) . '">'. __('Read More <span>&rarr;</span>', 'mate') .'</a></div>';
    }
    add_filter( 'the_content_more_link', 'mate_excerpt_more_link' );
}

/**
 * Change the excerpt more string
 */
if ( ! function_exists( 'mate_custom_excerpt_more' ) ) {
    function mate_custom_excerpt_more($more) {
        return '&hellip;';
    }
    add_filter( 'excerpt_more', 'mate_custom_excerpt_more' );
}


if ( ! function_exists( 'mate_remove_more_link_scroll' ) ) {
    //Prevent Page Scroll When Clicking the More Link
    function mate_remove_more_link_scroll( $link ) {
        $link = preg_replace( '|#more-[0-9]+|', '', $link );
        return $link;
    }
    add_filter( 'the_content_more_link', 'mate_remove_more_link_scroll' );
}