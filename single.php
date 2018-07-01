<?php get_header(); ?>

<div class="pagelayout">

    <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<span class="postpgtitle"><?php the_title(); ?></span><br>
    <div class="postpgdescrip">
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>


</div>
