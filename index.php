<?php get_header(); ?>

<div id="content">

<div id="inner-content" class="wrap">

    <div id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

        <?php get_template_part( 'templates/index','loop'); ?>

    </div>

</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>