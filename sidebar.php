<?php 
/*
* This is the base sidebar template.
*
*/
?>

<aside id="sidebar" class="sidebar" role="complementary">

    <div class="inner-sidebar wrap">

    	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar' ); ?>

        <?php else : ?>

            <!-- <?php _e( 'Add some widgets and they will appear here.', 'mate' );  ?> -->

    	<?php endif; ?>

    </div>

</aside>
