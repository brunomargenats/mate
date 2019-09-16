<?php
/**
 * Template Part: Code in header.
 * Description: The template part for your logo and navigation.
 */
?>

<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to the content', 'mate' ); ?></a>
<a class="skip-link screen-reader-text" href="#nav"><?php _e( 'Skip to the main menu', 'mate' ); ?></a>
    <div id="site" class="container"><?php /* Fluid Container: <div id="site" class="container fluid"> */?>

        <header class="header" id="header">

            <div id="inner-header" class="clearfix">
                <div class="grid align-center">
                    <div id="siteinfo" class="col-bleed-y col-9 col-sm-auto">
                        <div id="logo">
                            <a href="<?php echo home_url(); ?>" rel="nofollow" title="<?php bloginfo('name'); ?>">
                                <img width="40" height="59"
                                    src="<?php echo get_theme_file_uri(). '/assets/images/logo.svg' ?>"
                                    alt="<?php bloginfo('name'); ?> logo" />
                            </a>
                        </div>
                        <?php /* uncomment if needed
                    <div id="site-title" class="site-title">
                        <a href="<?php echo home_url(); ?>" rel="nofollow" title="<?php bloginfo('name'); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div>
                    */?>
                    </div>
                    <?php global $responsive_navigation; if ($responsive_navigation){?>
                    <div id="nav-button" class="col-bleed-y col-3">
                        <div id="nav-button-container">
                            <button type="button" id="nav-toggle" class="nav-toggle"><?php _e( 'Menu', 'mate' ); ?></button>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
                    <div class="container-menu col-bleed-y col-auto">

                        <nav id="nav" class="nav-collapse header-nav primary-menu"
                            aria-label="<?php _e( 'Primary Menu', 'mate' ); ?>">
                            <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'menu-items', 'menu' => __( 'The Main Menu', 'mate' ), 'theme_location' => 'primary-menu'  ) ); ?>
                        </nav>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </header><!-- header -->