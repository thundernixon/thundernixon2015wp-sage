<?php // get_template_part('templates/content-single', get_post_type()); ?>


    <div class="portfolio-project">
      <div role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <img src="<?php the_field('hero_image'); ?>" />
        
        <header class="container wrap">
		      <h1 class="entry-title"><?php the_title(); ?></h1>
		      <h2 class="one-liner"><?php the_field('one_liner'); ?>
		    </header>
			
  			<!-- <p>
  			    <?php get_template_part('templates/entry-meta'); ?>
  			</p> -->

        <div class="project-meta-info container wrap">
 
<!--           <p>
            <?php the_field('project_type'); ?>
          </p> -->
          <p>
            <?php the_field('client'); ?>
          </p>
          <p>
            <?php the_field('collaborators'); ?>
          </p>
          <p>
            <?php the_field('date'); ?>
          </p>

        </div>

  			<p class="one-paragraph-description description">
  				<?php the_field('one_paragraph_description'); ?>
  			</p>

          

          <div class="container wrap"><?php the_content(); ?></div>

          <!-- TEST TEST TEST that this page is really coming up -->
          <!-- <p>test</p> -->

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->