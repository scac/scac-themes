<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("sermon-post"); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>

    <div class="entry-meta"> 
      <?php if (get_post_type() == 'ct_sermon') : ?>
        <span class="sermon-speaker">
          <?php echo get_the_term_list($post->ID, 'sermon_speaker'); ?>,
        </span>
      <?php endif; ?>

      <?php the_time('M j, Y'); ?>
      
      <div class="comments-cnt">
        <a href="<?php comments_link(); ?>" class="comments-link">
        <?php 
        $ccnt = get_comments_number();
        switch($ccnt){
          case 0:
            echo "No Comments";
            break;
          case 1:
            echo "1 Comment";
            break;
          default:
            echo "$ccnt Comments";
            break;
        }
        ?>
        </a>
      </div>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_s' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
