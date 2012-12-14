<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php _s_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php elseif (get_post_type() != 'ct_sermon') : ?>
    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_s' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_s' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
  <?php else :
    echo('<p>'.get_the_term_list($post->ID, 'sermon_speaker').'</p>');
    $args = array( 'post_type' => 'ct_sermon', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      // echo '</div>';
    endwhile;
   ?>
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
