<?php
function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
} 
add_action( 'init', 'create_post_type' );
?>