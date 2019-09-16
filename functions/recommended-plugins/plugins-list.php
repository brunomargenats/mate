<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="mate-plugin-category">
<h2><?php _e( 'FORMS', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        //mate_checkplugin("Plugin Name", "folder-slug", "file.php", "URL to external website (if WP install not supported)");
        mate_checkplugin("Contact Form 7", "contact-form-7", "wp-contact-form-7.php", "");
        mate_checkplugin("Gravity Forms", "gravityforms", "gravityforms.php", "https://www.gravityforms.com/");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'SEO', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("Yoast SEO", "wordpress-seo", "wp-seo.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'CONTENT', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        //mate_checkplugin("Plugin Name", "folder-slug", "file.php", "URL to external website (if WP install not supported)");
        mate_checkplugin("Advanced Custom Fields", "advanced-custom-fields", "acf.php", "");
        mate_checkplugin("Advanced Custom Fields PRO", "advanced-custom-fields-pro", "acf.php", "https://www.advancedcustomfields.com/");
        mate_checkplugin("Disable Comments", "disable-comments", "disable-comments.php", "");
        mate_checkplugin("Custom Post Type UI", "custom-post-type-ui", "custom-post-type-ui.php", "");

    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'IMAGE', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
    mate_checkplugin("Enable Media Replace", "enable-media-replace", "enable-media-replace.php", "");
    ?>
    </div>
</div>


<div class="mate-plugin-category">
<h2><?php _e( 'SECURITY', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("Wordfence Security – Firewall & Malware Scan", "wordfence", "wordfence.php", "");
        mate_checkplugin("HTTP Headers", "http-headers", "http-headers.php", "");
        mate_checkplugin("Simple History", "simple-history", "index.php", "");
    ?>
    </div>
</div>


<div class="mate-plugin-category">
<h2><?php _e( 'MULTILINGUAL', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("Loco translate", "loco-translate", "loco.php", "");
        mate_checkplugin("WPML", "sitepress-multilingual-cms", "sitepress.php", "https://wpml.org/");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'PERFORMANCE', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("Fast Velocity Minify", "fast-velocity-minify", "fvm.php", "");
        mate_checkplugin("WP Fastest Cache", "wp-fastest-cache", "wpFastestCache.php", "");
        mate_checkplugin("WP-Optimize – Clean, Compress, Cache", "wp-optimize", "wp-optimize.php", "");
        mate_checkplugin("Smush Image Optimization, Compression, and Lazy Load", "wp-smushit", "wp-smush.php", "");
        mate_checkplugin("Disable WP REST API", "disable-wp-rest-api", "disable-wp-rest-api.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'BACKUPS', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("UpdraftPlus WordPress Backup Plugin", "updraftplus", "updraftplus.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'MAINTENANCE', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("UpdraftPlus WordPress Backup Plugin", "slim-maintenance-mode", "slim-maintenance-mode.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'EMAIL', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("WP Mail SMTP by WPForms", "wp-mail-smtp", "wp_mail_smtp.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'E-COMMERCE', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("WooCommerce", "woocommerce", "woocommerce.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'REDIRECTIONS', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("Redirection", "redirection", "redirection.php", "");
    ?>
    </div>
</div>

<div class="mate-plugin-category">
<h2><?php _e( 'DEVELOPMENT', 'mate' ); ?></h2>
    <div class="mate-plugin-list">
    <?php
        mate_checkplugin("What The File", "what-the-file", "what-the-file.php", "");
        mate_checkplugin("WP Reset - Best WordPress Reset Plugin", "wp-reset", "wp-reset.php", "");
    ?>
    </div>
</div>