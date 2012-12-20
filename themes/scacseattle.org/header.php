<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 * @since _s 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );

  ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style-ie7.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
  <?php do_action( 'before' ); ?>
  <header id="masthead" class="site-header" role="banner">
    <div class="clearfix row1">
      <hgroup class="site-name">
        <?php if(is_home() || is_page('Homepage')) : ?>
          <h1 class="site-title">
        <?php else : ?>
          <h2 class="site-title">
        <?php endif; ?>

        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><div class="site-name-top">Seattle Chinese</div><div class="site-name-bottom">Alliance Church</div></a></h1>
        
        <?php if(is_home() || is_page('Homepage')) : ?>
          </h1>
        <?php else : ?>
          </h2>
        <?php endif; ?>
      </hgroup>

      <div class="site-search">
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
          <div><input type="text" size="25" value="Search" name="s" id="s" ></input>
          <button type="submit" id="searchsubmit" value="Search" class="btn" ></button>
          </div>
        </form>
      </div>
      
      <div class="csl-container">
        <a href="http://chinese.scacseattle.org/" class="chinese-service-link">中國服務</a>
      </div>
    </div>

    <?php get_template_part("navbar"); ?>

  </header><!-- #masthead .site-header -->

  <div id="main" class="site-main clearfix">