<?php
if ( ! function_exists( 'mate_load_styles_scripts' ) ) {

function mate_scripts_styles() {

		//wp_enqueue_script('jquery'); // just enqueue as its already registered


		/*   REGISTER ALL CSS FOR SITE */
		wp_register_style('mate_reset',get_theme_file_uri( '/assets/css/reset.css' ));
		wp_register_style('site_style', get_stylesheet_uri(), '', null, 'all' );
		wp_register_style('mate_grid',get_theme_file_uri( '/assets/css/grid.css' ));
		wp_register_style('mate_typography',get_theme_file_uri( '/assets/css/typography.css' ));
		wp_register_style('mate_forms',get_theme_file_uri( '/assets/css/forms.css' ));

		/*   REGISTER ALL JS FOR SITE */
 		/* true = in_footer */
		wp_register_script( 'mate_scripts', get_theme_file_uri('/assets/js/scripts.js'), '', wp_get_theme( 'mate' )->get( 'Version' ), true );
		wp_register_script( 'mate_ponyfill', get_theme_file_uri('/assets/js/css-vars-ponyfill.min.js'), '', wp_get_theme( 'mate' )->get( 'Version' ), true );

		if ( ! is_admin() ) {


			/* CALL ALL CSS*/
			wp_enqueue_style( 'mate_reset' );
			wp_enqueue_style( 'site_style' );
			wp_enqueue_style( 'mate_grid');
			wp_enqueue_style( 'mate_typography');
			wp_enqueue_style( 'mate_forms');

			/* CALL ALL SCRIPTS */


			wp_enqueue_script('mate_ponyfill');
			wp_enqueue_script('mate_scripts');




		}

	}
	add_action( 'wp_enqueue_scripts', 'mate_scripts_styles' );

}


/* DEREGISTER CONTACT FORM 7 CSS */
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}


/*https://stackoverflow.com/questions/19263390/wordpress-loading-multiple-scripts-with-enqueue*/
?>