<?php
/**
 * Template Part: Pages loop
 * Description: Loop code for pages.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="article-header">

        <?php get_template_part( 'template-parts/content/post/header', 'title'); ?>

    </header> <?php // end article header ?>

    <div class="entry-content">

        <?php get_template_part( 'template-parts/content/post/post-thumbnail'); ?>
        <?php the_content();
				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . __( 'Pages:', 'mate' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					)
				);
					?>


    </div> <?php // end article ?>

    <footer class="article-footer">
    </footer>
    <?php
		global $use_comments_in_pages;
			if( $use_comments_in_pages && post_type_supports( get_post_type(), 'comments' ) ) {
				if( comments_open() ) {
					comments_template();
				}
			} ?>
</article>

<?php endwhile; ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;