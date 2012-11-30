<?php
/*
Template Name: Page - Church
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="page-church clearfix" role="main">
        
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
                  get_template_part( 'content', get_post_format() );
                ?>

              <?php endwhile; ?>

            <?php else : ?>

              <?php get_template_part( 'no-results', 'index' ); ?>

            <?php endif; ?>

          </div>
          <div class="col-right">
            <div class="sidebar sidebar-church">
              <h3 class="sidebar-title">Church</h3>
              <ul class="sidebar-page-listing">
                <?php 
                  $page = get_page_by_title('church');
                  wp_list_pages(array(
                    'title_li'    => '',
                    'child_of'    => $page->ID,
                    'link_before' => '<span class="active-box"></span>'
                  ));
                ?>
              </ul>
            </div>
          </div>
        </div>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
