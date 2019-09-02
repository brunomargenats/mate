<?php
/**
 * The default template for anything
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_words/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_excerpt/
 */

get_header(); ?>

<div class="wrapper">
    <div id="content">
        <div id="inner-content" class="wrap">
            <main id="main" class="main" role="main">
                <div class="wrapper">
                    <?php if($has_sidebar) {echo'<div class="grid"><div class="col-12 col-sm-8">';}?>
                    <?php get_template_part( 'template-parts/content/content','index'); ?>
                    <?php if($has_sidebar) {echo'</div><div class="col-12 col-sm-4">';get_sidebar();echo'</div></div>';}?>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer();