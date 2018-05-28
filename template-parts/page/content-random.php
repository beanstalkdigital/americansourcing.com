<?php 
global $post;
$args = array( 'posts_per_page' => 3, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
$random_int = rand( 0, $rand_posts->post_count - 1 );
$post = $rand_posts->posts[$random_int]; 
foreach( $rand_posts as $post ) : 
	setup_postdata($post); ?>
<div class="col-lg-4 col-md-6 mb-5">
	<div class="card-body">
		<?php the_post_thumbnail('beanstalk-post-feed-features-image', ['class' => 'img-fluid mb-4', 'title' => 'Feature image']); ?>
		<p class="card-text"><?php the_excerpt('30');?></p>
		<a href="<?php the_permalink(); ?>" class="mt-3 btn btn-sm btn-primary">Read Article</a>
	</div>
</div>
<?php 
wp_reset_postdata();
endforeach; ?>


