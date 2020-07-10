<?php

define ( 'MATE_VERSION', wp_get_theme()->get( 'Version' ) );

/* MATE CONFIG: Edit this file in a child theme to change options
------------------------------------------------ */
get_template_part('config/config');
/*


/* MATE PLUGINS CONFIG: Activate or deactivate functions that only affect some plugins
------------------------------------------------ */
get_template_part('config/plugins');


/* DEBUG MODE
------------------------------------------------ */
if (!empty($mate_debug_mode)){
	get_template_part('functions/debug-mode');
}



/* GOOGLE FONTS
------------------------------------------------ */
if (!empty($mate_google_fonts)){
	get_template_part('functions/google-fonts');
}


/* JS RESPONSIVE NAVIGATION
------------------------------------------------ */
if (!empty($mate_responsive_navigation)){
	get_template_part('functions/navigation');
}

/* ENQUEUE DEFAULT STYLES
------------------------------------------------ */
/*
Grids, typography, etc.
*/
get_template_part('functions/styles-scripts');





/* REGISTER SIDEBAR AND PAGE-WITH-SIDEBAR
------------------------------------------------ */

if (!empty($mate_use_sidebars)){
	get_template_part('functions/sidebars');
}else{
	/* Remove template "page-with-sidebar" if sidebars are unset */
	add_filter( 'theme_page_templates', 'child_theme_remove_page_template', 20, 3);
	function child_theme_remove_page_template( $page_templates ) {
		unset( $page_templates['layouts/page-with-sidebar.php'] );
		unset( $page_templates['layouts/contact-with-sidebar.php'] );
	return $page_templates;
	}
}


/* COMMENTS FUNCTION
------------------------------------------------ */
if (!empty($mate_use_comments)){
	get_template_part('functions/comments');
}


/* MENUS FUNCTION
------------------------------------------------ */

if (!empty($mate_use_menus)){
	get_template_part('functions/menus');
}


/* ADD GUTENBERG DEFAULT CONFIGURATION
------------------------------------------------ */
if (!empty($mate_gutenberg_default_config)){
	get_template_part('functions/gutenberg-default-config');
}


/* ADD FIX TO SCROLLBAR BUG WHEN USING ALIGNFULL AND ALIGNWIDE
------------------------------------------------ */
if (!empty($mate_scrollbar_fix)){
	get_template_part('functions/mate-scrollbar-fix');
}


/* ADD PLUGINS FUNCTIONS
------------------------------------------------ */
if (!empty($mate_custom_plugins)){
	get_template_part('plugins/config');
}


/* ADD SUPPORT FOR OLD BROWSERS (CSS VARIABLES)
------------------------------------------------ */
if (!empty($mate_old_support) && !empty($_SERVER['HTTP_USER_AGENT'])){
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'MQQBrowser') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'QQBrowser') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'bdbrowser') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'baidubrowser') !== FALSE ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE){
		/* LOAD SUPPORT ONLY FOR INTERNET EXPLORER AND OLD BROWSERS */
		get_template_part('functions/old-support');
	}
}


/* ADD SMOOTH-SCROLL JAVASCRIPT
------------------------------------------------ */
if (!empty($mate_smooth_scroll_script)){
	get_template_part('functions/smooth-scroll-script');
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

		// Add responsiveness to embeds
		add_theme_support( 'responsive-embeds' );

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
				'script',
				'style',
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