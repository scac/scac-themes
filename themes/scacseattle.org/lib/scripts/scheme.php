<?php
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );

	$theme_options = get_option('ct_theme_options');

	$ct_main_color = ( $theme_options['main_color'] && $theme_options['main_color'] !== '#' ) ? esc_url( $theme_options['main_color'] ) : CHURCHTHEMES_OPTIONS_MAIN_COLOR;
	$ct_slider_controls_active = ( defined( 'CHURCHTHEMES_SLIDER_CONTROLS_ACTIVE' ) ) ? CHURCHTHEMES_SLIDER_CONTROLS_ACTIVE : $ct_main_color;
	$ct_logo = ( $theme_options['logo'] ) ? esc_url( $theme_options['logo'] ) : null;
	$ct_logo_width = ( is_numeric( $theme_options['logo_width'] ) ) ? intval( $theme_options['logo_width'] ) : CHURCHTHEMES_OPTIONS_LOGO_WIDTH;
	$ct_logo_height = ( is_numeric( $theme_options['logo_height'] ) ) ? intval( $theme_options['logo_height'] ) : CHURCHTHEMES_OPTIONS_LOGO_HEIGHT;
	$ct_logo_top_margin = ( is_numeric( $theme_options['logo_top_margin'] ) ) ? intval( $theme_options['logo_top_margin'] ) : CHURCHTHEMES_OPTIONS_LOGO_TOP_MARGIN;

	header('Content-type: text/css');
	header('Cache-control: must-revalidate');
?>
#header .logo {
	margin-top:<?php echo $ct_logo_top_margin; ?>px;
}

#header .logo a {
<?php if($ct_logo): ?>
	background:url(<?php echo $ct_logo; ?>) no-repeat;
<?php endif; ?>
	width:<?php echo $ct_logo_width; ?>px;
	height:<?php echo $ct_logo_height; ?>px;
}

a,
a:visited {
	color:<?php echo $ct_main_color; ?>;
}

h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover,
h1 a:visited:hover,
h2 a:visited:hover,
h3 a:visited:hover,
h4 a:visited:hover,
h5 a:visited:hover,
h6 a:visited:hover {
	color:<?php echo $ct_main_color; ?>;
}

::selection,
::-moz-selection {
	background:<?php echo $ct_main_color; ?>;
}

blockquote {
	border-left:3px solid <?php echo $ct_main_color; ?>;
}

.navbar ul li a:hover {
	color:<?php echo $ct_main_color; ?>;
}

.mask .slide_content h3.subtitle {
	color:<?php echo $ct_main_color; ?>;
}

.pag_box ol a:hover,
.pag_box ol a.flex-active {
	background:<?php echo $ct_slider_controls_active; ?>;
}

.list_locations li .link:hover {
	color:<?php echo $ct_main_color; ?>;
}

.list_widget li a:hover {
	color:<?php echo $ct_main_color; ?>;
}

.pagination li:hover,
.pagination li.active {
	background:<?php echo $ct_main_color; ?>;
}

.selectbox-wrapper ul li.selected,
.selectbox-wrapper ul li.current {
	background:<?php echo $ct_main_color; ?>;
}

.search-excerpt {
	color:<?php echo $ct_main_color; ?>;
}

.single-location small a {
	color:<?php echo $ct_main_color; ?> !important;
}


/* Events Manager Styles */

table.em-calendar td.eventful a,
table.em-calendar td.eventful-today a {
	color:<?php echo $ct_main_color; ?> !important;
}
.ui-state-hover {
	color:<?php echo $ct_main_color; ?> !important;
}
.ui-datepicker-today .ui-state-highlight {
	background:<?php echo $ct_main_color; ?> !important;
}


/* Reftagger Plugin Styles */

.lbsTooltipFooter a:hover {
	color:<?php echo $ct_main_color; ?>;
}
