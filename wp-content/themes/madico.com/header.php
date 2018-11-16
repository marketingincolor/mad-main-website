<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php global $language; ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <?php if(TRUE): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?></title>
	<meta name="author" content="http://www.kevinleary.net" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?v=' . filemtime( get_stylesheet_directory() . '/css/style.css' ); ?>" type="text/css" media="screen" />
	<link href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" rel="stylesheet" media="print" />
	<!--[if IE]><link href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" rel="stylesheet" media="all" /><![endif]-->

	<!--<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">-->
	<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>-->

	<!-- Latest compiled and minified CSS -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
	<!-- Latest compiled and minified JavaScript -->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900" rel="stylesheet">

	<style>
        @font-face {font-family: 'AvenirLTStd-Light';src: url('http://www.madico.com/webfonts/374950_0_0.eot');src: url('http://www.madico.com/webfonts/374950_0_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_0_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_0_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_0_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTStd-Book';src: url('http://www.madico.com/webfonts/374950_2_0.eot');src: url('http://www.madico.com/webfonts/374950_2_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_2_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_2_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_2_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTPro-Roman';src: url('http://www.madico.com/webfonts/374950_4_0.eot');src: url('http://www.madico.com/webfonts/374950_4_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_4_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_4_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_4_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTStd-Medium';src: url('http://www.madico.com/webfonts/374950_6_0.eot');src: url('http://www.madico.com/webfonts/374950_6_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_6_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_6_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_6_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTStd-Heavy';src: url('http://www.madico.com/webfonts/374950_8_0.eot');src: url('http://www.madico.com/webfonts/374950_8_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_8_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_8_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_8_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTStd-Black';src: url('http://www.madico.com/webfonts/374950_A_0.eot');src: url('http://www.madico.com/webfonts/374950_A_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_A_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_A_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_A_0.ttf') format('truetype');}
        @font-face {font-family: 'AvenirLTStd-BlackOblique';src: url('http://www.madico.com/webfonts/374950_B_0.eot');src: url('http://www.madico.com/webfonts/374950_B_0.eot?#iefix') format('embedded-opentype'),url('http://www.madico.com/webfonts/374950_B_0.woff2') format('woff2'),url('http://www.madico.com/webfonts/374950_B_0.woff') format('woff'),url('http://www.madico.com/webfonts/374950_B_0.ttf') format('truetype');}

		#mc_embed_signup_scroll {
	    	background-color: white;
    		display: inline-block;
    		padding: 3px;
    		border-radius: 50px;
    		color: black;
    		margin: 20px 0px;
	    }
		.modal {
	        position: fixed;
	        left: 0;
	        top: 0;
	        width: 100%;
	        height: 100%;
	        opacity: 0;
	        visibility: hidden;
	        transform: scale(1.1);
	        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
	        z-index:100;
	        /*font-family: 'AvenirLTStd-Light', sans-serif;*/
	        font-family: 'AvenirLTPro-Roman', sans-serif;
	    }
	    .modal-content {
	        position: absolute;
	        top: 50%;
	        left: 50%;
	        transform: translate(-50%, -50%);
	        background-color: #fff;
	        text-align:center;
	        /*padding: 1rem 1.5rem;*/
	        width: 60%;
	        height: 85%;
			color: #636466;
	        z-index:100;
	        -moz-box-shadow:5px 10px 30px rgba(0,0,0,0.6);
	        -webkit-box-shadow:5px 10px 30px rgba(0,0,0,0.6);
	        box-shadow:5px 10px 30px rgba(0,0,0,0.6);
	        /*background: black url(<?php bloginfo('stylesheet_directory');?>/images/MadX-Takeover-Teaser-001_03.jpg);
	    	background-repeat:no-repeat;
	    	background-size:200px 200px;*/
	    }
	    .close-button {
	        float: right;
	        width: 1.5rem;
	        line-height: 1.5rem;
	        text-align: center;
	        cursor: pointer;
	        font-size:2em;
	        font-weight:800;
			/*padding:15px 15px 0px 0px;*/
	        z-index:101;
	        position:absolute;
	        right:15px;
	        top:15px;
	    }
	    .close-button:hover {
	        color: darkgray;
	    }
	    .show-modal {
	        opacity: 1;
	        visibility: visible;
	        transform: scale(1.0);
	        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
	        z-index:100;
	    }
	    .modal-left, .modal-right {
	    	/*width:50%;*/
	    }
	    .modal-left {
	    	/*float:left;*/
	    	/*background: black url(<?php bloginfo('stylesheet_directory');?>/images/MadX-Takeover-Teaser-001_03.jpg);*/
	    	background: none;
	    	background-repeat:no-repeat;
	    	background-position:center center;
	    	background-size:cover;
	    	/*height:100%;*/
	    }
	    .modal-left img { width:100%; }
	    .modal-right { float:right; text-align:center; min-width:400px; clear:both; }
	    .modal-right h1 { font-size:32px; font-weight:600; /*margin-top:2.125em;*/ color:#00467F; font-family: 'Montserrat', sans-serif; }
	    .modal-right h3 { font-size:24px; font-weight:normal; margin:.25em 0em; color:#636466; }
	    .modal, .modal p { font-size:18px; font-weight:normal; }
	    .yellow-button { 
	       text-transform: uppercase;
		    color: #FFF !important;
		    text-decoration: none !important;
		    font-weight:bold;
		    background-color: #e09e10;
		    padding: 15px 35px;
		    border-radius: 30px;
		    font-size: 16px;
		    letter-spacing: 0.125em;
		}
		.clue-inner{ text-align: left; width: 300px; margin: 0 auto; display:flex; align-items:center; }
		.clue-inner-child{ flex-grow:1; }
		form { margin-bottom:auto; }
	    form input[type="email"] {
	    	border:none;
	    	font-size:16px;
	    }
	    form input[type="submit"] {
	    	-moz-border-radius: 5px;
    		-webkit-border-radius: 5px;
    		-moz-box-shadow: none;
    		-webkit-box-shadow: none;
    		text-shadow: none;
    		border-bottom:none;
    		border-radius:50px !important;
    		padding:10px 30px;
    		font-weight:bold;
    		font-size:14px;
    		text-transform:uppercase;
    		border-radius: 20px;
    		letter-spacing: 3px;
    		font-weight: bold;
    		font-family: inherit;
    		max-height:40px;
    		background:#767676;
		}
		form label {
			padding-left:18px;
			vertical-align:middle !important;
		}
		form input[type="submit"]:hover, form input.submit:hover {
			background:#A9A9A9;
		}

		@media only screen { 
			.modal-content { width: 80%; }
			.modal-left { 
				width:100%; 
				/*background: black url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t2-bg-mobile.png) no-repeat top center / contain;*/
			}
			.modal-right { width:auto; position:absolute; margin:0 2em; height:auto; margin-top: 50px; }
			.modal-right h1 { font-size:32px; line-height:1.1; }
			.modal-right h3 { font-size:20px; line-height:1.4; font-weight:normal; color:#636466; }
	    	.modal, .modal p { font-size:16px; font-weight:normal; }
			/*.modal-content { background: #031727; }*/
			.modal-image-mobile { display:inline-block; }
			.modal-image-tablet { display:none; }
			.modal-image-desk { display:none; }
			.modal-top-logo { display:none; margin:0; }
			.modal-mob-logo { z-index:101; display:inline; position:absolute; left:calc(50% - 106px); top:30px;}
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; font-weight:bold; }
			form input[type="email"] { font-size:18px; }
			form input[type="submit"] { font-size:16px; }
		} /* Define mobile styles */

		@media only screen and (min-width: 40.063em) {
			.modal-content { width: 80%; }
			.modal-left { 
				width:100%; 
				/*background: black url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t2-bg-tablet.png) no-repeat top center / contain;*/
				position:relative;
				top:-10px;
				z-index:-1;
			}
			.modal-right { width:auto; position:absolute; height:auto; margin-top: 50px; }
			.modal-right h1 { font-size:32px; line-height:1.1; }
			.modal-right h3 { font-size:16px; line-height:1.5; font-weight:normal; color:#636466; }
	    	.modal, .modal p { font-size:16px; font-weight:normal; }
			/*.modal-content { background: #031727; }*/
			.modal-image-mobile { display:none; }
			.modal-image-tablet { display:inline-block; }
			.modal-image-desk { display:none; }
			.modal-top-logo { display:none; margin:0; }
			.modal-mob-logo { /*z-index:101; display:inline; position:absolute; top:75px; left:20px;*/} 
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; }
			form input[type="email"] { font-size:18px; }
			form input[type="submit"] { font-size:16px; }
		} /* min-width 641px, medium screens */

		@media only screen and (min-width: 64.063em) {
			.modal-content { width: 60%; }
			.modal-left { /*width:50%; background: none;*/ display:none;}
			.modal-right { width:auto; position:relative; height:100%; margin-top: 0; }
			.modal-right h1 { font-size:32px; line-height:1.1; }
			.modal-right h3 { font-size:16px; line-height:1.5; font-weight:normal; color:#636466; }
	    	.modal, .modal p { font-size:16px; font-weight:normal; }
			.modal-content { 
				/*background: white url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-bg-desk.png); */
				background-repeat: no-repeat;
				background-position: center left;/*background-position: -300px bottom;*/
				background-size: contain;/*background-size: auto auto;*/
			}
			.modal-image-mobile { display:none; }
			.modal-image-tablet { display:none; }
			.modal-image-desk { display:inline-block; /*max-height:400px;*/ max-width:90%; }
			.modal-top-logo { display:none; /*display:inline; margin:1em 0em 2em;*/ }
			.modal-mob-logo { display:none; }
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; }
		} /* min-width 1025px, large screens */

		@media only screen and (min-width: 90.063em) { 
			.modal-content { width: 60%; }
			.modal-right { height:100%; }
		} /* min-width 1441px, xlarge screens */


		@media only screen and (min-width: 120.063em) {
			.modal-content { width: 60%; }
		} /* min-width 1921px, xxlarge screens */

	</style>

	<?php wp_head(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
</head>

<body class="<?php base_body_class(); ?>">

<?php if(TRUE): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<div class="modal">
    <div class="modal-content">
        <div class="close-button takeover1-close">&times;</div>
        <div class="modal-left">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-bg-mobile.png" class="modal-image-mobile">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-bg-tablet.png" class="modal-image-tablet">
        </div>
        <div class="modal-right"style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-bg-tablet.png" class="modal-image-desk">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-logo.png" class="modal-top-logo">
        	<h1>The New Madico Experience Is Here!</h1>
        	<h3 style="padding:0px 40px;">Open the door to exciting, new opportunities! Spearheaded by our President and CEO, Shawn Kitchell, we've reimagined customer support in new, innovative ways.</h3>
        	<h3>The New Madico Experience is all about you!</h3>
        	<br>
			<a href="<?php echo site_url(); ?>/madico-experience" class="yellow-button" target="_blank">Learn More</a>
        	<br>
			<div class="clue-inner" style="text-align:left; display:none; margin: 0 auto;">
				<!--<div class="clue-inner-child" style="flex-grow:0;">
					<a href="https://www.facebook.com/MadicoInc/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t5-fb-icon.png" style="float:left; margin-right:10px; margin-top:-10px;"></a>
				</div>
				<div class="clue-inner-child">
					<p class="fb-callout" style="line-height:1.8em; margin-bottom:0.5em;"><a href="https://www.facebook.com/MadicoInc/" target="_blank" style=" text-decoration:none; color:#636466;">Check out our Facebook Page!</a></p>
				</div>-->
			</div>
			
    	</div>
    </div>
</div>

<script>
	var modal = document.querySelector(".modal");
    //var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

	function setTakeoverCookie() {
	  if (document.cookie.replace(/(?:(?:^|.*;\s*)takeover4\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
	    document.cookie = "takeover4=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
	  }
	}

    function toggleModal() {
    	setTakeoverCookie();
        modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    //trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
    // REMOVED -- takover form data push
	window.onload = function() {
		if ( document.cookie.indexOf('takeover4=') == -1 ) {
			toggleModal();
		}

        else {
        }

	};
	// REMOVED -- Newsletter submittal using Javascript
</script>



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
			<?php endif; ?>

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
