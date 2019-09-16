<?php
/**
 * Template Part: Single loop
 * Description: Loop code for Single Posts.
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

    <header class="article-header entry-header">

        <h1 class="entry-title single-title" rel="bookmark"><?php the_title(); ?></h1>

        <?php // Delete or comment out if you don't need this on your page or post. Edit in /template-parts/postmeta.php ?>
        <?php get_template_part( 'template-parts/content/post/postmeta'); ?>

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

        <?php get_template_part( 'template-parts/content/category/category-tags'); ?>

    </footer> <?php // end article footer ?>

    <?php if( post_type_supports( get_post_type(), 'comments' ) ) {

			if( comments_open() ) {

				comments_template();

			}

		} ?>

</article> <?php // end article ?>

<?php endwhile; ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;