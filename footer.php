<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eversight
 */

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="container">

				<div class='site-footer__logo'>
					<?php if ( get_theme_mod( 'eversight_footer_logo' ) ) : ?>
						<a
							href='<?php echo esc_url( home_url( '/' ) ); ?>'
							title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
							rel='home'>
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282.42 67.76">
                <defs>
                  <style>
                    .footer-logo-cls-1{fill:#30ca7d;}
                    .footer-logo-cls-2{fill:#fff;}
                  </style>
                </defs>
                <title>Eversight</title>
                <g id="Layer_1-2" data-name="Layer 1"><g id="Group-2"><circle id="Oval-4" class="footer-logo-cls-1" cx="49.14" cy="10.32" r="2.12"/><circle id="Oval-4-2" data-name="Oval-4" class="footer-logo-cls-1" cx="51.88" cy="15.63" r="1.86"/><circle id="Oval-4-3" data-name="Oval-4" class="footer-logo-cls-1" cx="53.56" cy="20.85" r="1.59"/><circle id="Oval-4-4" data-name="Oval-4" class="footer-logo-cls-1" cx="53.74" cy="25.9" r="1.59"/><circle id="Oval-4-5" data-name="Oval-4" class="footer-logo-cls-1" cx="53.12" cy="30.68" r="1.59"/><circle id="Oval-4-6" data-name="Oval-4" class="footer-logo-cls-1" cx="51.61" cy="34.4" r="1.42"/><circle id="Oval-4-7" data-name="Oval-4" class="footer-logo-cls-1" cx="49.49" cy="37.67" r="1.24"/><circle id="Oval-4-8" data-name="Oval-4" class="footer-logo-cls-1" cx="47.1" cy="40.15" r="1.06"/></g><g id="Group-2-2" data-name="Group-2"><circle id="Oval-4-9" data-name="Oval-4" class="footer-logo-cls-1" cx="59.06" cy="20.96" r="2.12"/><circle id="Oval-4-10" data-name="Oval-4" class="footer-logo-cls-1" cx="58.78" cy="26.93" r="1.86"/><circle id="Oval-4-11" data-name="Oval-4" class="footer-logo-cls-1" cx="57.58" cy="32.37" r="1.59"/><circle id="Oval-4-12" data-name="Oval-4" class="footer-logo-cls-1" cx="55.21" cy="36.83" r="1.59"/><circle id="Oval-4-13" data-name="Oval-4" class="footer-logo-cls-1" cx="52.33" cy="40.59" r="1.59"/><circle id="Oval-4-14" data-name="Oval-4" class="footer-logo-cls-1" cx="49.13" cy="43.13" r="1.42"/><circle id="Oval-4-15" data-name="Oval-4" class="footer-logo-cls-1" cx="45.69" cy="44.83" r="1.24"/><circle id="Oval-4-16" data-name="Oval-4" class="footer-logo-cls-1" cx="42.38" cy="45.78" r="1.06"/></g><g id="Group-2-3" data-name="Group-2"><circle id="Oval-4-17" data-name="Oval-4" class="footer-logo-cls-1" cx="62.25" cy="34.96" r="2.12"/><circle id="Oval-4-18" data-name="Oval-4" class="footer-logo-cls-1" cx="59.02" cy="39.99" r="1.86"/><circle id="Oval-4-19" data-name="Oval-4" class="footer-logo-cls-1" cx="55.21" cy="44.02" r="1.59"/><circle id="Oval-4-20" data-name="Oval-4" class="footer-logo-cls-1" cx="50.93" cy="46.7" r="1.59"/><circle id="Oval-4-21" data-name="Oval-4" class="footer-logo-cls-1" cx="46.6" cy="48.59" r="1.59"/><circle id="Oval-4-22" data-name="Oval-4" class="footer-logo-cls-1" cx="42.51" cy="49.11" r="1.42"/><circle id="Oval-4-23" data-name="Oval-4" class="footer-logo-cls-1" cx="38.73" cy="48.94" r="1.24"/><circle id="Oval-4-24" data-name="Oval-4" class="footer-logo-cls-1" cx="35.39" cy="48.11" r="1.06"/></g><g id="Group-2-4" data-name="Group-2"><circle id="Oval-4-25" data-name="Oval-4" class="footer-logo-cls-1" cx="57.75" cy="48.78" r="2.12"/><circle id="Oval-4-26" data-name="Oval-4" class="footer-logo-cls-1" cx="52.35" cy="51.52" r="1.86"/><circle id="Oval-4-27" data-name="Oval-4" class="footer-logo-cls-1" cx="47.13" cy="53.12" r="1.59"/><circle id="Oval-4-28" data-name="Oval-4" class="footer-logo-cls-1" cx="42.08" cy="53.38" r="1.59"/><circle id="Oval-4-29" data-name="Oval-4" class="footer-logo-cls-1" cx="37.3" cy="52.76" r="1.59"/><circle id="Oval-4-30" data-name="Oval-4" class="footer-logo-cls-1" cx="33.59" cy="51.26" r="1.42"/><circle id="Oval-4-31" data-name="Oval-4" class="footer-logo-cls-1" cx="30.4" cy="49.13" r="1.24"/><circle id="Oval-4-32" data-name="Oval-4" class="footer-logo-cls-1" cx="27.92" cy="46.74" r="1.06"/></g><g id="Group-2-5" data-name="Group-2"><circle id="Oval-4-33" data-name="Oval-4" class="footer-logo-cls-1" cx="47.12" cy="58.43" r="2.12"/><circle id="Oval-4-34" data-name="Oval-4" class="footer-logo-cls-1" cx="41.15" cy="58.16" r="1.86"/><circle id="Oval-4-35" data-name="Oval-4" class="footer-logo-cls-1" cx="35.83" cy="56.92" r="1.59"/><circle id="Oval-4-36" data-name="Oval-4" class="footer-logo-cls-1" cx="31.33" cy="54.63" r="1.59"/><circle id="Oval-4-37" data-name="Oval-4" class="footer-logo-cls-1" cx="27.49" cy="51.7" r="1.59"/><circle id="Oval-4-38" data-name="Oval-4" class="footer-logo-cls-1" cx="25.03" cy="48.54" r="1.42"/><circle id="Oval-4-39" data-name="Oval-4" class="footer-logo-cls-1" cx="23.25" cy="45.06" r="1.24"/><circle id="Oval-4-40" data-name="Oval-4" class="footer-logo-cls-1" cx="22.3" cy="41.75" r="1.06"/></g><g id="Group-2-6" data-name="Group-2"><circle id="Oval-4-41" data-name="Oval-4" class="footer-logo-cls-1" cx="32.98" cy="61.75" r="2.12"/><circle id="Oval-4-42" data-name="Oval-4" class="footer-logo-cls-1" cx="28.03" cy="58.48" r="1.86"/><circle id="Oval-4-43" data-name="Oval-4" class="footer-logo-cls-1" cx="23.92" cy="54.72" r="1.59"/><circle id="Oval-4-44" data-name="Oval-4" class="footer-logo-cls-1" cx="21.16" cy="50.48" r="1.59"/><circle id="Oval-4-45" data-name="Oval-4" class="footer-logo-cls-1" cx="19.31" cy="46.03" r="1.59"/><circle id="Oval-4-46" data-name="Oval-4" class="footer-logo-cls-1" cx="18.83" cy="42.01" r="1.42"/><circle id="Oval-4-47" data-name="Oval-4" class="footer-logo-cls-1" cx="19" cy="38.24" r="1.24"/><circle id="Oval-4-48" data-name="Oval-4" class="footer-logo-cls-1" cx="19.83" cy="34.89" r="1.06"/></g><g id="Group-2-7" data-name="Group-2"><circle id="Oval-4-49" data-name="Oval-4" class="footer-logo-cls-1" cx="19.28" cy="57.59" r="2.12"/><circle id="Oval-4-50" data-name="Oval-4" class="footer-logo-cls-1" cx="16.54" cy="52.28" r="1.86"/><circle id="Oval-4-51" data-name="Oval-4" class="footer-logo-cls-1" cx="14.94" cy="46.97" r="1.59"/><circle id="Oval-4-52" data-name="Oval-4" class="footer-logo-cls-1" cx="14.68" cy="41.92" r="1.59"/><circle id="Oval-4-53" data-name="Oval-4" class="footer-logo-cls-1" cx="15.3" cy="37.23" r="1.59"/><circle id="Oval-4-54" data-name="Oval-4" class="footer-logo-cls-1" cx="16.8" cy="33.42" r="1.42"/><circle id="Oval-4-55" data-name="Oval-4" class="footer-logo-cls-1" cx="18.93" cy="30.24" r="1.24"/><circle id="Oval-4-56" data-name="Oval-4" class="footer-logo-cls-1" cx="21.32" cy="27.76" r="1.06"/></g><g id="Group-2-8" data-name="Group-2"><circle id="Oval-4-57" data-name="Oval-4" class="footer-logo-cls-1" cx="9.35" cy="47.15" r="2.12"/><circle id="Oval-4-58" data-name="Oval-4" class="footer-logo-cls-1" cx="9.63" cy="41.18" r="1.86"/><circle id="Oval-4-59" data-name="Oval-4" class="footer-logo-cls-1" cx="10.9" cy="35.79" r="1.59"/><circle id="Oval-4-60" data-name="Oval-4" class="footer-logo-cls-1" cx="13.19" cy="31.28" r="1.59"/><circle id="Oval-4-61" data-name="Oval-4" class="footer-logo-cls-1" cx="16.08" cy="27.53" r="1.59"/><circle id="Oval-4-62" data-name="Oval-4" class="footer-logo-cls-1" cx="19.28" cy="24.98" r="1.42"/><circle id="Oval-4-63" data-name="Oval-4" class="footer-logo-cls-1" cx="22.72" cy="23.29" r="1.24"/><circle id="Oval-4-64" data-name="Oval-4" class="footer-logo-cls-1" cx="26.57" cy="21.93" r="1.06"/></g><g id="Group-2-9" data-name="Group-2"><circle id="Oval-4-65" data-name="Oval-4" class="footer-logo-cls-1" cx="6.33" cy="32.72" r="2.12"/><circle id="Oval-4-66" data-name="Oval-4" class="footer-logo-cls-1" cx="9.55" cy="27.69" r="1.86"/><circle id="Oval-4-67" data-name="Oval-4" class="footer-logo-cls-1" cx="13.28" cy="23.7" r="1.59"/><circle id="Oval-4-68" data-name="Oval-4" class="footer-logo-cls-1" cx="17.52" cy="20.94" r="1.59"/><circle id="Oval-4-69" data-name="Oval-4" class="footer-logo-cls-1" cx="21.97" cy="19.09" r="1.59"/><circle id="Oval-4-70" data-name="Oval-4" class="footer-logo-cls-1" cx="25.94" cy="18.54" r="1.42"/><circle id="Oval-4-71" data-name="Oval-4" class="footer-logo-cls-1" cx="29.84" cy="18.74" r="1.24"/><circle id="Oval-4-72" data-name="Oval-4" class="footer-logo-cls-1" cx="33.18" cy="19.57" r="1.06"/></g><g id="Group-2-10" data-name="Group-2"><circle id="Oval-4-73" data-name="Oval-4" class="footer-logo-cls-1" cx="10.82" cy="18.85" r="2.12"/><circle id="Oval-4-74" data-name="Oval-4" class="footer-logo-cls-1" cx="16.13" cy="16.2" r="1.86"/><circle id="Oval-4-75" data-name="Oval-4" class="footer-logo-cls-1" cx="21.44" cy="14.51" r="1.59"/><circle id="Oval-4-76" data-name="Oval-4" class="footer-logo-cls-1" cx="26.4" cy="14.34" r="1.59"/><circle id="Oval-4-77" data-name="Oval-4" class="footer-logo-cls-1" cx="31.18" cy="14.96" r="1.59"/><circle id="Oval-4-78" data-name="Oval-4" class="footer-logo-cls-1" cx="34.98" cy="16.46" r="1.42"/><circle id="Oval-4-79" data-name="Oval-4" class="footer-logo-cls-1" cx="38.17" cy="18.5" r="1.24"/><circle id="Oval-4-80" data-name="Oval-4" class="footer-logo-cls-1" cx="40.65" cy="20.89" r="1.06"/></g><g id="Group-2-11" data-name="Group-2"><circle id="Oval-4-81" data-name="Oval-4" class="footer-logo-cls-1" cx="21.33" cy="9.1" r="2.12"/><circle id="Oval-4-82" data-name="Oval-4" class="footer-logo-cls-1" cx="27.3" cy="9.37" r="1.86"/><circle id="Oval-4-83" data-name="Oval-4" class="footer-logo-cls-1" cx="32.7" cy="10.65" r="1.59"/><circle id="Oval-4-84" data-name="Oval-4" class="footer-logo-cls-1" cx="37.16" cy="13.02" r="1.59"/><circle id="Oval-4-85" data-name="Oval-4" class="footer-logo-cls-1" cx="40.95" cy="15.83" r="1.59"/><circle id="Oval-4-86" data-name="Oval-4" class="footer-logo-cls-1" cx="43.38" cy="19.07" r="1.42"/><circle id="Oval-4-87" data-name="Oval-4" class="footer-logo-cls-1" cx="45.19" cy="22.47" r="1.24"/><circle id="Oval-4-88" data-name="Oval-4" class="footer-logo-cls-1" cx="46.15" cy="25.78" r="1.06"/></g><g id="Group-2-12" data-name="Group-2"><circle id="Oval-4-89" data-name="Oval-4" class="footer-logo-cls-1" cx="35.5" cy="6.01" r="2.12"/><circle id="Oval-4-90" data-name="Oval-4" class="footer-logo-cls-1" cx="40.53" cy="9.24" r="1.86"/><circle id="Oval-4-91" data-name="Oval-4" class="footer-logo-cls-1" cx="44.64" cy="13" r="1.59"/><circle id="Oval-4-92" data-name="Oval-4" class="footer-logo-cls-1" cx="47.32" cy="17.28" r="1.59"/><circle id="Oval-4-93" data-name="Oval-4" class="footer-logo-cls-1" cx="49.13" cy="21.65" r="1.59"/><circle id="Oval-4-94" data-name="Oval-4" class="footer-logo-cls-1" cx="49.73" cy="25.7" r="1.42"/><circle id="Oval-4-95" data-name="Oval-4" class="footer-logo-cls-1" cx="49.48" cy="29.53" r="1.24"/><circle id="Oval-4-96" data-name="Oval-4" class="footer-logo-cls-1" cx="48.73" cy="32.82" r="1.06"/></g><path class="footer-logo-cls-2" d="M91.15,40.28v2a.41.41,0,0,1-.44.44H80.18a.42.42,0,0,1-.45-.44V26.56a.42.42,0,0,1,.45-.44H90.62a.42.42,0,0,1,.45.44v2a.42.42,0,0,1-.45.44h-7.7v3.89h6.73a.42.42,0,0,1,.44.45v2a.41.41,0,0,1-.44.44H82.92v4.08h7.79C91,39.84,91.15,40,91.15,40.28Z"/><path class="footer-logo-cls-2" d="M114.08,26.65l-6.55,15.76a.48.48,0,0,1-.53.35h-1.33a.49.49,0,0,1-.53-.35L98.59,26.65c-.09-.27,0-.53.35-.53h2.75a.49.49,0,0,1,.53.35l3.28,8.41,1.06,3.37,1.06-3.37,3.1-8.41a.48.48,0,0,1,.53-.35h2.66C114.08,26.12,114.26,26.29,114.08,26.65Z"/><path class="footer-logo-cls-2" d="M132.94,40.28v2a.42.42,0,0,1-.44.44H122a.42.42,0,0,1-.44-.44V26.56a.41.41,0,0,1,.44-.44h10.45a.41.41,0,0,1,.44.44v2a.42.42,0,0,1-.44.44h-7.7v3.89h6.72a.43.43,0,0,1,.45.45v2a.42.42,0,0,1-.45.44h-6.72v4.08h7.79C132.76,39.84,132.94,40,132.94,40.28Z"/><path class="footer-logo-cls-2" d="M154.72,42.76h-2.84a.64.64,0,0,1-.53-.27l-3-4.42h-2.92v4.34a.42.42,0,0,1-.44.44h-2.39a.41.41,0,0,1-.44-.44V26.65a.41.41,0,0,1,.44-.44h5.49c4.07,0,6.73,2.3,6.73,6a5.44,5.44,0,0,1-3.28,5.13l3.45,5C155.25,42.49,155.07,42.76,154.72,42.76Zm-9.21-7.61h2.39c2.21,0,3.63-1.15,3.63-3S150,29,147.9,29h-2.39Z"/><path class="footer-logo-cls-2" d="M163,41.17a.53.53,0,0,1-.09-.71l1.15-1.77c.09-.27.35-.27.62-.09a7.92,7.92,0,0,0,4.52,1.5c1.5,0,2.56-.62,2.56-1.94s-1-1.95-3.45-2.57c-2.83-.8-5-1.86-5-4.78s2.39-4.87,5.94-4.87a8.89,8.89,0,0,1,5.22,1.42.39.39,0,0,1,.09.62l-1,1.68a.47.47,0,0,1-.62.17,7.13,7.13,0,0,0-3.71-1.06c-1.51,0-2.66.53-2.66,1.77s1.06,1.6,3.36,2.3c2.84.8,5,1.95,5,5.14S172.6,43,169.06,43A10.35,10.35,0,0,1,163,41.17Z"/><path class="footer-logo-cls-2" d="M183.22,42.32V26.56a.42.42,0,0,1,.45-.44h2.39a.41.41,0,0,1,.44.44V42.32a.42.42,0,0,1-.44.44h-2.39A.42.42,0,0,1,183.22,42.32Z"/><path class="footer-logo-cls-2" d="M209.07,34.88v5.76a.55.55,0,0,1-.26.53,9.85,9.85,0,0,1-6.11,1.77,8.47,8.47,0,0,1-8.85-8.5c0-4.78,3.71-8.5,8.94-8.5a10.35,10.35,0,0,1,5.31,1.33c.26.17.26.35.18.62l-1,1.86c-.17.26-.35.26-.62.17A7.8,7.8,0,0,0,203,29a5.42,5.42,0,0,0-5.75,5.49,5.52,5.52,0,0,0,5.67,5.57,7.52,7.52,0,0,0,3.09-.62V35a.42.42,0,0,1,.45-.44h2.21C208.9,34.44,209.07,34.62,209.07,34.88Z"/><path class="footer-logo-cls-2" d="M232.44,26.56V42.32a.41.41,0,0,1-.44.44h-2.39a.42.42,0,0,1-.44-.44V35.85h-8.5v6.47a.42.42,0,0,1-.44.44h-2.39a.42.42,0,0,1-.45-.44V26.56a.42.42,0,0,1,.45-.44h2.39a.41.41,0,0,1,.44.44V33h8.5V26.56a.41.41,0,0,1,.44-.44H232A.41.41,0,0,1,232.44,26.56Z"/><path class="footer-logo-cls-2" d="M254.22,26.56v2a.41.41,0,0,1-.44.44h-5.05V42.32a.41.41,0,0,1-.44.44H245.9a.41.41,0,0,1-.44-.44V29h-5.14a.42.42,0,0,1-.44-.44v-2a.41.41,0,0,1,.44-.44h13.46A.41.41,0,0,1,254.22,26.56Z"/></g>
              </svg>
						</a>
					<?php endif; ?>
				</div>

				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer-menu',
							'menu_class' => 'site-footer__navigation__list',
							'container' => 'nav',
							'container_class' => 'site-footer__navigation',
							'container_id' => 'site-footer-navigation',
							'theme_location' => 'footer-menu'
						)
					); ?>
    </div>

    <div class="container">
      <div class="row d-flex">
      	<div class="col-md justify-content-center">
      		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 495.51 84.49"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#b90c0c;}</style></defs><title>Asset 8</title><g id="Layer_2" data-name="Layer 2"><g id="Footer"><path class="cls-1" d="M10,40H4.66L3.31,43.69H5.17v1.48H0V43.69H1.59L6.72,30.34H9L13.8,43.69h2v1.48H8.94V43.69h2.33ZM5.15,38.7H9.54l-2.08-6H7.37Z"/><path class="cls-1" d="M23.28,43.69h2.27V31.91H23.28V30.43h6.09l3.75,10.91h.06L37,30.43h6v1.48H40.6V43.69H43v1.48H36.32V43.69h2V32.09h-.2L33.36,45.17H32.2L27.4,32.09h-.2v11.6h2.11v1.48h-6Z"/><path class="cls-1" d="M52.26,43.69h2.48V31.91H52.26V30.43h13v4.8H64.21c-.8-2.65-1-3.32-2.75-3.32H57.05V37h1.54c1.66,0,1.86-.22,2.29-2.26h1.18v5.87H60.88c-.38-2.13-.63-2.35-2.29-2.35H57.05v5.46h4.32c2,0,2.22-.69,3.05-3.76h1.07v5.24H52.26Z"/><path class="cls-1" d="M81,43.69h2.42v1.48H76.23V43.69h2.49V31.91H76.23V30.43h7.21c4.5,0,5.71,2,5.71,3.83,0,1.53-.89,3.12-3.74,3.59v.2c2.29.49,3,1.61,3.07,3.16l.14,1.63c.06.74.26,1,.67,1s.62-.29,1-.94l1,.47a2.72,2.72,0,0,1-2.51,2,2.4,2.4,0,0,1-2.62-2.65l0-1.79c0-1.52-.38-2.3-2.5-2.3H81Zm2.38-6.36c2.39,0,3.11-1.07,3.11-2.89,0-1.61-.72-2.53-2.84-2.53H81v5.42Z"/><path class="cls-1" d="M101.3,43.69h2.49V31.91H101.3V30.43h7.28v1.48h-2.49V43.69h2.49v1.48H101.3Z"/><path class="cls-1" d="M118.56,37.76c0-4.17,3.18-7.68,7-7.68a5.34,5.34,0,0,1,4.1,1.72l.4-1.66h1.48v5.78h-1.34c-1-2.66-2.53-4.37-4.5-4.37-2.49,0-4.42,1.73-4.42,6.07,0,4,1.68,6.34,4.68,6.34,2.67,0,4.22-2.13,4.55-4.68h1.59c-.38,4-3,6.25-6.49,6.25C121.36,45.53,118.56,42.08,118.56,37.76Z"/><path class="cls-1" d="M151.26,40h-5.33l-1.35,3.69h1.86v1.48h-5.17V43.69h1.59L148,30.34h2.26l4.81,13.35h2v1.48h-6.9V43.69h2.33Zm-4.84-1.3h4.39l-2.09-6h-.08Z"/><path class="cls-1" d="M171.14,33.41h-.2V43.69h2.33v1.48H167V43.69h2.26V31.91H167V30.43h4.88l7.42,10.75h.2V31.91h-2.33V30.43h6.25v1.48h-2.26V45.53h-1.71Z"/><path class="cls-1" d="M313.33,40.28h1.34c1.64,3,2.67,4,4.75,4,1.75,0,2.8-.89,2.8-2.44,0-1.81-1.9-2.31-3.92-2.89-2.3-.65-4.77-1.43-4.77-4.45a4.43,4.43,0,0,1,4.64-4.28,4.9,4.9,0,0,1,3.63,1.57l.47-1.5h1.47v5.1H322.4c-1.37-2.91-2.66-3.78-4.34-3.78a2.14,2.14,0,0,0-2.33,2.24c0,2,2,2.44,4,3,2.26.55,4.66,1.25,4.66,4.23a4.72,4.72,0,0,1-5,4.61,5.42,5.42,0,0,1-4.09-1.61l-.54,1.54h-1.48Z"/><path class="cls-1" d="M334.33,38a7.46,7.46,0,0,1,7.21-7.72c4,0,7.21,3.2,7.21,7.72a7.44,7.44,0,0,1-7.21,7.73C337.53,45.68,334.33,42.46,334.33,38Zm11.74,0c0-3.91-1.59-6.24-4.53-6.24S337,34.06,337,38s1.59,6.25,4.52,6.25S346.07,41.87,346.07,38Z"/><path class="cls-1" d="M359.82,40.87V32.06h-2.15V30.59h6.65v1.47h-2.2v8.07c0,2.84,1.44,3.94,4.17,3.94A3.5,3.5,0,0,0,369,43c.76-.77.92-1.75.92-3.43V32.06h-2.31V30.59h6.07v1.47h-2.1v8.81c0,2.53-2.08,4.81-5.94,4.81S359.82,43.69,359.82,40.87Z"/><path class="cls-1" d="M388.41,43.84h2.42v1.48h-7.21V43.84h2.49V32.06h-2.49V30.59h7.21c4.5,0,5.71,2,5.71,3.83,0,1.52-.89,3.11-3.74,3.58v.2c2.29.49,3,1.61,3.07,3.16L396,43c.07.74.27,1,.68,1s.62-.29,1-.94l1,.47a2.72,2.72,0,0,1-2.51,2,2.4,2.4,0,0,1-2.62-2.64l0-1.79c0-1.53-.38-2.31-2.5-2.31h-2.56Zm2.38-6.36c2.39,0,3.11-1.07,3.11-2.88,0-1.62-.72-2.54-2.84-2.54h-2.65v5.42Z"/><path class="cls-1" d="M407.82,37.91c0-4.17,3.18-7.68,7-7.68A5.32,5.32,0,0,1,418.88,32l.41-1.65h1.47v5.77h-1.34c-1-2.66-2.53-4.36-4.5-4.36-2.49,0-4.41,1.72-4.41,6.07,0,4,1.68,6.33,4.68,6.33,2.66,0,4.21-2.12,4.54-4.68h1.59c-.38,4-3,6.25-6.49,6.25C410.62,45.68,407.82,42.23,407.82,37.91Z"/><path class="cls-1" d="M434.23,43.84h2.49V32.06h-2.49V30.59h7.28v1.47H439V43.84h2.49v1.48h-7.28Z"/><path class="cls-1" d="M458,33.57h-.2V43.84h2.33v1.48h-6.25V43.84h2.27V32.06h-2.27V30.59h4.89l7.41,10.75h.2V32.06h-2.33V30.59h6.25v1.47h-2.26V45.68h-1.7Z"/><path class="cls-1" d="M487.4,45.68c-4.21,0-7-3.45-7-7.77,0-4.17,3.18-7.68,7-7.68a5.34,5.34,0,0,1,4.1,1.72l.4-1.65h1.48v5.77H492c-1-2.66-2.53-4.36-4.5-4.36-2.48,0-4.41,1.72-4.41,6.07,0,4,1.68,6.33,4.68,6.33a3.2,3.2,0,0,0,3-1.77,6,6,0,0,0,.47-2.39v-.56h-2.71V37.91h7v1.48h-2v6.09h-1.43l-.63-2A4.81,4.81,0,0,1,487.4,45.68Z"/><path class="cls-1" d="M279.1,6.63l-3.49-1.35a78.21,78.21,0,0,0-56.5,0L215.6,6.63a6.38,6.38,0,0,0-4.08,5.94V46.29c0,15,30,36,30,36a9.22,9.22,0,0,0,5.79,2.18h.09a9.24,9.24,0,0,0,5.8-2.18s30-21,30-36V12.57A6.35,6.35,0,0,0,279.1,6.63Zm-.55,8.84v6.76h-5.66V9.48l2.1.82A5.57,5.57,0,0,1,278.55,15.47Zm-11.34-8V22.23h-5.67V6c1.52.32,3,.69,4.53,1.12C266.44,7.26,266.83,7.39,267.21,7.51ZM255.86,5.07V22.23h-5.67V4.59c1.14,0,2.27.12,3.4.23C254.35,4.89,255.11,5,255.86,5.07Zm-11.35-.48V22.23h-5.66V5.07c.74-.09,1.5-.18,2.26-.25C242.24,4.71,243.38,4.64,244.51,4.59ZM233.17,6V22.23H227.5V7.49c.37-.12.76-.23,1.13-.33C230.13,6.71,231.64,6.34,233.17,6ZM219.69,10.3l2.13-.82V22.23h-5.67V15.47A5.55,5.55,0,0,1,219.69,10.3Zm29.84,32.48h0a3.87,3.87,0,0,0-2.36,2v0a2.61,2.61,0,0,1-3.53,1.1,2.65,2.65,0,0,1-1.07-1,.44.44,0,0,1,.25-.64l4.35-1.36v0l2.2-.67a.31.31,0,0,1,.4.21A.34.34,0,0,1,249.53,42.78Zm29,3.31c0,6.4-6.22,14-12.6,20.18-1.56-6.58-3.12-13.26-3.19-15a1.36,1.36,0,0,1,1.72-1.39l3.68,1-5.83-7.81a8.66,8.66,0,0,1-1.44-7.3,9.93,9.93,0,0,0,.08-5.18,25,25,0,0,1-6.51,6.23,5,5,0,0,0,.62-4.12s-1.47,3.18-6.91,5l-.41.12-.07,0c-2.24.68-4.88,1.19-7.43,1.77a1.81,1.81,0,0,1-.37.09c-3.9.91-7.56,2-9.15,3.85-2.72,3.6-2.64,9-2.45,11.44a.46.46,0,0,0,.85.17c3.1-4.52,9.11-4.52,9.11-4.52l1.85,3.14a7,7,0,0,1,.3,5.41l-3.87,13.93c-7.69-6.2-20.38-17.87-20.38-27V27.9h62.4Z"/><path class="cls-2" d="M228.63,7.16c-.37.1-.76.21-1.13.33V22.23h5.67V6C231.64,6.34,230.13,6.71,228.63,7.16Z"/><path class="cls-2" d="M219.69,10.3a5.55,5.55,0,0,0-3.54,5.17v6.76h5.67V9.48Z"/><path class="cls-2" d="M241.11,4.82c-.76.07-1.52.16-2.26.25V22.23h5.66V4.59C243.38,4.64,242.24,4.71,241.11,4.82Z"/><path class="cls-2" d="M266.07,7.16c-1.48-.43-3-.8-4.53-1.12V22.23h5.67V7.51C266.83,7.39,266.44,7.26,266.07,7.16Z"/><path class="cls-2" d="M275,10.3l-2.1-.82V22.23h5.66V15.47A5.57,5.57,0,0,0,275,10.3Z"/><path class="cls-2" d="M253.59,4.82c-1.13-.11-2.26-.18-3.4-.23V22.23h5.67V5.07C255.12,5,254.35,4.89,253.59,4.82Z"/></g></g></svg>
        	<div class="mt-3">
        		&copy; Copyright <?php echo date('Y'); ?> American Sourcing, Inc. All Rights Reserved.
        	</div>
    	</div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php
  if ( function_exists('get_field') ) {
    $featuredImage = get_field('hero_image');
    echo '
    <script type="text/javascript">
      var featuredImage = '.json_encode( $featuredImage ).';
    </script>';
  } else {
    echo '
    <script type="text/javascript">
      var featuredImage = null;
    </script>';
  }
