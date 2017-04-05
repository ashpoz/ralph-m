<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ralphm
 */

get_header(); ?>

<!-- Page Content -->
    <div class="container gallery">

        <div class="row">

        	<h3><?php the_title(); ?></h3>

<?php 

$terms = get_terms( 'city_series' );


	// Custom post type for art 
    $args = array(
    'post_type' => 'art_type'
    );
    $query = new WP_Query( $args );

 if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 

        get_template_part( 'template-parts/content-gallery' );

endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>


<?php
get_footer();
?>
