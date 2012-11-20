<?php
/*
Template Name: Page - Homepage
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">
        
        <!-- Place holder img !-->
        <div style="width: 100%; height: 300px; background-color: #DEDEDE; margin: 20px auto;">
        </div>

        <div class="info-area">
          <div class="info-row">
            <div class="info-header info-cell">Sunday Service</div>
            <div class="info-header info-cell">Latest Sermon</div>
            <div class="info-header info-cell">Announcements</div>
          </div>
          <div class="info-row">
            <div class="info-box info-cell">
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

              <a href="#">Directions</a>
            </div>
            <div class="info-box info-cell">
              Coming Soon
            </div>
            <div class="info-box info-cell">
              <?php 
                $args = array( 'post_type' => 'announcement', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
              ?>
              <div class="announcement-item">
                <span class="date"><?php the_time("n/d"); ?></span>
                <span class="black-dot">&bull;</span>
                <span class="a-title"><?php the_title(); ?> </span>
              </div>
              <?php endwhile; ?>
            </div>
          </div>


        </div>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>