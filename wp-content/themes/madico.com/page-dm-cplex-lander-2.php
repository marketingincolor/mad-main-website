<?php 
/**
 * Template Name: DM ClearPlex Landing Page 2
 *
 * Landing page template without a sidebar
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
        <!-- End Google Tag Manager -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <meta property="og:title" content="ClearPlex by Madico" />
        <meta property="og:description" content="ClearPlex by Madico windshield protection absorbs the impact of rocks and road debris, leaving windshields in pristine condition. Learn more here." />
        <meta property="og:image" content="http://www.madico.com/wp-content/uploads/Introducing-ClearPlex-by-Madico.jpg" />
        <title>Introducing ClearPlex&reg; by Madico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.madico.com/wp-content/themes/madico.com/images/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>jQueryWP = jQuery;</script>
        <script type='text/javascript' src='http://www.madico.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/jquery.json.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/conditional_logic.min.js?ver=1.9.16'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
        <style>
            /* Foundation Overrides */
            .row {
                margin: 0 auto;
                max-width: 100em; /*changes 62.5em (1000px) to 100mem (1600px)*/
                width: 100%;
            }
            /* Page Components */
            html,body,h1,h2,h3,h4,h5,h6,p {
            	font-family: 'Montserrat', sans-serif;
            }
            h3{
            	font-weight: 300;
            }
            .dm16 .gform_heading {display:none;}
            .dm16 .gform_description h3 { padding:0.175em 0;}
            .dm16 .gform_body { display:inline-block; color:#fff; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
            .dm16 .gform_body li:nth-child(n+5) { clear:unset; float:unset; width:95%; }
            .dm16 .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .dm16 .gform_body li:nth-last-child .gfield_description { display:none; }
            
            .dm16 .gform_body li label { color:#fff; text-align:left; }
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; }
            #input_28_9{resize:none}
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer {margin:1em 2em}
            .dm16 .gform_footer .button {
            	text-transform: uppercase;
            	color:#FFF;
            	background-color: #dc582a;
            	padding: 10px 35px;
            	border-radius: 20px;
            	font-size: 24px;
            	width: 100%;
            	transition: all 0.25s ease-in-out;
            }

            .validation_error,.validation_message{color:red}
            .validation_message{text-align:left}

            .dm16 .gform_footer .button:hover {
            	background-color: #FFF;
            	color: #dc582a;
            }
            input[type=text],input[type=email],select,textarea{border-radius:3px;color:#787878;}
            
            /* Small screens */
            @media only screen {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body li { width:95%; }
                .quote { margin: 3em 3em; }
                .logo { margin: 0 auto; display:block; height: auto; width: 175px; padding: .5em; }
                .fadein img { left: -100px; top: 7px; height: 192px; }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:396px; }
                .fadein img { left:-218px; top:0; height:390px;}
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16 .gform_body li { width:46%; }
                .logo { margin: initial; display:initial; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
            /*======= New Styles ======*/
            .hero{
            	background-image: url(/img/cp-hero.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 10% 0;
            	text-align: center;
            }
            .hero img{
            	margin-bottom: 30px;
            }
            .hero h3 {
            	color:#FFF;
            	font-size: 48px;
                margin-bottom: 0;
            }
            .hero h4 {
            	color:#89b8ea;
            	text-transform: uppercase;
            	letter-spacing: 2px;
            	font-size: 24px;
            	margin-bottom: 20px;
            }
            .hero p {
                color:#FFF;
                margin-bottom:50px;
                font-size: 18px;
            }
            .hero a{
            	text-transform: uppercase;
            	color:#FFF;
            	background-color: #dc582a;
            	padding: 15px 35px;
            	border-radius: 30px;
                font-size: 18px;
            	transition: all 0.25s ease-in-out;
            }
            .hero a:hover {
            	background-color: #FFF;
            	color: #dc582a;
            }

            .features{
            	background-image: url(/img/features-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 8% 0;
            }
            .features p,.features li {font-weight: 300;color:#787878}
            .features li{list-style-type:none;padding:5px 0}
            .features i {color: #89b8ea}
            .features ul {margin: 0}

            .testimonials{
            	background-image: url(/img/optimize-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 8%;
            }
            .testimonials p,.testimonials .author,.testimonials .job{color: #787878;}
            .testimonials .author{font-weight: 700}
            .testimonials img{margin-bottom: 30px;}
            .orbit-bullets{text-align:left}
            .orbit-bullets button{
            	height: 15px;
            	width: 15px;
            	background-color: #fff;
            	border: 1px solid #d1d1d1;
            	cursor: pointer;
            }
            .orbit-bullets button.is-active{
            	background-color: #dc582a;
            	border: none;
            }

            .car{
            	background-image: url(/img/car-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 8% 0;
            }
            .car h3{
            	font-weight: 300;
            	font-size: 2.125rem;
            	color: #00467f;
            	margin: 0 0 30px;
                line-height: 1.2em;
            }
            .car p{
            	color: #787878;
            }

            .dealer-form{
            	background-color: #00447c;
            	padding: 8% 0;
            }
            .dealer-form img{margin-bottom: 30px;}
            .dealer-form h3{color:#FFF;font-size: 30px;padding:0 30px}
            .dealer-form p{color:#FFF;margin-bottom:50px}
            .dealer-form #field_28_8 label{margin-bottom: 10px}

            .footer{padding:8% 0}
            .footer img{margin-bottom:30px}
            .footer p{color:#787878}
            .footer p,.footer a{font-size: 13px}
            .footer p:first-of-type{margin-bottom: 0}

            /*====== MOBILE ======*/
            @media(max-width: 640px){
            	.hero h3{font-size: 36px;line-height: 40px}
            	.hero h4{font-size: 18px}

            	.features{
            		background-image:none;
            		padding:0;
            	}
            	.features .medium-5{padding: 0}
            	.features .mobile-fleet{padding: 8%}

            	.testimonials{
            		background-image: none;
            		padding: 8% 0;
            		background-color: #eaeef7;
            	}
            	.testimonials .columns{padding:0 30px}

            	.car{
            		background-image: none;
            		padding-bottom: 0;
            	}
            	.car .columns{padding:0 30px}
            	.car .orbit{padding-bottom: 20px}
            	.car h3{font-size: 1.75rem}

            	.dm16 .gform_footer .button{
            		padding: 10px 20px;
            		font-size: 14px;
            	}
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <section class="hero">
        	<div class="row">
        	    <div class="header small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
        	     <img class="logo" src="/img/clearplex-logo-white.png">
        	     <h3>A new way to drive sales:</h3>
        	     <h4>Windshield protection</h4>
        	     <p>Enhance your portfolio and bottom line with ClearPlex<sup>®</sup> Windshield Protection Film by Madico<sup>®</sup>.</p>
        	     <a href="#dealer-form" class="button">Become A Dealer</a>
        	    </div>
        	</div>
        </section>
        
        <section class="features">
        	<div class="row">
        	  <div class="medium-5 medium-offset-6 large-4 large-offset-7 columns end">
      	    	<img src="/img/clearplex-fleet-mobile.jpg" alt="Clearplex Fleet" class="show-for-small-only">
      	      <div class="mobile-fleet">
    	  	      <p>ClearPlex Windshield Protection Film is not intended for use on conventional cars. Ideally, it is the best solution to the astronomical cost of windshield replacement for luxury, exotic, and classic cars, as well as fleets, and construction equipment.</p>
    	  	      <p>It effectively absorbs the impact of rocks and debris, leaving windshields in pristine condition. As a ClearPlex dealer, you can expect repeat business</p>
    		        <ul class="features-list">
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Optically clear</li>
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Patented hard-coated film</li>
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;99% UV blocking</li>
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Protects against normal abrasion</li>
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Faster run-offs of rain and snow</li>
    		        	<li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Exceptional support from Madico</li>
    		        </ul>
      	      </div>
        	  </div>
        	</div>
        </section>

        <section class="testimonials">
        	<div class="row">
        		<div class="medium-12 columns end">
        			<img src="/img/quote-icon.png" alt="Testimonial Quote">
        		</div>
        		<div class="medium-6 large-5 columns end">
        			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        			  <div class="orbit-wrapper">
        			    <ul class="orbit-container">
        			      <li class="is-active orbit-slide">
      			        	<p>We estimate that we have saved $620k in windscreen replacement over the past year. This does not include additional labour to remove and replace the windscreen and out of revenue service time."</p>
      			        	<address class="gray-p">
		  	        			  <span class="author">&mdash;Geoff Bell</span><br>
		  	        			  <span class="job">Reliability Officer, Metro Trains Melbourne, Australia</span>
		  	        			</address>
        			      </li>
        			      <li class="orbit-slide">
        			        <p>. . . I've applied your product to my car's windshield. I'm very happy with the results and the protection."</p>
      			        	<address class="gray-p">
		  	        			  <span class="author">&mdash;Dave</span><br>
		  	        			  <span class="job">Self-installer</span>
		  	        			</address>
        			      </li>
        			      <li class="orbit-slide">
        			        <p>There were incidents of road debris hitting the windshields. ClearPlex film protected the windshield."</p>
        			        <address class="gray-p">
		  	        			  <span class="author">&mdash;Roger Zimmerman</span><br>
		  	        			  <span class="job">Hertz Rent-A-Car</span>
		  	        			</address>
        			      </li>
        			      <li class="orbit-slide">
        			        <p>I'd like to thank you for making such a great product available for my customers."</p>
        			        <address class="gray-p">
		  	        			  <span class="author">&mdash;Ryan Tounsley</span><br>
		  	        			  <span class="job">President, Protective Film Solutions</span>
		  	        			</address>
        			      </li>
        			    </ul>
        			  </div>
        			  <nav class="orbit-bullets">
        			    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        			    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        			    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        			    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        			  </nav>
        			</div>
        		</div>
        		<img src="/img/testimonial-car-mobile.jpg" alt="Clearplex testimonials" class="show-for-small-only">
        	</div>
        </section>

        <section class="car">
        	<div class="row">
        		<div class="medium-5 medium-offset-7 columns">
        			<div class="orbit" data-auto-play="false" role="region" aria-label="Favorite Space Pictures" data-orbit>
        			  <div class="orbit-wrapper">
        			    <ul class="orbit-container">
        			      <li class="is-active orbit-slide">
        			        <h3>It's more than a car. It's a prized possession.</h3>
        			        <p>High performance cars deserve the world's best performing windshield protection.</p>
        			      </li>
        			      <li class="orbit-slide">
        			        <h3>Keeps fleets on the road - and off the repair list.</h3>
        			        <p>With well-engineered ClearPlex, windshields and bottom lines are protected.</p>
        			      </li>
        			      <li class="orbit-slide">
        			        <h3>Adds instant credibility.</h3>
        			        <p>Dealerships that recommend ClearPlex know it's the world's most respected name in windshield protection, backed by the highest level of customer service.</p>
        			      </li>
        			    </ul>
        			  </div>
        			  <nav class="orbit-bullets">
        			    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        			    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        			    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        			  </nav>
        			</div>
        		</div>
        		<img src="/img/classic-car-mobile.jpg" alt="clearplex classic car" class="show-for-small-only">
        	</div>
        </section>
        
        <div class="dealer-form">
        	<div class="row">
        	  <div class="medium-offset-2 medium-8 large-6 large-offset-3 columns text-center">
        	    <img src="/img/form-icon.png" alt="">
        	    <h3>Put yourself in the driver's seat and <br class="show-for-large">grow with us.</h3>
        	    <p>Take your business to the next level with ClearPlex and other premium protection film products. Complete the form below to get started.</p>
        	    <?php gravity_form(28, false); ?>
        	  </div>
        	</div>
        </div>

        <section class="footer">
        	<div class="row">
        	    <div class="small-12 columns text-center">
    				<img src="/img/footer-logo.png" alt="ClearPlex Logo">
            	    <p><a href="/">Madico.com</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="/window-film/privacy-policy/">Privacy Policy</a></p>
            	    <p>&copy; <?php echo date('Y'); ?> ClearPlex by Madico. All rights reserved.</p>
        	    </div>
        	</div>
        </section>
        
        <script>
            $(document).foundation();
        </script>

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

        <script>
            $('.validation_message').each(function(){
              $(this).prev('div').find('input').css({'border':'1px solid red'})
            });
        </script>
    </body>
</html>