<?php
/**
 * Template Part: Archive loop
 * Description: Loop code for the archive.php template.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */

?>

<?php if (have_posts()) :?>
<header class="page-header">
    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header><!-- .page-header -->

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header article-header">

        <h3 class="h2 entry-title">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="text-decoration:none">
                <?php the_title(); ?>
            </a>
        </h3>

        <?php get_template_part( 'template-parts/content/post/postmeta'); ?>

    </header>

    <div class="entry-content margin-bottom:grid">

        <?php get_template_part( 'template-parts/content/post/post-thumbnail'); ?>

        <?php
        if(get_option( 'rss_use_excerpt' )){
            the_excerpt(); echo mate_excerpt_more_link();
        }else{
            the_content();
        } ?>

    </div>

    <footer class="article-footer margin-bottom:grid">

        <?php get_template_part( 'template-parts/content/category/category-tags'); ?>

        <?php 
        global $mate_use_comments;
        if (!empty($mate_use_comments)){
            get_template_part( 'template-parts/content/post/comment', 'count');
        } ?>
    </footer>

</article> <?php // end article ?>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/content/post/post-navigation'); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;