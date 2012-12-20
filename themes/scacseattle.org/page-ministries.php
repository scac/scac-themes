<?php
/*
Template Name: Page - Ministries
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="page page-church clearfix" role="main">
        
        <div class="page-church clearfix">
          <div class="col-left">

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
        </div>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
<?php get_sidebar('ministries'); ?>
<?php get_footer(); ?>
