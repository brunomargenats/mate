<?php

/* GOOGLE FONTS
------------------------------------------------ */
// Comment this if you don't need to install any Google Font
get_template_part('functions/gfonts');

/* ENQUEUE DEFAULT STYLES
------------------------------------------------ */
/*
Grids, typography,
*/
get_template_part('functions/styles-scripts');



/* JS NAVIGATION
------------------------------------------------ */
// Comment this if the site don't need a JS responsive navigation.
get_template_part('functions/navigation');


/* CUSTOM GUTENBERG
------------------------------------------------ */
// Clean some gutenberg unnecessary things
get_template_part('functions/gutenberg');


/* REGISTER SIDEBAR
------------------------------------------------ */
// Comment this if the site don't need a sidebar.
get_template_part('functions/sidebars');




/* COMMENTS FUNCTION
------------------------------------------------ */
// Comment this if the site don't use comments.
get_template_part('functions/comments');




/* Bruno functions */
// Post Time function (from WP Twenty Seventeen theme)
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




/*********************
PAGE NAVI
*********************/

/*
* Numeric Page Navi (built into the theme by default).
* (Updated 2018-05-17)
*
* If you're using this with a custom WP_Query, make sure
* to add your query variable as an argument and this
* function will play nice. Example:
* 
* plate_page_navi( $query );
*
* Also make sure your query has pagination set, e.g.:
* $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
* (or something similar)
* See the codex: https://codex.wordpress.org/Pagination
*
*/

function mate_page_navi( $wp_query ) {
    $pages = $wp_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ( $pages > 1 ) {
        $page_current = max(1, get_query_var('paged'));

        echo '<nav class="pagination">';

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current'       => $page_current,
            'total'         => $pages,
            'prev_text'     => '&larr;',
            'next_text'     => '&rarr;',
            'type'          => 'list',
            'end_size'      => 3,
            'mid_size'      => 3
        ));

        echo '</nav>';
    }
}



/*********************
CUSTOM EXCERPT
*********************/

// custom excerpt length
function mate_custom_excerpt_length( $length ) {
	return 20;
}
 add_filter( 'excerpt_length', 'mate_custom_excerpt_length', 999 );

 // add more link to excerpt
 function mate_custom_excerpt_more($more) {
	return '<div><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'. __('Read More', 'mate') .'</a></div>';
 }
 add_filter('excerpt_more', 'mate_custom_excerpt_more');




/* OTHERS CONFIGS (TO CHECK) */
/* THEME SETUP
------------------------------------------------ */

if ( ! function_exists( 'mate_setup' ) ) {

	function mate_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 1200;

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Add thumbnails image sizes
		/* add_image_size( 'post-image', 620, 9999 );*/

		// align-wide and align-full
		add_theme_support( 'align-wide' );

		// Title tag
		add_theme_support( 'title-tag' );

		// Post formats
		//add_theme_support( 'post-formats', array( 'aside' ) );



		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'mate' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'mate', get_template_directory() . '/languages' );

		$locale_file = get_template_directory() . "/languages/" . get_locale();

		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}


	}
	add_action( 'after_setup_theme', 'mate_setup' );

}


