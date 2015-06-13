<?php
/**
 * Template Name: Front Page */
?>




<?php// get_template_part('templates/hero', 'hero'); ?>
    
    <?php
      //do_action('get_header');
      //get_template_part('templates/header');
    ?> 

<?php // get_template_part('templates/custom', 'header'); ?>


<div id="front-page-tabs" class="tabs">


	<div class="content">

		<!-- Portfolio Section -->
			<section id="section-1" class="show">

			<h3>
				Contents:
			</h3>

				<?php 
				if ( get_query_var('paged') ) $paged = get_query_var('paged');  
				if ( get_query_var('page') ) $paged = get_query_var('page');
				 
				$query = new WP_Query( array( 'post_type' => 'portfolio' ) );
				// $query = new WP_Query( array( 'acme_product' => 'Products', 'paged' => $paged ) );
				 
				if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
						<!-- <div class="entry">
							<h2 class="title"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div> -->

			  			<!-- same formatting as blog section -->
			  			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

						<?php the_posts_navigation(); ?>
					<?php endwhile; wp_reset_postdata(); ?>




					<!-- show pagination here -->
				<?php else : ?>
					<!-- show 404 error here -->
				<?php endif; ?>




			</section>



		<!-- Portfolio Section END -->



		<!-- Instafeed Section -->

		<section id="section-2" class="hide">

			<h3>
				The following are selected posts from <a href="http://www.instagram.com/thundernixon" target="_blank">my Instagram feed</a>:
			</h3>

		    <div id="instafeed">
		       

		    </div>
		    <button id="load-more">load more</button>
		</section>


		<!-- Blog Section -->
 
		<section id="section-3" class="hide">

			<h1>
				Here are some of my thoughts, from my brain.
			</h1>


			<?php if (!have_posts()) : ?>
			  <!-- <div class="alert alert-warning"> -->
			    <?php _e('Sorry, no results were found.', 'sage'); ?>
			<!--   </div> -->
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
		</section>




