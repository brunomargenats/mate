<?php
/**
 * Template Name: Page with sidebar
 * Description: Template for pages with a sidebar.
 */
get_header();
global $has_sidebar;
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