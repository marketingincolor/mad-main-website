<?php
/*
Template Name: Case Study
*/
?>
<?php get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>
	
	<?php show_breadcrumb(); ?>

	<div id="columns" class="casestudy">
	
		<div class="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<!--
<span class="prev-next">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icons/arrow-left.png" alt="Previous" /> Previous</a>
				<a class="next" href="#">Next <img src="<?php bloginfo('template_url'); ?>/images/icons/arrow-right.png" alt="Next" /></a>
			</span>
-->
			<h1><?php the_title(); ?></h1>

			<div class="cms">
			
				<?php				
				$case_study_pdf = get_post_meta($post->ID, "case-study-pdf", true);
				if( !empty($case_study_pdf) ) :?>				
					<a href="<?php echo $case_study_pdf; ?>" class="pdf"><img src="<?php bloginfo('template_url'); ?>/images/icons/pdf-alt.png" align="top" alt="PDF Download" /> Download PDF</a>
				<?php endif;?>
				
				<h4 class="casestudy-title"><?php echo get_post_meta($post->ID, "case-study-location", true); ?></h4>
				
				
				<div class="gallery">
					<?php
					$case_study_image = get_post_meta($post->ID, "case-study-image", true);
					if( !empty($case_study_image) ) : ?>															
						<img src="<?php echo $case_study_image; ?>" />						
					<?php endif;?>
				</div><!--Closes .gallery-->
				
				
				<div id="details">
					<div id="testimonial">						
						<blockquote class="caspari">
							<?php echo get_post_meta($post->ID, "case-study-quote", true); ?>
						</blockquote>
						<span class="caption"><?php echo get_post_meta($post->ID, "case-study-quote-caption", true); ?></span>
					</div><!--Closes #testimonial-->
					<div class="description">
						<?php the_content(); ?>
					</div><!--Closes .description-->
				</div><!--Closes #details-->
			</div>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar clearfix">
			<?php get_sidebar(); ?>
		</div>

	</div>

	</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>