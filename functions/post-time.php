<?php
/**
 * FUNCTIONS: ADD POST TIME
 * Description: This function shows when the post was publish.
 * @link https://github.com/WordPress/twentyseventeen/blob/master/inc/template-tags.php
 */


if ( ! function_exists( 'mate_time_link' ) ) :
	/**
	 * Gets a nicely formatted string for the published date.
	 */
	function mate_time_link() {

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		// if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		//   $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		// }

		$time_string = sprintf( $time_string,
			get_the_date( DATE_W3C ),
			get_the_date(),
			get_the_modified_date( DATE_W3C ),
			get_the_modified_date()
		);

		// Wrap the time string in a link, and preface it with 'Posted on'.
		return sprintf(

			/* translators: %s: post date */
			__( '<span class="screen-reader-text">Posted on</span> %s', 'mate' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
	}
endif;
