<?php

/* === NAVIGATION CONFIGURATION === */
add_filter( 'body_class','mate_body_classes' );
function mate_body_classes( $classes ) {
/* Select one type of navigation */
/* horizontal-navigation = Default. Hamburger icon and a vertical navigation on mobile. Horizontal menu on desktop. */
/* full-navigation = Only hamburger icon is shown. Full size menu (vertical) on click. */
/* fixed-navigation = Navigation always fixed on top */

$navigation_type = 'full-navigation';
//$navigation_type = 'full-navigation';
//$navigation_type = 'horizontal-navigation fixed-navigation';
//$navigation_type = 'full-navigation fixed-navigation';

/* EDIT navigation.css for change breakpoint. Default is 768px.*/
	$classes[] = $navigation_type;
    return $classes;
}

/* === END OF NAVIGATION CONFIGURATION === */


//Filtering a Class in Navigation Menu Item (to add a dropdown class)
//https://wordpress.stackexchange.com/questions/90649/add-class-to-menu-items-of-one-specific-menu-nav-menu-css-class


add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    if ( 'primary-menu' === $args->theme_location ) {
        if (in_array('menu-item-has-children', $classes) ){
            $classes[] = 'dropdown';
        }
    }
    return $classes;
}




// Add class to anchor (not we don't need to add a walker)
//https://stackoverflow.com/questions/13161201/how-to-add-class-and-element-to-a-tag-in-sub-menu-of-wp-nav-menu-in-wordpres
add_filter( 'nav_menu_link_attributes', 'add_class_to_items_link', 10, 3 );

function add_class_to_items_link( $atts, $item, $args ) {
    if ( 'primary-menu' === $args->theme_location ) {
        // check if the item has children
        $hasChildren = (in_array('menu-item-has-children', $item->classes));
        if ($hasChildren) {
            // add the desired attributes:
            $atts['class'] = 'dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['data-target'] = '#';
        }
    }
  return $atts;
}


/* LOAD JS & CSS NAVIGATION */
if ( ! function_exists( 'mate_nav_scripts_styles' ) ) {
    function mate_nav_scripts_styles() {
        if ( ! is_admin() ) {
            wp_register_style('mate_navigation_css',get_theme_file_uri( '/assets/css/navigation.css' ));
            wp_register_script('mate_navigation_js', get_theme_file_uri('/assets/js/responsive-nav.min.js'), '', wp_get_theme( 'mate' )->get( 'Version' ), true );
            wp_enqueue_script('mate_navigation_js');
            wp_enqueue_style('mate_navigation_css');
        }
    }
	add_action( 'wp_enqueue_scripts', 'mate_nav_scripts_styles' );
}