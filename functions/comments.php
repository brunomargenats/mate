<?php
// script

if ( ! function_exists( 'mate_comments_scripts' ) ) {

    function mate_comments_scripts() {

        wp_register_style('mate_comments',get_theme_file_uri( '/assets/css/comments.css' ));


		if ( ! is_admin() ) {
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {wp_enqueue_script( 'comment-reply' );}
            wp_enqueue_style( 'mate_comments' );
        }

	}
	add_action( 'wp_enqueue_scripts', 'mate_comments_scripts' );

}


// Comment Layout
function mate_comments( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment; ?>
	 <div id="comment-<?php comment_ID(); ?>" <?php comment_class('comment-wrap'); ?>>
		 <article class="article-comment">
			 <header class="comment-author vcard">
				 <?php // custom gravatar call ?>
				 <?php
				   // create variable
				   $bgauthemail = get_comment_author_email();
				 ?>
				 <img data-gravatar="//www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=256" class="load-gravatar avatar avatar-48 photo" height="64" width="64" src="<?php echo get_theme_file_uri('/assets/images/default-avatar.png'); ?>" />
				 <?php // end custom gravatar call ?>
				 <div class="comment-meta">
                    <?php printf(__('<cite class="fn">%s</cite>', 'mate'), get_comment_author_link()); ?>
					 <time datetime="<?php echo comment_time('Y-m-j'); ?>">
						 <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'mate' )); ?> </a>
					 </time>
                     <?php edit_comment_link(__('(Edit)', 'mate'), '', ''); ?>
				 </div>
			 </header>

			 <?php if ( $comment->comment_approved == '0' ) : ?>
				 <div class="alert alert-info">
					 <p><?php _e( 'Your comment is awaiting moderation.', 'mate' ) ?></p>
				 </div>

			 <?php endif; ?>

			 <section class="comment-content">

				<?php comment_text() ?>

			 </section>

			 <div class="comment-reply">

				 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

			 </div>

		 </article>
	 <?php // </li> is added by WordPress automatically ?>

<?php } 