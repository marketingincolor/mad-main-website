<?php 
/**
 * Template Name: Protection Pro Landing SUCCESS Page
 *
 * Landing page template without a sidebar
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <!-- Google Tag Manager -->
        <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQ2BB3');</script>-->
        <!-- End Google Tag Manager -->
        <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
        <meta charset="utf-8">
        <title>Introducing ClearPlex&reg; by Madico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald:300,400,700" rel="stylesheet"> 
        <link rel="shortcut icon" type="image/x-icon" href="http://www.madico.com/wp-content/themes/madico.com/images/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>jQueryWP = jQuery;</script>
        <script type='text/javascript' src='http://www.madico.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/jquery.json.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/conditional_logic.min.js?ver=1.9.16'></script>
        <style>
            /* Foundation Overrides */
            .row {
                margin: 0 auto;
                max-width: 100em; /*changes 62.5em (1000px) to 100mem (1600px)*/
                width: 100%;
            }
            /* Page Components */
            html, body { font-family: 'Lato', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Oswald', sans-serif; }
            h3 { line-height:1.25em !important; }
            ul { line-height:2em !important; }
            #main-slider {  }
            #slideshow { position:relative; /*height:396px;*/ }
            #slideshow > div { position:absolute; }
            /* #slideshow > div img { min-height:300px; min-width:722px !important; } */
            .fadein { position:relative; /*height:396px;*/ overflow:hidden; }
            .fadein div { max-width:none; display:block; position:absolute; }
            .slide { font-family:'Oswald'; }
            sup { font-size: 50%; top: -0.75em; vertical-align: middle; }
            /* CSS BELOW REQUIRED FOR COMPLEX SLIDER ONLY
            .slide { opacity: 0; transition: opacity 2s linear; }
            .slider-wrapper > .slide:first-child { opacity: 1; }*/
            

            .slide h2 { display:block; position:relative; top:0; left:0; font-weight:400; }
            .slide .title { color:#f8e275; }
            .slide .title sup { font-size:45%; top:-1.25em; }
            .slide p { display:block; font-weight:300; color:#fff; }
            .cta-button { color:#6D1611; font-weight:700; }
            #main-content {  }
            #main-slider + #main-content {  margin-top:15px; }
            .item { display:inline-block; }
            .item h2, .item h3 { line-height:1; }
            .item p { line-height:1.25; }
            .copy ul { margin-bottom:0em !important; }
            .video-bar { margin-bottom:2.5em; margin-top:2.5em; }
            /* .video-bar .video-headline { text-align:center; margin-bottom:5px;  } */
            .video-bar .inner-video { 
                text-align:center;
                width:100%;
                height:auto;
                display:block;
                background-image: -webkit-linear-gradient(top, transparent 10%, #E1B445 310% #E1B445 90%, transparent 10%);
                background-image: -moz-linear-gradient(top, transparent 10%, #E1B445 10%, #E1B445 90%, transparent 10%);
                background-image: -o-linear-gradient(top, transparent 10%, #E1B445 10%, #E1B445 90%, transparent 10%);
                background-image: -ms-linear-gradient(top, transparent 10%, #E1B445 10%, #E1B445 90%, transparent 10%);
                background-image: linear-gradient(to bottom, transparent 10%, #E1B445 10%, #E1B445 90%, transparent 10%);
            }
            .video-bar .inner-video .outline { border:4px solid #E1B445; display:inline-flex;}
            .overlay { position:relative; display:inline-block; }
            .centered { text-align:center; }
            /* .quote-bar { background:#eeeef0 url(/img/information-logo.png) no-repeat center center ; min-height:180px; } */
            .quote { margin:3em 6em; }
            .quote h4 { font-family:'Lato'; font-weight:bold; font-size:28px; color:#b2b2b2; text-align:center; line-height:1em; }
            .contact-form { }
            .form-bar { background-color:#404040; }
            .dm16_wrapper { background-color:#404040; display:inline-block; }
            .dm16 .gform_heading { 
                text-align:center; color:#fff; 
                padding:2em; 
                background-color:#404040; 
                position:relative; 
                display:inline-block; 
                width:100%; 
            }
            .dm16 .gform_description h2 { padding:0.175em 0;}
            .dm16 .gform_description h3 { margin:0.5rem; }
            .dm16 .gform_body { display:inline-block; color:#fff; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
            .dm16 .gform_body li:nth-child(n+5) { clear:unset; float:unset; width:95%; }
            .dm16 .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .dm16 .gform_body li:nth-last-child .gfield_description { display:none; }
            .dm16 .gform_body li label { color:#fff; text-align:left; }
            .dm16 .gform_body li .ginput_container_text { }
            .dm16 .gform_body li .ginput_container_select select { border-radius:10px; }
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; }
            .dm16 .gform_body li input[type="text"] { border-radius:10px; }
            .dm16 .gform_body li textarea { border-radius:10px; height:140px !important; }
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer { color:#fff; margin:1.5em 2em; display:block; text-align:center; }
            .dm16 .gform_footer .buttonx { background-color:#f5971d; color:#00467f; font-weight:bold; }
            .dm16 .gform_footer .button { color:#404040; font-weight:bold; font-family:'Oswald'; }
            .dm16 .gform_footer .button, .cta-button {
              border-radius: 10px;
              background-image: -moz-linear-gradient( 90deg, rgb(246,199,48) 0%, rgb(248,226,117) 100%);
              background-image: -webkit-linear-gradient( 90deg, rgb(246,199,48) 0%, rgb(248,226,117) 100%);
              background-image: -ms-linear-gradient( 90deg, rgb(246,199,48) 0%, rgb(248,226,117) 100%);
              border:2px solid;
              border-top-color:#fbefb4;
              border-left-color:#fbefb4;
              border-bottom-color:#c89419;
              border-right-color:#c89419;
            }
            
            .foot { background-color:#201c1d; }
            /* Small screens */
            @media only screen {
                .slide h2 { font-size:/* 18px */30px; line-height:1.25em; }
                .slide .slide-copy { margin:0em 0em 0em 2em; width:calc(100vw - 4em); top:10%; }
                .slide p { font-size:/* 16px */20px; line-height:1.25em; }
                #slideshow > div img { min-height:300px; min-width:722px !important; }
                .cta-button, .gform_button { padding:5px 10px; font-size:18px; }
                .item { margin:0.25em 2em;}
                .item h4 { font-size:18px; margin: 0.5em 0; }
                .item h3 { font-family:'Oswald'; font-weight:normal; font-size:28px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .outline iframe { /* width:320px; height:175px; */height:auto; width:100%; }
                .copy p, .copy li { font-size:18px; }
                .copy h3 { font-size:26px; margin: 0.5em 0; }
                .copy h4 { font-size:18px; margin: 0.5em 0; }
                /*.fadein { height:258px; }*/
                .fadein div { left:0px; top: 0px; /*height: 192px;*/ }
                .dm16_wrapper { max-width:100%; }
                .dm16 .gform_body { margin:0 1em; }
                .dm16 .gform_body li { width:95%; }
                .video-bar .video-headline { text-align:center; margin:15px;  }
                .quote { margin: 3em 3em; }
                .quote-bar { background:#eeeef0 url(none) no-repeat center center ; }
                .logo { margin: 0 auto; display:block; height:auto; width:350px; padding:1em 0em; }
            }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .slide h2 { font-size:/* 26px */40px; }
                .slide .slide-copy { margin:0em 0em 0em 4.5em; width:calc(60vw - 2em); top:20%; }
                .slide p { font-size:/* 18px */24px; }
                #slideshow > div img { min-height:400px; min-width:962px !important; }
                .cta-button, .gform_button { padding:8px 15px; font-size:26px; }
                .item { margin:0.5em 2em;}
                .item h4 { font-size:25px; margin: 0.5em 0; }
                .item h3 { font-family:'Oswald'; font-weight:normal; font-size:28px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; line-height:1.25em; }
                .item .mark { vertical-align:super; font-size:8px;}
                .outline iframe { width:440px; height:244px; }
                .copy p, .copy li { font-size:18px; }
                .copy h3 { font-size:38px; margin: 0.5em 0; }
                .copy h4 { font-size:21px; margin: 0.5em 0; }
                /*.fadein { height:396px; }*/
                .fadein div { left:0; top:0; /*height:390px;*/}
                .dm16 .gform_body { margin:0 1em;  }
                .dm16 .gform_body li { width: 95%; }
                .video-bar .video-headline { text-align:center; margin:0px 0px 5px 0px;  }
                .quote { margin: 3em 6em; }
                .quote-bar { background:#eeeef0 url(none) no-repeat center center ; }
                .logo { margin:0 auto; display:block; width:auto; padding:1em 0em; }
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .slide h2 { font-size:42px; }
                .slide .slide-copy { margin:0em 0em 0em 8em; width:calc(50% - 4em); top:25%; }
                .slide p { font-size:24px; }
                .cta-button, .gform_button { /*padding:10px 20px; font-size:36px;*/padding:8px 15px; font-size:26px; }
                .item { margin:0.75em 2.5em 0em 2.5em;}
                .item h4 { font-size:25px; margin: 1em 0 0.75em 0; }
                .item h3 { font-family:'Oswald'; font-weight:normal; font-size:28px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:18px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .outline iframe { width:560px; height:310px; }
                .copy p, .copy li { font-size:18px; }
                .copy h3 { font-size:40px; margin: 0.75em 0; }
                .copy h4 { font-size:24px; margin: 0.75em 0; }
                /*.fadein { height:666px; }*/
                .fadein div { left:0; top:0; }
                .dm16 .gform_body li { width:46%; }
                .quote-bar { background:#eeeef0 url(/img/information-logo.png) no-repeat center center; }
                .logo { margin: 0 auto; display:block; padding:1.5em 0em; }
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="row">
            <div class="header small-12 large-10 large-offset-1 columns">
                <img class="logo" src="/img/prop-land-grfx-logo.png">
            </div>
        </div>
        
        <div id="main-content" class="row collapse">
            <div class="small-10 small-centered columns">
                <div class="copy"><br /><br /><br /><br />
                    <h3>Success!</h3>
                    <p>We've received your information and will be in touch soon. We look forward to discussing the possibilities of ClearPlex<sup>&reg;</sup> ProtectionPro by Madico.</p>
                    <br /><br /><br /><br /><br /><br /><br /><br />
                </div>
            </div>
        </div>

        <div class="row foot collapse">
            <div class="small-12 small-centered">
            <p style="text-align:center; margin-top:2em;"><a href="https://www.youtube.com/channel/UCRqKPwDHZHFaqaeDWWjk8cw" target="_blank"><img src="/img/prop-land-grfx-ico-youtube.png"></a></p>
            <p style="text-align:center;"><a href="http://www.madico.com/window-film/privacy-policy/" style="color:#fff;text-decoration:underline;" target="_blank">Privacy Policy</a></p>
            <p style="color:#fff; text-align:center;">Copyright &copy; 2017 Madico, Inc.</p>
            <p style="margin:2em; text-align:center;"><img src="/img/prop-land-grfx-foot-logo.png"></p>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
        
        <?php //wp_footer(); ?>

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
    </body>
</html>