<!-- This draws out the sermon series topics. -->
<?php if ( 'ct_sermon' == get_post_type() ) : ?>
  <div class="sidebar sidebar-right right-sermons-nav">
    <h3 class="sidebar-title"><a href="<?php echo home_url("/sermons/"); ?>">Sermon Series</a></h3>
    <ul class="sidebar-page-listing">
    <?php
      global $wp_query, $post;

      if(is_single($post)){
        $post_id_to_check = $post->ID;
      }else{
        $post_id_to_check = -1; //seems like somewhat of a hack
      }
      $global_term = $wp_query->get_queried_object();        

      $taxonomy = 'sermon_series';
      $terms = get_terms($taxonomy);
      foreach ($terms as $term) {
        
        ?>
        <li class="page_item <?php echo ($global_term->slug == $term->slug ? "current_page_item" : ""); ?>">
          <a href="<?php echo get_term_link($term); ?>"><span class="active-box"></span><?php echo $term->name; ?></a>
          <?php
            if($global_term->slug == $term->slug || has_term($term->slug, $taxonomy, $post_id_to_check)) :
              ?>
              <ul class="sidebar-sub-page-listing">
                <?php 
                  $args = array(
                    'post_type' => 'ct_sermon',
                    'tax_query' => array(
                        array(
                          'taxonomy' => 'sermon_series', //different from post_type, obvious i know... sigh.
                          'terms' => $term->slug,
                          'field' => 'slug' //What column from the db you're using
                        )
                    ),
                  );
                  $posts = get_posts($args);
                  foreach($posts as $p) :
                ?>
                  <li class="page_item <?php echo ($p->ID == $post->ID ? "current_page_item" : ""); ?>">
                    <a href="<?php echo get_permalink($p); ?>"><span class="active-box"></span><?php echo get_the_title($p); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
              <?php
            endif;
          ?>
        </li>
        <?php
        
      }
    ?>
  </div>
<?php endif; ?>