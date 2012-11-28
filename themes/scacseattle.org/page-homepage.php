<?php
/*
Template Name: Page - Homepage
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">
        
        <!-- Place holder img !-->
        <div class="main-carousel">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/church.jpg" height="300px" width="100%">
        </div>

        <table class="info-area">
          <tr class="info-row">
            <td class="info-header info-cell"><div class="header">Sunday Service</div></td>
            <td class="info-header info-cell"><div class="header">Latest Sermon</div></td>
            <td class="info-header info-cell"><div class="header">Announcements</div></td>
          </tr>
          <tr class="info-box info-cell">
            <td class="info-box info-cell">
              <table>
                <tr>
                  <td>8:30am</td>
                  <td>Chinese Service 1</td>
                </tr>
                <tr>
                  <td>10am</td>
                  <td>English Service</td>
                </tr>
                <tr>
                  <td>11:30am</td>
                  <td>Chinese Service 2</td>
                </tr>
              </table>

              <p>
                2308 Orcas St.
                <br/>
                Seattle, WA 98108
              </p>

              <a href="<?php echo home_url("/")?>/visit/">Directions</a>
            </td>
            <td class="info-box info-cell">
              Coming Soon
            </td>
            <td class="info-box info-cell">
              <?php 
                $args = array( 'post_type' => 'announcement', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                if($loop->have_posts()) : 
                  while ( $loop->have_posts() ) : $loop->the_post();
              ?>
              <div class="announcement-item">
                <span class="date"><?php the_time("n/d"); ?></span>
                <span class="black-dot">&bull;</span>
                <span class="a-title"><?php the_title(); ?> </span>
              </div>
              <?php endwhile; ?>
              <?php else: ?>
                <div class="announcement-item">
                  Check again in, announcements coming!
                </div>
              <?php endif;?>
            </td>
          </tr>
        </table>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>