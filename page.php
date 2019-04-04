<?php get_header(); ?>
		<div id="content">

			<div id="inner-content" class="wrap">

				<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
					<?php // Edit the loop in /template-parts/loop. Or roll your own. ?>
					<?php get_template_part( 'template-parts/loop'); ?>
				</main>

			</div>

		</div>

<?php get_footer(); ?>