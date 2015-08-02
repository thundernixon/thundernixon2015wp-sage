<header class="banner" role="banner">
  <div class="container">
<!--     <img id="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.svg">
-->    <a class="brand" href="<?= esc_url(home_url('/')); ?>">Stephen Thunder Nixon</a>
        <a id="logo" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/stn-logo-3.svg"></a>
    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->

    <a class="about-modal-link small-caps" type="button" data-toggle="modal" data-target="#myModal" href=#>About</a>

    <?php
      get_template_part('templates/about-modal');
    ?>

          </div>

        </div>
      </div>
    </div>

<!-- END Modal -->


    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

    </nav>
  </div>
</header>
