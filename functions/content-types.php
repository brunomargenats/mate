<?php
/**
 * FUNCTIONS: CONTENT TYPES
 * Description: Set what template use for each type of content. This way you don't have to duplicate the same markup each time. You can rely on template-parts.
 */

if ( ! function_exists( 'mate_content_type' ) ) {
	function mate_content_type() {

		$context = 'index';

		if ( is_home() ) {
			// Blog Posts Index
			$context = 'index';
			if ( is_front_page() ) {
				// Front Page
				$context = 'page';
			}
		}else if ( is_date() ) {
			// Date Archive Index
			$context = 'archive';
		} else if ( is_author() ) {
			// Author Archive Index
			$context = 'archive';
		} else if ( is_category() ) {
			// Category Archive Index
			$context = 'archive';
		} else if ( is_tag() ) {
			// Tag Archive Index
			$context = 'archive';
		} else if ( is_tax() ) {
			// Taxonomy Archive Index
			$context = 'archive';
		} else if ( is_archive() ) {
			// Archive Index
			$context = 'archive';
		} else if ( is_search() ) {
			// Search Results Page
			$context = 'search';
		} else if ( is_404() ) {
			// Error 404 Page
			$context = 'none';
		} else if ( is_attachment() ) {
			// Attachment Page
			$context = 'page';
		}
		else if ( is_single() ) {
			// Single Blog Post
			$context = 'single';
		} else if ( is_page() ) {
			// Static Page
			$context = 'page';
		}else{
			$context = 'page';
		}
		return $context;
	}
}