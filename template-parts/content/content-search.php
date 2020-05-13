<?php
/**
 * Template Part: Search loop
 * Description: Loop code for search results.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */
?>

<header class="page-header">
    <h1 class="page-title">
        <?php _e( 'Search results for:', 'mate' ); ?> <?php echo get_search_query(); ?>
    </h1>
    <div class="page-description">
    <?php
    global $wp_query;
    if ( $wp_query->found_posts ) {
            $archive_subtitle = sprintf(
                /* translators: %s: Number of search results. */
                _n(
                    'We found %s result for your search.',
                    'We found %s results for your search.',
                    $wp_query->found_posts,
                    'mate'
                ),
                number_format_i18n( $wp_query->found_posts )
            );
            echo '<p>'.$archive_subtitle.'</p>';
        } else {
            $archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'mate' );
            echo '<div class="entry-content margin-bottom:grid"><p>'.$archive_subtitle.'</p>';
            get_search_form().'</div>';
        }

    ?>
</div>

</header><!-- .page-header -->

<?php  if (have_posts()) :  while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="article-header entry-header">

        <?php get_template_part( 'template-parts/content/post/header', 'title'); ?>

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

</article>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/content/post/post-navigation'); ?>

<?php  ?>

<?php //get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;