<?php
/**
 * FUNCTIONS: DEFAULT CONFIGURATION FOR GUTENBERG
 * Description: This function will help us to pre-config our Gutenberg blocks for this theme
 * @link: https://wpassist.me/how-to-remove-block-library-css-from-wordpress/
 */

 /* Customizing buttons block: https://make.wordpress.org/core/2020/01/23/controlling-the-block-editor/ */

function mate_default_config() {

		// -- Disable Editor color palette. You can also create your own with this function, but you will need to add some CSS.
	add_theme_support( 'editor-color-palette' );

	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );

	// -- Disable Custom Font Sizes
	add_theme_support('disable-custom-font-sizes');

	// -- Remove all font size customization panels from the editor
	add_theme_support( 'editor-font-sizes', array() );

	// Disable custom gradients.
	add_theme_support( 'disable-custom-gradients' );

	// Disable gradients
	add_theme_support( 'editor-gradient-presets', array() );

}


add_action( 'after_setup_theme', 'mate_default_config' );