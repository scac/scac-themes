<?php
// wp_deregister_script('jquery'); 
// wp_enqueue_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js'), false);

wp_enqueue_script('main', get_stylesheet_directory_uri() . "/js/main.js", array("jquery"));
wp_enqueue_script('flexslider', get_stylesheet_directory_uri() . "/js/jquery.flexslider-min.js", array("jquery"));

//CSS
wp_enqueue_style('webfonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700', null, null, null);
wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/flexslider.css', null, null, null);

?>