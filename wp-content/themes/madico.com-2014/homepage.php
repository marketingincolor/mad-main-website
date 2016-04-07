<?php
/**
 * Template Name: Home
 */
get_header();
$custom_fields = get_post_custom();
the_post();
$post_id = $post->ID;
$home_banner = wpautop( $custom_fields['ssheadline'][0] );
$class = ( empty( $home_banner ) ) ? 'splash no-headline' : 'splash';
?>
	<div class="<?php echo $class; ?>">
		<ul>
			<?php
			$first_image = get_post_meta( $post_id, "cft_slideshow0_image", true );
			$h = 330;
			if ( ! empty( $first_image ) ) :
			for ( $i = 0; $i < 7; $i++ ) :
				$slideshow_image = get_post_meta( $post_id, "cft_slideshow{$i}_image", true );
				$slideshow_text  = get_post_meta( $post_id, "cft_slideshow{$i}_description", true );
				if ( empty( $slideshow_image ) )
					continue;
				$background = wp_get_attachment_image_src( $slideshow_image, array( 940, $h ) );
				$background = str_replace( 'sites/1/', '', $background[0] );
			?>
			<li style="background:url(<?php print $background; ?>); height:<?php echo $h;?>px; width:100%;">
				<?php echo $slideshow_text; ?>
			</li>
			<?php
			endfor;
			else :
			?>
			<li style="background:url('/wp-content/uploads/2010/11/car-solar.jpg'); height:<?php echo $h;?>px; width:100%;">
				<p>Protecting people from storms, earthquakes, explosions, theft, and vandalism for over 30 years.</p>
			</li>
			<?php endif; ?>
		</ul>
	</div>

	<?php if ( ! empty( $home_banner ) ) : ?>
	<div id="home-banner">
		<?php echo $home_banner; ?>
	</div>
	<?php endif; ?>

	</div>

	</div>
	</div>
	</div>

<div id="home-sections">
	<div id="home-sections-wrapper">
		<?php if ( isset( $custom_fields['pillartitle1'][0] ) && ! empty( $custom_fields['pillartitle1'][0] ) ): ?>
		<div id="pillars" class="pillars">
			<?php
			for ( $i = 1; $i < 5; $i++ ) :
				$ptitle = ( $custom_fields["pillartitle$i"][0] ) ? $custom_fields["pillartitle$i"][0] : '';
				$plink  = ( $custom_fields["pillarlink$i"][0] ) ? $custom_fields["pillarlink$i"][0] : '';
				$ptext  = ( $custom_fields["pillartext$i"][0] ) ? $custom_fields["pillartext$i"][0] : '';
				$button_text = ( is_page( 4 ) || is_page( 6 ) ) ? 'Jump to Products' : 'Learn More';
			?>
				<a href="<?php echo $plink; ?>" title="<?php echo $ptitle;?> Products" id="n0<?php echo $i;?>"><?php echo $ptitle;?> Products</a>
			<?php endfor; ?>
		</div><!--// end .pillars -->
		<?php endif; ?>

		<div class="cms">
			<?php the_content(); ?>
		</div>

		<?php if ( $colTest = get_post_meta( $post_id, "footercol1-title", true ) ) : ?>
		<div id="columns">

			<ul class="inner clearfix">
				<?php
				for ( $i = 1; $i < 5; $i++ ) :
					$fctitle = get_post_meta( $post_id, "footercol$i-title", true );
					$fctext  = get_post_meta( $post_id, "footercol$i-text", true );
					$fclink  = get_post_meta( $post_id, "footercol$i-link", true );
					if ( !empty( $fctitle ) ) :
				?>
					<li class="col<?php if ( $i == 4 ) { echo " last"; } ?>">
						<div class="text">
							<h2><?php echo $fctitle ?></h2>
							<?php echo $fctext ?>
						</div>
						<a href="<?php echo $fclink ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e( 'Read More', 'madicotheme' ); ?></a>
					</li>
				<?php endif; endfor; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div><!-- end #home-sections-wrapper -->
</div><!-- end #home-sections -->

<?php get_footer(); ?>
