<?php
/**
 * The template part for sidebar.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
?>
<aside id="sidebar" class="sidebar col-12 col-sm-4">

    <div class="inner-sidebar wrap">

        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar' ); ?>

        <?php endif; ?>

    </div>

</aside>