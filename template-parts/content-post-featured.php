<?php
/**
 * Template part for displaying the most recent post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tethr-wp
 */

$recent_args = array(
    "posts_per_page" => 1,
    "orderby"        => "date",
    "order"          => "DESC"
);

$recent_posts = new WP_Query( $recent_args );
if ( $recent_posts -> have_posts() ) : $recent_posts -> the_post();
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post__featured'); ?>>
	<div class="post__featured__image" style="background-image: url(<?php print $featured_image; ?>);"></div>
	<div class="post__featured__content">
    <h1>CBD News & Blog</h1>
		<header class="entry-header">
      <strong class="u-uppercase">Featured Article</strong>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

    <div class="entry-footer">
      <div class="post__featured__meta">
				<div class="post__featured__meta__left">Posted by: <?php print get_the_author(); ?></div>
				<div class="post__featured__meta__right">Date: <?php the_date(); ?></div>
			</div>
    </div>

    <div class="post__featured__readMore">
      <a href="<?php print get_the_permalink(); ?>">Read More</a>
    </div>
	</div><!-- /.post__featured__content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php wp_reset_postdata(); endif; ?>
