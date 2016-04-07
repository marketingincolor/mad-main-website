<?php 
get_header();
global $team_details;
$team_details->the_meta();
$position = $team_details->get_the_value('position');
?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns" class="events">

		<div class="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php if( $position ) echo '<p class="position">' . $position . '</p>'; ?>

			<div class="cms">
				<?php if( has_post_thumbnail() ): ?>
				<div class="wp-caption alignright">
					<?php the_post_thumbnail(array(300,999)); ?>
					<p class="wp-caption-text"><strong><?php the_title(); ?></strong><?php if( $position ) echo ", $position"; ?></p>
				</div>
				<?php endif; ?>
				
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar">
			<ul>
				<li>
					<h2>Staff Directory</h2>
					<?php if( function_exists('madico_post_type_list') ) echo madico_post_type_list(); ?>
				</li>
			</ul>
		</div>

	</div>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>