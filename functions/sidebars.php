<?php
/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function mate_register_sidebars() {

	register_sidebar( array(

            'id' => 'sidebar',
            'name' => __( 'Sidebar', 'mate' ),
            'description' => __( 'The sidebar.', 'mate' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgettitle">',
            'after_title' => '</h4>',

        )
    );

} // don't remove this bracket!

   // adding sidebars to Wordpress
   add_action( 'widgets_init', 'mate_register_sidebars' );