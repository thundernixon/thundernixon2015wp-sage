<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

  <?php get_template_part('templates/head');  ?>





<!-- <body onload="hideSections()" onscroll="tabSize()" <?php body_class(); ?> > -->

  <body  onscroll="" <?php body_class(); ?> >

  <!-- onload="hideSections(); navRight(); tabSize();" -->






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

    <div class="" role="document"> <!-- removed "wrap container" class to make full-width page elements -->
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

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37669234-1', 'auto');
    ga('send', 'pageview');

    </script>

  </body>



</html>
