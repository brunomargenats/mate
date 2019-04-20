<?php
/*
Template Name: Page with sidebar
*/
get_header(); ?>
<div class="wrapper">
	<div class="row">
		<div class="column col-8">
			<div id="content">

				<div id="inner-content" class="wrap">

					<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
						<?php // Edit the loop in /template-parts/loop. Or roll your own. ?>
						<?php get_template_part( 'template-parts/loop'); ?>
					</main>

				</div>

			</div>
		</div>

		<div class="column col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>