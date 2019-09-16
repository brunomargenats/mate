<?php
/**
 * Template Name: Page with sidebar
 * Description: Template for pages with a sidebar.
 */

get_header(); ?>

<?php get_header(); ?>

<div id="content">
    <div id="inner-content" class="wrap">
        <main id="main" >
            <div class="wrapper">
                <div class="grid">
                    <div class="col-sm-8">
                        <?php get_template_part( 'template-parts/content/content','page'); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php get_footer();