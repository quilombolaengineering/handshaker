<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/banner');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/navigation');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/ribbon');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/introduction');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/portfolios');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/artists');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/sponsors');
    ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
