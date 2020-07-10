<?php
/**
 * Gutenberg Block: Demo block.
 * Description: This is the setup function. Here we configure our custom gutenberg block using Advanced Custom Fields PRO blocks.
 * @link https://www.advancedcustomfields.com/resources/blocks/
 * @link https://www.ibenic.com/php-namespaces-wordpress-plugins/
 */



add_filter('acf/settings/save_json', array(demoblock::BLOCKNAME, 'mate_acf_json_save_point')); // ***EDIT demoblock***
add_filter('acf/settings/load_json', array(demoblock::BLOCKNAME, 'mate_acf_json_load_point')); // ***EDIT demoblock***
add_filter('acf/init', array(demoblock::BLOCKNAME, 'register_acf_block_types')); // ***EDIT demoblock***

class demoblock { // ***EDIT demoblock***
    const BLOCKNAME = 'demoblock'; // ***EDIT demoblock***



    public static function register_acf_block_types() {
        // https://www.advancedcustomfields.com/resources/acf_register_block_type/
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => self::BLOCKNAME,
            'title'             => __('Demo block', 'mate'), // ***EDIT value***
            'description'       => __('A custom demo block.', 'mate'),  // ***EDIT value***
            'render_template'   => 'functions/plugins/gutenberg-custom-blocks/'.self::BLOCKNAME.'/template.php',
            'category'          => 'formatting', // ***EDIT value***
            'icon'              => 'admin-comments',  // ***EDIT value***
            'keywords'          => array( 'testimonial', 'quote' ),  // ***EDIT values***
           /* 'enqueue_assets' => function(){
                wp_enqueue_style( 'block-'.self::BLOCKNAME.'', get_theme_file_uri('/functions/plugins/gutenberg-custom-blocks/'.self::BLOCKNAME.'/assets/'.self::BLOCKNAME.'.css' ), array(), MATE_VERSION );
                wp_enqueue_script( 'block-'.self::BLOCKNAME.'', get_theme_file_uri('/functions/plugins/gutenberg-custom-blocks/'.self::BLOCKNAME.'/assets/'.self::BLOCKNAME.'.js'), array(), MATE_VERSION, true );
              },*///uncomment this if needed
        ));
    }



    /* Save ACF fields in json */
    public static function mate_acf_json_save_point( $path ) {
        // update path
        $path = get_stylesheet_directory() . '/functions/plugins/gutenberg-custom-blocks/'.self::BLOCKNAME.'/acf-json';
        // return
        return $path;
    }



    /* Load ACF fields in json */
    public static function mate_acf_json_load_point( $paths ) {
        // remove original path (optional)
        unset($paths[0]);
        // append path
        $paths[] = get_stylesheet_directory() . '/template-parts/blocks/'.self::BLOCKNAME.'/acf-json';
        // return
        return $paths;
    }


}

