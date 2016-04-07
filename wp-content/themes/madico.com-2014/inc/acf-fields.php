<?php
/**
 * Store currently registered ACF Field Groups
 */
function _madico_get_acf_groups() {

	// Get currently registered fields
	$registered_field_groups = acf_field_group::get_field_groups( array() );
	$registered = array();
	foreach ( $registered_field_groups as $group => $data ) {
		$registered[] = $data['title'];
	}

	return array_values( $registered );
}


/**
 * Activate ACF Field Groups
 */
function register_acf_groups() {

	// Plugin verification
	if ( ! function_exists( "register_field_group" ) || ! is_admin() )
		return;

	// Store as global
	$registered = _madico_get_acf_groups();
	echo '<details closed>';
	echo '<pre style="text-align:left; font-size:11px;">';
	print_r( $registered );
	echo '</pre>';
	echo '</details>';

	// Video Gallery Embed
	if ( ! in_array( 'Video Gallery', $registered ) ) {
		register_field_group(array (
			'id' => 'acf_video-gallery',
			'title' => 'Video Gallery',
			'fields' => array (
				array (
					'key' => 'field_52f5103311428',
					'label' => 'Video Gallery Embed',
					'name' => 'video_hubnut',
					'type' => 'textarea',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'formatting' => 'none',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-video-library.php',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}

	// Video Gallery Embed
	if ( ! in_array( 'Banner', $registered ) ) {
		register_field_group(array (
			'id' => 'acf_banner',
			'title' => 'Banner',
			'fields' => array (
				array (
					'key' => 'field_52f5025882adb',
					'label' => 'Banner Image',
					'name' => 'banner_image',
					'type' => 'image',
					'save_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'side',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}
}
add_action( 'init', 'register_acf_groups' );