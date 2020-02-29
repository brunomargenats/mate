<?php
/**
 * FUNCTIONS: CONTENT TYPES
 * Description: Set what template is used for each type of content.
 * This way you don't have to duplicate the same markup each time and you can rely on template-parts.
 */

if ( ! function_exists( 'mate_content_type' ) ) {
	function mate_content_type() {

		if ( is_home() ) {
			// Blog Posts Index
			$context = 'index';
			if ( is_front_page() ) {
				// Front Page
				$context = 'page';
			}
		} else if ( is_archive() || is_year() || is_month() || is_day() || is_author() || is_category() || is_tag() || is_tax() ) {
			// Date Date Index
			$context = 'archive';
		} else if ( is_search() ) {
			// Search Results Page
			$context = 'search';
		} else if ( is_404() ) {
			// Error 404 Page
			$context = 'none';
		} else if ( is_single() ) {
			// Single Blog Post
			$context = 'single';
		} else if ( is_page() || is_attachment() ) {
			// Attachment Page
			$context = 'page';
		} else{
			$context = 'page'; // Default template-part
		}
		return $context;
	}
}