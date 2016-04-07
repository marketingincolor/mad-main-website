<?php
global $language;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
	<div class="background">
	<div class="container">
		<div class="header">
			<?php madico_display_logo(); ?>

			<?php if ( $language != 'chinese' ): ?>
			<div class="search">
				<?php require_once(TEMPLATEPATH . "/searchform.php"); ?>
			</div>
			<?php else: ?>
			<div class="tagline">
				<span>中國</span>
			</div>
			<?php endif; ?>

			<?php global $current_site; if ( $current_site !== 'safety-shield' ) : ?>
			<div class="utility">
				<?php if ( $section == 'window-film' ) : ?>
				<a href="https://hub.hubcentrix.com/Madico" class="sicon brand-hub">Brand Hub</a>
				<a href="http://madico.know-where.com/madico/" class="sicon dealer-locator external-ga-link">Dealer Locator</a>
				<?php endif; ?>
				<a href="http://www.linkedin.com/company/madico?trk=hb_tab_compy_id_119045" class="sicon linkedin"><?php _e('LinkedIn'); ?></a>
				<?php if ( is_crisis() ): ?><a href="/crisis-alert/" class="sicon crisis-alert">Madico Crisis Alert</a><?php endif; ?>
			</div>
			<?php endif; ?>

			<?php _madico_main_menu(); ?>
		</div>
		<div class="page">