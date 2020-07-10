<?php
/**
 * Template Part: Inline scripts in header.
 * Description: This will load inside <head></head>. If you want to load custom files like script.js or style.css, please use /functions/custom-styles-scripts.php.
 * All other inline content goes here.
 */
?>

<?php // drop Google Analytics or GTAG here ?>

<?php // end analytics ?>

<?php
// Favicons goes here. Use: https://realfavicongenerator.net/
// OR use plugin: https://wordpress.org/plugins/favicon-by-realfavicongenerator/
// A default SVG favicon based on logo is added here. Please note that SVG favicons are not supported everywhere yet https://caniuse.com/#feat=link-icon-svg
// Please replace the next line with your own realfavicongenerator code or erase it when using the plugin.
?>
<link href="<?php echo get_theme_file_uri(). '/assets/images/logo.svg' ?>" rel="icon" type="image/svg+xml" />