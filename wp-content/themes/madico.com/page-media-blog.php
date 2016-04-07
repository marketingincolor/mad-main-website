<?php
/*
Template Name: Media
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
			
			<?php endwhile; endif; ?>
			<div class="cms media-list">
				
				<?php 
					$my_query;
					// Which media page are we on?
					if ($post->ID == '612') {
						$my_query = new WP_Query('cat=28534'); 
					}
					elseif ($post->ID == '46') {
						$my_query = new WP_Query('cat=28538');
					}
					
					if ($my_query != null) :
					
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="post">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<?php endwhile; endif; ?>
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