<?php
/*
Template Name: Page - Ministries
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="page page-church clearfix" role="main">
        
        <div class="page-church clearfix">
  
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-img-header">
              <?php 
                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                echo '<img src="' . $image_src[0]  . '" width="100%"  />';
              ?>
            </div>
          <?php endif; ?>

          <?php if ( have_posts() ) : ?>


            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to overload this in a child theme then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content', 'ministries', get_post_format() );
              ?>

            <?php endwhile; ?>

          <?php else : ?>

            <?php get_template_part( 'no-results', 'index' ); ?>

          <?php endif; ?>

        </div>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
	<br class="clear" />
<?php get_sidebar('ministries'); ?>
<?php get_footer(); ?>
