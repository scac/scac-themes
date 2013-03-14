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
						<td class="announcement-img-cell"><img src="http://english.scacseattle.org/wp-content/themes/scacseattle.org/images/announcement_blank.png"></td>
						<td class="announcement-table-cell">
							<div class="title">TheFoyer Retreat</div>
							<div class="info">March 22-24, 2013</div>
							<div class="desc">The young adults at SCAC will be going to Seabrook, WA this year for a weekend retreat. Our speaker, Pete Forras will be talking about relationships and finances in the Kingdom of God Cost.: $100 if you register before March 8th ($75 for college students); $130 if you register March 9th-21st ($100 for college students). Click <a href="https://docs.google.com/spreadsheet/viewform?fromEmail=true&formkey=dERvbVB2aW42V0xSTHUxS0w2bWZ6bFE6MQ">here</a> to register.</div></td>
					</tr>
          <tr class="announcement-row">
            <td class="announcement-img-cell">
              <img src="http://english.scacseattle.org/wp-content/themes/scacseattle.org/images/announcement_blank.png">
            </td>
            <td class="announcement-table-cell">
              <div class="title">Baptism &amp; Membership Class</div>
              <div class="info">March 31, 2013 - 1:30pm</div>
              <div class="desc">
                Our next baptismal service will be on Easter Sunday (March 31st) at 1:30pm. If you are interested in getting baptized or becoming a member at SCAC, please contact <a href="mailto:pollywong@scac.org">Polly Wong</a> for an application.  Baptism and Membership class will be held on March 17th at 1pm.
              </div>
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
