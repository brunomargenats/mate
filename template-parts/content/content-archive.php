<?php
/**
 * Template Part: Archive loop
 * Description: Loop code for the archive.php template.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if (have_posts()) :?>
<header class="page-header">
    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header><!-- .page-header -->

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header article-header">

        <h3 class="h2 entry-title">
            <a href="<?php the_permalink() ?>" rel="bookmark"
                title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h3>

        <?php get_template_part( 'template-parts/content/post/postmeta'); ?>

    </header>

    <div class="entry-content">

        <?php get_template_part( 'template-parts/content/post/post-thumbnail'); ?>

        <?php the_excerpt(); echo mate_excerpt_more_link(); ?>

    </div>

    <footer class="article-footer">

        <?php get_template_part( 'template-parts/content/category/category-tags'); ?>

        <?php get_template_part( 'template-parts/content/post/comment', 'count'); ?>

    </footer>

</article> <?php // end article ?>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/content/post/post-navigation'); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;