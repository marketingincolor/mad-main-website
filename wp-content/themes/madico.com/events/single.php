<?php 
	get_header();
 ?>
	
<script type="text/javascript">
	// Force correct section styling
	$(document).ready(function() {
		$('body').addClass('specialty-film');
		$('a[title="Specialty Film"]', 'div.menu').parent().addClass('current_page_item tier-1-active');
		$('a[title="Renewable Energy"]', 'div.menu').parent().addClass('current_page_ancestor current_page_parent tier-2-active');
		$('a[title="Events"]', 'div.menu').parent().addClass('current_page_ancestor current_page tier-3-active');
	});
</script>	
	
	<div class="splash">

		<div class="default">&nbsp;</div>

	</div>
	
	<?php the_post(); global $post, $spEvents; ?>
	<div class="breadcrumbs">

		<a href="http://madico.ftscms.com/specialty-film/">Specialty Film</a>  &raquo; 
		<a href="http://madico.ftscms.com/specialty-film/renewable-energy/">Renewable Energy</a>  &raquo; 
		<a href="http://madico.ftscms.com/specialty-film/renewable-energy/events">Events</a>  &raquo; 
		<strong><?php the_title() ?></strong>

	</div>

	<div id="columns">
		<div class="main">
			<div class="cms">
				<h1><?php the_title() ?></h1>
				<?php if (the_event_end_date() > time()  ) { ?><small><?php  _e('This event has passed.', $spEvents->pluginDomain) ?></small> <?php } ?>
				<div class="events-meta">					
					<span>
						<strong>Start: </strong><?php echo the_event_start_date(); ?> &nbsp; &nbsp; &nbsp;
		              	<strong>End: </strong><?php echo the_event_end_date(); ?>
		            </span>
		            <span>
						<?php if(the_event_venue()) : ?>
						<strong>Venue: </strong> <?php echo the_event_venue(); ?> <br>
						<?php endif; ?>
					</span>
					<span>
						<?php if(the_event_address()) : ?>
						<strong>Address: </strong>
							<?php $address = the_event_address();
							$address .= (the_event_city())?  ', ' . the_event_city() : '';
							$address .= (the_event_region()) ? ', ' . the_event_region() : '';
							$address .= (the_event_country()) ? ', ' . the_event_country() : '';
							$address .= (the_event_zip()) ? ', ' . the_event_zip() : '';

							$address = str_replace(' ,', ',', $address);
							echo $address;

							$googleaddress = str_replace(' ', '+', $address);
							 ?>
						<?php endif; ?>
						<br>
						<a href="<?php event_google_map_link() ?>" title="Click to view a Google Map" target="_blank"><?php _e('Google Map', $spEvents->pluginDomain ); ?></a>
					</span>
				</div>
				<div>
					<?php the_content() ?>		
				</div>
			</div>
		</div>
		<div class="sidebar">
			<ul>
				<li id="events-cal" class="grid">
					<h2>Events Calendar</h2>
					<?php event_grid_view( ); ?>
				</li>
			</ul>
			<?php get_sidebar(); ?>

		</div>
	</div>



	</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>