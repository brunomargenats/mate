<?php
/**
 *
 * Template Part: Archive Loop
 * Description: Loop code for the archive.php template.
 *
 */
?>

<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

		<header class="entry-header article-header">

			<h3 class="h2 entry-title">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h3>

			<?php get_template_part( 'template-parts/postmeta'); ?>

		</header>

		<section class="entry-content">

			<div class="post-thumbnail">

				<?php the_post_thumbnail( '' ); ?>

			</div>

			<?php the_excerpt(); ?>

		</section>

		<footer class="article-footer">

			<?php get_template_part( 'template-parts/category-tags'); ?>

		</footer>

	</article> <?php // end article ?>

<?php endwhile; ?>

    <?php get_template_part( 'template-parts/post-navigation'); ?>

<?php else : ?>

    <?php get_template_part( 'template-parts/404'); ?>

<?php endif; ?>