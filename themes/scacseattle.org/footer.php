<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

  </div><!-- #main .site-main -->

  <footer id="colophon" class="site-footer clearfix" role="contentinfo">

    <div class="links-container clearfix">
      <ul>
        <li class="listing-headers">
          <a href="<?php echo home_url("/church/our-vision/"); ?>" class="footer-main-link">Church</a>
          <ul class="footer-listings">
            <?php 
              $page = get_page_by_title('church');
              wp_list_pages(array(
                'title_li'    => '',
                'child_of'    => $page->ID,
              ));
            ?>
          </ul>
        </li>
        <li class="listing-headers">
          <a href="<?php echo home_url("/visit/"); ?>" class="footer-main-link">Visit</a>
        </li>
        <li class="listing-headers">
          <a href="<?php echo home_url("/ministries/"); ?>" class="footer-main-link">Ministries</a>
          <ul class="footer-listings">
            <?php 
              $page = get_page_by_title('ministries');
              wp_list_pages(array(
                'title_li'    => '',
                'child_of'    => $page->ID,
              ));
            ?>
          </ul>
        </li>
        <li class="listing-headers">
          <a href="<?php echo home_url("/sermons/"); ?>" class="footer-main-link">Sermons</a>
          <ul class="footer-listings">
            <?php 
              $taxonomy = 'sermon_series';
              $terms = get_terms($taxonomy);
              for($i=0;$i < 5; $i++) :
                $term = $terms[$i];
            ?>
                <li class="page_item <?php echo ($global_term->slug == $term->slug ? "current_page_item" : ""); ?>">
                  <a href="<?php echo get_term_link($term); ?>"><span class="active-box"></span><?php echo $term->name; ?></a>
                </li>
            <?php
              endfor;
            ?>
          </ul>
        </li>
      </ul>

    </div>

    <p class="copyright">© 2012 Seattle Chinese Alliance Church.</p>

    <div class="social-btns">
      <a href="https://twitter.com/scac_em" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bird_twitter.png" width="47px" height="47px" border="0"></a>
      <a href="http://www.facebook.com/groups/2209756221/" target="_blank" class="fb-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb_logo.png" width="30px" height="31px" border="0"></a>
    </div>
  </footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
