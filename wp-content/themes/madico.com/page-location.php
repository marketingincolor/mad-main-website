<?php
/*
Template Name: Location
*/
?>
<?php get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">

		<div class="main" style="width: 915px; background: none;">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="cms">

<script type="text/javascript">
swfobject.registerObject("interactive-map", "9.0.0", "<?php echo get_stylesheet_directory_uri(); ?>/flash/expressInstall.swf");
</script>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="940" height="800" id="interactive-map">
<param name="movie" value="<?php echo get_stylesheet_directory_uri(); ?>/flash/Interactive-Map-Final.swf" />
<!--[if !IE]>-->
<object type="application/x-shockwave-flash" data="<?php echo get_stylesheet_directory_uri(); ?>/flash/Interactive-Map-Final.swf" width="940" height="800">

<!--<![endif]-->
<a href="http://www.adobe.com/go/getflashplayer">
<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a>
<!--[if !IE]>-->
</object>
<!--<![endif]-->
</object>

			</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>