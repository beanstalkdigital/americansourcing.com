<?php $acf = get_fields(); ?>
<a href="<?php the_permalink(); ?>" class="card --team">
  <?php echo the_post_thumbnail( 'square' ); ?>
  <div class="card__contents">
    <h4 class="card__contents__title"><?php the_title(); ?></h4>
    <div class="card__contents__position"><?php echo $acf["position"]; ?></div>
    <small class="card__contents__learnMore u-uppercase">Learn More</small>
  </div>
</a>
