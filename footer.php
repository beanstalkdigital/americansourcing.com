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

    <div class="site-sub-footer">
      <div class="container">
        Eversight &copy; Copyright <?php echo date('Y'); ?>
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
