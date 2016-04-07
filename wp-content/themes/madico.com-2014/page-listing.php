<?php 
/**
 * Template Name: Page Listing
 *
 * Listing page template to show child pages of the current page similar to a blog archive
 */

get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">
	
		<div class="main">
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>

			<div class="cms">
				<?php the_content(); ?>
			</div>
			
			<?php
			// Get all children of the current page
			$children = new WP_Query("post_type=page&post_parent={$post->ID}");
			if ( $children->have_posts() ): 
			?>
			<div class="page-listing">
			
				<?php while ( $children->have_posts() ) : $children->the_post(); ?>
				<div class="post entry clearfix">
					<a href="<?php the_permalink() ?>" class="thumbnail"><?php if ( has_post_thumbnail() ) the_post_thumbnail('thumbnail'); ?></a>
					<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p><?php echo strip_tags( get_the_excerpt() ); ?></p>
					<p class="button"><a title="Upcoming Madico Event: <?php the_title(); ?>" href="<?php the_permalink(); ?>">Learn more</a></p>
				</div><!--// end .entry -->
				<?php endwhile; wp_reset_postdata(); ?>
				
			</div><!--// end .page-listing -->
			<?php endif; ?>
			
		</div><!--// end #main -->

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div><!--// end #sidebar -->
		
	</div><!--// end #columns -->

</div>

</div>
</div>
</div>

<?php get_footer(); ?>