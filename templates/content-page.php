<!--     <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?> -->


<div class="container"> <!-- Added "container" class to make a central column -->

<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

</div>