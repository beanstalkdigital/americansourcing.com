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
  <?php
    $footer = get_post(1029);
    print vcfilter('vcv:frontend:content', do_shortcode($footer->post_content));
  ?>
</footer>
</div><!-- #page -->
</div>

<?php wp_footer(); ?>
</body>
</html>
