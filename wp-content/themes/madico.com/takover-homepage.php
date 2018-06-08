<?php 
/**
 * Template Name: Homepage TakeOver 
 *
 * Custom Home Page for MADX Takeover Campaign, with Bootstrap enabled.
 */
?>
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800,900" rel="stylesheet">

	<style>
		#mc_embed_signup_scroll {
	    	background-color: white;
    		display: inline-block;
    		padding: 3px;
    		border-radius: 50px;
    		color: black;
    		margin: 20px 0px;
	    }
		.takeover-modal {
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
	    .takeover-modal-content {
	        position: absolute;
	        top: 50%;
	        left: 50%;
	        transform: translate(-50%, -50%);
	        background-color: #000;
	        padding: 1rem 1.5rem;
	        width: 80%;
	        height: 85%;
			color: #fff;
	        z-index:100;
	        -moz-box-shadow:-10px 10px 30px rgba(0,0,0,0.6);
	        -webkit-box-shadow:-10px 10px 30px rgba(0,0,0,0.6);
	        box-shadow:-10px 10px 30px rgba(0,0,0,0.6);
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

	        z-index:101;
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
	    	float:left;
	    	background: black url(<?php bloginfo('stylesheet_directory');?>/images/MadX-Takeover-Teaser-001_03.jpg);
	    	background-repeat:no-repeat;
	    	background-position:center center;
	    	background-size:cover;
	    	height:100%;
	    }
	    .modal-left img { width:100%; }
	    .modal-right { float:right; text-align:center; min-width:400px; }
	    .modal-right h1 { font-size:60px; font-weight:600; margin-top:2.125em; color:#fff; }
	    .modal-right h3 { font-size:24px; font-weight:300; margin:.25em 0em; color:#fff; }
	    .takeover-modal, .takeover-modal p { font-size:18px; font-weight:300; }
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

		/* --------------------------------------------------*/
		/* ---- START Customizations for RESPONSIVE DESIGN  */
		/* ---- All classes preambled with 'th-' are */
		/* ---- variants of actual classes in theme. */
		/* ---- TODO:Move to MAIN THEME; */
		/* --------------------------------------------------*/
		#lang_flag_sel img { margin: 2px 4px; padding: 0px; }
		#content div.menu { right: 0px; width: inherit; }
		#content div.menu a { height:28px; }
		#th-footer { background: #e3e3e3 none repeat scroll 0% 0%; }
		#th-footer .links { float: left; margin: 12px auto 0px; }
		#th-footer .links .menu li, 
		#th-footer .links .menu { display: inline; list-style-type: none; margin: 0px; padding: 0px; }
		#th-footer .links .menu li a, 
		#th-footer .links .copyright {
		    color: #666;
		    display: inline;
		    list-style-type: none;
		    text-align: left;
		    text-decoration: none;
		    font-size: 12px;
		    line-height: 18px;
		    margin: 0px;
		}
		#th-footer .links .menu li a, 
		#th-footer .links .menu a { padding: 4px 8px; }
		#th-footer .container { padding: 15px 0px; }
		#th-footer .icons { /*float: right;*/ padding: 0px 20px 0px 0px; text-align:right; }
		.splash { height:inherit !important; width:100%; }
		.splash p { width:100%; }
		.splash p.full { width:100%; }
		#content div.th-background::before {
		    background: #093c71 none repeat scroll 0% 0%;
		    content: "";
		    display: block;
		    height: 141px;
		    left: 0px;
		    position: absolute;
		    top: 0px;
		    width: 50%;
		    z-index: 1;
		}
		#content div.th-background::after {
		    background: #356793 none repeat scroll 0% 0%;
		    content: "";
		    display: block;
		    height: 141px;
		    position: absolute;
		    right: 0px;
		    top: 0px;
		    width: 50%;
		    z-index: 1;
		}
		#content div.th-background {
		    padding: 111px 0px 0px;
		    position: relative;
		}
		#content div.th-background div.container {
		    border-radius: 3px;
		    margin: 0px auto;
		    padding: 0px 0px 1px;
		    position: relative;
		    /* width: 940px; */
		    z-index: 3;
		}
		#content div.th-background .background-graphic {
		    background: rgba(0, 0, 0, 0) url(<?php bloginfo('stylesheet_directory');?>/images/madico-header-bg.png) no-repeat scroll 65% 0px;
		    height: 141px;
		    left: 0px;
		    position: absolute;
		    right: 0px;
		    top: 0px;
		    z-index: 2;
		}
		#content div.page { width: inherit; }
		.carousel-inner>.item>a>img, .carousel-inner>.item>img { width:100%; }
		.carousel-caption {
		    right: 0px !important;
		    left: 0px !important;
		    padding-bottom: 0px;
		    bottom:0px !important;
		    top:0px !important;
		}
		/* --------------------------------------------------*/
		/* ---- END Customizations for RESPONSIVE DESIGN */
		/* --------------------------------------------------*/

		@media only screen { 
			.modal-left { width:100%; height:95%; }
			.modal-right { width:100%; position:absolute; margin-top: 15vh; }
		} /* Define mobile styles */

		@media only screen and (min-width: 40.063em) {
			.modal-left { width:100%; height:95%; }
			.modal-right { width:100%; position:absolute; margin-top: 15vh; }
		} /* min-width 641px, medium screens */

		@media only screen and (min-width: 64.063em) {
			.modal-left { width:50%; }
			.modal-right { width:50%; position:relative; margin-top: 0; }
		} /* min-width 1025px, large screens */

		@media only screen and (min-width: 90.063em) { 

		} /* min-width 1441px, xlarge screens */


		@media only screen and (min-width: 120.063em) {

		} /* min-width 1921px, xxlarge screens */

	</style>

	<?php wp_head(); ?>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!--<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">-->
	<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>-->

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
</head>

