<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">Stephen Thunder Nixon</a>
    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->

    <a class="about-modal-link" type="button" data-toggle="modal" data-target="#myModal" href=#>About</a>

    <?php
      get_template_part('templates/about-modal');
    ?>

<!-- Modal -->
<!--     <div class="about-modal">
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">About Me</h4>
            </div>
            <div class="modal-body">
              <p>
                I like to think, draw, make, and learn.
              </p>
              <p>
                Connect with me on <a href="http://www.twitter.com/thundernixon" target="_blank">Twitter</a> and <a href="http://www.instagram.com/thundernixon" target="_blank">Instagram</a>
              </p>
              <a href="#">Resume</a>
            </div> -->
      <!--       <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
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
