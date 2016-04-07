<?php
/**
 * Films Landing Pages
 */
$custom_fields = get_post_custom();
?>

<?php get_header(); ?>

	<div class="splash">
		
		<ul id="home_banner">
			<?php
			the_post();
			$postID = $post->ID;
			$h = 330;
			for ($i = 0; $i < 10; $i++) {
				$slideshow_image  = ( $custom_fields["cft_slideshow{$i}_image"][0] ) ? $custom_fields["cft_slideshow{$i}_image"][0] : '';
				$slideshow_text  = ( $custom_fields["cft_slideshow{$i}_description"][0] ) ? $custom_fields["cft_slideshow{$i}_description"][0] : '';
				
				if(!empty($slideshow_image)) {
				
				$background = wp_get_attachment_image_src( $slideshow_image, array(940,$h) );
				?>
				<li style="background:url(<?php print $background[0]; ?>);height:<?php echo $h;?>px;width:100%;<?php print ($i > 0)? "display:none;" : ""; ?>">
				<?php print $slideshow_text;
				echo '</li>';
				}
			}
			?>
		</ul>

	</div>
	
	<div id="home-banner">
		<?php echo $custom_fields['ssheadline'][0]; ?>
	</div>
	
	</div>

	</div>
	</div>
	</div>

<div id="home-sections">
<div id="home-sections-wrapper">

<?php if ( isset($custom_fields['pillartitle1'][0]) && !empty($custom_fields['pillartitle1'][0]) ): ?>
<div id="pillars" class="pillars">
	<?php 
	for ( $i = 1; $i < 5; $i++ ):
		$ptitle = ( $custom_fields["pillartitle$i"][0] ) ? $custom_fields["pillartitle$i"][0] : '';
		$plink  = ( $custom_fields["pillarlink$i"][0] ) ? $custom_fields["pillarlink$i"][0] : '';
		$ptext  = ( $custom_fields["pillartext$i"][0] ) ? $custom_fields["pillartext$i"][0] : '';
		$button_text = ( is_page(4) || is_page(6) ) ? 'Jump to Products' : 'Learn More';
		?>
		<a href="<?php echo $plink; ?>" title="<?php echo $ptitle;?> Products" id="n0<?php echo $i;?>"><?php echo $ptitle;?> Products</a>
	<?php endfor; ?>
</div><!--// end .pillars -->
<?php endif; ?>

<div class="cms">
	<?php the_content(); ?>
</div>

<div id="columns">
	<ul class="inner clearfix">
		<?php
		$recent_title = ( $custom_fields["footercol1-title"][0] ) ? $custom_fields["footercol1-title"][0] : 'Recent Posts';
		$recent_text  = ( $custom_fields["footercol1-text"][0] ) ? $custom_fields["footercol1-text"][0] : '';
		$recent_link  = ( $custom_fields["footercol1-link"][0] ) ? $custom_fields["footercol1-link"][0] : site_url('/category/pv-backsheets/');
		?>
		<li class="col">
			<div class="text pv-bloglist">
				<h2><?php echo $recent_title; ?></h2>
				<?php if ( $recent_text ): ?>
				<p><?php echo $recent_text; ?></p>
				<?php endif; ?>
				<ul>
					<?php 
					$recent_PV = new WP_Query('posts_per_page=1&cat=28539'); 
					// Recent blogs found
					if ( $recent_PV->have_posts() ) {
						while ( $recent_PV->have_posts() ) {
							$recent_PV->the_post();
							echo '<li><a href="' . get_permalink() . '"> ' . get_the_title() . '</a></li>';
						}
						wp_reset_postdata();
					}
					// No recent blogs
					else {
						echo '<li>';
						_e('There are no posts available in your language.', 'madicotheme');
						echo '</li>';
					}
					?>
				</ul>
			</div>
			<a href="<?php echo $recent_link; ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e('Read More', 'madicotheme'); ?></a>
		</li>
		
		<?php
		/**
		 * Upcoming Events Column
		 */
		$events_title = ( $custom_fields["footercol2-title"][0] ) ? $custom_fields["footercol2-title"][0] : 'Upcoming Events';
		$events_text  = ( $custom_fields["footercol2-text"][0] ) ? $custom_fields["footercol2-text"][0] : '';
		$events_link  = ( $custom_fields["footercol2-link"][0] ) ? $custom_fields["footercol2-link"][0] : site_url('/specialty-film/pv-backsheets/events/');
		$upcoming_events = get_pages( array(
			'sort_column' => 'post_date',
			'child_of' => 48,
			'number' => 3
		) );
		?>
		<li class="col">
			<div class="text pv-bloglist">
				<h2><?php echo $events_title; ?></h2>
				<?php if ( $events_text ): ?>
				<p><?php echo $events_text; ?></p>
				<?php endif; ?>
				<ul class="upcoming-events">					
					<?php 
					// Events found
					if ( !empty($upcoming_events) ) {
						foreach ( $upcoming_events as $event ) {
							echo '<li><a href="' . get_page_link( $event->ID ) . '">' . $event->post_title . '</a></li>';
						}
					}
					// No events posted
					else {
						echo '<li>' . translate('There are no upcoming events.') . '</li>';
					}
					?>
				</ul>
			</div>
			<a href="<?php echo $events_link; ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e('Read More', 'madicotheme'); ?></a>
		</li>
		
		<?php 
		for($i = 3; $i < 5; $i++) {
			$fctitle = get_post_meta($postID, "footercol$i-title", true);
			$fctext  = get_post_meta($postID, "footercol$i-text", true);
			$fclink  = get_post_meta($postID, "footercol$i-link", true);
			if(!empty($fctitle)) {
			?>
			<li class="col<?php if ($i == 4) { echo(" last"); } ?>">
				<div class="text">				
					<h2><?php echo $fctitle ?></h2>
					<?php echo $fctext ?>
				</div>				
				<a href="<?php echo $fclink ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e('Read More', 'madicotheme'); ?></a>
			</li>
		<?php 
			}
		}
		?>
	</ul>
</div><!--// end #columns -->

</div><!-- end #home-sections-wrapper -->
</div><!--// end #home-sections -->

<?php get_footer(); ?>