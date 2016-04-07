<?php
/*
Template Name: Crisis Alert
*/
$template_url = get_bloginfo('template_url');
global $crisis_details;
$crisis_details->the_meta();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?></title>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php echo $template_url; ?>/css/crisis.css" type="text/css" media="screen" />
	<?php wp_head(); ?>	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $template_url; ?>/images/favicon.ico">
	<script type="text/javascript" src="<?php echo $template_url; ?>/js/head.load.min.js"></script>
	<script type="text/javascript" src="<?php echo $template_url; ?>/js/crisis.js"></script>
</head>

<body class="<?php base_body_class(); ?>">

<div id="wrapper">

	<div class="header clearfix">
		<a href="<?php print get_option("home"); ?>/" title="<?php print get_bloginfo("name"); ?> Home">
			<img src="<?php echo $template_url; ?>/images/madico-crisis-logo.png" alt="Madico Corporation">
		</a>
		<?php if( $crisis_details->get_the_value('issue_date') ): ?>
		<span class="issue-date"><?php echo nl2br( $crisis_details->get_the_value('issue_date') ); ?></span>
		<?php endif; ?>
	</div><!--// end .header -->
	
	<?php if( $crisis_details->get_the_value('active') == 'yes' ): ?>
	
	<div class="content clearfix">

		<div class="main">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="overview">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
		
			<?php madico_custom_post_type_list('crisis'); ?>
			
		</div><!--// end .main -->
	
		<div class="sidebar">
			<ul>
			
				<li id="related-links">
					<h2>Related Links</h2>
					<ul>
						<?php while( $crisis_details->have_fields('links') ): ?>
						<?php if( $crisis_details->get_the_value('file') && $crisis_details->get_the_value('title') ): ?>
						<li><a href="<?php $crisis_details->the_value('file'); ?>"><?php $crisis_details->the_value('title'); ?></a></li>
						<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				</li><!--// end #related-links -->
				
				<li id="contact-information">
				
					<?php if( $crisis_details->get_the_value('primary_address') ): ?>
					<h2>Madico Inc. Locations</h2>
					<div class="text">
						<address>
							<?php echo nl2br( $crisis_details->get_the_value('primary_address') ); ?>
						</address>
					</div>
					<?php endif; ?>
					
					<?php if( $crisis_details->get_the_value('main_contact') ): ?>
					<h2>Madico Crisis Hotline</h2>
					<div class="text">
						<address>
							<?php echo nl2br( $crisis_details->get_the_value('main_contact') ); ?>
						</address>
					</div>
					<?php endif; ?>
					
				</li><!--// end #contact-information -->
				
			</ul>
		</div><!--// end .sidebar -->
	
	</div><!--// end .content -->
	
	<?php else: ?>
	
	<div class="content clearfix">
		<div class="main">
		
			<h1>No active crisis</h1>
			<div class="overview">
				<p>There are currently no active crisis at Madico Inc.</p>
			</div>
			
		</div><!--// end .main -->
	</div>
	
	<?php endif; ?>
	
	<div class="footer">
		<ul>
			<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
			<li><a href="<?php bloginfo('stylesheet_directory');?>/images/terms-conditions.pdf">Terms & Conditions</a></li>
		</ul>
		<p class="copyright">Copyright &copy; <?php print date("Y") ?> Madico, Inc.</p>
	</div><!--// end .footer -->

</div><!--// end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
