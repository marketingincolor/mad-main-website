<?php
// New setup that uses ACF plugin
if ( $banner_image = get_field('banner_image') ) {
?>
	<div class="default custom" style="background:url(<?php echo esc_url( $banner_image ); ?>) no-repeat top left;"></div>
<?php
}

// Nasty setup from before my time that uses
// the Custom Field Template plugin. -KL
else {
	$postID = $post->ID;
	$default = '<div class="default">&nbsp;</div>';
	if(is_numeric($postID)) {

		$ss_setting = get_post_meta($postID, 'cft_slideshow_setting', true);

		if($ss_setting == 'ss_small') {
			p_slideshow(180);
		} else if($ss_setting == 'ss_large') {
			p_slideshow();
		} else if($ss_setting == 'custom_image') {
			$custom_image = get_post_meta($postID, 'cft_header_image', true);
			$custom_image = wp_get_attachment_image_src($custom_image, array(940,180));
			$custom_image = str_replace( 'sites/1/', '', $custom_image[0] );
			$custom_text  = get_post_meta($postID, 'cft_header_description', true);
			if(!empty($custom_image))
				echo '<div class="default custom" style="background:url('. $custom_image .') no-repeat bottom center;">'.$custom_text.'</div>';
			else
				echo $default;
		} else {
			echo $default;
		}

	} else {
		echo $default;
	}
}
?>