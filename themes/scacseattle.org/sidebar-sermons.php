<!-- This draws out the sermon series topics. -->
<?php if ( 'ct_sermon' == get_post_type() ) : ?>
  <div class="sidebar sidebar-right right-sermons-nav">
    <h3 class="sidebar-title">Sermon Series</h3>
    <ul class="sidebar-page-listing">
    <?php
      global $wp_query;
      $global_term = $wp_query->get_queried_object();        
      $taxonomy = 'sermon_series';
      $terms = get_terms($taxonomy);
      foreach ($terms as $term) {
        $current_series = get_the_term_list('', 'sermon_series');
        
          ?>
          <li class="page_item <?php echo ($global_term->slug == $term->slug ? "current_page_item" : ""); ?>"><a href="<?php echo get_term_link($term); ?>"><span class="active-box"></span><?php echo $term->name; ?></a></li>
          <?php
        
      }
    ?>
  </div>
<?php endif; ?>