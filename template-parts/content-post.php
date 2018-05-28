<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eversight
 */
$featured_image = get_the_post_thumbnail_url($post->ID, 'full');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header <?php echo $featured_image !== '' ? '--withBackground' : ''; ?>" style="background-image: url(<?php echo $featured_image; ?>);">
    <div class="container">
      <div class="entry-type"><?php the_category(', '); ?></div>

      <?php
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
        ?>
        <div class="entry-meta">
          <?php
            if ( function_exists('get_field') ) {
              $author = get_field('post_author')[0];
              if ( !empty($author) ) {
                $author->acf = get_fields($author->ID);
                print sprintf("Written by %s, %s", $author->post_title, $author->acf['position']);
              } else {
                print sprintf("Written by %s on %s", get_the_author(), get_the_date());
              }
            }
          ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </div>
	</header><!-- .entry-header -->

	<div class="entry-content container">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <div class="container">
      <h3 class="fw-normal mt-0">Recent Posts</h3>
      <div id="eversight-recent-posts" data-exclude="<?php print get_the_ID(); ?>"></div>
    </div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
