<?php
/**
 * Template page for taxonomies. 
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author Sandra Li
 * @package scacseattle.org
 * @since scacseattle.org 1.0
 * 
 * Made awesome by Justin Louie
 */

if( is_tax() ) {
  global $wp_query;
  $global_term = $wp_query->get_queried_object();
  $tax_title = $global_term->name;
}

get_header(); ?>

    <section id="primary" class="content-area page-sermon-series">
      <div id="content" class="site-content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php echo $tax_title; ?></h1>

          <div class="series-banner">
            <?php 
              global $nggdb, $wp_query;
              $global_term = $wp_query->get_queried_object();
              if(isset($nggdb)){
                $img = $nggdb->find_image($global_term->slug . "_banner");
              }
              // if(isset($img)) :
            ?>
              <img src="<?php echo $img->imageURL; ?>">
              <?php // endif; ?>
          </div>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', 'sermon-series', get_post_format() );
          ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'archive' ); ?>

      <?php endif; ?>
      </div><!-- #content .site-content -->
    </section><!-- #primary .content-area -->

<?php get_sidebar('sermons'); ?>
<?php get_footer(); ?>