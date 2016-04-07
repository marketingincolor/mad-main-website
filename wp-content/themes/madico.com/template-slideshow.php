<?php
/**
 * Template Name: Slideshow
 */

// setup
get_header();
the_post();

// custom fields
$lead_in = get_field('home_leadin');
$class = ( $lead_in ) ? 'splash no-headline' : 'splash';
$fields = get_fields();
?>
	<?php if ( $fields['slideshow'] ) : ?>
	<div class="splash">
		<ul>
			<?php foreach ( $fields['slideshow'] as $slide ) : ?>
			<li>
				<div class="slide-background" data-background="<?php echo $slide['slideshow_image']; ?>">
					<?php if ( $slide['slideshow_caption'] ) : ?>
					<p><?php echo $slide['slideshow_caption']; ?></p>
					<?php endif; ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>

	<?php if ( $lead_in ) : ?>
	<div id="home-banner">
		<?php echo $lead_in; ?>
	</div>
	<?php endif; ?>

	</div>

</div>
</div>
</div>

<div id="home-sections">
	<div id="home-sections-wrapper">
		<div class="cms">
			<?php the_content(); ?>
		</div>
	</div><!-- end #home-sections-wrapper -->
</div><!-- end #home-sections -->

<?php get_footer(); ?>
