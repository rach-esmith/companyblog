<?php get_header(); ?>   
<div id="blogbody">
        <div id="bloghead"><span class="heading">Some Headline</span>
        <br>
        <span class="headingdescrip"><?php the_author_meta( 'description' ); ?></span></div>

        <div id="posts">
         <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>   

        </div>
    </div>

</body>

</html>
