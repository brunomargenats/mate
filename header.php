
<?php
/**
 * The template part for header.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php get_template_part( 'template-parts/header/head-inline-scripts'); ?>
		<?php wp_head(); ?>

	</head>

    <body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
    <?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
    ?>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to the content', 'mate' ); ?></a>
        <a class="skip-link screen-reader-text" href="#nav"><?php _e( 'Skip to the main menu', 'mate' ); ?></a>

    <div id="container" class="container"><?php /* Fluid Container: <div id="container" class="container fluid"> */?>

        <header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

            <div id="inner-header" class="clearfix">
                <?php get_template_part( 'template-parts/header/inner-header-content'); ?>
            </div>


        </header><!-- header -->