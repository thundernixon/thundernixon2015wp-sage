<article class="blog-list" <?php post_class(); ?>> <!-- Added "container" class to make a central column -->
  
  <a href="<?php the_permalink(); ?>">
    <div class="">
      <?php
      	if ( ('portfolio' == get_post_type()) && has_post_thumbnail() ) {
    	the_post_thumbnail();
    	} 
      ?>
    </div>

    <div class="animated-hr">
      <hr/>
      <hr/>
    </div>
    
    <header>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php //get_template_part('templates/entry-meta'); ?>
    </header>
<!--     <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div> -->
  </a>
</article>
