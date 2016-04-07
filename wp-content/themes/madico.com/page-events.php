<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>

	<div class="splash">

		<?php include( 'banner.php'); ?>

	</div>

	<div class="breadcrumbs">
		<?php show_breadcrumb(); ?>
	</div>

	<div id="columns">

		<div class="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="cms">

				<?php the_content(); ?>

			</div>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar">
			<ul>
			<?php dynamic_sidebar('Event'); ?>
			</ul>
			<?php get_sidebar(); ?>
		</div>

	</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>