?>

<?php if ( get_edit_post_link() ) : ?>
		<footer class="admin-context-links">
			<i class="fal fa-cog color-white mr-3"></i>
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'eversight-wp' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

	<div id="modal" class="modal">
		<div class="modal__overlay"></div>
		<div class="modal__contents">
			<div class="modal__contents__close">
				<i class="fal fa-times"></i>
			</div>
			<div id="modal-demo" class="modal__content__option">
				<?php echo do_shortcode('[gravityform id=2 title=true description=false ajax=true tabindex=49]'); ?>
			</div>
			<div id="modal-contact" class="modal__content__option">
				<?php echo do_shortcode('[gravityform id=3 title=true description=false ajax=true tabindex=49]'); ?>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/regular.js" integrity="sha384-C6h/8oKUfY6cVuGfFSu9uGIlFkaD1u1j+ByYGFTdFbOpHOHpw39lKxqEpRgLQg6A" crossorigin="anonymous"></script>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/light.js" integrity="sha384-06sraYAcw8BzUjsPn5z8Qi/QAA2/ZJl5GN3LGtRp7k+tZpu7kw+sRNXDDTU4RkOt" crossorigin="anonymous"></script>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/fontawesome.js" integrity="sha384-8QYlVHotqQzcAVhJny7MO9ZR0hASr6cRCpURV+EobTTAv5wftkn4i+U6UrMqoCis" crossorigin="anonymous"></script>
</body>
</html>
