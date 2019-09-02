<?php
/**
 * FUNCTIONS: WORDPRESS CLEANUP
 * Description: Clean up WordPress Header mess
 * @link https://crunchify.com/how-to-clean-up-wordpress-header-section-without-any-plugin/
 * @link https://crunchify.com/15-essential-settings-and-optimization-tasks-after-installing-wordpress/
 */
?>
<?php

if ( ! function_exists( 'mate_remove_head_links' ) ) {
    function mate_remove_head_links() {
        /* WordPress adds EditURI to your site header, which is required if you are publishing post by third party tool. */
        remove_action ('wp_head', 'rsd_link');
        /* WordPress need this if you're publishing post via Windows Live Writer, discontinued in January 2017. */
        remove_action('wp_head', 'wlwmanifest_link');
        /* Remove WordPress shortlink. If you're not using Jetpack shortlinks you don't need this. */
        remove_action( 'wp_head', 'wp_shortlink_wp_head');
        /* Remove WordPress version number */
        remove_action( 'wp_head', 'wp_generator' );

        global $use_comments;
        if (!$use_comments){
            // disable comments feed
            add_filter( 'feed_links_show_comments_feed', '__return_false' ); 
            remove_action( 'wp_head', 'feed_links_extra', 3);
        }

    }
    add_action('init', 'mate_remove_head_links');
}





// Pick out the version number from scripts and styles
function mate_remove_version_from_style_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
    }
    add_filter( 'style_loader_src', 'mate_remove_version_from_style_js');
    add_filter( 'script_loader_src', 'mate_remove_version_from_style_js');





// Remove injected CSS on <head> from recent comments widget
function mate_remove_recent_comments_style() {
    global $wp_widget_factory;
    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
    }
}
add_action( 'wp_head', 'mate_remove_recent_comments_style', 1 );