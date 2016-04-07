<?php
/**
 * Template Name: Careers
 */
 
get_header(); 
?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>
	
	<?php show_breadcrumb(); ?>

	<div id="columns">
	
		<div class="main clearfix">
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
			<div class="cms">
				<?php the_content(); ?>
			</div>
		</div><!--// end .main -->
		
		<div class="sidebar clearfix">
			<img src="<?php bloginfo('template_url'); ?>/images/careers-sidebar.png" alt="Boston Globe Top 100 Places to Work" class="sidebar-graphic" />
		</div>
		
	</div><!--// end #columns -->
	
</div><!--// end #page -->
</div><!--// end #container -->
</div><!--// end #background -->
</div><!--// end #content -->

<?php get_footer(); ?>