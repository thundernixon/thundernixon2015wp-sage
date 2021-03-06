<?php // get_template_part('templates/content-single', get_post_type()); ?>


    <div data="work" onload="growTab1()" class="portfolio-project">
      <div role="main">



        <article>

        <?php while ( have_posts() ) : the_post(); ?>

       <!--  <img src="<?php //the_field('hero_image'); ?>" /> -->

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

              <div>
                <p  class="small-caps">Project Details</p>
              </div>

              <div>
                <p>
                  <span  class="small-caps">Done for</span>
                </p>
                <p>
                  <?php the_field('client'); ?>
                </p>
              </div>
              <div>
                <p>
                <span  class="small-caps">Time</span>
                </p>
                <p>
                  <?php the_field('date'); ?>
                </p>
              </div>


              <div>
                <?php if( have_rows('collaborators') ): ?>

                  <p>
                  <span  class="small-caps">Main Collaborators</span>



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
              <div>
                <!-- <p>
                  <span  class="small-caps">View Project Live</span>
                </p> -->
                <p class="small-caps">
                  <?php the_field('view_project_live'); ?>
                </p>
              </div>


            </div>
  		    </header>
        </div>

          <div class="opening-description">
            <div class="container wrap">

              <div class="hero-wrap">

                <!--hero image--->
                <?php if( get_field('is_this_a_web_screenshot') ) : ?>

                    <div class="screenshot project-hero-image">



                <?php else : ?>

                  <div class="project-hero-image">

                <?php endif; ?>

                <?php
                $image = get_field('project_hero_image');
                $size = 'medium';

                if( $image ) {

                	echo wp_get_attachment_image( $image, $size );

                }
                // if( !empty($image) ):
                //   $url = $image['url'];
                //   $size = 'medium';
                  ?>

                  <!-- <img  src="<?php // echo $image['url']; ?>" alt="<?php // echo $image['alt']; ?>" height="<?php // echo $height; ?>" width="au<?php // echo $width; ?>to" /> -->
                  <!-- <img src="<?php // echo $image['url']; ?>" <?php// echo tevkori_get_srcset_string( $image, 'medium' ); ?> /> -->
                <?php // endif; ?>

                </div>



                <!--END hero image--->

                <p class="caption">
                  <?php the_field('hero_image_caption'); ?>
                </p>

              </div>

              <!-- <div class=" one-paragraph-description"> -->

              <p class="description one-paragraph-description">
                <?php the_field('one_paragraph_description'); ?>
              </p>

              <!-- </div> -->
            </div>
          <!-- </div> -->

        </div>

  			<!-- <p>
  			    <?php get_template_part('templates/entry-meta'); ?>
  			</p> -->

          <section>

            <div class="container wrap deeper-description"><?php the_content(); ?></div>

          </section>
        </article>

        <!-- <section class="pagination">
          <div class="next-post"><?php// next_post_link('%link') ?></div>
          <div class="prev-post"><?php// previous_post_link('%link') ?></div>
        </section> -->

        <!-- <section class="pagination">
          <?php // next_post_link('%link') ?>
          <?php // previous_post_link('%link') ?>
        </section> -->

        <section class="pagination">
        <?php


        if( get_adjacent_post(false, '', false) ) {
        	next_post_link('%link');
        } else {
        	$last = new WP_Query('posts_per_page=1&order=ASC&post_type=portfolio'); $last->the_post('%link');
            	echo '<a href="' . get_permalink() . '">';
                the_title();
              echo'</a>';
            wp_reset_query();
        };

        if( get_adjacent_post(false, '', true) ) {
          previous_post_link('%link');
        } else {
            $first = new WP_Query('posts_per_page=1&order=DESC&post_type=portfolio'); $first->the_post('%link');
              echo '<a href="' . get_permalink() . '">';
                the_title();
              echo'</a>';
            wp_reset_query();
        };

        ?>
        </section>

          <?php
          //next_post_link( '%link', 'Next post in category', TRUE ); ?>

        <?php endwhile; // end of the loop. ?>

      </div><!-- #content -->

    </div><!-- #primary -->
