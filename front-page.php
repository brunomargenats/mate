<?php
/**
 * The template for your front page (blog posts or static page)
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 */
get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap">

        <main id="main" class="main" role="main">
            <?php // Edit the loop in /template-parts/loop. Or roll your own. ?>
            <div class="wrapper">
                <?php
						if ( 'page' == get_option( 'show_on_front' ) ){
							get_template_part( 'template-parts/content/content','page');
						}else{
							get_template_part( 'template-parts/content/content','index');
						}
						; ?>
            </div>
        </main>

    </div>

</div>

<?php get_footer();