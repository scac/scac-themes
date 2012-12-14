<?php
/*
Template Name: Page - Homepage
*/


/*************** does not use #primary **************/
get_header(); ?>

    <div id="page-homepage" class="content-area">
      <div id="content" class="site-content" role="main">
        
        <?= apply_filters('the_content', '[gallery=1]'); ?>

        <table class="info-area">
          <tr class="info-row">
            <td class="info-header info-cell"><div class="header">Sunday Service</div></td>
            <td class="info-header info-cell"><div class="header">Latest Sermon</div></td>
            <td class="info-header info-cell"><div class="header">Announcements</div></td>
          </tr>
          <tr class="info-row">
            <td class="info-box info-cell">
              <table>
                <tr>
                  <td class="service-time">8:30am</td>
                  <td>Cantonese Service 1</td>
                </tr>
                <tr>
                  <td class="service-time">10:00am</td>
                  <td>English Ministries Service</td>
                </tr>
                <tr>
                  <td class="service-time">11:30am</td>
                  <td>Cantonese Service 2</td>
                </tr>
              </table>

              <p>
                2803 S. Orcas St.
                <br/>
                Seattle, WA 98108
              </p>

              <a href="<?php echo home_url("/")?>visit/">Directions</a>
            </td>
            <td class="info-box info-cell">
              Coming Soon
            </td>
            <td class="info-box info-cell">
              <?php
                global $nggdb;
                if(isset($nggdb)): 
                  $img = array_shift($nggdb->get_gallery(2)); //only take the first image anyway

                  if(isset($img)){
                    echo '<img src="' . $img->imageURL . '" alt="' . $img->alttext . '" class="announcement-img">';  
                  }else{


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
                    <?php endif;

                  }
                  
                endif; 

              ?>
            </td>
          </tr>
        </table>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
