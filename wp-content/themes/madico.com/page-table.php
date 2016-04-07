<?php
/*
Template Name: Wide Table
*/
?>
<?php get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">

		<div class="main" style="margin-right:0; padding-right: 0; width: auto; background: none;">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="cms">

				<?php the_content(); ?>

			</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>