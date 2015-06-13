<article class="container" <?php post_class(); ?>> <!-- Added "container" class to make a central column -->
  <?php
  	if ( ('portfolio' == get_post_type()) && has_post_thumbnail() ) {
	the_post_thumbnail();
	} 
  ?>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
