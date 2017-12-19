<?php get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">

		<div class="main">

			<?php the_post(); ?>
			
			<h1 class="post-title"><?php the_title(); ?></h1>
			
			<ul class="postinfo clearfix">
				<li class="authordata"><?php the_time('M j, Y'); ?></li>
				<li class="social"><?php addthis_widgets(); ?></li>
			</ul>

			<div class="cms">
				<?php the_content(); ?>
			</div>
			
			<?php comments_template(); ?>

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