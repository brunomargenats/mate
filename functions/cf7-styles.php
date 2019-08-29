<?php
/**
 * CF7 CUSTOM CSS FUNCTION
 * Description: Add custom CSS file based on original CF7 plugin CSS. It will load on footer.
 */

add_filter( 'wpcf7_load_css', '__return_false' ); //Disable GF7 CSS

if ( ! function_exists( 'mate_custom_CF7_styles_register' ) ) {
    function mate_custom_CF7_styles_register() {
                wp_register_style('mate_cf7_css', get_theme_file_uri( '/assets/css/cf7-styles.css' ), array(), wp_get_theme( 'mate' )->get( 'Version' ));
        }
	add_action( 'wp_enqueue_scripts', 'mate_custom_CF7_styles_register');
}


if ( ! function_exists( 'mate_custom_CF7_styles_enqueue' ) ) {
        function mate_custom_CF7_styles_enqueue() {

            global $cf7_templates_only; 

            if ($cf7_templates_only){ //We need to check if we will load this only in some templates.
                global $cf7_templates;
                $current_template = get_page_template_slug( get_the_ID() );
                    if (in_array($current_template, $cf7_templates, true)) {
                        wp_enqueue_style('mate_cf7_css');
                    }
            }else {//if not, we will just load in footer
                wp_enqueue_style('mate_cf7_css');
            }

        }
	add_action( 'get_footer', 'mate_custom_CF7_styles_enqueue');
}