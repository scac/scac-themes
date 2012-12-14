<!-- This draws out the sermon series topics. -->
<?php if ( 'ct_sermon' == get_post_type() ) : ?>
  <div class="sidebar sidebar-right right-sermons-nav">
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