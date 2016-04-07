<?php /*Template Name: President's Message */
$presidentcategory = 28535;

get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">

		<div class="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="cms">
				<div id="attachment_514" class="wp-caption alignright" style="width: 210px"><img class="size-full wp-image-514  " title="robert-connelly" src="/wp-content/uploads/2011/01/robert-connelly.jpg" alt="Madico President Robert Connelly" width="200" height="266" /><p class="wp-caption-text"><strong>Robert Connelly</strong> Madico, Inc. President and CEO</p></div>
				
				<?php $presidentm = new WP_Query('post_type=post&post_status=publish&orderby=date&order=DESC&cat='.$presidentcategory);
				if($presidentm->have_posts()) {
					while($presidentm->have_posts()) {
						$presidentm->the_post();
						the_content();
					}
					echo '<br/><h4><a href="'.get_category_link( $presidentcategory ).'">See past president&rsquo;s messages &raquo;</a></h4>';
				}
				?>

			</div>

			<?php endwhile; endif; ?>

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