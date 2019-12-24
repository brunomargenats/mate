<?php
/**
 * Template Name: Contact form
 * Description: Template for pages using a contact form.
 */
get_header();
?>

    <div id="content">
        <div id="inner-content" class="wrapper">
        <?php
                echo '<main id="main">';
                get_template_part( 'template-parts/content/content',mate_content_type());
                echo '</main>';
        ?>
        </div>
    </div>

<?php get_footer();