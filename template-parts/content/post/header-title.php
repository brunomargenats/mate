<?php
/**
 * Template Part: Header Title
 * Description: WordPress custom conditional title script
 */
?>
<?php

if ( function_exists('is_tag') && is_tag() || is_category() || is_tax() ) { ?>

<h1 class="archive-title h2"><span><?php _e( 'Posts Categorized:', 'mate' ); ?></span> <?php single_cat_title(); ?></h1>

<?php } elseif ( is_archive() ) { ?>

<h3 class="h2 entry-title">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="text-decoration:none">
        <?php the_title(); ?>
    </a>
</h3>

<?php } elseif ( is_search() ) { ?>

<h3 class="search-title entry-title">

    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="text-decoration:none">
        <?php the_title(); ?>
    </a>

</h3>

<?php } elseif ( !(is_404() ) && ( is_single() ) || ( is_page() )) { ?>

<h1 class="page-title"><?php the_title(); ?></h1>


<?php } elseif ( is_404() ) { ?>

<h1><?php _e( '404', 'mate' ); ?></h1>

<?php } elseif ( is_home() ) { ?>

<h1 class="h2 entry-title">

    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="text-decoration:none">
        <?php the_title(); ?>
    </a>

</h1>

<?php } else { ?>

<h1 class="page-title"><?php the_title(); ?></h1>

<?php }