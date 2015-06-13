<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

  <?php get_template_part('templates/head');  ?>
  




<!-- <body onload="hideSections()" onscroll="tabSize()" <?php body_class(); ?> > -->

  <body onload="hideSections(); tabSize()" <?php body_class(); ?> >






  <?php 
      if (is_front_page()){
         get_template_part('templates/hero', 'hero');
        }
  ?>

    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php
      get_template_part('templates/navbar');
    ?>

    <div class="wrap container" role="document"> <!-- removed "container" class too make full-width page elements -->
      <div class="content row">
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main>
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside>
        <?php endif; ?>
      </div>
    </div>
  <!--   </div> -->

    <footer class="content-info" role="contentinfo">
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
    </footer>

  </body>

      <script type="text/javascript">
                var feed = new Instafeed({
                  get: 'user',
                  clientId: 'f1ac464b95de40a9b203a6c8edf827a8',
                  resolution: 'low_resolution',
                  limit: '9',
                  userId: 209250343,
                  accessToken: '209250343.467ede5.17e3f6e6946a4758b7de4d1809135877',
                  template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><p>{{caption}}</p></a>',
                  filter: function(image) {
                    return image.tags.indexOf('typefloundry') >= 0;
                  }


                });
                feed.run();
    </script>
</html>