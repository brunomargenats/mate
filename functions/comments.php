<?php
/**
 * FUNCTIONS: CUSTOM COMMENTS
 * Description: This controls all functions for comments and when we use them.
 */

global $mate_use_comments_in_pages;
/* REMOVE COMMENTS SUPPORT IN PAGES */
if ( ! function_exists( 'mate_remove_comment_support' ) && (!$mate_use_comments_in_pages) ) {
	add_action('init', 'mate_remove_comment_support', 100);
	function mate_remove_comment_support() {
		remove_post_type_support( 'page', 'comments' );
	}
}


// Load comments script and styles

if ( ! function_exists( 'mate_comments_scripts' ) ) {
    function mate_comments_scripts() {
		global $mate_use_comments_in_pages;
		if (is_page() && (!$mate_use_comments_in_pages)){}else{
			if ( ! is_admin() ) {
				if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
									wp_register_style('mate_comments',get_theme_file_uri( '/assets/css/comments.css', array(), wp_get_theme()->get( 'Version' )));
									wp_enqueue_script( 'comment-reply' );
									wp_enqueue_style( 'mate_comments');
				}
			}
		}
	}
	add_action( 'get_footer', 'mate_comments_scripts' );
}


// Comment Layout
if ( ! function_exists( 'mate_comments' ) ) {
	function mate_comments( $comment, $args, $depth ) { $GLOBALS['comment'] = $comment; ?>
		<div id="comment-<?php comment_ID(); ?>" <?php comment_class('comment-wrap'); ?>>
    		<article class="article-comment padding:grid margin-bottom:grid">
			<header class="comment-author vcard">
				<?php // custom gravatar call ?>
				<?php
				// create variable
					$bgauthemail = get_comment_author_email();
					$altavatar = 'avatar-'.get_comment_ID();
				?>
				<?php echo get_avatar( $bgauthemail, '256', '', $altavatar);?>
				<?php // end custom gravatar call ?>
				<div class="comment-meta">
					<?php printf(__('<cite class="fn margin-right:grid">%s</cite>', 'mate'), get_comment_author_link()); ?>
					<time datetime="<?php echo comment_time('Y-m-j'); ?>">
						<a class="text-decoration:none" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'mate' )); ?>
						</a>
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

    <?php
	}
}


/* CUSTOM DEFAULT GRAVATARS. If you don't want to use gravatars at all you can deactivate them in yoursite.com/wp-admin/options-discussion.php */
if ( ! function_exists( 'mate_new_gravatar' ) ) {
	function mate_new_gravatar ($avatar_defaults) {
		$myavatar = get_theme_file_uri('/assets/images/default-avatar.png');
			$avatar_defaults[$myavatar] = __('Default Avatar', 'mate');
		return $avatar_defaults;
	}
	add_filter( 'avatar_defaults', 'mate_new_gravatar' );
}

/* DISABLE SELF PINGBACK
I don’t know why WP think that you need the self-pingback details on your blog post.
*/
if ( ! function_exists( 'mate_disable_pingback' ) ) {
	function mate_disable_pingback( &$links ) {
		foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, home_url() ) )
		unset($links[$l]);
	}
	add_action( 'pre_ping', 'mate_disable_pingback' );
}