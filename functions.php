<?php

/* MATE CONFIG: Edit this file in a child theme to change options
------------------------------------------------ */
get_template_part('config/config');
/*

/* GOOGLE FONTS
------------------------------------------------ */
if ($google_fonts){
	get_template_part('functions/gfonts');
}


/* ENQUEUE DEFAULT STYLES
------------------------------------------------ */
/*
Grids, typography, etc.
*/
get_template_part('functions/styles-scripts');


/* JS RESPONSIVE NAVIGATION
------------------------------------------------ */
if ($responsive_navigation){
	get_template_part('functions/navigation');
}


/* REGISTER SIDEBAR AND PAGE-WITH-SIDEBAR
------------------------------------------------ */
if ($use_sidebars){
	get_template_part('functions/sidebars');
}else{
	/* Remove template "page-with-sidebar" if sidebars are unset */
	add_filter( 'theme_page_templates', 'child_theme_remove_page_template', 20, 3);
	function child_theme_remove_page_template( $page_templates ) {
	unset( $page_templates['layouts/page-with-sidebar.php'] );
	return $page_templates;
	}
}


/* COMMENTS FUNCTION
------------------------------------------------ */
if ($use_comments){
	get_template_part('functions/comments');
}


/* MENUS FUNCTION
------------------------------------------------ */
if ($use_menus){
	get_template_part('functions/menus');
}


/* DISABLE GUTENBERG ON FRONTPAGE
------------------------------------------------ */
if ($disable_gutenberg_frontpage){
	get_template_part('functions/disable-gutenberg-frontpage');
}


/* CONTACT FORM 7 STYLES FUNCTION
------------------------------------------------ */
if ($cf7_styles){
	get_template_part('functions/cf7-styles');
}

/* CONTACT FORM 7 TEMPLATES ONLY
------------------------------------------------ */
if ($cf7_templates_only){
	get_template_part('functions/cf7-templates-only');
}



/* ADD SUPPORT FOR IE (CSS VARIABLES)
------------------------------------------------ */
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
	/* LOAD SUPPORT ONLY FOR INTERNET EXPLORER */
	if ($ie_support){
		get_template_part('functions/ie-support');
	}
}




/* DISABLE EMOJIS
------------------------------------------------ */
if ($disabe_emojis){
	get_template_part('functions/disable-emojis');
}


/* DISABLE EMBED YOUR POSTS IN OTHERS WEB SITES
------------------------------------------------ */
if ($disabe_wpembed){
	get_template_part('functions/disable-wp-embed');
}



/* POST TIME FUNCTION (from WP Twenty Seventeen theme)
------------------------------------------------ */
get_template_part('functions/post-time');


/* PAGE NAVI
------------------------------------------------ */
get_template_part('functions/page-navi');


/* CUSTOM EXCERPT
------------------------------------------------ */
get_template_part('functions/custom-excerpt');


/* ENQUEUE CUSTOM SCRIPTS
------------------------------------------------ */
get_template_part('functions/custom-styles-scripts'); /* LOAD NEW SCRIPTS AND STYLES FOR THIS THEME */


/* MATE CONTENT TYPES
------------------------------------------------ */
get_template_part('functions/content-types'); /* Define what type of template use for each type of content */

/* ADD WP CLEANUP
------------------------------------------------ */
if ($wp_cleanup){
get_template_part('functions/cleanup'); /* Clean up WordPress Header mess */
}



/* THEME SETUP (Basic WP configurations)
------------------------------------------------ */
if ( ! function_exists( 'mate_setup' ) ) {

	function mate_setup() {

		// Set content-width: Maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
		global $content_width;
        if ( ! isset( $content_width ) ) $content_width = 1200;

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// align-wide and align-full support
		add_theme_support( 'align-wide' );

		// Title tag
		add_theme_support( 'title-tag' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'assets/css/style-editor.css' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Post formats (I never use them, and you?)
        //add_theme_support( 'post-formats', array( 'aside' ) );


		// Add new thumbnails image sizes (Try to avoid that)
		/* add_image_size( 'post-image', 620, 9999 );*/



		// Make this theme translation ready:
        load_theme_textdomain( 'mate', get_template_directory() . '/languages' );


		$locale_file = get_template_directory() . "/languages/" . get_locale();

		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}

	}
	add_action( 'after_setup_theme', 'mate_setup' );

}