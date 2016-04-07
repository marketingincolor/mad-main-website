<?php 
/* Template Name: History */
get_header(); 

/* Timeline specific PHP data and logic */

/** Because unix time cannot go over 2038, the date time values will be strictly for percentages. */
$startyear  = 1900;
$endyear 	= 2020;
$flipy		= 155; //The height at which icons point down instead of up
/*
	EVENT FORMAT:
	
		"year"		-- Controls X position
		"rel"		-- Div to display within the #legend area. Pick any unique ID
		"type"		-- Loads the proper icon
		"y"			-- Vertical position from chart bottom (In PX)
		"html"		-- Any HTML text for the popup details
*/
$events = array(
	array(
		"year"		=> '1903',
		"type"		=> 'madico',
		"y"			=> 65,
		"html"		=> "<p>Hy-Sil, the precursor to Madico, is founded. Madico begins to build a technical competency in multi-layer materials such as paper and postcards.</p>"
	),
	array(
		"year"		=> '1935',
		"type"		=> 'madico',
		"y"			=> 100,
		"html"		=> "Hy-Sil's Paul Alexander builds the world's first roll-to-roll Metalizer, a process that enables the birth of the window film market."
	),
	array(
		"year"		=> '1958',
		"type"		=> 'window',
		"y"			=> 150,
		"html"		=> "Hy-Sil successfully commercializes the first transparent reflective window film product."
	),
	array(
		"year"		=> '1971',
		"type"		=> 'window',
		"y"			=> 195,
		"html"		=> "A novel mounting adhesive system revolutionizes the application process."
	),
	array(
		"year"		=> '1974',
		"type"		=> 'window',
		"y"			=> 205,
		"html"		=> "Madico introduces reflective films with colors such as bronze, gray, gold, green, and copper."
	),
	array(
		"year"		=> '1978',
		"type"		=> 'window',
		"y"			=> 220,
		"html"		=> "Madico introduces films with a protective scratch resistant coating."
	),
	array(
		"year"		=> '1982',
		"type"		=> 'window',
		"y"			=> 235,
		"html"		=> "Madico introduces the first high efficiency, low reflectivity, high visible light transmission copper film."
	),
	array(
		"year"		=> '1984',
		"type"		=> 'window',
		"y"			=> 245,
		"html"		=> "Madico develops Performance Tint&reg; a high performance automotive window film."
	),
	array(
		"year"		=> '1987',
		"type"		=> 'window',
		"y"			=> 255,
		"html"		=> "Madico introduces photo chromic films, a key enabling technology for future material development."
	),
	array(
		"year"		=> '1989',
		"type"		=> 'specialty',
		"y"			=> 265,
		"html"		=> "Madico enters the Photovoltaic Backsheet market."
	),
	array(
		"year"		=> '1991',
		"type"		=> 'specialty',
		"y"			=> 275,
		"html"		=> "Madico debuts Dielectric Bonding Technology to produce a higher performing, leaner and cost effective PV backsheet."
	),
	array(
		"year"		=> '1994',
		"type"		=> 'window',
		"y"			=> 290,
		"html"		=> "Madico introduces the first 10 year warranty on exterior window film."
	),
	array(
		"year"		=> '1998',
		"type"		=> 'safety',
		"y"			=> 305,
		"html"		=> "Madico begins Shock Tube Testing of Safety Films with the Army Corp Engineers."
	),
	array(
		"year"		=> '1999',
		"type"		=> 'safety',
		"y"			=> 308,
		"html"		=> "The largest open range blast test of safety window films is conducted with Madico material at the Defense Research Establishment in Canada."
	),
	array(
		"year"		=> '1999',
		"type"		=> 'madico',
		"y"			=> 320,
		"html"		=> "Madico receives ISO 9001-2000 Certification."
	),
	array(
		"year"		=> '2000',
		"type"		=> 'specialty',
		"y"			=> 315,
		"html"		=> "Madico introduces Bright White power boosting technology developed to increase panel power."
	),
	array(
		"year"		=> '2001',
		"type"		=> 'madico',
		"y"			=> 330,
		"html"		=> "Madico installs the CleanSwitch&reg; system to its manufacturing facilities. Designed to capture 100% of the process emissions and is equipped with a regenerative thermal oxidizer to destruct 99% of volatile organic compounds."
	),
	array(
		"year"		=> '2002',
		"type"		=> 'safety',
		"y"			=> 320,
		"html"		=> "Madico University is born, a training program for Safety Window Film installers."
	),
	array(
		"year"		=> '2003',
		"type"		=> 'madico',
		"y"			=> 335,
		"html"		=> "Madico celebrates 100 years of innovation."
	),
	array(
		"year"		=> '2004',
		"type"		=> 'madico',
		"y"			=> 340,
		"html"		=> "Madico incorporates the Six Sigma and Lean Manufacturing methodology to its manufacturing process."
	),
	array(
		"year"		=> '2004',
		"type"		=> 'safety',
		"y"			=> 330,
		"html"		=> "Madico teams with GE on Project Safeguard&#x2120; a project designed to protect childcare centers."
	),
	array(
		"year"		=> '2005',
		"type"		=> 'safety',
		"y"			=> 330,
		"html"		=> "VisionSpan 1500, a hurricane impact film for OEM windows is introduced."
	),
	array(
		"year"		=> '2005',
		"type"		=> 'window',
		"y"			=> 330,
		"html"		=> "Madico collaborates with Optodot Corporation to enhance solar heat gain window films by developing the first organic coating that reflects infrared energy."
	),
	array(
		"year"		=> '2006',
		"type"		=> 'window',
		"y"			=> 335,
		"html"		=> "Madico launches Advanced Ceramics&reg; a line of &quot;High-Definition&quot; window film."
	),
	array(
		"year"		=> '2007',
		"type"		=> 'safety',
		"y"			=> 340,
		"html"		=> "<em>Clearplex&reg;</em> is launched for automotive safety films, and invisible windshield protection film."
	),
	array(
		"year"		=> '2007',
		"type"		=> 'specialty',
		"y"			=> 340,
		"html"		=> "Madico is granted the DuPont&reg; Plunket Award for developing Dielectric Bonding Technology (DBT)"
	),
	array(
		"year"		=> '2007',
		"type"		=> 'specialty',
		"y"			=> 340,
		"html"		=> "Madico debuts its ground breaking Protekt&reg; Technology to the photovoltaic market and revolutionizes the industry."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'window',
		"y"			=> 350,
		"html"		=> "Madico receives NFRC certification on 45 Madico Window Film products for the energy performance of windows, doors, skylights, and attachment products."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'safety',
		"y"			=> 350,
		"html"		=> "Madico launches <em>SignalShield&reg;</em>, a window film that provides countermeasures against certain forms of electronic infiltration."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'specialty',
		"y"			=> 350,
		"html"		=> "Madico captures leadership position in Photovoltaic backsheets market."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'madico',
		"y"			=> 355,
		"html"		=> "Madico begins an <em>Integrated Contingency Plan</em> to improve safety and ensure business continuity."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'madico',
		"y"			=> 355,
		"html"		=> "Madico collaborates with parent company Lintec to increase production capacity."
	),
	array(
		"year"		=> '2008',
		"type"		=> 'specialty',
		"y"			=> 350,
		"html"		=> "Madico develops Thin Film Technology (TFB) for its Protekt line of Backsheets."
	),
	array(
		"year"		=> '2009',
		"type"		=> 'specialty',
		"y"			=> 360,
		"html"		=> "Madico develops Protekt Charcoal to provide a viable option for Building Integrated PV panels."
	),
	array(
		"year"		=> '2009',
		"type"		=> 'specialty',
		"y"			=> 360,
		"html"		=> "Madico is granted a US Patent for its ground breaking Bright White &mdash; Power Boosting Technology."
	),
	array(
		"year"		=> '2009',
		"type"		=> 'specialty',
		"y"			=> 360,
		"html"		=> "Madico introduces an evolutionary step in product finishing by supplying PV customers with sheets rather than rolls."
	),
	array(
		"year"		=> '2009',
		"type"		=> 'madico',
		"y"			=> 360,
		"html"		=> "Madico receives ISO 9000-2008 certification."
	),
	array(
		"year"		=> '2009',
		"type"		=> 'security',
		"y"			=> 360,
		"html"		=> "Madico collaborates with Optodot Corporation to produce SIRE&reg;, a secure infrared encoding film."
	),
	array(
		"year"		=> '2010',
		"type"		=> 'madico',
		"y"			=> 365,
		"html"		=> "Madico expands the Window Film business with the purchase of Solamatrix."
	)
);

