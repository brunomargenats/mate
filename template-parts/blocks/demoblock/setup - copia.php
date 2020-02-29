<?php
/**
 * Gutenberg Block: Demo block setup.
 * Description: This is the setup function. Here we configure our custom gutenberg block using ACF blocks.
 * @link https://www.advancedcustomfields.com/resources/blocks/
 * @link https://www.ibenic.com/php-namespaces-wordpress-plugins/
 */


class demoblock {

    /* Save ACF fields in json */

    public static function my_acf_json_save_point( $path ) {

        // update path
        $path = get_stylesheet_directory() . '/template-parts/blocks/demoblock/acf-json';

        // return
        return $path;

    }



    /* Load ACF fields in json */

    public static function my_acf_json_load_point( $paths ) {

        // remove original path (optional)
        unset($paths[0]);

        // append path
        $paths[] = get_stylesheet_directory() . '/template-parts/blocks/demoblock/acf-json';

        // return
        return $paths;

    }



    public static function register_acf_block_types() {
        // https://www.advancedcustomfields.com/resources/acf_register_block_type/
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'demoblock',
            'title'             => __('Demo block'),
            'description'       => __('A custom demo block.'),
            'render_template'   => 'template-parts/blocks/demoblock/demoblock.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
            'enqueue_assets' => function(){
                global $mate_version;
                wp_enqueue_style( 'block-testimonial', get_theme_file_uri('/template-parts/blocks/demoblock/testimonial.css' ), array(), $mate_version );
                wp_enqueue_script( 'block-testimonial', get_theme_file_uri('/template-parts/blocks/demoblock/testimonial.js'), array(), $mate_version, true );
              },
        ));
    }


}



add_filter('acf/settings/save_json', array('demoblock', 'my_acf_json_save_point'));

add_filter('acf/settings/load_json', array('demoblock', 'my_acf_json_load_point'));

add_filter('acf/init', array('demoblock', 'register_acf_block_types'));