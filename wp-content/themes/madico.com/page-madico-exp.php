<?php 
/**
 * Template Name: Madico Experience Page
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
        <meta property="og:title" content="The New Madico Experience | Madico, Inc." />
        <meta property="og:description" content="We're thrilled to share our exciting new programs, services, and initiatives that center around our loyal distributors, dealers, and customers." />
        <meta property="og:image" content="" />
        <title>The New Madico Experience</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="http://www.madico.com/wp-content/themes/madico.com/images/favicon.ico">
        <link rel="stylesheet" href="../wp-content/themes/madico.com/css/fontawesome.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>jQueryWP = jQuery;</script>
        <script type='text/javascript' src='http://www.madico.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/jquery.json.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/conditional_logic.min.js?ver=1.9.16'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
        <style>
            @font-face {font-family: 'AvenirLTStd-Light';src: url('../webfonts/374950_0_0.eot');src: url('../webfonts/374950_0_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_0_0.woff2') format('woff2'),url('../webfonts/374950_0_0.woff') format('woff'),url('../webfonts/374950_0_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTStd-Book';src: url('../webfonts/374950_2_0.eot');src: url('../webfonts/374950_2_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_2_0.woff2') format('woff2'),url('../webfonts/374950_2_0.woff') format('woff'),url('../webfonts/374950_2_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTPro-Roman';src: url('../webfonts/374950_4_0.eot');src: url('../webfonts/374950_4_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_4_0.woff2') format('woff2'),url('../webfonts/374950_4_0.woff') format('woff'),url('../webfonts/374950_4_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTStd-Medium';src: url('../webfonts/374950_6_0.eot');src: url('../webfonts/374950_6_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_6_0.woff2') format('woff2'),url('../webfonts/374950_6_0.woff') format('woff'),url('../webfonts/374950_6_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTStd-Heavy';src: url('../webfonts/374950_8_0.eot');src: url('../webfonts/374950_8_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_8_0.woff2') format('woff2'),url('../webfonts/374950_8_0.woff') format('woff'),url('../webfonts/374950_8_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTStd-Black';src: url('../webfonts/374950_A_0.eot');src: url('../webfonts/374950_A_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_A_0.woff2') format('woff2'),url('../webfonts/374950_A_0.woff') format('woff'),url('../webfonts/374950_A_0.ttf') format('truetype');}
            @font-face {font-family: 'AvenirLTStd-BlackOblique';src: url('../webfonts/374950_B_0.eot');src: url('../webfonts/374950_B_0.eot?#iefix') format('embedded-opentype'),url('../webfonts/374950_B_0.woff2') format('woff2'),url('../webfonts/374950_B_0.woff') format('woff'),url('../webfonts/374950_B_0.ttf') format('truetype');}
            @font-face {font-family: 'Font Awesome 5 Pro'; font-style: normal; font-weight: 300; src: url("../webfonts/fa-light-300.eot");src: url("../webfonts/fa-light-300.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-light-300.woff2") format("woff2"), url("../webfonts/fa-light-300.woff") format("woff"), url("../webfonts/fa-light-300.ttf") format("truetype"), url("../webfonts/fa-light-300.svg#fontawesome") format("svg"); }
            .fal { font-family: 'Font Awesome 5 Pro'; font-weight: 300; font-style:normal; }
            @font-face {font-family: 'Font Awesome 5 Pro'; font-style: normal; font-weight: 400; src: url("../webfonts/fa-regular-400.eot"); src: url("../webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-regular-400.woff2") format("woff2"), url("../webfonts/fa-regular-400.woff") format("woff"), url("../webfonts/fa-regular-400.ttf") format("truetype"), url("../webfonts/fa-regular-400.svg#fontawesome") format("svg"); }
            .far { font-family: 'Font Awesome 5 Pro'; font-weight: 400; font-style:normal; }

            /* Foundation Overrides */
            .row { margin: 0 auto; max-width: 75em; /*changes 62.5em (1000px) to 75em (1200px)*/ width: 100%; }
            .top-bar .row{ max-width: 75rem; margin-left: auto; margin-right: auto; }
            /* Page Components */
            html,body,p {
            	font-family: 'AvenirLTPro-Roman', sans-serif;
                color:#636466;
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: 'AvenirLTStd-Light', sans-serif;
                color:#1A598C;
            }
            h3,h4 {
            	font-weight: 300;
            }
            a { color:#000; }
            a:hover { color:#787878; }
            a.button { margin-bottom:0; }
            p { font-size:18px; }
            .yellow-underline { width: 120px; border-bottom: 3px solid #e09e10; margin: 20px 0 30px; display:inline-block; }
            .dm16 .gform_heading {display:none;}
            .dm16 .gform_description h3 { padding:0.175em 0;}
            .dm16 .gform_body { display:inline-block; color:#636466; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            
            .dm16 .gform_body .top-check { width:100%; }
            .dm16 .gform_body .top-check li { width:100%; margin-bottom:8px; }

            .dm16 .top-check input[type='checkbox'] { margin:0; width:20px; height:20px; }
            .dm16 .gform_body .top-check label { width:90%; line-height:1.25; }
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
            .dm16 .gform_body li:nth-child(n+9) { clear:unset; float:unset; width:95%; }
            .dm16 .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .dm16 .gform_body li:nth-last-child .gfield_description { display:none; }
            
            .dm16 .gform_body li label { color:#636466; text-align:left; }
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; margin-top:10px; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; margin-top:8px; }
            #input_28_9{resize:none}
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer { margin:1em 2em 0em 2em; }
            .dm16 .gform_footer .button {
            	text-transform: uppercase;
            	color:#fff;
            	background-color: #e09e10;
            	padding: 10px 35px;
            	border-radius: 20px;
            	font-size: 24px;
            	width: auto;
            	transition: all 0.25s ease-in-out;
                margin:0 !important;
            }

            .validation_error,.validation_message{color:red}
            .validation_message{text-align:left}

            .dm16 .gform_footer .button:hover {
            	background-color: #FFF;
            	color: #e09e10;
            }
            input[type=text],input[type=email],select,textarea{border-radius:3px;color:#787878;}
            
            /* Small screens */
            @media only screen {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body li { width:95%; }
                .dm16 .gform_body .optin li { width:95%; }
                .dm16 .gform_body .optin input { position:absolute; }
                .dm16 .gform_body .optin label { position:relative; top:-5px; left:18px; }
                .quote { margin: 3em 3em; }
                .logo { margin: 0 auto; display:block; height: auto; /*width: 175px; padding: .5em;*/ }
                .fadein img { left: -100px; top: 7px; height: 192px; }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; }
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
                .dm16 .gform_body .optin li { width:95%; }
                .logo { margin: initial; display:initial; width:auto; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
            /*======= New Styles ======*/
            .hero{
            	background-image:url(/img/the-madx-hero-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 80px 0;
            	text-align: center;
                color:#FFF;
            }
            .hero img{ margin-bottom: 30px; }
            .hero-text { color:#FFF; font-size:60px; }
            .hero p { color:#FFF; margin-bottom:0; }
            .hero .header { margin-bottom:3em; }
            .videoWrapper {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                padding-top: 25px;
                height: 0;
            }
            .videoWrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .button {
            	text-transform: uppercase;
            	color:#FFF;
            	background-color: #e09e10;
            	padding: 15px 35px;
            	border-radius: 30px;
                font-size: 16px;
                letter-spacing:0.125em;
            	transition: all 0.25s ease-in-out;
            }
            .button:hover { background-color: #FFF; color: #e09e10; }
            .dealers { text-align: center; margin:100px 0px; }
            .support { 
                background-image:url(/img/dealer-support-bg.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding:80px 0px; 
                color:#fff; 
            }
            .support h3, .support p { color:#fff; }
            .support .support-content { position:relative; top:50%; transform:translateY(50%); }
            .recognition { margin:0; }
            .recognition .row { width:100%; max-width:100%; margin:0; }
            .recognition .recognition-content { position:relative; top:50%; transform:translateY(50%); }
            .recognition .text-block { padding:3em 1em; }
            .dealer-marketing .dm-content { position:relative; top:50%; transform:translateY(50%); }
            .consumer-marketing .cm-content { position:relative; top:50%; transform:translateY(15%); }


            .cta { 
                background-image:url(/img/dealer-cta-bg.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding:75px 0px; 
                color:#fff; 
                text-align: center;  
            }
            .cta .button { font-weight:bold; }
            .cta h3 { color:#fff; margin-bottom:1em; font-size:2.25rem; }
            .portal { text-align: center; margin:85px 0px 100px; }
            .portal .text-block { margin-bottom:3em; }
            .portal img { border-radius:5px; width:auto; }
            .madicou { text-align: center; margin:100px 0px; }
            .madicou .text-block { margin-bottom:3em; }
            .madicou i {
                font-size: 24px;
                border: 2px solid #e09e10;
                border-radius: 100px;
                padding: 15px;
                margin-right:10px;
                text-align:center;
                height:60px;
                width:60px;
                color: #e09e10;
            }
            .madicou .section { text-align:left; }
            .madicou .section p { margin-bottom:0; line-height:1.25; }
            .madicou .section-text { position:relative; top:50%; transform:translateY(25%); }
            .madicou .section-icon { display:inline-block; float:left; }
            .dealer-marketing { margin:100px 0px; }
            .consumer-marketing { margin:100px 0px; }

            .madico-experience-form{
                background-image:url(/img/mad-cc-form-head.jpg);
                background-position: top left;
                background-repeat: no-repeat;
                background-size: 100% 30%;
            	padding: 6% 0;
            }
            .madico-experience-form img{ margin-bottom: 30px; }
            .madico-experience-form h3{ color:#fff; font-size: 36px; padding:0 30px; }
            .madico-experience-form p{ color:#fff; font-size:18px; margin-bottom:calc(40px - 1em); }
            .madico-experience-form .actual-form { background-color: white; padding: 3em 1em; border-radius: 5px; }
            .madico-experience-form .fdesc { padding:1em 2em; }
            .madico-experience-form #field_28_8 label{ margin-bottom:10px; }
            .madico-experience-form .questions { margin-top:1.75em !important; }

            .footer{ background-color:#00467F; padding:5% 0; }
            .footer img{ margin-bottom:30px; margin-top:20px; width:auto; }
            .footer p{ color:#fff; font-size:13px; }
            .footer a{ font-size: 13px; color:#fff; }
            .footer a:hover{ color:#fff; }
            .footer p:first-of-type{ margin-bottom: 0; }

            /*====== MOBILE ======*/
            @media(max-width: 1280px){
                .dm16 .gform_footer .button{
                    padding: 10px 20px;
                    font-size: 17px;
                }
                .hero-text { font-size:60px; }
                .support .support-content { position:relative; top:25%; transform:translateY(25%); }
                .recognition .recognition-content { position:relative; top:25%; transform:translateY(25%); }
                .dealer-marketing .dm-content { position:relative; top:25%; transform:translateY(25%); }
                .consumer-marketing .cm-content { position:relative; top:25%; transform:translateY(25%); }
            }

            @media(max-width: 1024px){
                .dm16 .gform_footer .button{
                    padding: 10px 20px;
                    font-size: 17px;
                }
                .hero-text { font-size:60px; }
                .support .support-content { position:relative; top:inherit; transform:inherit; }
                .recognition .recognition-content { position:relative; top:inherit; transform:inherit; }
                .dealer-marketing .dm-content { position:relative; top:inherit; transform:inherit;}
                .consumer-marketing .cm-content { position:relative; top:inherit; transform:inherit; }
            }
            @media(max-width: 640px){
                .hero .columns {padding:0 30px}
            	.dm16 .gform_footer .button{
            		padding: 10px 20px;
            		font-size: 14px;
            	}
                .hero-text {  font-size:30px; }
            }
            @media(max-width: 425px){
                .hero-text {  font-size:30px; }
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
                <div class="header small-12 columns">
                    <img class="logo" src="/img/mad-cc-logo-white.png">
                    <h2 class="hero-text">Welcome to the New Madico Experience!</h2>
                    <aside class="yellow-underline left"></aside>
                    <p>We're thrilled to share our exciting new programs, services, and initiatives that center around our loyal distributors, dealers, and customers. Watch the entire video to learn about our new offerings!</p>
                </div>
                <div class="small-12 medium-8 medium-offset-2 columns end">
                    <div class="videoWrapper">
                        <iframe width="680" height="382" src="https://www.youtube.com/embed/_5MAudC1m84?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
        	</div>
        </section>

        <section class="dealers">
            <div class="row">
                <div class="small-10 small-offset-1 columns end">
                    <div class="text-block">
                        <h3>The New Madico Experience is All About Our Dealers!</h3>
                        <aside class="yellow-underline left"></aside>
                        <p>With our new quarter-million square foot manufacturing facility in Tampa Bay, Florida, and President and CEO Shawn Kitchell blazing the trail, the New Madico Experience is a whole new way to help drive your business to success.</p>
                    </div>
                <img src="/img/mad-new-location.jpg" alt="Aerial View of new Madico Facility" class="">
                </div>
            </div>
        </section>

        <section class="support">
        	<div class="row">
                <div class="support-content medium-5 medium-offset-1 columns">
                    <div class="text-block">
                        <h3>Dealer Support Programs</h3>
                        <p>Enjoy robust support initiatives that provide dealers with access to programs and information designed to help grow sales and profitability. Dealers get rewarded with benefits ranging from leads and bonuses, to co-op advertising, and special promotions.</p>
                    </div>
                </div>
                <div class="medium-5 end columns hide-for-small-only">
                    <img src="/img/dealer-support-logos.png" alt="Sunscape SafetyShield and Choice logos" class="">
                </div>
        	</div>
        </section>
        
        <section class="recognition">
            <div class="row collapse">
                <div class="small-12 medium-6 columns">
                <img src="/img/mad-cc-dealer-recognition.jpg" alt="Image of hands clapping" class="show-for-small-only" style="width:100vw">
                <img src="/img/mad-cc-dealer-recognition.jpg" alt="Image of hands clapping" class="show-for-medium" style="width:50vw">
                </div>
                <div class="recognition-content small-12 medium-5 end columns">
                    <div class="text-block">
                        <h3>Dealer Recognition</h3>
                        <p>Our dealer appreciation initiatives are designed to recognize and reward those who exemplify the Madico spirit and achieve high standards. Rewards include financial bonuses, advertising support, charitable donations, and more.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="row">
                <div class="small-10 small-offset-1 columns small-centered">
                    <div class="text-block text-center">
                        <h3>With the New Madico Experience, dealers receive unrivaled support not typically found in the industry.</h3>
                        <p><a class="button" href="#madico-experience-form">Tell Me More</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="portal">
            <div class="row">
                <div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
                    <div class="text-block">
                        <h3>Dealer Portal</h3>
                        <aside class="yellow-underline left"></aside>
                        <p>The dealer-exclusive section of our new website gives current Madico dealers the ability to order products online from any internet-connected device, view order history, access support program information, perks, and other exclusive resources. </p>
                        <p>Potential dealers have the opportunity to view product specs and information, learn about Madico's dealer support programs, and join the ranks as a Madico dealer.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-10 small-offset-1 columns">
                    <div class="row small-up-1 medium-up-3">
                        <div class="column column-block">
                            <img src="/img/mad-cc-dealer-portal-01.jpg" alt="Dealer Portal image 1">
                        </div>
                        <div class="column column-block">
                            <img src="/img/mad-cc-dealer-portal-02.jpg" alt="Dealer Portal image 2">
                        </div>
                        <div class="column column-block">
                            <img src="/img/mad-cc-dealer-portal-03.jpg" alt="Dealer Portal image 3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="madicou">
            <div class="row">
                <div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
                    <div class="text-block">
                        <h3>Madico U</h3>
                        <aside class="yellow-underline left"></aside>
                        <p>Our educational initiative, tailor-made for window film dealers, combines online and in-person learning. Through Madico U, you can access:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="section small-10 small-offset-1 medium-8 medium-offset-2 columns">
                    <div class="row small-up-1 medium-up-2">
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-wrench"></i></div>
                            <div class="section-text"><p>Training on product use and installation</p></div>
                        </div>
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-megaphone"></i></div>
                            <div class="section-text"><p>Sales and marketing tips</p></div>
                        </div>
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-user-tie"></i></div>
                            <div class="section-text"><p>Business management tips</p></div>
                        </div>
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-award"></i></div>
                            <div class="section-text"><p>Industry certifications</p></div>
                        </div>
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-desktop"></i></div>
                            <div class="section-text"><p>Online conferences and webinars</p></div>
                        </div>
                        <div class="section-block column column-block">
                            <div class="section-icon"><i class="fal fa-calendar-alt"></i></div>
                            <div class="section-text"><p>Information about upcoming events</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="row">
                <div class="small-10 small-offset-1 columns small-centered">
                    <div class="text-block text-center">
                        <h3>The New Madico Experience is all about helping you succeed!</h3>
                        <p><a class="button" href="#madico-experience-form">Tell Me More</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="dealer-marketing">
            <div class="row">
                <div class="dm-content medium-4 medium-offset-1 columns">
                    <div class="text-block">
                        <h3>Dealer Marketing</h3>
                        <aside class="yellow-underline left"></aside>
                        <p>Download marketing materials, documents, forms, and digital assets to include on your own website and ads. It's fast, easy, and convenient.</p>
                    </div>
                </div>
                <div class="medium-7 columns">
                    <img src="/img/mad-cc-dealer-marketing-tri.png" alt="dealer marketing trifold brochure" class="">
                </div>
            </div>
        </section>

        <section class="consumer-marketing">
            <div class="row">
                <div class="medium-6 columns">
                    <img src="/img/mad-cc-consumer-laptop.png" alt="consumer marketing example on laptop screen" class="">
                </div>
                <div class="cm-content medium-4 medium-offset-1 columns end">
                    <div class="text-block">
                        <h3>Consumer Marketing</h3>
                        <aside class="yellow-underline left"></aside>
                        <p>The New Madico Experience includes an integrated ecosystem that educates and nurtures the end-consumer on all things window film—and serves as a lead generator for our dealers. So, it's a win-win for everybody.</p>
                    </div>
                </div>
            </div>
        </section>



        <div class="madico-experience-form" id="madico-experience-form">
            <div class="row">
                <div class="medium-8 medium-offset-2 columns text-center">
                    <h3>Learn More About the New Madico Experience</h3>
                    <aside class="yellow-underline left"></aside>
                    <p class="fdesc">Thank you for your interest in the New Madico Experience. Please complete the form below and someone will contact you soon.</p>
                    <div class="actual-form">
                        <?php //gravity_form(34, false); /* staging */ ?>
                        <?php gravity_form(35, false); /* live */ ?>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer">
        	<div class="row">
                <div class="small-12 columns text-center">
                    <img src="/img/the-madico-exp-logo.png" alt="The Madico Experience" width="330">
            	    <p><a href="/">madico.com</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="/privacy-policy/">Privacy Policy</a></p>
            	    <p>&copy; <?php echo date('Y'); ?> Madico<sup>&reg;</sup>, Inc. All rights reserved.</p>
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
            $(document).ready(function(){

            });
            $(window).scroll(function(){

            });
        </script>
    </body>
</html>