?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/ui-lightness/jquery-ui-1.8.6.custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/timeline_style.css" type="text/css" media="screen" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/timeline_ie_style.css" type="text/css" media="screen" />
<![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.8.8.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/timeline.js"></script>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>
	
	<?php show_breadcrumb(); ?>

	<div id="columns">
	
		<div class="main" style="margin-bottom: 40px; min-height: 0;">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<div class="cms">

				<?php the_content(); ?>

			</div>

			<?php endwhile; endif; ?>

		</div>

		<div class="sidebar">
			<blockquote class="caspari">
				<?php echo get_post_meta($post->ID, "cft_sidebar_quote", true); ?>
			</blockquote>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Start Timeline -->
	<div id="history-timeline">
		<div id="timeline-holder" class="clearfix">
			
			<div id="loading-wrapper">
				<div id="loading">
				<img src="<?php bloginfo('template_url'); ?>/images/timeline/loading.gif" />
				<h2>Loading...</h2>
				</div>
			</div>
	
			<div id="legend" class="not-flipped">
				<div class="default">
					<ul id="types" class="clearfix">
						<li><img src="<?php bloginfo('template_url'); ?>/images/timeline/legend_madico.gif" alt="Madico Corporate" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/timeline/legend_window.gif" alt="Energy Conservation - Window Film" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/timeline/legend_specialty.gif" alt="Renewable Energy - Specialty Film" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/timeline/legend_safety.gif" alt="Safety Film" /></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/timeline/legend_security.gif" alt="Asset Security" /></li>
					</ul>
					<p>Roll over any icon on the timeline for details.</p>
				</div>
				<?php for($i = 0; $i < count($events); $i++) {
				?>
					<div class="detail <?php echo $events[$i]['type'];?> <?php if($events[$i]['year'] >= 1980) echo 'flipped'; else echo 'not-flipped'; ?>" id="event-<?php echo $i; ?>" style="background: #F1F1F1 url(<?php bloginfo('template_url'); ?>/images/timeline/icons/<?php echo $events[$i]['type'];?>-event.png) no-repeat 6px 6px;">
						<span class="event-date"><?php echo $events[$i]['year'];?> &mdash; </span>
						<?php echo $events[$i]['html'];?>
					</div>
				<?php 
				} ?>
			</div>
			
			
			<ul id="ylabels">
				<li>7 <span class="tic">&mdash;</span></li>
				<li>6 <span class="tic">&mdash;</span></li>
				<li>5 <span class="tic">&mdash;</span></li>
				<li>4 <span class="tic">&mdash;</span></li>
				<li>3 <span class="tic">&mdash;</span></li>
				<li>2 <span class="tic">&mdash;</span></li>
				<li>1 <span class="tic">&mdash;</span></li>
				<li>0 <span class="tic">&mdash;</span></li>
			</ul>
			
			<div id="timeline-box" class="clearfix">
			
				<div id="interactive" class="clearfix">
					<div id="timeline-events">
					<?php // print out the "events"
					for($i = 0; $i < count($events); $i++) {
						$flipped = false;
						if($events[$i]['y'] > $flipy)
							$flipped = true;
						
						$percent = ($events[$i]['year'] - $startyear) / ($endyear - $startyear) * 100;
						?>
						<div class="event<?php 
							if($i == 0) 
								echo ' first'; 
							if($i == count($events) - 1) 
								echo ' last';
							
							echo ' ' . $events[$i]['type'];
							
							if($flipped)
								echo ' flipped';
							?>"<?php
					 ?> id="event-list-<?php echo $i; ?>"<?php 
					 ?>	style="left:<?php echo $percent;?>%;<?php
					 			if($flipped) {
					 				echo 'top: ' . (372 - $events[$i]['y']) . 'px;';
					 			} else {
					 				echo ' bottom: ' . $events[$i]['y'] . 'px;';
								}
								?>">
					 			
							<?php //if flipped show border first
							if($flipped)
								echo '<div class="border"></div>';
							?>
							
							<a class="top" href="#" rel="event-<?php echo $i; ?>">
							<?php 
							if( !empty($events[$i]['type']) && isset($events[$i]['type'])) {
								echo '<image src="' . get_bloginfo('template_url') . '/images/timeline/icons/' . $events[$i]['type'] . '.png" />';
							}
							?>
							</a>
							<?php //if not flipped show border last
							if(!$flipped)
								echo '<div class="border"></div>';
							?>
						</div>
						
						<?php 
					} //end events loop
					?>
					</div>
					<div id="timeline-labely"></div>
					<img id="timeline" src="<?php bloginfo('template_url'); ?>/images/timeline/graph.png" width="894" height="298" />
					<div id="xlabels">
						<?php
							$counter = 0;
							for($i = $startyear; $i < $endyear; $i += 5) {
								$counter++;
								if($counter == 1)
									$class = "zoom1";
								if($counter == 2)
									$class = "zoom3";
								if($counter == 3)
									$class = "zoom2";
								if($counter == 4) {
									$class = "zoom3";
									$counter = 0;
								}
								?>
								<div class="era <?php echo $class;?>">
									<div class="xlabel"><span><?php echo $i; ?></span></div>
								</div>
								<?php
							}
						?>
					</div>
				</div>
			</div> <!-- end timeline-box -->
	
		</div><!-- end timeline-holder -->
		
		<div id="zoom-holder" class="clearfix">
			<span class="note">Zoom:</span>
			<div id="zoom" class="clearfix">
				<div class="zoombtn active" id="zoom1" rel="100"><span>1</span></div>
				<div class="zoombtn" id="zoom2" rel="200"><span>2</span></div>
				<div class="zoombtn" id="zoom3" rel="400"><span>3</span></div>
			</div>
			
		
	        <div class="scroll-bar-wrap">
	    		<div class="scroll-bar" id="scroller"></div>
			</div>
		</div>
	
	</div>
	<!-- End Timeline -->
</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>