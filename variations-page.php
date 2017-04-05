<?php
/* Template Name: Variations
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">

 <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
                    get_template_part( 'content', get_post_format() );

            endwhile; endif; 
            ?>

	</div>
</div>

<!-- Page Content -->
    <div class="container gallery">

        <div class="row">

        	<h3><?php the_title(); ?></h3>

<?php 


// Custom post type for art 
    $args = array(
    'post_type' => 'variations'
    );
    $query = new WP_Query( $args );

 if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 

        get_template_part( 'template-parts/content-gallery' );

endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>


<?php get_footer(); ?>

