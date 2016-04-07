<?php 
/**
 * Template Name: NWFD16 LOST Landing Page
 *
 * Landing page template without a sidebar
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Madico Window Films - NWFD 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
            
            /*.fadein { position:relative; height:396px; overflow:hidden; }*/
            /*.fadein img { max-width:none; display:block; position:absolute; }*/
            
            .slides img { width:100%; }
            .item h2, .item h3 { line-height:1; color:#00467f; }
            .item h4 { display:inline-block; }
            .item p { line-height:1.25; margin:1em 0; }
            .item li { margin:2em; }
            .overlay { position:relative; display:inline-block; }
            .quote-bar { background:#eeeef0 url(/img/dm16-land-quote.png) no-repeat center center ; min-height:180px; }
            .quote { margin:3em 6em; }
            .quote h4 { font-size:19px; }
            .contact-form { }
            
            .dm16_wrapper { background-color:#00467f; display:inline-block; /*margin-top:-60px;*/ }
            .dm16 .gform_heading { text-align:center; color:#fff; padding:1em; background-color:#00467f; position:relative; display:inline-block; width:100%; }
            .dm16 .gform_description h3 { padding:0.175em 0;}
            .dm16 .gform_body { display:inline-block; color:#fff; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
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
            .dm16 .gform_footer { color:#fff; margin:1em 2em; background-color:#00467f; display:block; text-align:center; }
            .dm16 .gform_footer .button { background-color:#f5971d; color:#00467f; font-weight:bold; }
            
            /* Small screens */
            @media only screen {
                .header { text-align:center; }
                .item { display:block; margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { /*height:240px;*/ }
                .fadein img { /*left:-300px; top:-30px;*/ width:100%; }
                .dm16_wrapper { max-width:100%; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body li { width:95%; }
            }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .header { text-align:left; }
                .item { display:block; }
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { /*height:396px;*/ }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body { margin:0 1em; margin-top:-100px; }
                .dm16 .gform_heading { top:-140px; }
                .dm16 .gform_body li { width:95%; }
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { display:inline-block; }
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { /*height:396px;*/ }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body .address { width:70%; float:left; }
                .dm16 .gform_body .suite { width:20%; float:left; }
                .dm16 .gform_body .city { width:30%; float:left; }
                .dm16 .gform_body .state { width:30%; float:left; }
                .dm16 .gform_body .zip { width:30%; float:left; }
                .dm16 .gform_body li:nth-child(n+3):nth-child(-n+5) { clear:unset; float:unset; width:95%; }
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="header small-12 medium-8 medium-offset-1 columns">
             <img src="/img/dm16-land-logo.png">
            </div>
        </div>
        
        <div class="row">
            <div class="fadein hide-for-small-only medium-12">
                <img src="/img/NWFD-Landing-Page-header.png"/>
            </div>
            <div class="fadein hide-for-medium small-12">
                <img src="/img/NWFD-Landing-Page-header-mob.png"/>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="show-for-medium medium-6 columns">
                <div class="item" style="margin-left:19%;">
                    <h4 style="margin-top:1.5em;">You are the reason our industry is growing strong.</h4>
                    <p>To show our appreciation and celebrate National Window Film Day on April 30, we're offering you a free commemorative tool apron. Sign up to get your apron and then put it on and post a selfie using #windowfilmday to show off your true-blue dedication.</p>
                    <p><img src="/img/NWFD-Landing-Page-Apron.jpg" style="margin:1em 0;" /></p>
                    <p>Thanks for your continued promotion of the window film industry!</p>
                    <p>We also invite you <a href="http://www.madico.com/window-film/">to take another look at Madico's quality film products</a>. We have a range of films available to meet your customers' needs along with unrivaled dealer support. Contact your local Madico Service Center at 888-887-2022 or email us at <a href="mailto:windowfilm@madico.com">windowfilm@madico.com</a> to learn more.</p>
                </div>
            </div>
            <div class="small-12 medium-6 columns">
                <div class="contact-form overlay">
                <?php gravity_form( 27, false ); ?>
                </div>
            </div>
            <div class="hide-for-medium small-12 columns">
                <div class="item">
                    <h4>You are the reason our industry is growing strong.</h4>
                    <p>To show our appreciation and celebrate National Window Film Day on April 30, we're offering you a free commemorative tool apron. Sign up to get your apron and then put it on and post a selfie using #windowfilmday to show off your true-blue dedication.</p>
                    <p><img src="/img/NWFD-Landing-Page-Apron.jpg" style="margin:1em 0;" /></p>
                    <p>Thanks for your continued promotion of the window film industry!</p>
                    <p>We also invite you <a href="http://www.madico.com/window-film/">to take another look at Madico's quality film products</a>. We have a range of films available to meet your customers' needs along with unrivaled dealer support. Contact your local Madico Service Center at 888-887-2022 or email us at <a href="mailto:windowfilm@madico.com">windowfilm@madico.com</a> to learn more.</p>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>


    </body>
</html>