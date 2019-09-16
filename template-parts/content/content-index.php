<?php
/**
 * Template Part: Index loop
 * Description: Loop code for the index.php template.
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

        <?php get_template_part( 'template-parts/content/post/header', 'title'); ?>

        <?php get_template_part( 'template-parts/content/post/postmeta'); ?>

    </header>

    <div class="entry-content">
        <?php get_template_part( 'template-parts/content/post/post-thumbnail'); ?>
        <?php the_content(); ?>
    </div>

    <footer class="article-footer">
        <?php get_template_part( 'template-parts/content/category/category-tags'); ?>
        <?php
				global $use_comments;
				if($use_comments) {
					get_template_part( 'template-parts/content/post/comment', 'count');
				} ?>
    </footer>

</article>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/content/post/post-navigation'); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;