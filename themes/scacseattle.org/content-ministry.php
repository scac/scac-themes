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
      <?php echo apply_filters('the_content', '[contact-form-7 id="916" title="Get Connected - TG"]'); ?>
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
