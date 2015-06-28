<?php // get_template_part('templates/content-single', get_post_type()); ?>


    <div class="portfolio-project">
      <div role="main">



        <article>

        <?php while ( have_posts() ) : the_post(); ?>

       <!--  <img src="<?php the_field('hero_image'); ?>" /> -->

       <div class="header-container">
        
          <header class="container wrap">

            <div class="project-title">
    		      <h1 class="entry-title"><?php the_title(); ?></h1>
    		      <h2 class="one-liner"><?php the_field('one_liner'); ?></h2>
            </div>

            <div class="project-meta-info container wrap">
                <!--           <p>
                <?php the_field('project_type'); ?>
              </p> -->
              <p>
                <?php the_field('client'); ?>
              </p>

                          <p>
                <?php the_field('date'); ?>
              </p>


              <?php if( have_rows('collaborators') ): ?>

                <p>
                <span  class="small-caps">Collaborators</span>
                


                  <ul class="collaborators">

                  <?php while( have_rows('collaborators') ): the_row(); 

                    //vars
                    $role = get_sub_field('role');
                    $name = get_sub_field('name');
                    $location = get_sub_field('location');

                    ?>

                    <li class="">

                      <?php if( $role ): ?>
                        <?php echo $role, ": " ?>
                      <?php endif; ?>

                      <?php if( $name ): ?>
                        <?php echo  $name ?>
                      <?php endif; ?>

                      <?php if( $location ): ?>
                        <?php echo "{", $location, "}" ?>
                      <?php endif; ?>

                    </li>

                  <?php endwhile; ?>

                  </ul>

                </p>

              <?php endif; ?>




            </div>

  		    </header>

        </div>
			
  			<!-- <p>
  			    <?php get_template_part('templates/entry-meta'); ?>
  			</p> -->



      			<p class="one-paragraph-description description">
      				<?php the_field('one_paragraph_description'); ?>
      			</p>

              

            <div class="container wrap"><?php the_content(); ?></div>
          
        </article>
          <!-- TEST TEST TEST that this page is really coming up -->
          <!-- <p>test</p> -->

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #primary -->