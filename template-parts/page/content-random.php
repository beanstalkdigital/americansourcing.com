<?php
global $post;
$args = array( 'posts_per_page' => 3, 'orderby' => 'rand' );
$rand_posts = new WP_Query( $args );
$random_int = rand( 0, $rand_posts->post_count - 1 );
$post = $rand_posts->posts[$random_int];
echo '<div class="card__grid">';
while( $rand_posts->have_posts() ) : $rand_posts->the_post(); ?>
	<?php get_template_part( 'template-parts/content-post', 'card' ); ?>
<?php endwhile; wp_reset_postdata(); ?>
</div>
