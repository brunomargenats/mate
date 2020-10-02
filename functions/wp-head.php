<?php
/**
 * Function: Inline scripts in header.
 * Description: This will load inside <head></head>, using the wp_head function.
 */
?>

<?php
add_action('wp_head', 'mate_wp_head');
function mate_wp_head(){
    global $mate_theme_color;
    if (!empty($mate_theme_color)){?><meta name="theme-color" content="<?php echo $mate_theme_color;?>">
        <?php
    }
    // Favicons goes here.
    // Use the built in favicons in theme customizer
    // OR Use: https://realfavicongenerator.net/
    // OR use the plugin: https://wordpress.org/plugins/favicon-by-realfavicongenerator/
    // A default SVG favicon based on logo is added here. Please note that SVG favicons are not supported everywhere yet https://caniuse.com/#feat=link-icon-svg
    ?>
    <?php
    if (!get_site_icon_url()){?><link href="<?php echo get_theme_file_uri(). '/assets/images/logo.svg' ?>" rel="icon" type="image/svg+xml" />
    <?php }

};
