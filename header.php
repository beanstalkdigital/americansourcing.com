<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eversight
 */
  $header = get_post(1027);
  $header = apply_filters( 'the_content', $header->post_content );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title(' - ', true,''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=11">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eversight-wp' ); ?></a>
<div id="page" class="site">
  <header id="masthead" class="site-header">
    <?php print $header; ?>
  </header><!-- #masthead -->

	<div id="content" class="site-content" style="">

