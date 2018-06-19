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
    ob_start();

    echo '<div class="homeGrid">';

    echo '</div><!-- /.homeGrid -->';

		$html = ob_get_contents();
		ob_end_clean();
		return $html;
	}
} // End Element Class

new AmericanSourcingHomeGrid();
