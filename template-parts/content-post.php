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
<h6 class="u-uppercase color-brandSecondary mb-6"><a href="/blog" class="color-brandSecondary">CBD Blog &amp; News</a></h6>
<div class="two-column-layout">

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' );

          if ( 'post' === get_post_type() ) :
          ?>
          <div class="entry-meta">
            <div class="entry-meta-author"><?php print sprintf("Posted by: %s", get_the_author()); ?></div>
            <div class="entry-meta-date"><?php print sprintf("Date: %s", get_the_date()); ?></div>
          </div><!-- .entry-meta -->
          <?php endif; ?>
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-featured-image" style="background-image: url(<?php echo $featured_image; ?>);"></div>
      <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
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
    <?php print do_shortcode( '[Sassy_Social_Share]' ); ?>
      <div class="entry-tags-container"><?php print the_tags( '<span>Tags</span> ', ' ' ); ?></div>
    </footer><!-- .entry-footer -->
  </article><!-- #post-<?php the_ID(); ?> -->

  <div class="sidebar">Sidebar</div>
</div>


<div class="related-posts">
  <h3 class="related-posts__header color-brandSecondary fs-italic">Related Posts & News</h3>
  <?php get_template_part( 'template-parts/page/content', 'random' ); ?>
</div>
