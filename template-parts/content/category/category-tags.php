<?php
/**
 * Template Part: Category tags
 * Description: Code for show a list of category tags.
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'mate' ) . '</span> ', ', ', '</p>' );