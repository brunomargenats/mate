<?php
/**
 * Template Name: Contact form
 * Description: Template for pages using a contact form.
 */

get_header();
?>
<div class="wrapper">
		<div id="content">
			<div id="inner-content" class="wrap">
				<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">
					<div class="wrapper">
						<?php get_template_part( 'template-parts/content/content','page'); ?>
					</div>
				</main>
			</div>
		</div>
</div>
<?php get_footer(); ?>