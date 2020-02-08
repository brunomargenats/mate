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


/* ===
Remove 'type="text/javascript"' from 'script' tags and 'type="text/css"' from 'style' tags in WordPress core files and plugins.
https://www.damiencarbery.com/2018/11/remove-type-from-script-and-style-markup/
===*/


add_filter( 'script_loader_tag', 'dcwd_remove_type', 10, 3 );
add_filter( 'style_loader_tag', 'dcwd_remove_type', 10, 3 );  // Ignore the $media argument to allow for a common function.
function dcwd_remove_type( $markup, $handle, $href ) {
	//error_log( 'Markup: ' . $markup );
	//error_log( 'Handle: ' . $handle );
	//error_log( 'Href: ' . $href );
	// Remove the 'type' attribute.
	$markup = str_replace( " type='text/javascript'", '', $markup );
	$markup = str_replace( " type='text/css'", '', $markup );
	return $markup;
}
// Store and process wp_head output to operate on inline scripts and styles.
add_action( 'wp_head', 'dcwd_wp_head_ob_start', 0 );
function dcwd_wp_head_ob_start() {
	ob_start();
}
add_action( 'wp_head', 'dcwd_wp_head_ob_end', 10000 );
function dcwd_wp_head_ob_end() {
	$wp_head_markup = ob_get_contents();
	ob_end_clean();

	// Remove the 'type' attribute. Note the use of single and double quotes.
	$wp_head_markup = str_replace( " type='text/javascript'", '', $wp_head_markup );
	$wp_head_markup = str_replace( ' type="text/javascript"', '', $wp_head_markup );
	$wp_head_markup = str_replace( ' type="text/css"', '', $wp_head_markup );
	$wp_head_markup = str_replace( " type='text/css'", '', $wp_head_markup );
	echo $wp_head_markup;
}