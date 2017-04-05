<?php
/* Template Name: Gallery Template
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

            <!-- Portfolio Menu Goes Here --> 

            <div class="toolbar mb2 mt2">
                <button class="btn fil-cat" href="" data-rel="all">All</button>
                  <button class="btn fil-cat" href="" data-rel="abstract">Abstract Series</button>
                  <button class="btn fil-cat" data-rel="city">City Series</button>
                  <button class="btn fil-cat" data-rel="variations">Variations</button>
                <button class="btn fil-cat" data-rel="process">The Process</button>
                </div> 



<?php 

$current_category = single_cat_title("", false);

// Custom post type for art 
    $args = array(
    'post_type' => 'art_type',
    'category_name' => $current_category
    );
    $query = new WP_Query( $args );

 if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 

        get_template_part( 'template-parts/content-gallery' );

endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>


<?php get_footer(); ?>

