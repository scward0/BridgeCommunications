<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

  <div class="container">
    <div class="row">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
  </div>

 <?php get_footer();
