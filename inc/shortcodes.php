<?php

function eversight_case_studies( $atts ){
	ob_start();

	echo "<div class='eversight-case-studies' id='eversight-case-studies'></div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'case_studies', 'eversight_case_studies' );


function eversight_resource_library( $atts ){
	ob_start();

	echo "<div class='eversight-resource-library' id='eversight-resource-library'></div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_resource_library', 'eversight_resource_library' );


function eversight_categories_impacted( $atts ){
  ob_start();
  $categories_impacted = get_field('categories_impacted');

  if ( empty($categories_impacted) ) {
    return false;
  }

  echo "<div class='eversight-categories-impacted categories-impacted'><div class='categories-impacted__items'>";

  foreach ($categories_impacted as $cat) :
    echo "<a class='categories-impacted__item' onclick='return false;'>
      <img class='categories-impacted__item__img' src='" . $cat["image"]["url"] . "' />
      <strong class='categories-impacted__item__title'>" . $cat["category_name"] . "</strong>
      <div class='categories-impacted__item__description'>" . $cat["category_description"] . "</div>
    </a>";
  endforeach;

  echo "</div></div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'categories_impacted', 'eversight_categories_impacted' );

function eversight_partners( $atts ){
  ob_start();
  $partners = get_field('partners');

  if ( empty($partners) ) {
    return false;
  }

  echo "<div class='eversight-partners__list partners__list'><ul class='partners__list__items'>";

  foreach ($partners as $partner) :
    echo "<li class='partners__list__item'>
      <img class='partners__list__item__img' alt=" . $partner["partner_name"] . " src='" . $partner["logo"]["url"] . "' />
    </li>";
  endforeach;

  echo "</ul></div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_partners', 'eversight_partners' );

function eversight_investors( $atts ){
  ob_start();
  $investors = get_field('investors');

  if ( empty($investors) ) {
    return false;
  }

  echo "<div class='eversight-investors__list investors__list'><ul class='investors__list__items'>";

  foreach ($investors as $investor) :
    echo "<li class='investors__list__item bg-white'>
      <img class='investors__list__item__img' alt=" . $investor["investor_name"] . " src='" . $investor["logo"]["url"] . "' />
    </li>";
  endforeach;

  echo "</ul></div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_investors', 'eversight_investors' );


function eversight_team_members( $atts ){
  ob_start();

  $a = shortcode_atts( array(
    'exclude' => false,
  ), $atts );

  // Fetch all team members, excluding the team member
  // currently being
  $team_members = new WP_Query(array(
    'post_type' => 'team_member',
    'posts_per_page' => 50,
    'post__not_in' => array(get_the_ID())
  ));

  if ( $team_members->have_posts() ) :

    echo '<div class="team__member__cardGroup">';

    /* Start the Loop */
    while ( $team_members->have_posts() ) :
      $team_members->the_post();
      include( get_template_directory() . '/template-parts/team-member/team_member-card.php');

    endwhile;

    echo '</div>';
    wp_reset_postdata();

  else :

    echo 'No team members found.';

  endif;

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_team_members', 'eversight_team_members' );

function eversight_career_testimonials( $atts ){
  ob_start();
  $testimonials = get_field('testimonials');

  if ( empty($testimonials) ) {
    return false;
  }

  echo "<div id='eversight-testimonials' class='eversight-testimonial__list testimonial__list'>";
  echo "<ul class='testimonial__list__items'>";

  foreach ($testimonials as $testimonial) :
    echo "
    <li class='testimonial__list__item'>
      <img src='" . $testimonial['photo']['sizes']['thumbnail'] . "' class='testimonial__list__item__img' />
      <div class='testimonial__list__item__testimonial'>" . $testimonial['testimonial'] . "</div>
      <div class='testimonial__list__item__name'>" . $testimonial['name'] . "</div>
    </li>";
  endforeach;

  echo "</ul>";
  echo "
  <div class='testimonial__list__nav'>
    <ul class='testimonial__list__nav__items'>
      <li class='testimonial__list__nav__item testimonial__list__nav__item--prev'><i class='fal fa-angle-left fa-2x'></i></li>
      <li class='testimonial__list__nav__item testimonial__list__nav__item--next'><i class='fal fa-angle-right fa-2x'></i></li>
    </ul>
  </div>";
  echo "</div>";

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_career_testimonials', 'eversight_career_testimonials' );


function eversight_retail_animation( $atts ){
	ob_start();

  include get_template_directory() . '/inc/templates/shortcode-retail-animation.php';

	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}
add_shortcode( 'eversight_retail_animation', 'eversight_retail_animation' );

function eversight_greenhouse( $atts, $content ) {
	extract(
    shortcode_atts(
      array(
        'for' => 'eversight',
      ),
      $atts,
      'eversight-greenhouse-board'
    )
  );

	$html = '<div id="grnhse_app"></div>';
	$html .= '<script src="https://app.greenhouse.io/embed/job_board/js?for=' . $for . '"></script>';

  return $html;
}

add_shortcode( 'greenhouse-board', 'eversight_greenhouse' );


function eversight_how_it_works( $atts, $content ) {
  if ( ! function_exists('get_field') ) {
    return false;
  }

  $sections = get_field('how_it_works_sections');

  if ( empty($sections) ) {
    return false;
  }

  $html = '<div id="eversight_how_it_works" class="howItWorks">';
  $html .= '<div class="howItWorks__progress"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 538.29 538.28">
    <g id="Layer_2" data-name="Layer 2">
      <g id="Top_Navigation" data-name="Top Navigation">
        <path class="segment segment-0 active" d="M82.47,116.44q7.59-9.24,16.16-17.82A239.49,239.49,0,0,1,267.6,28l0-28A267.33,267.33,0,0,0,78.83,78.82q-9.64,9.65-18.17,20.06Z"/>

        <path class="segment segment-1" d="M270.17,28A239.49,239.49,0,0,1,439.66,98.62q8.47,8.47,16,17.63l21.86-17.51Q469,88.41,459.46,78.82A267.37,267.37,0,0,0,270.22,0Z"/>

        <path class="segment segment-2" d="M457.27,118.25a239.29,239.29,0,0,1,53,150.88A243.42,243.42,0,0,1,505,319.92l27.32,6.17a271.47,271.47,0,0,0,6-57,267.07,267.07,0,0,0-59.16-168.38Z"/>

        <path class="segment segment-3" d="M504.41,322.44A242.21,242.21,0,0,1,375.35,485.75L387.56,511A270.33,270.33,0,0,0,531.74,328.6Z"/>

        <path class="segment segment-4" d="M373,486.88a242.32,242.32,0,0,1-208.39-.29l-12.14,25.24a270.4,270.4,0,0,0,232.73.26Z"/>

        <path class="segment segment-5" d="M162.34,485.46A242.21,242.21,0,0,1,33.72,321.69L6.38,327.81A270.33,270.33,0,0,0,150.19,510.7Z"/>

        <path class="segment segment-6" d="M33.19,319.18A243.3,243.3,0,0,1,28,269.13,239.3,239.3,0,0,1,80.86,118.45L59.05,100.89A267.05,267.05,0,0,0,0,269.13a272,272,0,0,0,5.85,56.16Z"/>
      </g>
    </g>
  </svg></div>';
  $html .= '<div class="howItWorks__sections">';

  foreach ($sections as $s) :
    $html .= '
      <div class="howItWorks__sections__section">
        <div class="howItWorks__sections__section__image">'. $s['section_svg'] .'</div>
        <div class="howItWorks__sections__section__description">'.$s['section_description'].'</div>
      </div>';
  endforeach;

  $html .= '</div><!-- /.howItWorks__sections -->';
  $html .= '</div><!-- /#eversight_how_it_works -->';

  return $html;
}

add_shortcode( 'how-it-works', 'eversight_how_it_works' );
