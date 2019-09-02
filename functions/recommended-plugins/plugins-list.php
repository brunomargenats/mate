<h2><?php _e( 'CONTENT', 'mate' ); ?></h2>
<?php
    //mate_checkplugin("Plugin Name", "folder-slug", "file.php", "URL to external website (if WP install not supported)");
    mate_checkplugin("Contact Form 7", "contact-form-7", "wp-contact-form-7.php", "");
?>

<h2><?php _e( 'SECURITY', 'mate' ); ?></h2>

<?php
    mate_checkplugin("HTTP Headers", "http-headers", "http-headers.php", "");
?>

<h2><?php _e( 'MULTILINGUAL', 'mate' ); ?></h2>
<?php
    mate_checkplugin("Loco translate", "loco-translate", "loco.php", "");
    mate_checkplugin("WPML", "sitepress-multilingual-cms", "sitepress.php", "https://wpml.org/");
?>

<h2><?php _e( 'PERFORMANCE', 'mate' ); ?></h2>
<?php
    mate_checkplugin("WP Fastest Cache", "wp-fastest-cache", "wpFastestCache.php", "");
?>