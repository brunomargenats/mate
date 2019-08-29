<?php
/**
 * The template part for display the total number of comments, Trackbacks, and Pingbacks (used in content-archive.php, content-index.php, etc.).
 * @link https://codex.wordpress.org/Function_Reference/comments_number
 */
?>

<p class="footer-comment-count">
	<?php comments_number( __( '<span>No</span> Comments', 'mate' ), __( '<span>One</span> Comment', 'mate' ), __( '<span>%</span> Comments', 'mate' ) );?>
</p>