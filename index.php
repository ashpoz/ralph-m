
<?php get_header(); ?>

        <!-- If Home Page Post This -->

        <div class="container">
        	<div class="row">
	            <div class="col-md-6 col-sm-12 hide-header">
	                <h1 class="landing-pg-header"><?php bloginfo('name'); ?></h1>
	                <p class="lead"><?php bloginfo('description'); ?></p>
	            </div>
	        </div>
	    </div>


            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
				get_template_part( 'content', get_post_format() );

            endwhile; endif; 
            ?>


<?php get_footer(); ?>

  