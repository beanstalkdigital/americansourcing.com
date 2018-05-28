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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eversight-wp' ); ?></a>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-header__logo">
				<a href="/" title="Eversight">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282.42 67.76"><defs><style>.header-logo-cls-1{fill:#30ca7d;}.header-logo-cls-2{fill:#5f6363;}</style></defs><title>Dark Logo Cropped</title><g id="Layer_1-2" data-name="Layer 1"><g id="Group-2"><circle id="Oval-4" class="header-logo-cls-1" cx="46.99" cy="10.57" r="2.1"/><circle id="Oval-4-2" data-name="Oval-4" class="header-logo-cls-1" cx="49.7" cy="15.82" r="1.84"/><circle id="Oval-4-3" data-name="Oval-4" class="header-logo-cls-1" cx="51.37" cy="20.99" r="1.58"/><circle id="Oval-4-4" data-name="Oval-4" class="header-logo-cls-1" cx="51.54" cy="25.98" r="1.58"/><circle id="Oval-4-5" data-name="Oval-4" class="header-logo-cls-1" cx="50.93" cy="30.71" r="1.58"/><circle id="Oval-4-6" data-name="Oval-4" class="header-logo-cls-1" cx="49.44" cy="34.39" r="1.4"/><circle id="Oval-4-7" data-name="Oval-4" class="header-logo-cls-1" cx="47.34" cy="37.63" r="1.23"/><circle id="Oval-4-8" data-name="Oval-4" class="header-logo-cls-1" cx="44.97" cy="40.08" r="1.05"/></g><g id="Group-2-2" data-name="Group-2"><circle id="Oval-4-9" data-name="Oval-4" class="header-logo-cls-1" cx="56.81" cy="21.1" r="2.1"/><circle id="Oval-4-10" data-name="Oval-4" class="header-logo-cls-1" cx="56.53" cy="27.01" r="1.84"/><circle id="Oval-4-11" data-name="Oval-4" class="header-logo-cls-1" cx="55.35" cy="32.39" r="1.58"/><circle id="Oval-4-12" data-name="Oval-4" class="header-logo-cls-1" cx="53" cy="36.8" r="1.58"/><circle id="Oval-4-13" data-name="Oval-4" class="header-logo-cls-1" cx="50.15" cy="40.51" r="1.58"/><circle id="Oval-4-14" data-name="Oval-4" class="header-logo-cls-1" cx="46.98" cy="43.03" r="1.4"/><circle id="Oval-4-15" data-name="Oval-4" class="header-logo-cls-1" cx="43.58" cy="44.71" r="1.23"/><circle id="Oval-4-16" data-name="Oval-4" class="header-logo-cls-1" cx="40.31" cy="45.65" r="1.05"/></g><g id="Group-2-3" data-name="Group-2"><circle id="Oval-4-17" data-name="Oval-4" class="header-logo-cls-1" cx="59.96" cy="34.94" r="2.1"/><circle id="Oval-4-18" data-name="Oval-4" class="header-logo-cls-1" cx="56.76" cy="39.92" r="1.84"/><circle id="Oval-4-19" data-name="Oval-4" class="header-logo-cls-1" cx="53" cy="43.92" r="1.58"/><circle id="Oval-4-20" data-name="Oval-4" class="header-logo-cls-1" cx="48.77" cy="46.56" r="1.58"/><circle id="Oval-4-21" data-name="Oval-4" class="header-logo-cls-1" cx="44.48" cy="48.43" r="1.58"/><circle id="Oval-4-22" data-name="Oval-4" class="header-logo-cls-1" cx="40.43" cy="48.95" r="1.4"/><circle id="Oval-4-23" data-name="Oval-4" class="header-logo-cls-1" cx="36.7" cy="48.78" r="1.23"/><circle id="Oval-4-24" data-name="Oval-4" class="header-logo-cls-1" cx="33.39" cy="47.96" r="1.05"/></g><g id="Group-2-4" data-name="Group-2"><circle id="Oval-4-25" data-name="Oval-4" class="header-logo-cls-1" cx="55.52" cy="48.62" r="2.1"/><circle id="Oval-4-26" data-name="Oval-4" class="header-logo-cls-1" cx="50.17" cy="51.34" r="1.84"/><circle id="Oval-4-27" data-name="Oval-4" class="header-logo-cls-1" cx="45" cy="52.91" r="1.58"/><circle id="Oval-4-28" data-name="Oval-4" class="header-logo-cls-1" cx="40.01" cy="53.18" r="1.58"/><circle id="Oval-4-29" data-name="Oval-4" class="header-logo-cls-1" cx="35.28" cy="52.56" r="1.58"/><circle id="Oval-4-30" data-name="Oval-4" class="header-logo-cls-1" cx="31.6" cy="51.07" r="1.4"/><circle id="Oval-4-31" data-name="Oval-4" class="header-logo-cls-1" cx="28.45" cy="48.97" r="1.23"/><circle id="Oval-4-32" data-name="Oval-4" class="header-logo-cls-1" cx="26" cy="46.61" r="1.05"/></g><g id="Group-2-5" data-name="Group-2"><circle id="Oval-4-33" data-name="Oval-4" class="header-logo-cls-1" cx="44.99" cy="58.17" r="2.1"/><circle id="Oval-4-34" data-name="Oval-4" class="header-logo-cls-1" cx="39.09" cy="57.9" r="1.84"/><circle id="Oval-4-35" data-name="Oval-4" class="header-logo-cls-1" cx="33.82" cy="56.68" r="1.58"/><circle id="Oval-4-36" data-name="Oval-4" class="header-logo-cls-1" cx="29.37" cy="54.41" r="1.58"/><circle id="Oval-4-37" data-name="Oval-4" class="header-logo-cls-1" cx="25.58" cy="51.51" r="1.58"/><circle id="Oval-4-38" data-name="Oval-4" class="header-logo-cls-1" cx="23.14" cy="48.39" r="1.4"/><circle id="Oval-4-39" data-name="Oval-4" class="header-logo-cls-1" cx="21.38" cy="44.95" r="1.23"/><circle id="Oval-4-40" data-name="Oval-4" class="header-logo-cls-1" cx="20.44" cy="41.67" r="1.05"/></g><g id="Group-2-6" data-name="Group-2"><circle id="Oval-4-41" data-name="Oval-4" class="header-logo-cls-1" cx="31.01" cy="61.45" r="2.1"/><circle id="Oval-4-42" data-name="Oval-4" class="header-logo-cls-1" cx="26.11" cy="58.22" r="1.84"/><circle id="Oval-4-43" data-name="Oval-4" class="header-logo-cls-1" cx="22.04" cy="54.5" r="1.58"/><circle id="Oval-4-44" data-name="Oval-4" class="header-logo-cls-1" cx="19.31" cy="50.3" r="1.58"/><circle id="Oval-4-45" data-name="Oval-4" class="header-logo-cls-1" cx="17.48" cy="45.9" r="1.58"/><circle id="Oval-4-46" data-name="Oval-4" class="header-logo-cls-1" cx="17.01" cy="41.93" r="1.4"/><circle id="Oval-4-47" data-name="Oval-4" class="header-logo-cls-1" cx="17.17" cy="38.19" r="1.23"/><circle id="Oval-4-48" data-name="Oval-4" class="header-logo-cls-1" cx="18" cy="34.88" r="1.05"/></g><g id="Group-2-7" data-name="Group-2"><circle id="Oval-4-49" data-name="Oval-4" class="header-logo-cls-1" cx="17.45" cy="57.34" r="2.1"/><circle id="Oval-4-50" data-name="Oval-4" class="header-logo-cls-1" cx="14.74" cy="52.08" r="1.84"/><circle id="Oval-4-51" data-name="Oval-4" class="header-logo-cls-1" cx="13.16" cy="46.83" r="1.58"/><circle id="Oval-4-52" data-name="Oval-4" class="header-logo-cls-1" cx="12.9" cy="41.84" r="1.58"/><circle id="Oval-4-53" data-name="Oval-4" class="header-logo-cls-1" cx="13.51" cy="37.19" r="1.58"/><circle id="Oval-4-54" data-name="Oval-4" class="header-logo-cls-1" cx="15" cy="33.43" r="1.4"/><circle id="Oval-4-55" data-name="Oval-4" class="header-logo-cls-1" cx="17.1" cy="30.27" r="1.23"/><circle id="Oval-4-56" data-name="Oval-4" class="header-logo-cls-1" cx="19.47" cy="27.82" r="1.05"/></g><g id="Group-2-8" data-name="Group-2"><circle id="Oval-4-57" data-name="Oval-4" class="header-logo-cls-1" cx="7.62" cy="47.01" r="2.1"/><circle id="Oval-4-58" data-name="Oval-4" class="header-logo-cls-1" cx="7.9" cy="41.1" r="1.84"/><circle id="Oval-4-59" data-name="Oval-4" class="header-logo-cls-1" cx="9.16" cy="35.76" r="1.58"/><circle id="Oval-4-60" data-name="Oval-4" class="header-logo-cls-1" cx="11.43" cy="31.31" r="1.58"/><circle id="Oval-4-61" data-name="Oval-4" class="header-logo-cls-1" cx="14.28" cy="27.6" r="1.58"/><circle id="Oval-4-62" data-name="Oval-4" class="header-logo-cls-1" cx="17.45" cy="25.08" r="1.4"/><circle id="Oval-4-63" data-name="Oval-4" class="header-logo-cls-1" cx="20.85" cy="23.4" r="1.23"/><circle id="Oval-4-64" data-name="Oval-4" class="header-logo-cls-1" cx="24.66" cy="22.06" r="1.05"/></g><g id="Group-2-9" data-name="Group-2"><circle id="Oval-4-65" data-name="Oval-4" class="header-logo-cls-1" cx="4.63" cy="32.73" r="2.1"/><circle id="Oval-4-66" data-name="Oval-4" class="header-logo-cls-1" cx="7.83" cy="27.76" r="1.84"/><circle id="Oval-4-67" data-name="Oval-4" class="header-logo-cls-1" cx="11.51" cy="23.81" r="1.58"/><circle id="Oval-4-68" data-name="Oval-4" class="header-logo-cls-1" cx="15.71" cy="21.08" r="1.58"/><circle id="Oval-4-69" data-name="Oval-4" class="header-logo-cls-1" cx="20.11" cy="19.25" r="1.58"/><circle id="Oval-4-70" data-name="Oval-4" class="header-logo-cls-1" cx="24.04" cy="18.7" r="1.4"/><circle id="Oval-4-71" data-name="Oval-4" class="header-logo-cls-1" cx="27.9" cy="18.9" r="1.23"/><circle id="Oval-4-72" data-name="Oval-4" class="header-logo-cls-1" cx="31.2" cy="19.72" r="1.05"/></g><g id="Group-2-10" data-name="Group-2"><circle id="Oval-4-73" data-name="Oval-4" class="header-logo-cls-1" cx="9.08" cy="19.01" r="2.1"/><circle id="Oval-4-74" data-name="Oval-4" class="header-logo-cls-1" cx="14.33" cy="16.38" r="1.84"/><circle id="Oval-4-75" data-name="Oval-4" class="header-logo-cls-1" cx="19.59" cy="14.72" r="1.58"/><circle id="Oval-4-76" data-name="Oval-4" class="header-logo-cls-1" cx="24.49" cy="14.54" r="1.58"/><circle id="Oval-4-77" data-name="Oval-4" class="header-logo-cls-1" cx="29.22" cy="15.16" r="1.58"/><circle id="Oval-4-78" data-name="Oval-4" class="header-logo-cls-1" cx="32.99" cy="16.65" r="1.4"/><circle id="Oval-4-79" data-name="Oval-4" class="header-logo-cls-1" cx="36.14" cy="18.66" r="1.23"/><circle id="Oval-4-80" data-name="Oval-4" class="header-logo-cls-1" cx="38.59" cy="21.03" r="1.05"/></g><g id="Group-2-11" data-name="Group-2"><circle id="Oval-4-81" data-name="Oval-4" class="header-logo-cls-1" cx="19.48" cy="9.36" r="2.1"/><circle id="Oval-4-82" data-name="Oval-4" class="header-logo-cls-1" cx="25.38" cy="9.64" r="1.84"/><circle id="Oval-4-83" data-name="Oval-4" class="header-logo-cls-1" cx="30.72" cy="10.9" r="1.58"/><circle id="Oval-4-84" data-name="Oval-4" class="header-logo-cls-1" cx="35.14" cy="13.24" r="1.58"/><circle id="Oval-4-85" data-name="Oval-4" class="header-logo-cls-1" cx="38.89" cy="16.02" r="1.58"/><circle id="Oval-4-86" data-name="Oval-4" class="header-logo-cls-1" cx="41.29" cy="19.22" r="1.4"/><circle id="Oval-4-87" data-name="Oval-4" class="header-logo-cls-1" cx="43.09" cy="22.59" r="1.23"/><circle id="Oval-4-88" data-name="Oval-4" class="header-logo-cls-1" cx="44.03" cy="25.86" r="1.05"/></g><g id="Group-2-12" data-name="Group-2"><circle id="Oval-4-89" data-name="Oval-4" class="header-logo-cls-1" cx="33.49" cy="6.31" r="2.1"/><circle id="Oval-4-90" data-name="Oval-4" class="header-logo-cls-1" cx="38.47" cy="9.5" r="1.84"/><circle id="Oval-4-91" data-name="Oval-4" class="header-logo-cls-1" cx="42.54" cy="13.22" r="1.58"/><circle id="Oval-4-92" data-name="Oval-4" class="header-logo-cls-1" cx="45.19" cy="17.46" r="1.58"/><circle id="Oval-4-93" data-name="Oval-4" class="header-logo-cls-1" cx="46.98" cy="21.78" r="1.58"/><circle id="Oval-4-94" data-name="Oval-4" class="header-logo-cls-1" cx="47.57" cy="25.79" r="1.4"/><circle id="Oval-4-95" data-name="Oval-4" class="header-logo-cls-1" cx="47.33" cy="29.57" r="1.23"/><circle id="Oval-4-96" data-name="Oval-4" class="header-logo-cls-1" cx="46.58" cy="32.83" r="1.05"/></g><path class="cheader-logo-ls-2" d="M88.56,40.21v2a.42.42,0,0,1-.44.44H77.7a.42.42,0,0,1-.44-.44V26.64a.41.41,0,0,1,.44-.44H88a.41.41,0,0,1,.44.44v2a.41.41,0,0,1-.44.44H80.41v3.85h6.66a.42.42,0,0,1,.44.44v2a.41.41,0,0,1-.44.43H80.41v4h7.71A.33.33,0,0,1,88.56,40.21Z"/><path class="cheader-logo-ls-2" d="M111.24,26.72l-6.48,15.6a.48.48,0,0,1-.52.35h-1.32a.48.48,0,0,1-.52-.35l-6.48-15.6c-.09-.26,0-.52.35-.52H99a.49.49,0,0,1,.53.35l3.24,8.32,1,3.33,1-3.33,3.07-8.32a.47.47,0,0,1,.52-.35h2.63C111.24,26.2,111.42,26.37,111.24,26.72Z"/><path class="cheader-logo-ls-2" d="M129.9,40.21v2a.42.42,0,0,1-.44.44H119a.42.42,0,0,1-.44-.44V26.64a.41.41,0,0,1,.44-.44h10.33a.41.41,0,0,1,.44.44v2a.41.41,0,0,1-.44.44h-7.62v3.85h6.66a.42.42,0,0,1,.44.44v2a.41.41,0,0,1-.44.43h-6.66v4h7.71A.33.33,0,0,1,129.9,40.21Z"/><path class="cheader-logo-ls-2" d="M151.45,42.67h-2.81a.61.61,0,0,1-.52-.27l-3-4.38h-2.89v4.3a.41.41,0,0,1-.44.43h-2.36a.41.41,0,0,1-.44-.43V26.72a.41.41,0,0,1,.44-.43h5.43c4,0,6.65,2.27,6.65,6a5.38,5.38,0,0,1-3.24,5.08l3.42,4.91C152,42.4,151.8,42.67,151.45,42.67Zm-9.11-7.54h2.36c2.19,0,3.59-1.14,3.59-3s-1.49-3.07-3.59-3.07h-2.36Z"/><path class="cheader-logo-ls-2" d="M159.68,41.09a.53.53,0,0,1-.09-.7l1.14-1.75c.09-.27.35-.27.61-.09A7.83,7.83,0,0,0,165.81,40c1.49,0,2.54-.62,2.54-1.93s-1-1.93-3.42-2.54c-2.8-.79-5-1.84-5-4.73S162.31,26,165.81,26A8.82,8.82,0,0,1,171,27.43a.37.37,0,0,1,.08.61l-1,1.66a.45.45,0,0,1-.61.18,6.93,6.93,0,0,0-3.68-1.05c-1.49,0-2.63.52-2.63,1.75s1,1.58,3.33,2.28c2.8.78,4.9,1.92,4.9,5.08s-2.27,5-5.78,5A10.24,10.24,0,0,1,159.68,41.09Z"/><path class="cheader-logo-ls-2" d="M179.65,42.23V26.64a.41.41,0,0,1,.44-.44h2.36a.41.41,0,0,1,.44.44V42.23a.42.42,0,0,1-.44.44h-2.36A.41.41,0,0,1,179.65,42.23Z"/><path class="cheader-logo-ls-2" d="M205.22,34.87v5.69a.52.52,0,0,1-.26.53,9.75,9.75,0,0,1-6,1.75,8.39,8.39,0,0,1-8.76-8.41c0-4.73,3.68-8.41,8.84-8.41a10.17,10.17,0,0,1,5.26,1.32c.26.17.26.35.17.61l-1,1.84c-.17.26-.35.26-.61.18a7.71,7.71,0,0,0-3.68-.88,5.36,5.36,0,0,0-5.69,5.43,5.46,5.46,0,0,0,5.6,5.52,7.46,7.46,0,0,0,3.07-.62V35a.41.41,0,0,1,.44-.44h2.18C205.05,34.43,205.22,34.61,205.22,34.87Z"/><path class="cheader-logo-ls-2" d="M228.35,26.64V42.23a.42.42,0,0,1-.44.44h-2.37a.42.42,0,0,1-.44-.44v-6.4h-8.4v6.4a.42.42,0,0,1-.44.44h-2.37a.41.41,0,0,1-.43-.44V26.64a.41.41,0,0,1,.43-.44h2.37a.41.41,0,0,1,.44.44V33h8.4V26.64a.41.41,0,0,1,.44-.44h2.37A.41.41,0,0,1,228.35,26.64Z"/><path class="cheader-logo-ls-2" d="M249.89,26.64v2a.41.41,0,0,1-.44.44h-5V42.23a.41.41,0,0,1-.44.44h-2.36a.42.42,0,0,1-.44-.44V29.09h-5.08a.42.42,0,0,1-.44-.44v-2a.41.41,0,0,1,.44-.44h13.31A.41.41,0,0,1,249.89,26.64Z"/></g></svg>
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
