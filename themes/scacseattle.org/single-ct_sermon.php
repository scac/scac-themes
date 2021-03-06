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

    <section id="primary" class="content-area">
      <div id="content" class="site-content" role="main">

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title"><?php echo $tax_title; ?></h1>

        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', 'sermon', get_post_format() );
          ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
              comments_template( '', true );
          ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'archive' ); ?>

      <?php endif; ?>
      </div><!-- #content .site-content -->
    </section><!-- #primary .content-area -->

<?php get_sidebar('sermons'); ?>
<?php get_footer(); ?>