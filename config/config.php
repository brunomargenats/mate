<?php
/**
 * MAIN FUNCTIONS CONFIGURATION FILE
 * How to use it: Copy this file inside /config/ in your child theme and change the options if you want.
 */


/* DON'T TOUCH THIS */
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
global $mate_disabe_emojis;
global $mate_disabe_wpembed;
global $mate_ie_support;
global $mate_smooth_scroll_script;
global $mate_custom_cf7;
global $mate_custom_cf7_styles;
global $mate_custom_cf7_templates_only;
global $mate_custom_cf7_templates;
/* DON'T TOUCH THIS */


/*
=== YOU CAN EDIT THE FOLLOWING OPTIONS ===
Use TRUE/FALSE or the options provided in the comments.
*/

/* == DEBUG MODE == */
$mate_debug_mode = FALSE; /* Always FALSE on live websites. */

/* == GOOGLE FONTS == */
$mate_google_fonts = FALSE;

/* == RESPONSIVE & FIXED NAVIGATION == */
$mate_responsive_navigation = TRUE; /* Load javascript and css for navigation */
    if ($mate_responsive_navigation){
        $mate_fixed_navigation = FALSE; /* This will stick navigation on scrolling. Responsive navigation must be TRUE */
    }

/* == USE SIDEBARS == */
$mate_use_sidebars = FALSE; /* FALSE if you don't need sidebars and widgets */

/* == USE MENUS == */
$mate_use_menus = TRUE; /* FALSE if you don't need any WordPress menu (navigation).*/


/* == USE COMMENTS == */
$mate_use_comments = TRUE; /* FALSE if you don't need comments. I recommend to also install "Disable Comments" plugin.*/
    if ($mate_use_comments){
        $mate_use_comments_in_pages = FALSE; /* TRUE if you want to ALSO show comments template in pages. */
}

/* == USE WP CLEANUP == */
$mate_wp_cleanup = TRUE; /* I recommend to let this TRUE. If you need to change something, copy functions/cleanup.php to your child theme.*/


/* == MINIMAL SUPPORT FOR IE11? == CSS Variables won't work in IE without this */
$mate_ie_support = TRUE;


/* == ADD SMOOTH-SCROLL JAVASCRIPT ONLY FOR BROWSERS THAN NOT SUPPORT CSSOM Scroll-behavior ==  */
$mate_smooth_scroll_script = TRUE; /*FALSE if you don't care about smooth-scrolling*/


/* == ADD GUTENBERG DEFAULT CONFIGURATION ==*/
$mate_gutenberg_default_config = TRUE; // TRUE if you want to change some Gutenberg default options like colors for buttons and others.

/* == ADD CUSTOM GUTENBERG BLOCKS ==*/
$mate_gutenberg_custom_blocks = TRUE; // TRUE IF you want to add custom blocks to gutenberg. Go to template-parts/blocks/blocks-config.php to configure.


/* == DISABLE GUTENBERG ON FRONTPAGE ==*/
$mate_disable_gutenberg_frontpage = TRUE; // TRUE if you're not using Gutenberg Blocks on front-page. Site will load faster.


/* == DISABLE EMOJIS == */
$mate_disabe_emojis = TRUE; /* If TRUE, this will make your site load faster. If FALSE, you can use WP emojis on your posts and pages. */

/* == DISABLE POST EMBEDDING IN OTHER SITES == */
$mate_disabe_wpembed = TRUE;  /* TRUE if you don't want other sites embed your posts remotely. (Like you do with Youtube or Instagram 
For a more advanced configuration use the WP plugin DISABLE EMBEDS*/

/*===== START CONTACT FORM 7 PLUGIN SUPPORT =====*/
$mate_custom_cf7 = FALSE; /* Support CF7? Stop editing the following options if not. */

    if ($mate_custom_cf7){

        /* == CUSTOM CONTACT FORM 7 STYLES? == */
        $mate_custom_cf7_styles = TRUE; /* Edit cf7-styles.css with your own styles */

        /* == LOAD CONTACT FORM 7 ONLY IN SPECIFIC PAGES TEMPLATES? == */
        $mate_custom_cf7_templates_only = TRUE; /* Stop editing if FALSE */
        if ($mate_custom_cf7_templates_only){
            $mate_custom_cf7_templates = array(
                'layouts/contact.php',
                'layouts/contact-with-sidebar.php',
                'layouts/contact-form.php'
            ); /* CF7 scripts and styles will load only in pages with those page templates. You can rename them or add more */
        }

    }

/*===== END OF CONTACT FORM 7 SUPPORT =====*/