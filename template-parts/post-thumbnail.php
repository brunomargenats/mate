<?php
/**
 *
 * Template Part: Post Thumbnail
 * Description: Add post thumbnail on post if any image is featured.
 */
?>

<?php if ( has_post_thumbnail() ) { ?>

<div class="post-thumbnail">

    <?php the_post_thumbnail( '' ); ?>

</div>

<?php } ?>