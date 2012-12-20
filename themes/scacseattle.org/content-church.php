<?php
/**
 * @package scacseattle.org
 * @author Justin Louie
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("church-page"); ?>>
  <header class="entry-header">
  
  <div class="content-from-container clearfix">

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
