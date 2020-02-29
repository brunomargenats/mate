<?php
/**
 * FUNCTIONS: CONTACT FORMS 7 TEMPLATES ONLY
 * Description: Deregister scripts and styles from page if "Contact Form" page template isn't set.
 */


if ( ! function_exists( 'mate_cf7_templates_only' ) ) {
    function mate_cf7_templates_only() {
        global $mate_custom_cf7_templates;
        $current_template = get_page_template_slug( get_the_ID() );

        if (!in_array($current_template, $mate_custom_cf7_templates, true)) { //Check if page template ISN'T equal to contact.php (or others)
            add_filter( 'wpcf7_load_css', '__return_false' ); // If NOT: Disable GF7 CSS
            wp_deregister_script( 'contact-form-7' );// If NOT: Disable GF7 SCRIPT
            wp_deregister_style( 'contact-form-7' );// If NOT: Disable GF7 STYLE
        }

    }
    add_action( 'wp_enqueue_scripts', 'mate_cf7_templates_only', 100 );
}