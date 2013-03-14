<?php
/*
Template Name: Page - Ministry
*/

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="page page-church clearfix" role="main">

    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>

    <?php if ( has_post_thumbnail() ) : ?>
    <?php //echo apply_filters('the_content', '[contact-form-7 id="916" title="Get Connected - TG"]'); ?>
    <div class="col-thirds">
      <a href="/ministries/justice-and-mission/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/justicemercy.png" />
      </a>
      <a href="/ministries/justice-and-mission/">
        <p class="ministry-photo-caption">Justice and Mission</p>
      </a>
    </div>
    <div class="col-thirds">
      <a href="/ministries/trinitarian-groups">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trinitarian-groups.jpg" />
      </a>
      <a href="/ministries/trinitarian-groups/">
        <p class="ministry-photo-caption">Trinitarian Groups</p>
      </a>
    </div>
    <div class="col-thirds last">
      <a href="/ministries/adults-ministries/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thefoyer.png" />
      </a>
      <a href="/ministries/adults-ministries/">
        <p class="ministry-photo-caption">TheFoyer (Adults)</p>
      </a>
    </div>
    <div style="clear:both;"></div>
    <div class="post-img-header">
      <div class="col-thirds">
        <a href="/ministries/new-life-high-school/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newlife.png" />
        </a>
        <a href="/ministries/new-life-high-school/">
          <p class="ministry-photo-caption">New Life (High School)</p>
        </a>
      </div>
      <div class="col-thirds">
        <a href="/ministries/challengers-middle-school/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/challengers.png" />
        </a>
        <a href="/ministries/challengers-middle-school/">
          <p class="ministry-photo-caption">Challengers (Middle School)</p>
        </a>
      </div>	  <div class="col-thirds last">		<a href="/ministries/childrens-ministry/">			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/childrens.jpg" />		</a>		<a href="/ministries/childrens-ministry/">			<p class="ministry-photo-caption">Children's Ministry</p>		</a>	  </div>
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


  </div>
  <!-- #content .site-content -->
</div>
<!-- #primary .content-area -->
<?php get_sidebar('ministries'); ?>
<?php get_footer(); ?>
