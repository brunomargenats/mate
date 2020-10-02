<?php
/**
 * Template Part: 404 Post(s) not found
 * Description: Code for post(s) not found in WordPress loop.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */
?>
<?php // get post count so we can use everywhere.
$count = $GLOBALS['wp_query']->post_count;
?>

<article id="post-not-found" class="hentry post-not-found">
    <header class="article-header">
        <h1 class="404-title">
            <?php echo _e( 'Sorry, that page can&rsquo;t be found.', 'mate' ); ?>
        </h1>
    </header>
    <div class="entry-content">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mate' ); ?></p>
        <?php get_search_form(); ?>
    </div>
    <footer class="article-footer">

    </footer>
</article>