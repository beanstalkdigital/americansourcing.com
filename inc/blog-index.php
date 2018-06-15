<?php
/*
Tethr Blog Index
Displays a list of recent blog posts

@author EvanAgee
*/

class AmericanSourcingBlogIndex {
	function __construct() {
		add_shortcode( 'american_sourcing_blog', array( $this, 'amsource_blog_index_html' ) );
	}

	// Element HTML
	public function amsource_blog_index_html( $atts ) {
		ob_start();

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		$args = array(
			'post_type' 		 => 'post',
			'posts_per_page' => 1 === $paged ? 16 : 15,
			'paged' 				 => $paged
    );

    if ( !empty( $_GET['category_name'] ) ) {
      $args['category_name'] = esc_sql( $_GET['category_name'] );
    }

    if ( !empty( $_GET['tag'] ) ) {
      $args['tag'] = esc_sql( $_GET['tag'] );
    }

    if ( !empty( $_GET['sort'] ) ) {
      $sort = explode('-', $_GET['sort']);
      if ( count($sort) === 2 ) {
        $args['orderby'] = $sort[0];
        $args['order'] = $sort[1];
      }
    }

    $posts = new WP_Query( $args );



    echo '<div class="amsource-blog-index">';
    get_template_part( 'template-parts/content-post', 'featured' );
    get_template_part( 'template-parts/blog/blog', 'filters' );
    echo '<div class="card__grid container">';

		if ( $posts->have_posts() ) :
			$post_counter = 0;
			while( $posts->have_posts() ) :
				$posts->the_post();

        get_template_part( 'template-parts/content-post', 'card' );
			endwhile;
		else :
			echo 'Oops, there are no posts.';
    endif;

    echo '</div><!-- /.card__grid -->';

		echo '</div>';
		echo '<div class="amsource-blog-index-pagination">';
		echo paginate_links( array(
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'total'        => $posts->max_num_pages,
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'format'       => '?paged=%#%',
			'show_all'     => false,
			'type'         => 'plain',
			'end_size'     => 2,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => '',
			'next_text'    => '',
			'add_args'     => false,
			'add_fragment' => '',
			) );
		echo '</div><!-- /.pagination -->';

		wp_reset_postdata();

		$html = ob_get_contents();
		ob_end_clean();
		return $html;
	}
} // End Element Class

new AmericanSourcingBlogIndex();
