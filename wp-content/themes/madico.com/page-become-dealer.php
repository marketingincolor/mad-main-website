<?php 
/**
 * Template Name: Become Dealer Landing
 *
 * Landing page template without a sidebar
 */
?>
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

	<div id="alt-content" style="background: #fff repeat-x scroll 0 bottom; margin: 0; overflow: hidden; width: 100%;">
	<div class="alt-background" style="padding: 111px 0 0; position: relative;"><div class="background-graphic" style="background:#00467f url('<?php bloginfo('template_url'); ?>/images/prospecting-landing-page-header.png')no-repeat scroll 65% 0; height: 141px;left: 0;position: absolute;right: 0;top: 0; z-index: 2;"></div>
	<div class="alt-container" style="border-radius: 3px;margin: 0 auto;padding: 0 0 1px;position: relative;width: 940px;z-index: 3;">

		<div class="branding" style="padding-left: 20px; top: -100px;">
			<a href="<?php print get_option("home"); ?>"><?php print get_bloginfo("name"); ?></a>
		</div>

		<!--<div class="menu" id="dave">
			<ul>
				<?php
				$args = array(
					'sort_column' => 'menu_order',
					'title_li' => '',
					'depth' => 3,
					'walker' => new Madico_Custom_Walker_Page()
				);
				wp_list_pages($args);
				?>
			</ul>
		</div>-->

		<div class="page">

            <!--<div class="splash">
                <?php include( 'banner.php'); ?>
            </div>-->

            <?php show_breadcrumb(); ?>

            <div id="columns">
                <div class="main">
                    <?php the_post(); ?>
                    <h1><?php //the_title(); ?> &nbsp;</h1>

                    <div class="cms" style="font-size:16px;">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div><!--// end #columns -->

        </div>

</div>
</div>
</div>

<?php get_footer(); ?>