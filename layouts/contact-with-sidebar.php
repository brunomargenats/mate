<?php
/**
 * Template Name: Contact form with sidebar
 * Description: Template for pages using a contact form and sidebar.
 */
get_header();
?>

    <div id="content" class="container">
        <div id="inner-content" class="wrapper">
            <div class="grid">
                <main id="main" class="col-12 col-sm-8">
                    <?php get_template_part( 'template-parts/content/content',mate_content_type());?>
                </main>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

<?php get_footer();