<?php
/**
 *
 * Template Part: Index Loop
 * Description: Loop code for the index.php template.
 *
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

		<header class="article-header">

			<?php get_template_part( 'template-parts/header', 'title'); ?>

			<?php get_template_part( 'template-parts/postmeta'); ?>

		</header>

		<section class="entry-content cf">

		<?php get_template_part( 'template-parts/content-excerpt'); ?>

		</section>

		<footer class="article-footer">

			<?php //get_template_part( 'template-parts/category-tags'); ?>

			<?php //get_template_part( 'template-parts/comment', 'count'); ?>

		</footer>

	</article>

<?php endwhile; ?>

    <?php get_template_part( 'template-parts/post-navigation'); ?>

<?php else : ?>

    <?php get_template_part( 'template-parts/404'); ?>

<?php endif; ?>