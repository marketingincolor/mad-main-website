<?php
/*
Template Name: Case Studies Overview
*/
?>
<?php get_header(); ?>
	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>
	
	<?php show_breadcrumb(); ?>

	<div id="columns">
		
		<div class="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="cms casestudy-overview">
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
						
			<?php $my_query = new WP_Query('post_type=page&post_parent=433'); ?>

			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="post">
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<img class="alignright thumb" src="<?php echo get_post_meta($post->ID, "case-study-image", true); ?>" width="200" height="85" />
					<span class="location"><?php echo get_post_meta($post->ID, "case-study-location", true); ?></span>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		</div>

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

</div>
</div>
</div>

<?php get_footer(); ?>