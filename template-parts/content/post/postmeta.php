<?php
/**
 * Template Part: Postmeta
 * Description: Code for postmeta using functions from WP Twenty Seventeen theme.
 */
?>

<div class="post-meta padding-bottom:grid">

    <?php // Get the author name; wrap it in a link.
    if ( get_the_author_meta( 'ID' ) ) {
        $byline = sprintf(
        /* translators: %s: post author */
        __( 'By %s', 'mate' ),
        '<span class="author vcard margin-right:grid"><a class="url" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );

        // Finally, let's write all of this to the page.
        echo '' . $byline . '</span>';
        $category_list = get_the_category_list(', ');
        if ($category_list){
        printf( '&nbsp;&nbsp;<span class="post-meta-categories margin-right:grid">%1$s</span>' , get_the_category_list(', ') );
        }
        echo '&nbsp;&nbsp;<span class="posted-on margin-right:grid">' . mate_time_link() . '</span>';

    } else {

        echo '<span class="posted-on margin-right:grid">Posted on:' . mate_time_link() . '</span>';

    } ?>

</div>