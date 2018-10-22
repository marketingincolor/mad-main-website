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
	        font-family: 'Montserrat', sans-serif;
	    }
	    .modal-content {
	        position: absolute;
	        top: 50%;
	        left: 50%;
	        transform: translate(-50%, -50%);
	        background-color: #000;
	        text-align:center;
	        /*padding: 1rem 1.5rem;*/
	        width: 80%;
	        height: 85%;
			color: #fff;
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
	    .modal-right h1 { font-size:50px; font-weight:600; /*margin-top:2.125em;*/ color:#fff; }
	    .modal-right h3 { font-size:24px; font-weight:300; margin:.25em 0em; color:#fff; }
	    .modal, .modal p { font-size:18px; font-weight:300; }
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
			.modal-left { 
				width:100%; 
				/*background: black url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t2-bg-mobile.png) no-repeat top center / contain;*/
			}
			.modal-right { width:auto; position:absolute; margin:0 2em; height:auto; margin-top: 50px; }
			.modal-right h1 { font-size:36px; line-height:1.1; }
			.modal-right h3 { font-size:20px; line-height:1.4; font-weight:400;  }
	    	.modal, .modal p { font-size:16px; font-weight:400; }
			.modal-content { background: #031727; }
			.modal-image-mobile { display:inline-block; }
			.modal-image-tablet { display:none; }
			.modal-top-logo { display:none; margin:0; }
			.modal-mob-logo { z-index:101; display:inline; position:absolute; left:calc(50% - 106px); top:30px;}
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; font-weight:bold; }
			form input[type="email"] { font-size:18px; }
			form input[type="submit"] { font-size:16px; }
		} /* Define mobile styles */

		@media only screen and (min-width: 40.063em) {
			.modal-left { 
				width:100%; 
				/*background: black url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t2-bg-tablet.png) no-repeat top center / contain;*/
				position:relative;
				top:-10px;
				z-index:-1;
			}
			.modal-right { width:auto; position:absolute; height:auto; margin-top: 50px; }
			.modal-right h1 { font-size:36px; line-height:1.1; }
			.modal-right h3 { font-size:16px; line-height:1.5; font-weight:400; }
	    	.modal, .modal p { font-size:16px; font-weight:400; }
			.modal-content { background: #031727; }
			.modal-image-mobile { display:none; }
			.modal-image-tablet { display:inline-block; }
			.modal-top-logo { display:none; margin:0; }
			.modal-mob-logo { /*z-index:101; display:inline; position:absolute; top:75px; left:20px;*/} 
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; }
			form input[type="email"] { font-size:18px; }
			form input[type="submit"] { font-size:16px; }
		} /* min-width 641px, medium screens */

		@media only screen and (min-width: 64.063em) {
			.modal-left { width:50%; background: none;}
			.modal-right { width:50%; position:relative; height:100%; margin-top: 0; }
			.modal-right h1 { font-size:36px; line-height:1.1; }
			.modal-right h3 { font-size:16px; line-height:1.5; font-weight:400; }
	    	.modal, .modal p { font-size:16px; font-weight:400; }
			.modal-content { 
				background: black url(<?php bloginfo('stylesheet_directory');?>/images/takeover-t4-bg-desk.png); 
				background-repeat: no-repeat;
				background-position: left center;/*background-position: -300px bottom;*/
				background-size: cover;/*background-size: auto auto;*/
			}
			.modal-image-mobile { display:none; }
			.modal-image-tablet { display:none; }
			.modal-top-logo { display:inline; margin: 2em 0em; }
			.modal-mob-logo { display:none; }
			.clue-inner{ width:auto; }
			.clue-inner-child span { font-weight:bold; font-size:18px; }
			.clue-inner-child .clue-callout { font-size:14px; line-height:1.8em; }
		} /* min-width 1025px, large screens */

		@media only screen and (min-width: 90.063em) { 
			.modal-right { height:100%; }
		} /* min-width 1441px, xlarge screens */


		@media only screen and (min-width: 120.063em) {

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
        <img src="<?php bloginfo('stylesheet_directory');?>/images/mad-bw-logo-tcc-sm.png" class="modal-mob-logo" style="margin:0 auto;">
        <div class="modal-left">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t4-bg-mobile.png" class="modal-image-mobile">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/takeover-t4-bg-tablet.png" class="modal-image-tablet">
        </div>
        <div class="modal-right"style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
        	<img src="<?php bloginfo('stylesheet_directory');?>/images/mad-bw-logo-tcc-sm.png" class="modal-top-logo">
        	<h1 style="padding:0px 40px;">The choice is becoming clearer!</h1>
        	<h3 style="padding:0px 40px;">The New Madico Experience is much more than window film. What can you expect? Find out next month!</h3>
        	<h3 style="padding:0px 40px; color:#fdb813;">Visit Booth #12461 at the SEMA Show on Oct. 30-Nov. 2 for a sneak peek of the New Madico Experience!</h3>
        	<br>
        	<p>Want the breaking news first? Sign up now!</p>
        	<!-- INSERT MICROFORM HERE -->
        	<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
			<!--<form action="https://madico.us11.list-manage.com/subscribe/post?u=9653db4e3db094bc0e2541532&amp;id=9078fc0562" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>-->
			<form action="https://madico.us11.list-manage.com/subscribe/post-json?u=9653db4e3db094bc0e2541532&amp;id=9078fc0562">
			    <div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<!--<label for="mce-EMAIL"><i class="general foundicon-mail"></i></label>-->
						<label for="mce-EMAIL"><img src="<?php bloginfo('stylesheet_directory');?>/images/env-icon.png"></label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address">
						<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="submit">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9653db4e3db094bc0e2541532_9078fc0562" tabindex="-1" value=""></div>
				    <div class="clear">
				    	<!--<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="submit">-->
				    </div>
			    </div>
				<div id="result"></div>
			</form>
			</div>
        	<br>
			<div class="clue-inner" style="text-align:left; display:flex; margin: 0 auto;">
				<div class="clue-inner-child" style="flex-grow:0;">
					<a href="https://www.facebook.com/MadicoInc/" target="_blank"><img src="http://madico.staging.wpengine.com/wp-content/themes/madico.com/images/fb-clue-icon.png" style="float:left; margin-right:10px; margin-top:-10px;"></a>
				</div>
				<div class="clue-inner-child">
					<span style="font-weight:bold; font-size:18px;"><a href="https://www.facebook.com/MadicoInc/" target="_blank" style="color:#fff; text-decoration:none;">Want more clues</a></span><br>
					<p class="clue-callout" style="font-size:14px; line-height:1.8em"><a href="https://www.facebook.com/MadicoInc/" target="_blank" style="color:#fff; text-decoration:none;">Check out our Facebook Page!</a></p>
				</div>
			</div>
			
			<!--End mc_embed_signup-->
        	<!-- END MICROFORM -->
    	</div>
    </div>
</div>

<script>
	var modal = document.querySelector(".modal");
    //var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

	function setTakeoverCookie() {
	  /*if (document.cookie.replace(/(?:(?:^|.*;\s*)takeover1\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
	    document.cookie = "takeover1=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
	  }*/
	  if (document.cookie.replace(/(?:(?:^|.*;\s*)takeover3\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
	    document.cookie = "takeover3=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
	  }
	}

    function toggleModal() {
    	//setTakeoverCookie();
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
	window.onload = function() {
		if ( document.cookie.indexOf('takeover3=') == -1 ) {
            dataLayer.push({
              'event': 'takeoverFormTwoShownHidden',
              'takeover_form_two_form_name': 'Takeover Form 2',
              'takeover_form_two_form_displayed': 'Shown'
            });
			toggleModal();
		}

        else {
            dataLayer.push({
              'event': 'takeoverFormTwoShownHidden',
              'takeover_form_two_form_name': 'Takeover Form 2',
              'takeover_form_two_form_displayed': 'Hidden'
            });
        }

	};

	// Newsletter submittal using Javascript
	function mcCustomFormSubmit(event) {
	    event.preventDefault();
	    this._form = this.querySelector("form");
	    this._action = this._form.getAttribute("action");
	    this._input = this._form.querySelector("input.email").value;
	    document.MC_callback = function(response) {
	        if(response.result == "success") {
                dataLayer.push({'event': 'takeoverFormTwoSubmit'});
                document.getElementById("result").innerHTML ="Thank you! Stay tuned for more info!";

	        } else {
	            document.getElementById('result').innerHTML ="Thank you for your interest! But it looks like you are already on our mailing list!";
                // dataLayer.push({
                //   'event': 'takeoverFormOneSubmit',
                //   'dlv_category': 'Form',
                //   'dlv_action': 'Submitted'
                //   'takeover_form_one_form_name': 'Takeover Form 1',
                //   'takeover_form_one_form_displayed': 'Shown'
                // });
	        }
	    }
	    // generate script
	    this._script = document.createElement("script");
	    this._script.type = "text/javascript";
	    this._script.src = this._action + "&c=document.MC_callback&EMAIL=" + this._input;
	    // append script to head
	    document.getElementsByTagName("head")[0].appendChild(this._script);
	}
	var signupform = document.querySelector("#mc_embed_signup")
	signupform.addEventListener("submit", mcCustomFormSubmit);
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
