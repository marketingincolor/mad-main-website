<?php get_header(); ?>
<script type="text/javascript">
// Force correct section styling
$(document).ready(function() {
	$('body').addClass('specialty-film');
	$('a[title="Careers"]', 'div.menu').parent().addClass('current_page_item tier-1-active');
	$('div.menu > ul > li.current_page_parent').removeClass('tier-1-active');
});
</script>	

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php the_post(); ?>
	<div class="breadcrumbs">
		<a href="/careers/">Careers</a>  &raquo; 
		<strong><?php the_title() ?></strong>
	</div>
	
	<div id="columns">

		<div class="main">
			<h1><?php the_title(); ?></h1>
			
			<p class="location"><?php echo get_post_meta($post->ID, 'location', true); ?></p>
			
			<div class="cms">
				<?php the_content(); ?>
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