<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
/**
 * MAIN FUNCTIONS CONFIGURATION FILE
 * How to use it: Copy this file inside /config/ in your child theme and change the options if you want.
 */


/* DON'T TOUCH THIS */
global $wp_cleanup;
global $google_fonts;
global $responsive_navigation;
global $fixed_navigation;
global $use_menus;
global $use_sidebars;
global $use_comments;
global $use_comments_in_pages;
global $disable_gutenberg_frontpage;
global $disabe_emojis;
global $disabe_wpembed;
global $ie_support;
global $use_cf7;
global $cf7_styles;
global $cf7_templates_only;
global $cf7_templates;
/* DON'T TOUCH THIS */


/*
=== YOU CAN EDIT THE FOLLOWING OPTIONS ===
Use TRUE/FALSE or the options provided in the comments.
*/

/* == GOOGLE FONTS == */
$google_fonts = FALSE;

/* == RESPONSIVE NAVIGATION == */
$responsive_navigation = TRUE; /* Load javascript and css for navigation */
$fixed_navigation = FALSE; /* This will stick navigation on scrolling */

/* == USE SIDEBARS == */
$use_sidebars = TRUE; /* FALSE if you don't need sidebars and widgets */

/* == USE MENUS == */
$use_menus = TRUE; /* FALSE if you don't need any WordPress menu (navigation).*/

/* == USE COMMENTS == */
$use_comments = TRUE; /* FALSE if you don't need comments. I recommend to also install "Disable Comments" plugin.*/
    if ($use_comments){
        $use_comments_in_pages = FALSE; /* TRUE if you want to ALSO show comments template in pages. */
}

/* == USE WP CLEANUP == */
$wp_cleanup = TRUE; /* I recommend to let this TRUE. If you need to change something, copy functions/cleanup.php to your child theme.*/


/* == MINIMAL SUPPORT FOR IE11? == CSS Variables won't work in IE without this */
$ie_support = TRUE;


/* == DISABLE GUTENBERG ON FRONTPAGE ==*/
$disable_gutenberg_frontpage = TRUE; // TRUE if you're not using Gutenberg Blocks on front-page. Site will load faster.


/* == DISABLE EMOJIS == */
$disabe_emojis = TRUE; /* If TRUE, this will make your site load faster. If FALSE, you can use WP emojis on your posts and pages. */

/* == DISABLE POST EMBEDDING IN OTHER SITES == */
$disabe_wpembed = TRUE;  /* TRUE if you don't want other sites embed your posts remotely. (Like you do with Youtube or Instagram 
For a more advanced configuration use the WP plugin DISABLE EMBEDS*/

/*===== START CONTACT FORM 7 PLUGIN SUPPORT =====*/
$use_cf7 = TRUE; /* Support CF7? Stop editing the following options if not. */

    if ($use_cf7){

        /* == CUSTOM CONTACT FORM 7 STYLES? == */
        $cf7_styles = TRUE; /* Edit cf7-styles.css with your own styles */

        /* == LOAD CONTACT FORM 7 ONLY IN SPECIFIC PAGES TEMPLATES? == */
        $cf7_templates_only = TRUE; /* Stop editing if FALSE */
        if ($cf7_templates_only){
            $cf7_templates = array(
                'layouts/contact.php',
                'layouts/contact-form.php'
            ); /* CF7 scripts and styles will load only in pages with those page templates. You can rename them or add more */
        }

    }

/*===== END OF CONTACT FORM 7 SUPPORT =====*/