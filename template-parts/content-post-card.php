<?php
/**
 * Template part for displaying post card
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tethr-wp
 */
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<a id="post-<?php the_ID(); ?>" <?php post_class('post__card'); ?> href="<?php print get_the_permalink(); ?>">
  <div class="post__card__image" style="background-image: url(<?php print $featured_image; ?>);"></div>
  <div class="post__card__content">
    <header class="entry-header">
      <?php
        the_title( '<h2 class="entry-title">', '</h2>' );
      ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php print substr( get_the_excerpt(), 0, 220 ) . '...'; ?>
    </div><!-- .entry-content -->
    <div class="post__card__meta">
      <div class="post__card__meta__author fw-bold u-uppercase"><?php print get_the_author(); ?></div>
      <div class="post__card__meta__date"><?php print get_the_date(); ?></div>
    </div>
  </div><!-- /.post__card__content -->
</a><!-- #post-<?php the_ID(); ?> -->
