<?php

/* ============ DECLARE FUNCTIONS ============ */
global $mate_custom_cf7_styles;
global $mate_custom_cf7_templates_only;
global $mate_custom_cf7_templates;

$mate_custom_cf7_templates = array(
    'layouts/contact.php',
    'layouts/contact-with-sidebar.php',
    'layouts/contact-form.php'
);


/* ============ ACTIVATE/DEACTIVATE FUNCTIONS ============ */


/* == CUSTOM CONTACT FORM 7 STYLES? == */
$mate_custom_cf7_styles = TRUE; /* Edit cf7-styles.css with your own styles */


/* == LOAD CONTACT FORM 7 ONLY IN SPECIFIC PAGES TEMPLATES? == */
$mate_custom_cf7_templates_only = TRUE; /* Stop editing if FALSE */


/* ============ CONFIGURE FUNCTIONS ============ */


    /**
     * FUNCTION: CONTACT FORM 7 CUSTOM CSS FUNCTION
     * Description: Add custom CSS file based on original CF7 plugin CSS. It will load on footer.
     */
        if (!empty($mate_custom_cf7_styles)){

            add_filter( 'wpcf7_load_css', '__return_false' ); //Disable GF7 CSS

            if ( ! function_exists( 'mate_custom_CF7_styles_register' ) ) {
                function mate_custom_CF7_styles_register() {
                            wp_register_style('mate_cf7_css', get_theme_file_uri( '/functions/plugins/contact-form-7/contact-form-7.css' ), array(), wp_get_theme( 'mate' )->get( 'Version' ));
                    }
                add_action( 'wp_enqueue_scripts', 'mate_custom_CF7_styles_register');
            }


            if ( ! function_exists( 'mate_custom_CF7_styles_enqueue' ) ) {
                    function mate_custom_CF7_styles_enqueue() {
                        global $mate_custom_cf7_templates_only;
                        if ($mate_custom_cf7_templates_only){ //We need to check if we will load this only in some templates.
                            global $mate_custom_cf7_templates;
                            $current_template = get_page_template_slug( get_the_ID() );
                                if (in_array($current_template, $mate_custom_cf7_templates, true)) {
                                    wp_enqueue_style('mate_cf7_css');
                                }
                        }else {//if not, we will just load in footer
                            wp_enqueue_style('mate_cf7_css');
                        }

                    }
                add_action( 'get_footer', 'mate_custom_CF7_styles_enqueue');
            }

        }



    /**
     * FUNCTION: LOAD CONTACT FORM 7 ONLY IN SPECIFIC PAGES TEMPLATES
     * Description: CF7 scripts and styles will load only in pages with those page templates. You can rename them or add more.
     */
    if (!empty($mate_custom_cf7_templates_only)){

        if ( ! function_exists( 'mate_cf7_templates_only' ) ) {
            function mate_cf7_templates_only() {
                global $mate_custom_cf7_templates;
                $current_template = get_page_template_slug( get_the_ID() );

                if (!in_array($current_template, $mate_custom_cf7_templates, true)) { //Check if page template doesn't match contact.php (or others)
                    add_filter( 'wpcf7_load_css', '__return_false' ); // If NOT: Disable GF7 CSS
                    wp_deregister_script( 'contact-form-7' );// If NOT: Disable GF7 SCRIPT
                    wp_deregister_style( 'contact-form-7' );// If NOT: Disable GF7 STYLE
                }

            }
            add_action( 'wp_enqueue_scripts', 'mate_cf7_templates_only', 100 );
        }

    }