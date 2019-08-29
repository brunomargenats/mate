<?php
/**
 * DISABLE WP EMBED
 * Description: Embed provides an easy way to embed content from one site to another. You’re probably familiar with it on sites like YouTube and Twitter. But what if you don’t want other sites embedding your stuff? In that case, this snippet is for you.
 * @link https://www.isitwp.com/remove-everything-oembed/
 */

//Remove the REST API endpoint.
remove_action('rest_api_init', 'wp_oembed_register_route');

// Turn off oEmbed auto discovery.
add_filter( 'embed_oembed_discover', '__return_false' );

//Don't filter oEmbed results.
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

//Remove oEmbed discovery links.
remove_action('wp_head', 'wp_oembed_add_discovery_links');

//Remove oEmbed JavaScript from the front-end and back-end.
remove_action('wp_head', 'wp_oembed_add_host_js');