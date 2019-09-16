<?php
/**
 * Template Part: Post Thumbnail
 * Description: The template part for adding a post thumbnail on post if any image is featured.
 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php if ( has_post_thumbnail() ) { ?>

<div class="post-thumbnail">

    <?php the_post_thumbnail( '' ); ?>

</div>

<?php }