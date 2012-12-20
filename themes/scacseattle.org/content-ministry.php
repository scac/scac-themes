<?php
/**
 * @package scacseattle.org
 * @author Justin Louie
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("ministry-page"); ?>>
  <header class="entry-header">
  
  <div class="content-from-container clearfix">
    <div class="col-left">
      <?php //echo apply_filters('the_content', '[contact-form-7 id="916" title="Get Connected - TG"]'); ?>
      <div class="wpcf7" id="wpcf7-f916-p152-o1"><form action="/scacseattle.org/ministries/trinitarian-groups/#wpcf7-f916-p152-o1" method="post" class="wpcf7-form">
      <div style="display: none;">
      <input type="hidden" name="_wpcf7" value="916" />
      <input type="hidden" name="_wpcf7_version" value="3.3.2" />
      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f916-p152-o1" />
      <input type="hidden" name="_wpnonce" value="63add9607b" />
      </div>
      <h5>Get Connected</h5>
      <div class="ministry-contact-input"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" default-value="Name"/></span></div>
      <div class="ministry-contact-input"><span class="wpcf7-form-control-wrap your-email"><input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" default-value="Email"/></span></div>
      <div class="ministry-contact-input"><span class="wpcf7-form-control-wrap phonenumber"><input type="text" name="phonenumber" value="" class="wpcf7-form-control wpcf7-text" default-value="Phone Number"/></span></div>
      <div class="ministry-contact-input"><span class="wpcf7-form-control-wrap ministry"><input type="text" name="ministry-disabled" value="<?php the_title()?>" disabled class="wpcf7-form-control wpcf7-text"/><input type="hidden" name="ministry" value="<?php the_title()?>" class="wpcf7-form-control wpcf7-text"/></span></div>
      <div class="ministry-contact-input"><input type="submit" value="Send" class="wpcf7-form-control  wpcf7-submit" /></div>
      <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
    </div>

    <div class="col-right">
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_s' ), 'after' => '</div>' ) ); ?>
      </div><!-- .entry-content -->
    </div>
  </div>


  <footer class="entry-meta">

    <?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
