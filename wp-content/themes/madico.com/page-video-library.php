<?php 
/**
 * Template Name: Video Library
 *
 * Display Vimeo Hubnut widget - http://vimeo.com/widget
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

			<!--<div class="vimeo-hubnut">
				<object type="application/x-shockwave-flash" width="600" height="450" data="http://vimeo.com/hubnut/?user_id=user5842477&amp;color=48687F&amp;background=e9f1f3&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com">
					<param name="quality" value="best">
					<param name="allowfullscreen" value="true">
					<param name="allowscriptaccess" value="always">
					<param name="scale" value="showAll">
					<param name="movie" value="http://vimeo.com/hubnut/?user_id=user5842477&amp;color=48687F&amp;background=e9f1f3&amp;fullscreen=1&amp;slideshow=0&amp;stream=uploaded_videos&amp;id=&amp;server=vimeo.com">
				</object>
			</div>-->
		</div>

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div><!--// end #columns -->

</div>

</div>
</div>
</div>

<?php get_footer(); ?>