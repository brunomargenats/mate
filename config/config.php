<?php
/**
 * MAIN FUNCTIONS CONFIGURATION FILE
 * How to use it: Copy this file inside /config/ in your child theme and change the options if you want.
 */


/* DON'T TOUCH THIS -->
*/
global $mate_debug_mode;
global $mate_theme_color;
global $mate_google_fonts;
global $mate_responsive_navigation;
global $mate_fixed_navigation;
global $mate_use_menus;
global $mate_use_sidebars;
global $mate_use_comments;
global $mate_use_comments_in_pages;
global $mate_gutenberg_default_config;
global $mate_scrollbar_fix;
global $mate_old_support;
/*
<-- DON'T TOUCH THIS */


/*
=== YOU CAN EDIT THE FOLLOWING OPTIONS ===
Use TRUE/FALSE or the options provided in the comments.
*/




/* ============ DEVELOPMENT ============ */

/* == DEBUG MODE == */
$mate_debug_mode = FALSE; /* Login as administrator and add ?debug=true to your URL to active this: https://yoursite.com/?debug=true */


/* ============ OPTIONS ============ */

/* == THEME COLOR == */
$mate_theme_color = '#000000'; /* Replace FALSE with a color like this '#000000'. Theme colors only works in Chrome for mobile: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta/name/theme-color */

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

/* == ADD GUTENBERG DEFAULT CONFIGURATION ==*/
$mate_gutenberg_default_config = TRUE; // TRUE if you want to change some Gutenberg default options like colors for buttons and others.


/* ============ PERFORMANCE & SUPPORT ============ */


/* == MINIMAL SUPPORT FOR IE11 AND OTHER OLD BROWSERS? == CSS Variables won't work in IE and other old browsers without this */
$mate_old_support = TRUE;


/* == FIX SCROLLBAR BUG WHEN USING ALIGNWIDE AND ALIGNFULL ==*/
$mate_scrollbar_fix = TRUE; // False if you don't need this.
