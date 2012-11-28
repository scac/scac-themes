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

    <div class="links-container">
      <ul>
        <li><a href="<?php echo home_url("/"); ?>" class="footer-main-link">Home</a></li>
        <li><a href="<?php echo home_url("/"); ?>/visit/" class="footer-main-link">Visit</a></li>
    </div>

    <p class="copyright">© 2012 Seattle Chinese Alliance Church.</p>

    <div class="social-btns">
      <a href="https://twitter.com/scac_em" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.jpg" width="30px" height="31px" border="0"></a>
      <a href="http://www.facebook.com/groups/2209756221/" target="_blank" class="fb-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook_icon.jpg" width="30px" height="31px" border="0"></a>
    </div>
  </footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
