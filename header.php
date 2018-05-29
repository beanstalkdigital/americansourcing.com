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
	<link rel="stylesheet" href="style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eversight-wp' ); ?></a>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-header__logo">
				<a href="/">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 230.09 56.9"><defs><style>.cls-1{fill:#273954;}.cls-2{fill:#b90c0c;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Navigation"><path class="cls-1" d="M74.65,19.8H69.88l-1.2,3.31h1.66v1.33H65.71V23.11h1.42l4.6-11.95h2l4.31,12h1.83v1.33H73.71V23.11H75.8Zm-4.33-1.16h3.93l-1.86-5.39h-.08Z"/><path class="cls-1" d="M86.56,23.11h2V12.57h-2V11.24H92L95.36,21h.06l3.41-9.77h5.35v1.33h-2.12V23.11h2.12v1.33h-6V23.11H100V12.73h-.18L95.58,24.44h-1L90.25,12.73h-.18V23.11H92v1.33H86.56Z"/><path class="cls-1" d="M112.5,23.11h2.22V12.57H112.5V11.24h11.67v4.29h-1c-.72-2.36-.92-3-2.46-3h-3.95V17.1h1.38c1.48,0,1.66-.2,2-2h1.06v5.26h-1.06c-.35-1.91-.57-2.11-2-2.11h-1.38v4.89h3.87c1.76,0,2-.62,2.72-3.37h1v4.7H112.5Z"/><path class="cls-1" d="M138.25,23.11h2.17v1.33H134V23.11h2.23V12.57H134V11.24h6.46c4,0,5.11,1.77,5.11,3.43,0,1.36-.8,2.79-3.35,3.21v.18c2,.44,2.65,1.44,2.75,2.83l.12,1.46c.06.66.24.9.6.9s.56-.26.88-.84l.89.42a2.43,2.43,0,0,1-2.25,1.83,2.14,2.14,0,0,1-2.34-2.37l-.05-1.6c0-1.37-.34-2.07-2.24-2.07h-2.29Zm2.13-5.69c2.14,0,2.79-1,2.79-2.59,0-1.44-.65-2.26-2.55-2.26h-2.37v4.85Z"/><path class="cls-1" d="M156.41,23.11h2.23V12.57h-2.23V11.24h6.52v1.33H160.7V23.11h2.23v1.33h-6.52Z"/><path class="cls-1" d="M171.86,17.8c0-3.73,2.85-6.88,6.23-6.88a4.74,4.74,0,0,1,3.67,1.55l.37-1.49h1.32v5.18h-1.2c-.91-2.39-2.27-3.92-4-3.92-2.22,0-4,1.55-4,5.44,0,3.59,1.51,5.67,4.2,5.67,2.38,0,3.77-1.9,4.07-4.19H184c-.34,3.55-2.73,5.6-5.82,5.6C174.36,24.76,171.86,21.67,171.86,17.8Z"/><path class="cls-1" d="M201.14,19.8h-4.78l-1.2,3.31h1.66v1.33h-4.63V23.11h1.43l4.59-11.95h2l4.31,12h1.83v1.33h-6.18V23.11h2.09Zm-4.34-1.16h3.93l-1.86-5.39h-.08Z"/><path class="cls-1" d="M218.94,13.91h-.18v9.2h2.09v1.33h-5.6V23.11h2V12.57h-2V11.24h4.37l6.64,9.63h.18v-8.3h-2.09V11.24H230v1.33h-2V24.76H226.4Z"/><path class="cls-1" d="M67,41.64h1.2c1.47,2.69,2.39,3.59,4.25,3.59,1.57,0,2.51-.8,2.51-2.19,0-1.62-1.7-2.06-3.51-2.58-2.06-.58-4.27-1.29-4.27-4a4,4,0,0,1,4.15-3.83A4.38,4.38,0,0,1,74.56,34L75,32.7H76.3v4.57H75.1c-1.22-2.61-2.39-3.39-3.89-3.39a1.92,1.92,0,0,0-2.09,2c0,1.78,1.77,2.18,3.61,2.66,2,.5,4.18,1.12,4.18,3.79a4.22,4.22,0,0,1-4.46,4.13A4.9,4.9,0,0,1,68.78,45l-.48,1.38H67Z"/><path class="cls-1" d="M85.78,39.55a6.67,6.67,0,0,1,6.46-6.91c3.59,0,6.46,2.86,6.46,6.91a6.67,6.67,0,0,1-6.46,6.92C88.65,46.47,85.78,43.59,85.78,39.55Zm10.51,0c0-3.5-1.42-5.59-4.05-5.59s-4,2.11-4,5.59,1.42,5.6,4,5.6S96.29,43.06,96.29,39.55Z"/><path class="cls-1" d="M108.6,42.16V34.28h-1.93V33h6v1.32h-2V41.5c0,2.55,1.29,3.53,3.73,3.53a3.15,3.15,0,0,0,2.39-.94c.68-.69.82-1.57.82-3.07V34.28h-2.06V33H121v1.32h-1.88v7.88c0,2.27-1.87,4.31-5.32,4.31S108.6,44.69,108.6,42.16Z"/><path class="cls-1" d="M134.2,44.83h2.17v1.32h-6.46V44.83h2.23V34.28h-2.23V33h6.46c4,0,5.11,1.76,5.11,3.43,0,1.36-.8,2.78-3.35,3.2v.19c2.05.44,2.65,1.44,2.75,2.82l.12,1.47c.06.66.24.9.6.9s.56-.26.88-.84l.89.42a2.43,2.43,0,0,1-2.25,1.82A2.14,2.14,0,0,1,138.78,44l-.05-1.61c0-1.36-.34-2.06-2.24-2.06H134.2Zm2.13-5.7c2.14,0,2.79-1,2.79-2.58,0-1.45-.65-2.27-2.55-2.27H134.2v4.85Z"/><path class="cls-1" d="M151.58,39.51c0-3.73,2.85-6.87,6.24-6.87a4.8,4.8,0,0,1,3.67,1.54l.36-1.48h1.32v5.17H162c-.91-2.39-2.27-3.91-4-3.91-2.23,0-3.95,1.54-3.95,5.43,0,3.59,1.5,5.68,4.19,5.68,2.38,0,3.77-1.91,4.07-4.19h1.42c-.34,3.55-2.73,5.59-5.81,5.59C154.09,46.47,151.58,43.38,151.58,39.51Z"/><path class="cls-1" d="M175.22,44.83h2.23V34.28h-2.23V33h6.52v1.32h-2.22V44.83h2.22v1.32h-6.52Z"/><path class="cls-1" d="M196.52,35.62h-.18v9.21h2.09v1.32h-5.6V44.83h2V34.28h-2V33h4.37l6.64,9.62H204v-8.3h-2.08V33h5.59v1.32h-2V46.47H204Z"/><path class="cls-1" d="M222.83,46.47c-3.77,0-6.27-3.09-6.27-7s2.84-6.87,6.23-6.87a4.77,4.77,0,0,1,3.67,1.54l.36-1.48h1.33v5.17h-1.21c-.9-2.39-2.26-3.91-4-3.91-2.22,0-3.95,1.54-3.95,5.43,0,3.59,1.51,5.68,4.19,5.68a2.86,2.86,0,0,0,2.69-1.59,5.52,5.52,0,0,0,.42-2.14v-.5h-2.42V39.51h6.25v1.33h-1.76v5.45H227l-.56-1.78A4.29,4.29,0,0,1,222.83,46.47Z"/><path class="cls-1" d="M45.52,4.46l-2.36-.9a52.58,52.58,0,0,0-38,0l-2.36.9A4.32,4.32,0,0,0,0,8.46V31.17C0,41.29,20.2,55.43,20.2,55.43a6.23,6.23,0,0,0,3.91,1.47h.06a6.21,6.21,0,0,0,3.9-1.47S48.26,41.29,48.26,31.17V8.46A4.31,4.31,0,0,0,45.52,4.46Zm-.38,6V15H41.33V6.39l1.41.54A3.76,3.76,0,0,1,45.14,10.42ZM37.5,5.06V15H33.69V4.07c1,.21,2.05.46,3.05.75ZM29.86,3.41V15H26.05V3.09c.76,0,1.52.08,2.28.15Zm-7.64-.32V15H18.41V3.41l1.52-.17C20.69,3.17,21.46,3.13,22.22,3.09Zm-7.64,1V15H10.76V5.05c.25-.09.51-.16.76-.23C12.54,4.52,13.55,4.27,14.58,4.06ZM5.5,6.93l1.44-.55V15H3.12V10.42A3.75,3.75,0,0,1,5.5,6.93ZM25.6,28.81h0A2.59,2.59,0,0,0,24,30.15h0A1.78,1.78,0,0,1,23,31a1.8,1.8,0,0,1-1.35-.12,1.84,1.84,0,0,1-.72-.69.29.29,0,0,1,.17-.43L24,28.86v0l1.48-.45a.21.21,0,0,1,.27.14A.23.23,0,0,1,25.6,28.81ZM45.14,31c0,4.31-4.19,9.46-8.48,13.59-1.06-4.43-2.11-8.93-2.15-10.09a.91.91,0,0,1,1.15-.93l2.49.67L34.22,29a5.84,5.84,0,0,1-1-4.92,6.66,6.66,0,0,0,0-3.48,17.14,17.14,0,0,1-4.38,4.19A3.35,3.35,0,0,0,29.34,22s-1,2.14-4.66,3.33l-.27.08h-.05c-1.51.46-3.29.8-5,1.2a1.83,1.83,0,0,1-.25.06c-2.62.61-5.08,1.32-6.16,2.59-1.82,2.42-1.78,6-1.64,7.7a.31.31,0,0,0,.57.12c2.09-3,6.14-3,6.14-3l1.24,2.11a4.76,4.76,0,0,1,.2,3.64l-2.6,9.39C11.67,45.05,3.12,37.19,3.12,31V18.79h42Z"/><path class="cls-2" d="M11.52,4.82c-.25.07-.51.14-.76.23V15h3.82V4.06C13.55,4.27,12.54,4.52,11.52,4.82Z"/><path class="cls-2" d="M5.5,6.93a3.75,3.75,0,0,0-2.38,3.49V15H6.94V6.38Z"/><path class="cls-2" d="M19.93,3.24l-1.52.17V15h3.81V3.09C21.46,3.13,20.69,3.17,19.93,3.24Z"/><path class="cls-2" d="M36.74,4.82c-1-.29-2-.54-3.05-.75V15H37.5V5.06Z"/><path class="cls-2" d="M42.74,6.93l-1.41-.54V15h3.81V10.42A3.76,3.76,0,0,0,42.74,6.93Z"/><path class="cls-2" d="M28.33,3.24c-.76-.07-1.52-.11-2.28-.15V15h3.81V3.41Z"/></g></g></svg>
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

			<div class="site-header__cta desktop-up">
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

      <div class="site-header__mobileNav tablet-down">
          <div class="site-header__mobileNav__trigger">
            <i class="-menuClosed fal fa-bars fa-2x"></i>
            <i class="-menuOpen fal fa-times fa-2x"></i>
          </div>
          <?php
            wp_nav_menu(
              array(
                'menu' => 'mobile-menu',
                'menu_class' => 'site-header__mobileNav__menu__items',
                'container' => 'div',
                'container_class' => 'site-header__mobileNav__menu',
                'container_id' => '',
                'theme_location' => 'mobile-menu'
              )
          ); ?>
      </div>
		</div>
  </header><!-- #masthead -->

	<div id="content" class="site-content">
