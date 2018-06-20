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
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/regular.js" integrity="sha384-C6h/8oKUfY6cVuGfFSu9uGIlFkaD1u1j+ByYGFTdFbOpHOHpw39lKxqEpRgLQg6A" crossorigin="anonymous"></script>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/light.js" integrity="sha384-06sraYAcw8BzUjsPn5z8Qi/QAA2/ZJl5GN3LGtRp7k+tZpu7kw+sRNXDDTU4RkOt" crossorigin="anonymous"></script>
<script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/fontawesome.js" integrity="sha384-8QYlVHotqQzcAVhJny7MO9ZR0hASr6cRCpURV+EobTTAv5wftkn4i+U6UrMqoCis" crossorigin="anonymous"></script>
</body>
</html>
