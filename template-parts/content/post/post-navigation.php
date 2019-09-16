<?php
/**
 * Template Part: Post Navigation
 * Description: Code for the post navigation using a custom function.
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="post-navigation">

    <?php mate_page_navi( $wp_query ); ?>

</div>