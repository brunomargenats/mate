<?php
/**
 * MAIN FUNCTIONS CONFIGURATION FILE
 * How to use it: Copy this file inside /config/ in your child theme and change the options if you want.
 */


/* DON'T TOUCH THIS -->
*/
global $mate_debug_mode;
global $mate_wp_cleanup;
global $mate_google_fonts;
global $mate_responsive_navigation;
global $mate_fixed_navigation;
global $mate_use_menus;
global $mate_use_sidebars;
global $mate_use_comments;
global $mate_use_comments_in_pages;
global $mate_gutenberg_default_config;
global $mate_gutenberg_custom_blocks;
global $mate_disable_gutenberg_frontpage;
global $mate_scrollbar_fix;
global $mate_disabe_emojis;
global $mate_disabe_wpembed;
global $mate_ie_support;
global $mate_smooth_scroll_script;
global $mate_custom_plugins;
/*
<-- DON'T TOUCH THIS */


/*
=== YOU CAN EDIT THE FOLLOWING OPTIONS ===
Use TRUE/FALSE or the options provided in the comments.
*/




/* ============ DEVELOPMENT ============ */

/* == DEBUG MODE == */
$mate_debug_mode = TRUE; /* Login as administrator and add ?debug=true to your URL to active this: https://yoursite.com/?debug=true */


/* ============ OPTIONS ============ */

/* == GOOGLE FONTS == */
$mate_google_fonts = FALSE; /* If TRUE, you have to configure your fonts on functions/google-fonts.php and variables.css (--font-display and --font-text)


/* == RESPONSIVE & FIXED NAVIGATION == */
$mate_responsive_navigation = TRUE; /* Load javascript and css for navigation */
    if ($mate_responsive_navigation){
        $mate_fixed_navigation = FALSE; /* This will stick navigation on scrolling. Responsive navigation must be TRUE */
    }


/* == USE SIDEBARS == */
$mate_use_sidebars = TRUE; /* FALSE if you don't need sidebars and widgets */


/* == USE MENUS == */
$mate_use_menus = TRUE; /* FALSE if you don't need any WordPress menu (navigation).*/


/* == USE COMMENTS == */
$mate_use_comments = TRUE; /* FALSE if you don't need comments. I recommend to also install "Disable Comments" plugin.*/
    if ($mate_use_comments){
        $mate_use_comments_in_pages = FALSE; /* TRUE if you want to ALSO show comments template in pages. */
}



/* ============ EXTRAS ============ */

/* == ADD CUSTOM GUTENBERG BLOCKS (You need the plugin Advanced Custom Fields PRO to use this) ==*/
$mate_gutenberg_custom_blocks = FALSE; // TRUE IF you want to add custom blocks to gutenberg. Go to template-parts/blocks/config.php to configure.


/* == ADD GUTENBERG DEFAULT CONFIGURATION ==*/
$mate_gutenberg_default_config = TRUE; // TRUE if you want to change some Gutenberg default options like colors for buttons and others.


/* == CUSTOM PLUGINS FUNCTIONS == */
$mate_custom_plugins = FALSE; /* TRUE if you want to add functions that affects specific plugins. Go to plugins/config.php to configure. */


/* ============ PERFORMANCE & SUPPORT ============ */

/* == USE WP CLEANUP == */
$mate_wp_cleanup = TRUE; /* I recommend to let this TRUE. If you need to change something, copy functions/cleanup.php to your child theme.*/


/* == MINIMAL SUPPORT FOR IE11? == CSS Variables won't work in IE without this */
$mate_ie_support = TRUE;


/* == DISABLE POST EMBEDDING IN OTHER SITES == */
$mate_disabe_wpembed = TRUE;  /* TRUE if you don't want other sites embed your posts remotely. (Like you do with Youtube or Instagram 
For a more advanced configuration use the WP plugin DISABLE EMBEDS*/


/* == ADD A SMOOTH-SCROLL JAVASCRIPT TO ALL BROWSERS INSTEAD OF RELYING ON Scroll-behavior FOR SOME OF THEM ==  */
$mate_smooth_scroll_script = FALSE; /*FALSE if you don't care about smooth-scrolling*/


/* == DISABLE GUTENBERG ON FRONTPAGE ==*/
$mate_disable_gutenberg_frontpage = FALSE; // TRUE if you're not using Gutenberg Blocks on front-page. Site will load faster.


/* == FIX SCROLLBAR BUG WHEN USING ALIGNWIDE AND ALIGNFULL ==*/
$mate_scrollbar_fix = FALSE; // False if you don't need this.


/* == DISABLE EMOJIS == */
$mate_disabe_emojis = TRUE; /* If TRUE, this will make your site load faster. If FALSE, you can use WP emojis on your posts and pages. */
