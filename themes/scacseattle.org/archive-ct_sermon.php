<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

    <section id="primary" class="content-area">
      <div id="content" class="site-content" role="main">


        <header class="page-header">
          <h1 class="page-title">Sermons @ SCAC</h1>

        </header><!-- .page-header -->

        <div class="sermon-series-listings-container">

          <table class="sermon-series-listings">
            <tr>
              <?php 
                if ( 'ct_sermon' == get_post_type() ) :
                  $taxonomy = 'sermon_series';
                  $terms = get_terms($taxonomy);
                  foreach ($terms as $k => $term) {
                    $current_series = get_the_term_list('', 'sermon_series');
                    ?>
                      <td><a href="<?php get_term_link($term); ?>"><?php echo $term->name; ?></a></td>
                    <?php
                    if(($k+1)%3 == 0)
                      echo "</tr><tr>"; //make a new row every 3rd sermon
                  }
               endif; 
              ?>
            </tr>
          </table>
        </div>
      </div><!-- #content .site-content -->
    </section><!-- #primary .content-area -->

<?php get_sidebar('sermons'); ?>
<?php get_footer(); ?>