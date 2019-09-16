<?php
/**
 * The default template for everything
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_words/
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_excerpt/
 */

get_header();

?>

    <div id="content">
        <div id="inner-content" class="wrapper">
        <?php
         if($has_sidebar) {
                echo'<div class="grid">
                <main id="main" class="col-12 col-sm-8">';
                get_template_part( 'template-parts/content/content',mate_content_type());
                echo'</main>';
                get_sidebar();
                echo'</div>';
            }else{
                echo '<main id="main">';
                get_template_part( 'template-parts/content/content',mate_content_type());
                echo '</main>';
            }
        ?>
        </div>
    </div>

<?php get_footer();