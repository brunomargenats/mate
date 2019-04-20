<?php get_header(); ?>
<?php
/* We get the ID of the Blog page */
$page_for_posts = get_option( 'page_for_posts' );
/* We get the template of the Blog page */
$page_for_blog_template = get_page_template_slug( $page_for_posts );

/* We check if we need a sidebar */
if ($page_for_blog_template == 'layouts/page-with-sidebar.php'){
	$is_sidebar = TRUE;
}else{
	$is_sidebar = FALSE;
}

if($is_sidebar) {
	echo'
	<div class="wrapper">
	<div class="row">
	<div class="column col-8">
	';
}
?>
<div id="content">

	<div id="inner-content" class="wrap">

		<div id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

			<?php get_template_part( 'template-parts/index','loop'); ?>

		</div>

	</div>

</div>
<?php
/* Just closing sidebar column */
if($is_sidebar) {
	echo'</div>
	<div class="column col-4">';
	get_sidebar();
	echo'</div>
</div></div>
	';
}
?>


<?php get_footer(); ?>