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
      <div class="ministry-contact-input">
        <span class="wpcf7-form-control-wrap ministry"><select name="ministry-disabled" value="<?php the_title()?>" class="wpcf7-form-control wpcf7-text"/>
          <?php
            $page = get_page_by_title('ministries');
            $args = array(
              'child_of' => $page->ID,
              'post_status' => 'publish',
              'post_type' => 'page',
              'sort_order' => 'DESC',
            );

            $pages = get_pages($args);
            foreach($pages as $p) :
          ?>
            <option value="<?php echo get_the_title($p);?>"><?php echo get_the_title($p);?></option>
          <?php endforeach; ?>
        </select></span>
      </div>
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
    <?php
      /* translators: used between list items, there is a space after the comma */
      $category_list = get_the_category_list( __( ', ', '_s' ) );

      /* translators: used between list items, there is a space after the comma */
      $tag_list = get_the_tag_list( '', ', ' );

      if ( ! _s_categorized_blog() ) {
        // This blog only has 1 category so we just need to worry about tags in the meta text
        if ( '' != $tag_list ) {
          $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_s' );
        } else {
          $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_s' );
        }

      } else {
        // But this blog has loads of categories so we should probably display them here
        if ( '' != $tag_list ) {
          $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_s' );
        } else {
          $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_s' );
        }

      } // end check for categories on this blog

      printf(
        $meta_text,
        $category_list,
        $tag_list,
        get_permalink(),
        the_title_attribute( 'echo=0' )
      );
    ?>

    <?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
