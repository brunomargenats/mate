<?php if ( has_post_thumbnail() ) { ?>

    <div class="post-thumbnail">

    	<?php the_post_thumbnail( '' ); ?>

    </div>

<?php } ?>

<?php the_excerpt(); ?>