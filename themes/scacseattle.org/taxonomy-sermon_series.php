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

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <h1 class="page-title">Sermons</h1>

          <!-- This draws out the sermon series topics. -->
          <?php if ( 'ct_sermon' == get_post_type() ) : ?>
            <div clas="right-sermons-nav" style="float: right;">
              <?php
                  $taxonomy = 'sermon_series';
                  $terms = get_terms($taxonomy);
                  foreach ($terms as $term) {
                    $term_slug = $term->slug;
                    $current_series = get_the_term_list('', 'sermon_series');
                    echo '<a href="'.get_home_url().'/series/'.$term->slug.'">'.$term->name.'</a><br />';
                  }
              ?>
            </div>
          <?php endif; ?>
          
          <?php
            if ( is_category() ) {
              // show an optional category description
              $category_description = category_description();
              if ( ! empty( $category_description ) )
                echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

            } elseif ( is_tag() ) {
              // show an optional tag description
              $tag_description = tag_description();
              if ( ! empty( $tag_description ) )
                echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
            }
          ?>
        </header><!-- .page-header -->

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to overload this in a child theme then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
          ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'archive' ); ?>

      <?php endif; ?>

      </div><!-- #content .site-content -->
    </section><!-- #primary .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>