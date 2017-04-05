<?php
/**
 * Template part for art gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ralphm
 */

?>

<!-- Page Content -->

<div style="clear:both;"></div>   
<div id="portfolio">

  <div class="tile scale-anm abstract all">
  		<a class="img-responsive" href="#">
  			<?php the_post_thumbnail('medium');?>
  		</a>
  		<h3 class="project-title"><?php the_title(); ?></h3>
                <p class="project-details"><?php the_field('work_details'); ?></p>
                <p class="avail"><?php the_field(''); ?></p>

  </div>
  
</div>

<div style="clear:both;"></div>

			<!-- My original code
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="img-responsive" href="#">
                    <?php the_post_thumbnail('medium');?>
                </a>
                <h3 class="project-title"><?php the_title(); ?></h3>
                <p class="project-details"><?php the_field('work_details'); ?></p>
                <p class="avail"><?php the_field(''); ?></p>
            </div>
			-->


