<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php global $language; ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?></title>
	<meta name="author" content="http://www.kevinleary.net" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?v=' . filemtime( get_stylesheet_directory() . '/css/style.css' ); ?>" type="text/css" media="screen" />
	<link href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" rel="stylesheet" media="print" />
	<!--[if IE]><link href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" rel="stylesheet" media="all" /><![endif]-->
	<?php wp_head(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
</head>

<body class="<?php base_body_class(); ?>">

	<div id="content">
	<div class="background"><div class="background-graphic"></div>
	<div class="container">

		<div class="branding">
			<a href="<?php print get_option("home"); ?>"><?php print get_bloginfo("name"); ?></a>
		</div>
		<?php //do_action('icl_language_selector'); ?>
		<?php //do_action('wpml_add_language_selector'); ?>
		<div id="lang_flag_sel"><?php language_selector_flags(); ?></div>
		<?php if ( $language != 'chinese' ): ?>
		<div class="search">
			<?php require_once(TEMPLATEPATH . "/searchform.php"); ?>
		</div>
		<?php else: ?>
		<div class="tagline">
			<span>中國</span>
		</div>
		<?php endif; ?>

		<div class="utility">
			<?php if ( is_front_page() || is_home()  ): ?>
			<a href="http://dealerdirectory.madico.com/" class="sicon custom-button external-ga-link" style="color:#fff !important;">Find a Madico Window Films Dealer</a>
			<?php endif; ?>
			<?php global $section; if ( $section == 'window-film' ): ?>
			<a href="http://dealerdirectory.madico.com/" class="sicon custom-button external-ga-link" style="color:#fff !important;">Find a Madico Window Films Dealer</a>
			<a href="https://hub.hubcentrix.com/Madico" class="sicon brand-hub">Brand Hub</a>
			<!--<a href="http://madico.know-where.com/madico/" class="sicon dealer-locator external-ga-link">Dealer Locator</a>-->
			<a href="https://plus.google.com/109912744876993567602" rel="publisher" class="sicon google"><i class="ion-social-googleplus"></i></a>
			<?php endif; ?>
			<!--<a href="http://www.linkedin.com/company/madico?trk=hb_tab_compy_id_119045" class="sicon linkedin"><i class="ion-social-linkedin"></i></a>-->
			<?php
			/* Disabled until translation is updated
			if ( class_exists('SitePress') && ( is_page('pv-backsheets') || is_child('pv-backsheets') || $language == 'chinese' ) )
				do_action('icl_language_selector');
			*/
			?>
			<?php if ( is_crisis() ): ?><a href="/crisis-alert/" class="sicon crisis-alert">Madico Crisis Alert</a><?php endif; ?>
		</div>

		<div class="menu" id="dave">
			<ul>
				<?php
				/*$args = array(
					'sort_column' => 'menu_order',
					'title_li' => '',
					'depth' => 3,
					'walker' => new Madico_Custom_Walker_Page()
				);
				wp_list_pages($args);*/
                wp_nav_menu( array(
                    'menu' => 'primary',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'items_wrap' => '%3$s',
					'depth' => 3,
                    'walker' => new Madico_Custom_Walker_Menu()
                ) );
				?>
			</ul>
		</div>

		<div class="page">