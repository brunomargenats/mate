<?php
/**
 * Template Name: Contact form with sidebar
 * Description: Template for pages using a contact form and sidebar.
 */
get_header();
?>

    <div id="content">
        <div id="inner-content" class="wrapper">
        <?php
                echo'<div class="grid">
                <main id="main" class="col-12 col-sm-8">';
                get_template_part( 'template-parts/content/content',mate_content_type());
                echo'</main>';
                get_sidebar();
                echo'</div>';
        ?>
        </div>
    </div>

<?php get_footer();