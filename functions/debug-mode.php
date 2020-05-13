<?php
/**
 * FUNCTION: DEBUG MODE
 * Description: Simple inline CSS for debuggin layout.
 */

 // add somme structure lines and backgrounds to layout


if ( isset($_GET['debug']) && $_GET['debug'] == 'true' && !is_admin() && current_user_can('administrator')){
    if ( ! function_exists( 'mate_debug_css' ) ) {
        function mate_debug_css() {
            ?>
            <style>
            /* === DEBUG MODE ON === */
            *{outline:1px solid indigo!important}
            *{ background-color: rgba(0,0,0,0.1) }
            body{overflow:auto!important}
            </style>
            <?php
        }
            add_action('wp_head', 'mate_debug_css');

    }
}
/**
 * Replaces query version in registered scripts or styles with file modified time
 *
 * @param $src
 *
 * @return string
 */
if ( isset($_GET['debug']) && $_GET['debug'] == 'true' && !is_admin() && current_user_can('administrator')){
    if ( ! function_exists( 'mate_add_modified_time' ) ) {
        function mate_add_modified_time( $src ) {

            $clean_src = remove_query_arg( 'ver', $src );
            $path      = wp_parse_url( $src, PHP_URL_PATH );

            if ( $modified_time = @filemtime( untrailingslashit( ABSPATH ) . $path ) ) {
                $src = add_query_arg( 'ver', $modified_time, $clean_src );
            } else {
                $src = add_query_arg( 'ver', time(), $clean_src );
            }
            return $src;

        }

            add_filter( 'style_loader_src', 'mate_add_modified_time', 99999999, 1 );
            add_filter( 'script_loader_src', 'mate_add_modified_time', 99999999, 1 );
    }
}