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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eversight-wp' ); ?></a>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-header__logo" style="height: 56px; width: 252px;">
				<a href="/">
					<svg viewBox="0 0 230.12 56.89" xmlns="http://www.w3.org/2000/svg"><g fill="#273954"><path d="m74.65 19.79h-4.77l-1.2 3.31h1.66v1.33h-4.63v-1.33h1.42l4.6-12h2l4.31 12h1.83v1.33h-6.16v-1.33h2.09zm-4.33-1.16h3.93l-1.86-5.39h-.08z"/><path d="m86.56 23.1h2v-10.54h-2v-1.33h5.44l3.36 9.77h.06l3.41-9.77h5.35v1.33h-2.12v10.54h2.12v1.33h-6v-1.33h1.82v-10.38h-.18l-4.24 11.71h-1l-4.33-11.71h-.18v10.38h1.93v1.33h-5.44z"/><path d="m112.5 23.1h2.22v-10.54h-2.22v-1.33h11.67v4.29h-1c-.72-2.36-.92-3-2.46-3h-3.95v4.57h1.38c1.48 0 1.66-.2 2-2h1.06v5.26h-1.06c-.35-1.91-.57-2.11-2-2.11h-1.38v4.89h3.87c1.76 0 2-.62 2.72-3.37h1v4.7h-11.85z"/><path d="m138.25 23.1h2.17v1.33h-6.42v-1.33h2.23v-10.54h-2.23v-1.33h6.46c4 0 5.11 1.77 5.11 3.43 0 1.36-.8 2.79-3.35 3.21v.18c2 .44 2.65 1.44 2.75 2.83l.12 1.46c.06.66.24.9.6.9s.56-.26.88-.84l.89.42a2.42 2.42 0 0 1 -2.25 1.83 2.13 2.13 0 0 1 -2.34-1.91 1.77 1.77 0 0 1 0-.46l-.05-1.6c0-1.37-.34-2.07-2.24-2.07h-2.29zm2.13-5.69c2.14 0 2.79-1 2.79-2.59 0-1.44-.65-2.26-2.55-2.26h-2.37v4.85z"/><path d="m156.41 23.1h2.23v-10.54h-2.23v-1.33h6.52v1.33h-2.23v10.54h2.23v1.33h-6.52z"/><path d="m171.86 17.79c0-3.73 2.85-6.88 6.23-6.88a4.78 4.78 0 0 1 3.67 1.55l.37-1.49h1.32v5.18h-1.2c-.91-2.39-2.27-3.92-4-3.92-2.22 0-4 1.55-4 5.44 0 3.59 1.51 5.67 4.2 5.67 2.38 0 3.77-1.9 4.07-4.19h1.48c-.34 3.55-2.73 5.6-5.82 5.6-3.82 0-6.32-3.09-6.32-6.96z"/><path d="m201.14 19.79h-4.78l-1.2 3.31h1.66v1.33h-4.63v-1.33h1.43l4.59-12h2l4.31 12h1.83v1.33h-6.18v-1.33h2.09zm-4.34-1.16h3.93l-1.86-5.39h-.08z"/><path d="m218.94 13.9h-.18v9.2h2.09v1.33h-5.6v-1.33h2v-10.54h-2v-1.33h4.37l6.64 9.63h.18v-8.3h-2.09v-1.33h5.65v1.33h-2v12.19h-1.6z"/><path d="m67 41.63h1.2c1.47 2.69 2.39 3.59 4.25 3.59 1.55 0 2.55-.8 2.55-2.22 0-1.62-1.7-2.06-3.51-2.58-2.06-.58-4.27-1.29-4.27-4a4 4 0 0 1 4.15-3.83 4.42 4.42 0 0 1 3.19 1.41l.44-1.3h1.3v4.57h-1.2c-1.22-2.61-2.39-3.39-3.89-3.39a1.92 1.92 0 0 0 -2.08 1.74 2.35 2.35 0 0 0 0 .26c0 1.78 1.77 2.18 3.61 2.66 2 .5 4.18 1.12 4.18 3.79a4.23 4.23 0 0 1 -4.3 4.14h-.16a4.9 4.9 0 0 1 -3.68-1.47l-.48 1.38h-1.3z"/><path d="m85.78 39.54a6.68 6.68 0 0 1 6.42-6.91c3.59 0 6.46 2.86 6.46 6.91a6.67 6.67 0 0 1 -6.41 6.92h-.05c-3.55 0-6.42-2.88-6.42-6.92zm10.51 0c0-3.5-1.42-5.59-4.05-5.59s-4 2.11-4 5.59 1.42 5.6 4 5.6 4.05-2.09 4.05-5.6z"/><path d="m108.6 42.15v-7.88h-1.93v-1.27h6v1.32h-2v7.18c0 2.5 1.33 3.5 3.73 3.5a3.16 3.16 0 0 0 2.39-.94c.68-.69.82-1.57.82-3.07v-6.72h-2.06v-1.27h5.45v1.32h-1.88v7.88c0 2.27-1.87 4.31-5.32 4.31s-5.2-1.83-5.2-4.36z"/><path d="m134.2 44.82h2.17v1.32h-6.46v-1.32h2.23v-10.55h-2.23v-1.27h6.46c4 0 5.11 1.76 5.11 3.43 0 1.36-.8 2.78-3.35 3.2v.19c2.05.44 2.65 1.44 2.75 2.82l.12 1.46c.06.66.24.9.6.9s.56-.26.88-.84l.89.42a2.42 2.42 0 0 1 -2.25 1.82 2.14 2.14 0 0 1 -2.35-1.91 2.8 2.8 0 0 1 0-.5l-.05-1.61c0-1.36-.34-2.06-2.24-2.06h-2.28zm2.13-5.7c2.14 0 2.79-1 2.79-2.58s-.65-2.27-2.55-2.27h-2.37v4.85z"/><path d="m151.58 39.5c0-3.73 2.85-6.87 6.24-6.87a4.8 4.8 0 0 1 3.67 1.54l.36-1.48h1.32v5.17h-1.17c-.91-2.39-2.27-3.91-4-3.91-2.23 0-3.95 1.54-3.95 5.43 0 3.59 1.5 5.68 4.19 5.68 2.38 0 3.77-1.91 4.07-4.19h1.42c-.34 3.55-2.73 5.59-5.81 5.59-3.83 0-6.34-3.09-6.34-6.96z"/><path d="m175.22 44.82h2.23v-10.55h-2.23v-1.27h6.52v1.32h-2.22v10.5h2.22v1.32h-6.52z"/><path d="m196.52 35.61h-.18v9.21h2.09v1.32h-5.6v-1.32h2v-10.55h-2v-1.27h4.37l6.64 9.62h.16v-8.3h-2.08v-1.32h5.59v1.32h-2v12.14h-1.51z"/><path d="m222.83 46.46c-3.77 0-6.27-3.09-6.27-7s2.84-6.87 6.23-6.87a4.8 4.8 0 0 1 3.67 1.54l.36-1.48h1.33v5.17h-1.21c-.9-2.39-2.26-3.91-4-3.91-2.22 0-3.95 1.54-3.95 5.43 0 3.59 1.51 5.68 4.19 5.68a2.85 2.85 0 0 0 2.69-1.59 5.59 5.59 0 0 0 .42-2.14v-.5h-2.42v-1.29h6.25v1.33h-1.76v5.45h-1.36l-.56-1.78a4.25 4.25 0 0 1 -3.61 1.96z"/><path d="m45.52 4.45-2.36-.9a52.65 52.65 0 0 0 -38 0l-2.36.9a4.33 4.33 0 0 0 -2.8 4v22.71c0 10.12 20.2 24.26 20.2 24.26a6.19 6.19 0 0 0 3.91 1.47h.06a6.14 6.14 0 0 0 3.9-1.47s20.19-14.14 20.19-24.26v-22.71a4.32 4.32 0 0 0 -2.74-4zm-.38 6v4.55h-3.81v-8.62l1.41.54a3.77 3.77 0 0 1 2.4 3.49zm-7.64-5.4v9.95h-3.81v-10.94c1 .21 2.05.46 3.05.75zm-7.64-1.65v11.6h-3.81v-11.92c.76 0 1.52.08 2.28.15zm-7.64-.32v11.92h-3.81v-11.6l1.52-.17c.76-.07 1.53-.11 2.29-.15zm-7.64 1v10.92h-3.82v-10c.25-.09.51-.16.76-.23 1-.3 2-.55 3.06-.76zm-9.08 2.84 1.44-.55v8.63h-3.82v-4.59a3.75 3.75 0 0 1 2.38-3.49zm20.1 21.88a2.61 2.61 0 0 0 -1.6 1.34 1.73 1.73 0 0 1 -2.35.73 1.84 1.84 0 0 1 -.72-.69.3.3 0 0 1 .1-.4h.07l2.9-.9 1.48-.45a.22.22 0 0 1 .27.13.23.23 0 0 1 -.15.24zm19.54 2.2c0 4.31-4.19 9.46-8.48 13.59-1.06-4.43-2.11-8.93-2.15-10.09a.91.91 0 0 1 .86-1h.29l2.49.67-3.93-5.17a5.84 5.84 0 0 1 -1-4.92 6.63 6.63 0 0 0 0-3.48 17 17 0 0 1 -4.38 4.19 3.37 3.37 0 0 0 .5-2.79s-1 2.14-4.66 3.33l-.27.08h-.05c-1.51.46-3.29.8-5 1.2a1.14 1.14 0 0 1 -.25.06c-2.62.6-5.11 1.33-6.11 2.58-1.82 2.42-1.78 6-1.64 7.7a.31.31 0 0 0 .35.27.34.34 0 0 0 .22-.15c2.09-3 6.14-3 6.14-3l1.24 2.11a4.74 4.74 0 0 1 .2 3.64l-2.6 9.39c-5.24-4.21-13.79-12.03-13.79-18.21v-12.22h42z"/></g><path d="m11.52 4.81c-.25.07-.51.14-.76.23v9.96h3.82v-10.95c-1.03.21-2.04.46-3.06.76z" fill="#b90c0c"/><path d="m5.5 6.92a3.75 3.75 0 0 0 -2.38 3.49v4.59h3.82v-8.63z" fill="#b90c0c"/><path d="m19.93 3.23-1.52.17v11.6h3.81v-11.92c-.76.04-1.53.08-2.29.15z" fill="#b90c0c"/><path d="m36.74 4.81c-1-.29-2-.54-3.05-.75v10.94h3.81v-9.95z" fill="#b90c0c"/><path d="m42.74 6.92-1.41-.54v8.62h3.81v-4.59a3.77 3.77 0 0 0 -2.4-3.49z" fill="#b90c0c"/><path d="m28.33 3.23c-.76-.07-1.52-.11-2.28-.15v11.92h3.81v-11.6z" fill="#b90c0c"/></svg>
				</a>
			</div>

			<?php
					wp_nav_menu(
						array(
							'menu' => 'main-menu',
							'menu_class' => 'site-header__navigation__list',
							'container' => 'nav',
							'container_class' => 'site-header__navigation desktop-up',
							'container_id' => 'site-navigation',
							'theme_location' => 'main-menu'
						)
					); ?>

			<div class="site-header__cta desktop-up" style="font-size: .7rem !important;">
          <?php
					wp_nav_menu(
						array(
							'menu' => 'header-cta-menu',
							'menu_class' => 'site-header__cta__list',
							'container' => '',
							'container_class' => '',
							'container_id' => 'site-header-cta',
							'theme_location' => 'header-cta-menu'
						)
					); ?>
			</div>

  </header><!-- #masthead -->

	<div id="content" class="site-content" style="grid-column: 0 !important;">
