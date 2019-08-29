<?php
/**
 * The template for error pages.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 */

get_header(); ?>
<div class="wrapper">
		<div id="content">
			<div id="inner-content" class="wrap">
				<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
					<div class="wrapper">
						<?php get_template_part( 'template-parts/content/content','none'); ?>
					</div>
				</main>
			</div>
		</div>
</div>
<?php get_footer();