<?php
	/*
	Template Name: Two Column Left Main subnav
	*/
	/** Get the header. **/
	get_header();
?>

<div class="two_col_left_main_subnav">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="left_col_large">
    <?php get_template_part( 'content', 'page' ); ?>
  </div>
  <div class="clear"></div>
  <?php endwhile; ?>
</div>