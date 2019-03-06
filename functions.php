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

/* REGISTER SIDEBAR
------------------------------------------------ */
// Comment this if the site don't need a sidebar.
get_template_part('functions/sidebars');




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


/*mioo */








/* OTHERS CONFIGS (TO CHECK) */
/* THEME SETUP
------------------------------------------------ */

if ( ! function_exists( 'mate_setup' ) ) {

	function mate_setup() {
		
		// Automatic feed
		add_theme_support( 'automatic-feed-links' );
		
		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 620;
		
		// Post thumbnails
		add_theme_support( 'post-thumbnails' );
/*		add_image_size( 'post-image', 620, 9999 );*/
		
		// Title tag
		add_theme_support( 'title-tag' );
		
		// Post formats
		add_theme_support( 'post-formats', array( 'aside' ) );
		
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



/* CUSTOMIZER SETTINGS
------------------------------------------------ */

class mate_customize {

	public static function mate_register ( $wp_customize ) {

		// Dark Mode
		$wp_customize->add_setting( 'mate_dark_mode', array(
			'capability' 		=> 'edit_theme_options',
			'sanitize_callback' => 'mate_sanitize_checkbox',
			'transport'			=> 'postMessage'
		) );

		$wp_customize->add_control( 'mate_dark_mode', array(
			'type' 			=> 'checkbox',
			'section' 		=> 'colors', // Default WP section added by background_color
			'label' 		=> __( 'Dark Mode', 'mate' ),
			'description' 	=> __( 'Displays the site with white text and black background. If Background Color is set, only the text color will change.', 'mate' ),
		) );
		

		// Make built-in controls use live JS preview
		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
		
		
		// SANITATION

		// Sanitize boolean for checkbox
		function mate_sanitize_checkbox( $checked ) {
			return ( ( isset( $checked ) && true == $checked ) ? true : false );
		}
		
	}

	// Initiate the live preview JS
	public static function mate_live_preview() {
		wp_enqueue_script( 'mate-themecustomizer', get_template_directory_uri() . '/assets/js/theme-customizer.js', array(  'jquery', 'customize-preview' ), '', true );
	}

}

// Setup the Theme Customizer settings and controls
add_action( 'customize_register', array( 'mate_customize', 'mate_register' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init', array( 'mate_customize' , 'mate_live_preview' ) );


/* ---------------------------------------------------------------------------------------------
   SPECIFY GUTENBERG SUPPORT
------------------------------------------------------------------------------------------------ */


if ( ! function_exists( 'mate_add_gutenberg_features' ) ) :

	function mate_add_gutenberg_features() {

		/* Gutenberg Palette --------------------------------------- */

		add_theme_support( 'editor-color-palette', array(
			array(
				'name' 	=> _x( 'Black', 'Name of the black color in the Gutenberg palette', 'mate' ),
				'slug' 	=> 'black',
				'color' => '#000',
			),
			array(
				'name' 	=> _x( 'White', 'Name of the white color in the Gutenberg palette', 'mate' ),
				'slug' 	=> 'white',
				'color' => '#fff',
			),
		) );

	}
	add_action( 'after_setup_theme', 'mate_add_gutenberg_features' );

endif;