<body class="<?php base_body_class(); ?>">

<?php if(TRUE): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<div class="takeover-modal">
    <div class="takeover-modal-content">
        <span class="close-button takeover1-close">&times;</span>
        <div class="modal-left"> &nbsp;
        	<!--<img src="<?php bloginfo('stylesheet_directory');?>/images/MadX-Takeover-Teaser-001_03.jpg">-->
        </div>
        <div class="modal-right">
        	<h1>Knock. Knock.</h1>
        	<h3>Something big is coming in 2018.</h3>
        	<br>
        	<br>
        	<br>
        	<p>Be one of the first to know about it!</p>
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

			<!--End mc_embed_signup-->
        	<!-- END MICROFORM -->
    	</div>
    </div>
</div>

<script>
	var modal = document.querySelector(".takeover-modal");
    //var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

	function setTakeoverCookie() {
	  if (document.cookie.replace(/(?:(?:^|.*;\s*)takeover1\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
	    document.cookie = "takeover1=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
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
		if ( document.cookie.indexOf('takeover1=') == -1 ) {
            dataLayer.push({
              'event': 'takeoverFormOneShownHidden',
              'takeover_form_one_form_name': 'Takeover Form 1',
              'takeover_form_one_form_displayed': 'Shown'
            });
			toggleModal();
		}

        else {
            dataLayer.push({
              'event': 'takeoverFormOneShownHidden',
              'takeover_form_one_form_name': 'Takeover Form 1',
              'takeover_form_one_form_displayed': 'Hidden'
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
                dataLayer.push({'event': 'takeoverFormOneSubmit'});
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
	<div class="th-background"><div class="background-graphic"></div>
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


<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- END STANDARD HEADER FILE -->
<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- START HOME TEMPLATE FILE -->
<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->


<?php /*get_header();*/ $custom_fields = get_post_custom(); ?>

	<!--<div class="splash">
		
		<ul id="home_banner">

			<?php
			/*the_post();
			$postID = $post->ID;
			$h = 330;
			for ($i = 0; $i < 10; $i++) {
				$slideshow_image = get_post_meta($postID, 'cft_slideshow'.$i.'_image', true);
				$slideshow_text  = get_post_meta($postID, 'cft_slideshow'.$i.'_description', true);
				
				if(!empty($slideshow_image)) {
				
				$background = wp_get_attachment_image_src( $slideshow_image, array(940,$h) );*/
				?>
				<li style="background:url(<?php //print $background[0]; ?>);height:<?php echo $h;?>px;width:100%;<?php //print ($i > 0)? "display:none;" : ""; ?>">
				<?php //print $slideshow_text;
				//echo '</li>';
				//}
			//}
			?>
		</ul>

	</div>-->


	<div id="myCarousel" class="carousel splash" data-ride="carousel" data-interval="5000">
	  <!-- Indicators -->
	  <!--<ol id="home_banner" class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>-->

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">

			<?php
			the_post();
			$postID = $post->ID;
			$h = 330;
			for ($j = 0; $j < 10; $j++) {
				$slideshow_image = get_post_meta($postID, 'cft_slideshow'.$j.'_image', true);
				$slideshow_text  = get_post_meta($postID, 'cft_slideshow'.$j.'_description', true);
				
				if(!empty($slideshow_image)) {
			
					$background = wp_get_attachment_image_src( $slideshow_image, array(940,$h) );
					?>
					<div class="item<?php print ($j > 0)? "" : " active"; ?>">
					<img src="<?php print $background[0]; ?>">
					<div class="carousel-caption">
					<?php print $slideshow_text; ?>
					</div>
					</div>
				<?php }
			}
			?>

	  </div>

	  <!-- Left and right controls -->
	  <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>-->
	</div>


	



	<div id="home-banner">
	<?php echo get_post_meta($postID, "ssheadline", true); ?>
	</div>
	
	</div>

	</div>
	</div>
	</div>

<div id="home-sections">
<div id="home-sections-wrapper" style="width:100%;">
<?php if ( isset($custom_fields['pillartitle1'][0]) && !empty($custom_fields['pillartitle1'][0]) ): ?>
<div id="pillars" class="pillars">
	<?php 
	for ( $i = 1; $i < 5; $i++ ):
		$ptitle = ( $custom_fields["pillartitle$i"][0] ) ? $custom_fields["pillartitle$i"][0] : '';
		$plink  = ( $custom_fields["pillarlink$i"][0] ) ? $custom_fields["pillarlink$i"][0] : '';
		$ptext  = ( $custom_fields["pillartext$i"][0] ) ? $custom_fields["pillartext$i"][0] : '';
		$button_text = ( is_page(4) || is_page(6) ) ? 'Jump to Products' : 'Learn More';
		?>
		<a href="<?php echo $plink; ?>" title="<?php echo $ptitle;?> Products" id="n0<?php echo $i;?>"><?php echo $ptitle;?> Products</a>
	<?php endfor; ?>
</div><!--// end .pillars -->
<?php endif; ?>

<div class="cms container">
	<?php the_content(); ?>
</div>
<?php 
//$colTest = get_post_meta($postID, "footercol1-title", true);
$colTest = '';
if ( ! empty( $colTest ) && $GLOBALS['section'] !== 'specialty-film' ) {
?>
<div id="columns">

	<ul class="inner clearfix">
		<?php 
		for($i = 1; $i < 5; $i++) {
			
			$fctitle = get_post_meta($postID, "footercol$i-title", true);
			$fctext  = get_post_meta($postID, "footercol$i-text", true);
			$fclink  = get_post_meta($postID, "footercol$i-link", true);
			if(!empty($fctitle)) {
			?>
			<li class="col<?php if ($i == 3) { echo(" last"); } ?>">
				<div class="text">				
					<h2><?php echo $fctitle ?></h2>
					<?php echo $fctext ?>
				</div>				
				<a href="<?php echo $fclink ?>" class="full"><img class="alignnone" width="10" height="11" alt="Document" src="/wp-content/uploads/2011/01/file1.gif" /><?php _e('Read More', 'madicotheme'); ?></a>
			</li>
		<?php }
		}	 ?>
	</ul>
</div>
<?php } ?>
</div><!-- end #home-sections -->
</div>

<?php //get_footer(); ?>


<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- END HOME TEMPLATE FILE -->
<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- START STANDARD FOOTER FILE -->
<!-- \\\\\\\\\\\\\\\\\\\\\\\\ -->


	<div id="th-footer">
		<div class="container">
			<div class="social col-sm-12 clearfix" style="text-align:center; padding:25px 0px;">
				<a href="https://www.facebook.com/MadicoWindowFilms/" rel="publisher" class="icon facebook"><i class="ion-social-facebook""></i></a>
				<a href="https://twitter.com/MadicoInc" rel="publisher" class="icon twitter"><i class="ion-social-twitter"></i></a>
				<a href="https://plus.google.com/109912744876993567602" rel="publisher" class="icon google"><i class="ion-social-googleplus"></i></a>
				<a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQH4pQC6awX9PQAAAWG5Fk0woEqotcyFy4It5KvovCWpSRchvMWQ8Pb39F9DmylOVSA-FCL-nkOfMdmyUTXfzCEa4n0Cx9fIWadav0bXm0dWw3h1c0Rmk8C1lF6o2r5klqasTWA=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fmadicoinc" class="icon linkedin"><i class="ion-social-linkedin"></i></a>
				<a href="https://www.youtube.com/user/MadicoFilms" rel="publisher" class="icon youtube"><i class="ion-social-youtube"></i></a>
			</div>
			<div class="links col-sm-12 col-md-6 clearfix">
				<?php wp_nav_menu(array("depth" => 1, 'menu_class' => 'menu clearfix')); ?>
				<p class="copyright">
					<?php echo __('Copyright', 'madicotheme') . ' &copy; ' . date("Y") . ' Madico, Inc.'; ?> 
				</p>
			</div>
			<div class="icons col-sm-12 col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logos.png" alt="Madico is Intertek &amp; ANAB Accredited" />
			</div>
		</div>
	</div>
	
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/global.js"></script>

	<script type="text/javascript"> 
	adroll_adv_id = "L2B2VNCRHZDNPOKZWSZFWQ"; 
	adroll_pix_id = "JJLCAZAM25HUPALQ5DOR3G"; 
	(function () { 
	var oldonload = window.onload; 
	window.onload = function(){ 
	   __adroll_loaded=true; 
	   var scr = document.createElement("script"); 
	   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com"); 
	   scr.setAttribute('async', 'true'); 
	   scr.type = "text/javascript"; 
	   scr.src = host + "/j/roundtrip.js"; 
	   ((document.getElementsByTagName('head') || [null])[0] || 
	    document.getElementsByTagName('script')[0].parentNode).appendChild(scr); 
	   if(oldonload){oldonload()}}; 
	}()); 
	</script> 

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
	<!-- End Google Tag Manager -->
	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vimeo.ga.js"></script>
	</body>

</html>