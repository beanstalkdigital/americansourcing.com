<?php
function eversight_custom_post_types() {
  register_post_type( 'case_study',
    array(
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singular_name' => __( 'Case Study' )
      ),
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'menu_icon' => 'dashicons-admin-users',
      'supports' => array( 'title', 'editor', 'custom-fields', 'revisions', 'author', 'thumbnail' )
    )
  );

  register_post_type( 'team_member',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'menu_icon' => 'dashicons-admin-users',
      'supports' => array( 'title', 'editor', 'custom-fields', 'revisions', 'author', 'thumbnail' )
    )
  );
}
add_action( 'init', 'eversight_custom_post_types' );

function eversight_add_cpt_to_api( $args, $post_type ) {
    if ( 'case_study' === $post_type ) {
        $args['show_in_rest'] = true;
    }
    return $args;
}
add_filter( 'register_post_type_args', 'eversight_add_cpt_to_api', 10, 2 );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b0641e957d68',
	'title' => 'How It Works Sections',
	'fields' => array(
		array(
			'key' => 'field_5b0642208982b',
			'label' => 'How It Works Sections',
			'name' => 'how_it_works_sections',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 8,
			'layout' => 'block',
			'button_label' => 'Add Section',
			'sub_fields' => array(
				array(
					'key' => 'field_5b0648ce1d584',
					'label' => 'Section SVG',
					'name' => 'section_svg',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5b06428c8982d',
					'label' => 'Section Description',
					'name' => 'section_description',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '531',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;