<?php
/**
 * @package _s
 * @since _s 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("sermon-list-post"); ?>>
  <header class="entry-header clearfix">
    <table>
      <tr>
        <td class="entry-title-container">
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        </td>
        <td class="sermon-speaker-container">
          <?php if (get_post_type() == 'ct_sermon') : ?>
            <div class="sermon-speaker">
              <?php echo get_the_term_list($post->ID, 'sermon_speaker'); ?>
            </div>
          <?php endif; ?>
        </td>
      </tr>
    </table>
    
  </header><!-- .entry-header -->

  <div class="sermon-info-container clearfix">
    <div class="sermon-short-desc">
      <?php the_excerpt(); ?>
    </div>
    <div class="sermon-info">
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
    </div>
  <?php
    $args = array( 'post_type' => 'ct_sermon', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      // echo '</div>';
    endwhile;
   ?>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
