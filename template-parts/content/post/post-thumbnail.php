<?php
/**
 * The template part for adding a post thumbnail on post if any image is featured.
 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
 */
?>

<?php if ( has_post_thumbnail() ) { ?>

<div class="post-thumbnail">

    <?php the_post_thumbnail( '' ); ?>

</div>

<?php }