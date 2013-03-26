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
            <td class="info-header info-cell announcement-cell"><div class="header">Announcements</div></td>
            <td class="info-header info-cell"><div class="header">Latest Sermons</div></td>
          </tr>
          <tr class="info-row">
            <td class="info-box announcement-cell">
              <div class="announcement-item">
				<table class="announcement-table">
					<tr class="announcement-row">
						<td class="announcement-img-cell"><img src="http://english.scacseattle.org/wp-content/themes/scacseattle.org/images/thiog_announcement.jpg"></td>
						<td class="announcement-table-cell">
							<div class="title">Guest Speaker: Margo Day, Vice President of U.S. Education at Microsoft</div>
							<div class="info">March 24, 2013</div>
							<div class="desc"> With education at the center of her passions, Margo recently returned from a one year personal leave of absence where she used the time to focus on raising funds and awareness for the Kenya Child Protection and Education Project, partnering with <a href="http://www.worldvision.org/m/sponsor-a-child/?open&campaign=11935117&cmp=KNC-11935117">World Vision</a>. This <a href="http://margoday.wordpress.com/">project</a> is positively affecting the lives of 17,000 children in 5 areas in the North Rift Valley of Kenya.</div>
						</td>
					</tr>
					<tr class="announcement-row">
						<td class="announcement-img-cell"><img src="http://english.scacseattle.org/wp-content/themes/scacseattle.org/images/baptism.jpg"></td>
						<td class="announcement-table-cell">
							<div class="title">Baptism &amp; Membership Class</div>
							<div class="info">March 31, 2013 - 1:30pm</div>
							<div class="desc">Our next baptismal service will be on Easter Sunday (March 31st) at 1:30pm. If you are interested in getting baptized or becoming a member at SCAC, please contact <a href="mailto:pollywong@scac.org">Polly Wong</a> for an application.  Baptism and Membership class will be held on March 17th at 1pm.</div>
						</td>
					</tr>
					<tr class="announcement-row">
						<td class="announcement-img-cell"><img src="http://english.scacseattle.org/wp-content/themes/scacseattle.org/images/new-here-web.jpg"></td>
						<td class="announcement-table-cell">
							<div class="title">Newcomer Luncheon</div>
							<div class="info">April 21, 2013 - 11:45am - 12:30pm</div>
							<div class="desc">Have you been attending SCAC regularly for the past several months, and would like to get to know us a little better?  We'd love to invite you to lunch here at SCAC. Get to meet some of us in leadership, ask any questions you might have, and share a nice meal with us!</div>
						</td>
					</tr>
				</table>
              </div>
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
            <td class="info-box info-cell">
              <?php
                $args = array(
                  'post_type' => 'ct_sermon',
                  'order' => 'DESC',
                  'numberposts' => 4
                );
                $posts = get_posts($args);
				$post = array_shift($posts);
                if(isset($posts)) :

              ?>
                <div class="first-sermon-container">
                  <div class="latest-sermon-title"><a href="<?php echo get_permalink($post); ?>"><?php echo get_the_title($post); ?></a></div>
                  <div class="latest-sermon-date"><?php echo array_shift(wp_get_object_terms($post->ID, 'sermon_speaker'))->name; ?> | <?php echo get_the_time('M j, Y', $post); ?></div>
                </div>
				<?php foreach( $posts as $sermon ) { ?>
				  <div class="sermon-container">
					<div class="latest-sermon-title"><a href="<?php echo get_permalink($sermon); ?>"><?php echo get_the_title($sermon); ?></a></div>
					<div class="latest-sermon-date"><?php echo array_shift(wp_get_object_terms($sermon->ID, 'sermon_speaker'))->name; ?> | <?php echo get_the_time('M j, Y', $sermon); ?></div>
				  </div>
				<?php } ?>
              <?php else : ?>
                Latest sermon coming soon! Check often!
              <?php endif; ?>
            </td>
          </tr>
        </table>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
