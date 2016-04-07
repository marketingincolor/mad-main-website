<?php
	global $spEvents;
	$spEvents->loadStylesAndScripts();

	include (get_bloginfo('template_url').'/header.php'); ?>

	<div class="splash">

		<div class="default">&nbsp;</div>

	</div>

	<div class="breadcrumbs">

		<p>&nbsp;</p>

	</div>

	<div id="columns">

	<div id="" class="grid">
		<div id='tec-events-calendar-header' class="clearfix">
			<h2 class="tec-cal-title"><?php _e('Calendar of Events', $spEvents->pluginDomain) ?></h2>

			<?php get_jump_to_date_calendar( "tec-" ); ?>

			<span class='tec-calendar-buttons'>
				<a class='tec-button-off' href='<?php echo events_get_listview_link(); ?>'><?php _e('Event List', $spEvents->pluginDomain)?></a>
				<a class='tec-button-on' href='<?php echo events_get_gridview_link(); ?>'><?php _e('Calendar', $spEvents->pluginDomain)?></a>
			</span>

		</div><!--#tec-events-calendar-header-->

		<?php event_grid_view( ); // See the plugins/the-events-calendar/views/table.php template for customization ?>
	</div>
</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>