<?php /* Template Name: Home */ ?>
<?php get_header(); $custom_fields = get_post_custom(); ?>

	<div class="splash">
		
		<ul id="home_banner">

			<?php
			the_post();
			$postID = $post->ID;
			$h = 330;
			for ($i = 0; $i < 10; $i++) {
				$slideshow_image = get_post_meta($postID, 'cft_slideshow'.$i.'_image', true);
				$slideshow_text  = get_post_meta($postID, 'cft_slideshow'.$i.'_description', true);
				
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
	<?php echo get_post_meta($postID, "ssheadline", true); ?>
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
<?php 
//$colTest = get_post_meta($postID, "footercol1-title", true);
$colTest = '';
if ( ! empty( $colTest ) && $GLOBALS['section'] !== 'specialty-film' ) {
?>
<div id="columns">

	<ul class="inner clearfix">
		<?php 
		for($i = 1; $i < 5; $i++) {
			
			$fctitle = get_post_meta($postID, "footercol$i-title", true);
			$fctext  = get_post_meta($postID, "footercol$i-text", true);
			$fclink  = get_post_meta($postID, "footercol$i-link", true);
			if(!empty($fctitle)) {
			?>
			<li class="col<?php if ($i == 3) { echo(" last"); } ?>">
				<div class="text">				
					<h2><?php echo $fctitle ?></h2>
					<?php echo $fctext ?>
				</div>				
				<a href="<?php echo $fclink ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e('Read More', 'madicotheme'); ?></a>
			</li>
		<?php }
		}	 ?>
	</ul>
</div>
<?php } ?>
</div><!-- end #home-sections -->
</div>

<?php get_footer(); ?>