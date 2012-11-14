<?php
	/*
	Template Name: Two Column Left Main No Subnav
	*/
	/** Get the header. **/
	get_header();
?>

<div class="two_col_left_main">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="left_col_large">
    <?php get_template_part( 'content', 'page' ); ?>
  </div>
  <?php endwhile; ?>
  <div class="two_col_right_rail">
    <?php echo get_post_meta($post->ID, 'RightRailContent', true); ?>
  </div>
</div>