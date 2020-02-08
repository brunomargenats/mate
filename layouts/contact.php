<?php
/**
 * Template Name: Contact form
 * Description: Template for pages using a contact form.
 */
get_header();
?>

    <div id="content">
        <div id="inner-content" class="wrapper">
            <main id="main">
                <?php get_template_part( 'template-parts/content/content',mate_content_type());?>
            </main>
        </div>
    </div>

<?php get_footer();