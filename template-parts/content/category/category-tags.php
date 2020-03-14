<?php
/**
 * Template Part: Category tags
 * Description: Code for show a list of category tags.
 */
?>

<?php
the_tags( '<p class="footer-tags tags"><span>' . __( 'Tags:', 'mate' ) . '</span> ', ', ', '</p>' );