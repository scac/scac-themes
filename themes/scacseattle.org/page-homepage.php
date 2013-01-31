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
              <div class="info-cell-container">
                <table>
                  <tr>
                    <td class="service-time">8:30am</td>
                    <td>Cantonese Service 1</td>
                  </tr>
                  <tr>
                    <td class="service-time">10:00am</td>
                    <td>English Service</td>
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
              </div>
            </td>
            <td class="info-box info-cell">
              <?php
                $args = array(
                  'post_type' => 'ct_sermon',
                  'order' => 'DESC',
                  'numberposts' => 1
                );
                $post = array_shift(get_posts($args));

                if(isset($post)) :                  
                  $term = array_shift(wp_get_post_terms($post->ID, 'sermon_series'));

              ?>
                <div class="info-cell-container">
                  <?php 
                    global $nggdb;
                    if(isset($nggdb)):
                      $img = $nggdb->find_image($term->slug);
                    ?>
                      <!-- <div class="latest-sermon-img"><img src="<?php echo $img->imageURL; ?>" style="width: 300px"></div> -->
                    <?php endif; ?>
                  <div class="latest-sermon-title"><a href="<?php echo get_permalink($post); ?>"><?php echo get_the_title($post); ?></a></div>
                  <div class="latset-sermon-date"><?php echo get_the_time('M j, Y', $post); ?></div>
                </div>
              <?php else : ?>
                Latest sermon coming soon! Check often!
              <?php endif; ?>
            </td>
            <td class="info-box info-cell">
              <div class="announcement-item">
                <span class="date">February 22-24, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">Justice Conference</span>
              </div>
              <div class="announcement-item">
                <span class="date">March 22-24, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">TheFoyer Retreat</span>
              </div>
              <div class="announcement-item">
                <span class="date">March 24 - March 31, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">Fasting</span>
              </div>
              <div class="announcement-item">
                <span class="date">March 29, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">Good Friday Service</span>
              </div>
              <!-- <div class="announcement-item">
                <span class="date">March 30, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">Beacon Hill Easter Egg Hunt</span>
              </div>
              <div class="announcement-item">
                <span class="date">March 31, 2013</span>
                <span class="black-dot">&bull;</span>
                <span class="a-title">Baptismal Service</span>
              </div> -->
              <?php
                global $nggdb;
                /* if(isset($nggdb)): 
                  $img = array_shift($nggdb->get_gallery('announcements-images')); //only take the first image anyway

                  if(isset($img)){
                    echo '<img src="' . $img->imageURL . '" alt="' . $img->alttext . '" class="announcement-img">';  
                  }else{
                    global $ai1ec_calendar_helper;



                    
              //      $events = $ai1ec_calendar_helper->get_events_relative_to(gmmktime(), 3);

                    if( count($events) > 0 ) : foreach($events["events"] as $event) : 
                    ?>
                    <div class="announcement-item">
                      <span class="date"><?php echo get_the_time("n/d/Y", $event->post); ?></span>
                      <span class="black-dot">&bull;</span>
                      <span class="a-title"><?php echo $event->post->post_title; ?> </span>
                    </div>
                    <?php endforeach; ?>
                    
                    <?php else: ?>
                      <div class="announcement-item">
                        Check again in, announcements coming!
                      </div>
                    <?php endif;

                  }
                  
                endif;  */

              ?>
            </td>
          </tr>
        </table>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
