<?php
/**
 * The template part for your logo and navigation.
 */
?>

<div class="grid align-center">
    <div id="siteinfo" class="col-bleed-y col-9 col-sm-auto" itemscope itemtype="https://schema.org/Organization">
        <div id="logo" itemprop="logo">
                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                    <img width="40" height="58.75" src="<?php echo get_theme_file_uri(). '/assets/images/logo.svg' ?>" itemprop="logo" alt="<?php bloginfo('name'); ?> logo" />
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
    <?php global $responsive_navigation;
    if ($responsive_navigation){?>
        <div id="nav-button" class="col-bleed-y col-3">
            <div id="nav-button-container">
                <button type="button" id="nav-toggle" class="nav-toggle"><?php _e( 'Menu', 'mate' ); ?></button>
            </div>
        </div>
    <?php } ?>
    <?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
        <div class="container-menu col-bleed-y col-auto">

                <nav id="nav" class="nav-collapse header-nav primary-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="<?php _e( 'Primary Menu', 'mate' ); ?>">
                    <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'menu-items', 'menu' => __( 'The Main Menu', 'mate' ), 'theme_location' => 'primary-menu'  ) ); ?>
                </nav>
        </div>
    <?php endif; ?>
</div>