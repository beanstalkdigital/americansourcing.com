<?php get_header(); ?>


<?php 	

while ( have_posts() ) :
	the_post(); ?>

	<h6 class="mt-3 pt-3" style="color:#A50D11; text-transform: uppercase;">CBD Blog & News</h6>
	<h1 class="mt-3 pt-3"><?php the_title();?></h1>
	<ul class="list-inline">

		<li class="list-inline-item"><b>Posted by:</b> <?php the_author(); ?></li>
		<li class="list-inline-item"><b>Date:</b> <?php the_time('M d Y'); ?></li>

	</ul>
	<div style="height: 400px; overflow: hidden;">
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
	</div>


	<div class="row mt-5">
		<div class="col-8 main-content">
			<?php the_content(); ?>
			<div class="container-fluid">
				<div class="row mt-5">
					<div class="col-2">
						<div style="height:60px;width:60px">
							<?php echo get_avatar( get_the_author_meta('ID'), 30); ?>
						</div>
					</div>
					<div class="col-6">
						<div style="height:60px;">
							<b><?php $author = get_the_author(); echo $author ?></b><br>
							<?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<h3 class="mt-5">Recommended</h3>
				<div class="row mt-3">
					<?php get_template_part( 'template-parts/page/content', 'random' ); ?>
				</div>
			</div>
			<div class="mt-5">
				<?php if (comments_open()) :?>
					<div id="disqus_thread"></div>
					<script>
						(function() {  
							var d = document, s = d.createElement('script');

							s.src = '//beanstalk-blog.disqus.com/embed.js';

							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
						})();
					</script>
				<?php endif;?>
			</div>
		</div>
		<div class="col-4">
			<?php dynamic_sidebar('post-sidebar'); ?>
		</div>
	</div>


	<?php

 //previous_post_link(''); 
 // next_post_link(); ?>

			<?php endwhile; // End of the loop.
			?>

			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ae2952d58360536"></script>

			<?php get_footer(); ?>