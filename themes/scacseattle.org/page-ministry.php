<?php
/*
Template Name: Page - Ministry
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="page page-church clearfix" role="main">

        <h1 class="entry-title"><?php the_title(); ?></h1>
        
        <?php if ( has_post_thumbnail() ) : ?>
        <?php //echo apply_filters('the_content', '[contact-form-7 id="916" title="Get Connected - TG"]'); ?>
        <div class="wpcf7 two-thirds" id="wpcf7-f860-p152-o1">
          <form action="/scacseattle.org/ministries/trinitarian-groups/#wpcf7-f860-p152-o1" method="post" class="wpcf7-form splash">
            <div style="display: none;">
              <input type="hidden" name="_wpcf7" value="860" />
              <input type="hidden" name="_wpcf7_version" value="3.3.2" />
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f860-p152-o1" />
              <input type="hidden" name="_wpnonce" value="63add9607b" />
            </div>
            <h5>Get Connected</h5>
            <div class="ministry-contact-input form-left">
              <span class="wpcf7-form-control-wrap your-name">
                <input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" default-value="Name"/>
              </span>
            </div>
            <div class="ministry-contact-input form-right">
              <span class="wpcf7-form-control-wrap your-email">
                <input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" default-value="Email"/>
              </span>
            </div>
            <div class="ministry-contact-input form-left-phone">
              <span class="wpcf7-form-control-wrap phonenumber">
                <input type="text" name="phonenumber" value="" class="wpcf7-form-control wpcf7-text" default-value="Phone Number"/>
              </span>
            </div>
            <div class="ministry-contact-input form-middle-select">
              <span class="wpcf7-form-control-wrap ministry">
                <div class="ministry-contact-input">
                  <span class="wpcf7-form-control-wrap ministry">
                    <select name="ministry" value="<?php the_title()?>" class="wpcf7-form-control wpcf7-text"/>
                      <option value="">Select a Ministry</option>
                      <?php
              $page = get_page_by_title('ministries');
              $args = array(
                'child_of' => $page->ID,
                'post_status' => 'publish',
                'post_type' => 'page',
				        'sort_column' => 'menu_order',
                'sort_order' => 'ASC',
              );
              $pages = get_pages($args);
              foreach($pages as $p) :
            ?>
                      <option value="<?php echo get_the_title($p);?>"><?php echo get_the_title($p);?>
                      </option>
                      <?php endforeach; ?>
                    </select>
                  </span>
                </div><input type="hidden" name="ministry" value=""<?php the_title()?>" class="wpcf7-form-control wpcf7-text"/>
              </span>
            </div>
            <div class="ministry-contact-input form-right-submit">
              <input type="submit" value="Send" class="wpcf7-form-control  wpcf7-submit" />
            </div>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
          </form>
        </div>
        <div class="one-third">
          <a href="/ministries/justice-and-missions/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/justicemercy.png" />
            </a>
            <a href="/ministries/justice-and-missions/">
              <p class="ministry-photo-caption">Justice and Missions</p>
            </a>
        </div>

        <div style="clear:both;"></div>
        
          <div class="post-img-header">
            <div class="col-thirds">
              <a href="/ministries/adults-ministries/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thefoyer.png" />
              </a>
              <a href="/ministries/adults-ministries/">
                <p class="ministry-photo-caption">TheFoyer (Adults)</p>
              </a>
            </div>
            <div class="col-thirds">
              <a href="/ministries/new-life-high-school/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newlife.png" />
              </a>
              <a href="/ministries/new-life-high-school/">
                <p class="ministry-photo-caption">New Life (High School)</p>
              </a>
            </div>
            <div class="col-thirds last">
              <a href="/ministries/challengers-middle-school/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/challengers.png" />
              </a>
              <a href="/ministries/challengers-middle-school/">
                <p class="ministry-photo-caption">Challengers (Middle School)</p>
              </a>
            </div>
            <div style="clear:both;"></div>


<!-- OLD CONTENT. -->
            <!-- He has showed you, O man, what is good. And what does the Lord require of you? To act justly and to love mercy and to walk humbly with your God – Micah 6:8

The SCAC Justice and Mercy (JAM) group started with a few discussions and informal meetings between individuals with a common passion for learning about the needs of others and finding ways to help. The purpose of the group is to build awareness at SCAC for the issues affecting people locally and globally, and to work together as a church to tangibly demonstrate God’s love by serving others. We are continuing to set our efforts to seek God’s calling for justice and mercy and to encourage one another to action.

To learn more about the JAM group, please visit justicemercyscac.blogspot.com or contact Anita Hong at anita.hong@yahoo.com.
-->

            <!--<?php 
              $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
              echo '<img src="' . $image_src[0]  . '" width="100%"  />';
            ?>-->
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
//              get_template_part( 'content', 'ministry', get_post_format() );
            ?>

          <?php endwhile; ?>

        <?php else : ?>

          <?php get_template_part( 'no-results', 'index' ); ?>

        <?php endif; ?>


      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
<?php get_sidebar('ministries'); ?>
<?php get_footer(); ?>
