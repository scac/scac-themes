<?php
  /*
  Template Name: Home
  */
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

        <?php if ( have_posts() ) : ?>

				<?php _s_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
        
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
        <!-- Display the custom data. -->
        <div class="bottom_columns">
          <div class="headers">
            <!-- get_post_meta(pageID, custom field name, true = return first value found instead of entire array. -->
            <div class="left_col"><span><?php echo get_post_meta($post->ID, 'BottomLeftColumnHeading', true); ?></span></div>
            <div class="mid_col"><span><?php echo get_post_meta($post->ID, 'BottomMiddleColumnHeading', true); ?></span></div>
            <div class="right_col"><span><?php echo get_post_meta($post->ID, 'BottomRightColumnHeading', true); ?></span></div>
          </div>
          <div class="content">
            <div class="left_col">
              <p>
                <?php echo get_post_meta($post->ID, 'BottomLeftColumnContent', true); ?>
              </p>
              <p>
                <a href="<?php echo get_post_meta($post->ID, 'BottomLeftColumnLinkURL', true); ?>">
                  <?php echo get_post_meta($post->ID, 'BottomLeftColumnLinkText', true); ?>
                </a>
              </p>
            </div>
            <div class="mid_col">
              <p><?php echo get_post_meta($post->ID, 'BottomMiddleColumnContent', true); ?>
              </p>
              <p>
                <div class="detail_link">
                  <a href="<?php echo get_post_meta($post->ID, 'BottomMiddleColumnLinkURL', true) ?>">
                    <?php echo get_post_meta($post->ID, 'BottomMiddleColumnLinkText', true); ?>
                  </a>
                </div>
              </p>
            </div>
            <div class="right_col">
              <p>
                <?php echo get_post_meta($post->ID, 'BottomRightColumnContent', true); ?>
              </p>
              <p>
                <div class="detail_link">
                  <a href="<?php echo get_post_meta($post->ID, 'BottomRightColumnLinkURL', true) ?>">
                    <?php echo get_post_meta($post->ID, 'BottomRightColumnLinkText', true); ?>
                  </a>
                </div>
              </p>
            </div>
          </div>
          <div class="clear"></div>
        </div>

				<?php endwhile; ?>

				<div class="primary_nav">
				  <?php _s_content_nav( 'nav-below' ); ?>
				</div>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>