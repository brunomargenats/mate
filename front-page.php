<?php
/**
 * The template for your front page (blog posts or static page)
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 */
get_header(); ?>

		<div id="content">

			<div id="inner-content" class="wrap">

				<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
					<?php // Edit the loop in /template-parts/loop. Or roll your own. ?>
					<div class="wrapper">
						<?php get_template_part( 'template-parts/content/content','page'); ?>
					</div>
				</main>

			</div>

		</div>


<?php get_footer();