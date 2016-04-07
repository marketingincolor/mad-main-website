<?php get_header(); ?>

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
		
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
		
	</div><!--// end #columns -->
	
</div><!--// end #page -->
</div><!--// end #container -->
</div><!--// end #background -->
</div><!--// end #content -->

<?php get_footer(); ?>