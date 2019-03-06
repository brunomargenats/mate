<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

    <?php // drop Google Analytics here ?>
    <?php // end analytics ?>

        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php
    // Favicons goes here. Use: https://realfavicongenerator.net/
    // OR use plugin: https://wordpress.org/plugins/favicon-by-realfavicongenerator/
    ?>


		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

		<a class="skip-link screen-reader-text" href="#site-content"><?php _e( 'Skip to the content', 'mate' ); ?></a>
		<a class="skip-link screen-reader-text" href="#menu-menu"><?php _e( 'Skip to the main menu', 'mate' ); ?></a>
        <div class="overlay"> </div>
    <div id="container" class="container progressive">

        <header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

            <div id="inner-header" class="clearfix">
                    <div id="siteinfo" class="" itemscope itemtype="https://schema.org/Organization">
                        <div id="logo" itemprop="logo">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <img src="<?php echo get_theme_file_uri(). '/assets/images/logo.svg' ?>" itemprop="logo" alt="<?php bloginfo('name'); ?> logo" />
                                </a>
                        </div>
                        <?php /* uncomment if needed
                        <div id="site-title" class="site-title" itemprop="name">
                            <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                <?php bloginfo('name'); ?>
                            </a>
                        </div>
                        */?>
                    </div>
                    <div id="nav-button">
                                    <button type="button" id="nav-toggle" class="nav-toggle"><?php _e( 'Menu', 'mate' ); ?></button>
                    </div>
                    <?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
                        <div class="container-menu">

                                <nav id="nav" class="nav-collapse header-nav primary-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="<?php _e( 'Primary Menu', 'mate' ); ?>">
                                    <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'menu-items', 'menu' => __( 'The Main Menu', 'mate' ), 'theme_location' => 'primary-menu'  ) ); ?>
                                </nav>
                        </div>
                        <?php endif; ?>
                        

            </div>



        </header><!-- header -->
