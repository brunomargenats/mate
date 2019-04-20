<?php
/**
 *
 * Template Part: The Loop
 * Description: Loop code for Pages and Posts.
 *
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

		<header class="article-header">

			<?php get_template_part( 'template-parts/header', 'title'); ?>

		</header> <?php // end article header ?>

		<section class="entry-content" itemprop="articleBody">

			<?php the_content(); ?>

		</section> <?php // end article section ?>

		<footer class="article-footer">
			<?php wp_link_pages(); ?>
		</footer>

        <?php if( post_type_supports( get_post_type(), 'comments' ) ) {

            if( comments_open() ) {

                comments_template();

            }

        } ?>

	</article>

<?php endwhile; ?>


<?php else : ?>

    <?php get_template_part( 'template-parts/404'); ?>

<?php endif; ?>