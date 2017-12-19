<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>

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

	<div class="breadcrumbs">

		<a href="http://madico.ftscms.com/specialty-film/">Specialty Film</a>  &raquo; 
		<a href="http://madico.ftscms.com/specialty-film/renewable-energy/">Renewable Energy</a>  &raquo; 
		<strong>Events</strong>

	</div>

	<div id="columns">
		<div class="main">			
			<div class="cms events-list">
				<h1>Events</h1>
				<?php 
					global $spEvents;	
					wp_reset_query();
					rewind_posts();
					
					$postset = get_events( 10 , $spEvents->CATEGORYNAME); //First arg controls number of items
					if( $postset ) {
						global $post;
						foreach( $postset as $post ) {
							setup_postdata($post);
							
							$EventCountry	= get_post_meta( $post->ID, '_EventCountry', true );
							$EventCity		= get_post_meta( $post->ID, '_EventCity', true );
							
							if($EventCountry == 'United States')
								$EventState	= get_post_meta( $post->ID, '_EventState', true );
							else
								$EventState	= $EventCountry;
					
							?>
							<div class="post">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> &ndash;
								<?php if(!empty($EventCity)) {
									echo ' <strong>' . $EventCity;
									
									if(!empty($EventState))
										echo ', '.$EventState;
										
									echo '</strong>';
								}  ?> 
								</a></h2>
								<span>
									<strong>Start: </strong><?php echo the_event_start_date(); ?> &nbsp; &nbsp; &nbsp;
					              	<strong>End: </strong><?php echo the_event_end_date(); ?>
					            </span>
								<?php the_excerpt(); ?>
							</div>
						 <?php } ?>
				<?php } ?>
			</div>
		</div>

		<div class="sidebar">
			<!-- Events calendar -->
			
			<ul>
			<li id="events-cal" class="grid">
				<div id='tec-events-calendar-header' class="clearfix">
					<h2 class="tec-cal-title"><?php _e('Calendar of Events', $spEvents->pluginDomain) ?></h2>
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

<?php get_footer(); ?>