<?php
/*
American Sourcing Home Grid
Displays a grid of content/images

@author EvanAgee
*/

class AmericanSourcingHomeGrid {
	function __construct() {
		add_shortcode( 'american_sourcing_home_grid', array( $this, 'amsource_home_grid_html' ) );
	}

	// Element HTML
	public function amsource_home_grid_html( $atts ) {
    if ( ! function_exists( 'get_field' ) ) {
      return false;
    }

    ob_start();

    $grid_items = get_field('grid_calls_to_action');

    echo '<div class="homeGrid">';
    foreach ( $grid_items as $item ) :
      echo '<a class="homeGrid__item" href="'. $item['cta_link']['url'] .'">';
      echo '<div class="homeGrid__item__content">';
      echo '<h3 class="homeGrid__item__text">' . $item['text'] . '</h3>';
      echo '<em>' . $item['learn_more_text'] . ' </em>';
      echo '</div></a><!-- /.homeGrid__item -->';
    endforeach;
    echo '</div><!-- /.homeGrid -->';

		$html = ob_get_contents();
		ob_end_clean();
		return $html;
	}
} // End Element Class

new AmericanSourcingHomeGrid();
