<?php
/**
 * The template for displaying pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 */
get_header();
?>
<div class="wrapper">
    <div id="content">
        <div id="inner-content" class="wrap">
            <main id="main" class="main" role="main">
                <div class="wrapper">
                    <?php get_template_part( 'template-parts/content/content','page'); ?>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer();