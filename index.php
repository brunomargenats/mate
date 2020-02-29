<?php
/**
 * The default template for everything
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_words/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_excerpt/
 */

get_header();
global $mate_has_sidebar;

?>
    <div id="content">
        <div id="inner-content" class="wrapper">
            <?php if(!is_page() && $mate_has_sidebar) { ?>
                    <div class="grid">
                        <main id="main" class="col-12 col-sm-8">
                            <?php get_template_part( 'template-parts/content/content',mate_content_type());?>
                        </main>
                        <?php get_sidebar();?>
                    </div>
            <?php }else{ ?>
                    <main id="main">
                        <?php get_template_part( 'template-parts/content/content',mate_content_type());?>
                    </main>
            <?php } ?>
        </div>
    </div>

<?php get_footer();