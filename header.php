<?php
/**
 * The template part for header.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php get_template_part( 'template-parts/header/head-inline-scripts'); ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
    ?>

    <?php get_template_part( 'template-parts/header/inner-header-content'); ?>