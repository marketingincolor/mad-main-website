<?php 
/**
 * Template Name: Bomb Blast Protection Film
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
        })(window,document,'script','dataLayer','GTM-PXJ38D');</script>
        <!-- End Google Tag Manager -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Madico Window Films - Dealers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
            html, body, h1, h2, h3, h4, h5, h6 { font-family: 'Lato', sans-serif; }
            #slideshow { position:relative; height:396px; }
            #slideshow > div { position:absolute; }
            
            .fadein { position:relative; overflow:hidden; }
            .fadein img { max-width:none; display:block; position:absolute; }
            
            .slides img { width:100%; }
            .item { display:inline-block; }
            .item h3 { line-height:1.2em; color:#00467f; }
            .item p { line-height:2em; }
            .item li { margin:1em 2em 0em 2em; font-size:19px; }
            .overlay { position:relative; display:inline-block; }
            .quote-bar { background:#eeeef0 /*url(/img/dm16-land-quote.png) no-repeat center center*/ ; min-height:180px; }
            .quote { margin:3em 6em; }
            .quote h4 { font-size:19px; text-align:center; line-height: 38px;}
            .contact-form { }
            
            .gform_wrapper { background-color:#00467f; display:inline-block; margin-top:-60px; }
            .gform_heading { text-align:center; color:#fff; padding:1em; background-color:#00467f; position:relative; display:inline-block; width:100%; }
            .gform_description h3 { padding:0.175em 0;}
            .gform_body { display:inline-block; color:#fff; }
            .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; background-color:#00467f; }
            
            .gform_body li { display:inline-table; margin:0 0.5em; }
            .gform_body li:nth-child(n+7) { clear:unset; float:unset; width:95%; }
            .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .gform_body li:nth-last-child .gfield_description { display:none; }
            
            .gform_body li label { color:#fff; text-align:left; }
            .gform_body li .ginput_container_text { }
            .gform_body li .ginput_container_select select { border-radius:10px; }
            .gform_body li .ginput_container_checkbox { width:100%; }
            .gform_body li .ginput_container_textarea { width:100%; }
            .gform_body li input[type="text"] { border-radius:10px; }
            .gform_body li textarea { border-radius:10px; height:140px !important; }
            .gform_footer:before { clear:both; }
            .gform_footer { color:#fff; margin:1em 2em; background-color:#00467f; display:block; text-align:center; }
            .gform_footer .button { background-color:#f5971d; color:#00467f; font-weight:bold; width: 25%; }
            .validation_error { display: none; }
            
            #gform_2 { background-color:#00467f; }
            .new-quote { line-height: 38px; margin-top: 10%; }
            
            
            /* Small screens */
            @media only screen {
                .item { margin:2em 2em 1em 2em;}
                .item h3, item h4 { font-size:21px; margin-bottom: 0.5em; line-height: 1.4em; }
                .item p, .item li { font-size:16px; }
                .new-quote { font-size: 16px; }
                .fadein { height:208px; }
                .fadein img { left:-60px; top:0px; max-height: 158px; }
                .gform_wrapper { max-width:100%; }
                .gform_heading { top:0px; }
                .gform_body { margin:0 1em; margin-top:0px; }
                .gform_body li { width:95%; }
                .gform_footer .button { width: 80%; }
                .logo { padding: 1em; text-align: center;}
                .quote-background {background:#eeeef0 url(/img/information-logo.png) no-repeat center center; }
                .logo img { width: 80%; }

            }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em;}
                .item h3, item h4 { font-size:21px; margin-bottom: 0.5em; }
                .item p, .item li { font-size:16px; }
                .new-quote { font-size: 16px; margin-top:15%; line-height:1.6em; }
                .fadein { height:396px; }
                .fadein img { left:-78px; top:0; max-height: 222px;}
                .gform_wrapper { max-width:80%; }
                .gform_heading { top:-140px; }
                .gform_body { margin:0 1em; margin-top:-100px; }
                .gform_footer .button { width: 25%; }
                .logo { padding: 0em; }
                .quote-background {background:#eeeef0; }
                .gform_body li { width: 95%; }
                .fadein { height:258px; }
                .gform_footer .button { width: 80%; }
                .logo img { width:45%; }
            }

            /*For IE10*/
            @media screen and (min-width: 768px) and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .logo img{ width:45%; }
            }

            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em; }
                .item h3, item h4 { font-size:30px; margin-bottom: 0.75em; margin-top: 0em; margin-top:1.5em;}
                 div:nth-child(n+2) > div > h3{ margin-top:2em; }
                 body > div:nth-child(6) > div:nth-child(1) > div > h3 { margin-top:2em; }
                .item li, .item p { font-size: 19px; }
                .new-quote { font-size: 19px;  margin-top:10%;}
                .fadein { height:396px; }
                .fadein img { left:0; top:0; max-height:396px; }
                .gform_wrapper { max-width:80%; }
                .gform_body li { width:46%; }
                .gform_footer .button { width: 45%; }
                .logo { margin-left: 8.33333%; text-align:left;}
                .logo img { width: 25%; margin: .5em; }
            }
            
            @media screen and (min-width: 64.063em) and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            /* IE10+ CSS styles go here */
            .logo img { width:25%; }
            }
        </style>
    <?php //wp_head(); ?>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXJ38D"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="row">
            <div class="header small-12 large-8 large-offset-1 columns logo">
                <img src="/img/SafetyShield-Logo.png">
            </div>
        </div>
        
        <div class="row">
            <div class="fadein small-12">
                <img src="/img/bomb-blast-landing-page-for-businesses.jpg"/>
                <img src="/img/bomb-blast-landing-page-for-schools.jpg"/>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="show-for-medium medium-6 columns">
                <div class="item" style="margin-left:19%;">
                    <h3 style="">Bomb Blast Protection Window Films From Madico: Performance You Can Trust.</h3>
                    <ul style="margin:0; padding:0;">
                        <li style="margin-left:1em;">Designed to fight today’s threats, from crime and vandalism to storms and explosions. </li>
                        <li style="margin-left:1em;">Extensively tested to have met or exceeded the requirements of more U.S. and international standards than any other blast protection films, including the U.S. Consumer Product Safety Commission and Underwriterss Laboratories.</li>
                        <li style="margin-left:1em;">Installed by elite group of certified blast protection film professionals.</li>
                        <li style="margin-left:1em;">Backed by a 10-year warranty.</li>
                    </ul>
                </div>
            </div>
            <div class="small-12 medium-6 columns">
                <div class="contact-form overlay">
                <?php gravity_form( 2, false ); ?>
                </div>
            </div>
            <div class="hide-for-medium small-12 columns">
                <div class="item">
                    <h3 style="">Bomb Blast Protection Window Films From Madico: Performance You Can Trust.</h3>
                    <ul style="margin:0; padding:0;">
                        <li style="margin-left:1em;">Designed to fight today’s threats, from crime and vandalism to storms and explosions. </li>
                        <li style="margin-left:1em;">Extensively tested to have met or exceeded the requirements of more U.S. and international standards than any other blast protection films, including the U.S. Consumer Product Safety Commission and Underwriterss Laboratories.</li>
                        <li style="margin-left:1em;">Installed by elite group of certified blast protection film professionals.</li>
                        <li style="margin-left:1em;">Backed by a 10-year warranty.</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row quote-bar quote-background">
            <div class="small-12 column text-center">
                <div class="row">
                    <div class="small-12 medium-5 medium-offset-3 columns">
                        <p class="new-quote">In addition to holding shattered glass together, our bomb protection films will also hold something else together: your peace of mind.</p>
                    </div>
                    <div class="hide-for-small-only small-2 columns end">
                        <img src="/img/information-logo.png">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="small-12 medium-6 columns"><img src="/img/bomblast-page-premier-partner.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>SafetyShield® Premier Partner Network</h3>
                    <p>Our Premier Partners have undergone extensive training through the SafetyShield® program in order to ensure the proper implementation of these sophisticated systems.</p>
                </div>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="small-12 medium-6 columns">
                <img src="/img/bomb-blast-landing-page-anchors.jpg" class="hide-for-medium" />
                <div class="item">
                    <h3>Anchoring Systems</h3>
                    <p>There are four different Anchoring Restraint System solutions available to meet each level of specific criteria and threat concern.  Three are patented and proprietary to Madico SafetyShield.</p>
                </div>
            </div>
            <div class="small-12 medium-6 columns show-for-medium"><img src="/img/bomb-blast-landing-page-anchors.jpg" /></div>
     
        </div>
        
        <div class="row quote-bar quote-background">
            <div class="small-12 column text-center">
                <div class="row">
                    <div class="small-12 medium-5 medium-offset-3 columns">
                        <p class="new-quote">Did you know? A single square foot of glass can produce up to 200 deadly, razor-sharp fragments.</p>
                    </div>
                    <div class="hide-for-small-only small-2 columns end">
                        <img src="/img/information-logo.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="item" style="margin:0em;">
            <p style="margin-bottom:0em;font-size: .75em;"><a href="http://www.safetyshield.com/" style="color: #0a0a0a;">SafetyShield.com</a> | <a href="http://www.safetyshield.com/privacy-policy/" style="color: #0a0a0a;">Privacy Policy</a></p>
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
        
        <script>

            $(function(){
                $('.fadein img:gt(0)').hide();
                setInterval(function(){
                  $('.fadein :first-child').fadeOut(1000)
                     .next('img').fadeIn()
                     .end().appendTo('.fadein');}, 
                  5000);
            });
        </script>

        <?php //wp_footer(); ?>
        <!-- Old Adroll
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
        -->
    </body>
</html>