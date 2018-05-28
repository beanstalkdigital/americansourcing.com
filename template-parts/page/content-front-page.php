<div class="col-lg-4 col-md-6 mb-5">
  <div class="card-body">
  	<?php the_post_thumbnail('beanstalk-post-feed-features-image', ['class' => 'img-fluid mb-4', 'title' => 'Feature image']); ?>
    <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
    <p class="card-text"><?php the_excerpt('30');?></p>
    <a href="<?php the_permalink(); ?>" class="mt-3 btn btn-sm btn-primary">Keep Reading</a>
  </div>
</div>


