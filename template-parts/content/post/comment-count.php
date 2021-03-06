<?php
/**
 * Template Part: Comment Count
 * Description: The template part for display the total number of comments, Trackbacks, and Pingbacks (used in content-archive.php, content-index.php, etc.).
 * @link https://codex.wordpress.org/Function_Reference/comments_number
 */
?>
<?php

global $mate_use_comments;
if ($mate_use_comments){
?>

<p class="footer-comment-count">
    <?php comments_number( __( '<span>No</span> Comments', 'mate' ), __( '<span>One</span> Comment', 'mate' ), __( '<span>%</span> Comments', 'mate' ) );?>
</p>
<?php }?>