<?php
/**
 * SIDEBARS FUNCTIONS AND HAS_SIDEBAR DETECTION
 * Description: This function shows when the post was publish.
 * @link https://github.com/WordPress/twentyseventeen/blob/master/inc/template-tags.php
 */


// Sidebars & Widgetizes Areas
if ( ! function_exists( 'mate_register_sidebars' ) ) {
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

    }

   // adding sidebars to Wordpress
   add_action( 'widgets_init', 'mate_register_sidebars' );
}



// Add class "page-template-page-with-sidebar" to body
if ( ! function_exists( 'mate_sidebar_body_class' ) ) {

    function mate_sidebar_body_class( $classes ) {

    global $has_sidebar; /* We store $has_sidebar variable for use it in templates */
    /* If "Page with sidebar" is set in blog page, all archive is using sidebars */
    /* We get the ID of the Blog page */
    $page_for_posts = get_option( 'page_for_posts' );
    /* We get the template of the Blog page */
    $page_for_blog_template = get_page_template_slug( $page_for_posts );

    /* We check if we need a sidebar */
    if ($page_for_blog_template == 'layouts/page-with-sidebar.php'){
        $has_sidebar = TRUE;
    }else{
        $has_sidebar = FALSE;
    }

        if (!is_page() && $has_sidebar){ /* Add more conditions if you don't want to show the sidebar in some post_types or type of content. */
            $classes[] = 'page-template-page-with-sidebar';
        }
        return $classes;

    }
    // adding function to Wordpress
    add_filter( 'body_class','mate_sidebar_body_class' );
}