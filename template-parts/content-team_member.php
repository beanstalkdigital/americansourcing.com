<?php
/**
 * Template part for displaying team members
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eversight
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="team__member">
    <div class="container">
      <div class="team__member__left">
        <?php echo the_post_thumbnail( 'square' ); ?>
      </div>
      <div class="team__member__right">
        <header class="entry-header">
          <?php
          the_title( '<h1 class="team__member__title entry-title mt-0 fw-light h3">', '</h1>' );

          if ( function_exists('get_field') ) :
            echo '<div class="team__member__position fw-semibold">' . get_field('position') . '</div>';
          endif;
          ?>
        </header><!-- .entry-header -->

        <div class="team__member__bio entry-content">
          <?php
          the_content( sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eversight-wp' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ) );

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eversight-wp' ),
            'after'  => '</div>',
          ) );
          ?>

          <p class="mt-8"><a href="/company" class="button -arrowLeft -darkGray">Back to Main</a></p>
        </div><!-- .entry-content -->
      </div>
    </div>
  </div>

  <div class="team__members__other">
    <div class="container">
      <h3 class="fw-light mb-6">Other Team Members</h3>
      <?php
        echo do_shortcode( '[eversight_team_members]' );
      ?>
    </div>
  </div>

	<footer class="entry-footer">
		<?php eversight_wp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
