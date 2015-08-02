<?php
/**
 * Template Name: Front Page */
?>

<div id="front-page-tabs" class="tabs">

	<div class="content container wrap">

		<!-- Portfolio Section -->
			<section data-content="work" id="work" class="reveal"> <!-- show -->

			<h1>
				<!-- Work -->
			</h1>

			<!-- <p class="front-page-section-intro">
				I love teamwork. Here are some collaborations I'm proud of:
			</p> -->


				<?php
				if ( get_query_var('paged') ) $paged = get_query_var('paged');
				if ( get_query_var('page') ) $paged = get_query_var('page');

				$query = new WP_Query( array( 'post_type' => 'portfolio' ) );
				// $query = new WP_Query( array( 'acme_product' => 'Products', 'paged' => $paged ) );

				if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<!-- <div class="entry">
							<h2 class="title"><?php
							// the_title(); ?></h2>
							<?php
							// the_content(); ?>
						</div> -->

			  			<!-- same formatting as blog section -->
			  			<?php get_template_part('templates/content-portfolio', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>


					<?php endwhile; wp_reset_postdata(); ?>


			<?php
			// the_posts_navigation(); ?>



					<!-- show pagination here -->
				<?php  else : ?>
					<!-- show 404 error here -->
				<?php endif; ?>




			</section>



		<!-- Portfolio Section END -->



		<!-- Instafeed Section -->

		<section data-content="instagram" id="typefloundry" class=""><!--  class="conceal" -->

			<h1>
				<!-- Play  -->
			</h1>
			<p class="front-page-section-intro">
				The following are lettering posts from <a href="http://www.instagram.com/thundernixon" target="_blank">my Instagram feed</a>:
			</p>

		    <div id="instafeed">


		    </div>
		    <button id="load-more" class="">load more</button>
		</section>


		<!-- Blog Section -->

		<section data-content="blog" id="blog" class=""> <!-- class="conceal" -->

			<h1>
				<!-- Blog -->
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
