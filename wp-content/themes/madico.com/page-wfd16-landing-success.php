<?php 
/**
 * Template Name: NWFD16 Landing Success Page
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
            .item { /*display:inline-block;*/ }
            .item h2, .item h3 { line-height:1; color:#00467f; }
            .item p { line-height:1.25; text-align:center; margin:1em 0; }
            .item li { margin:2em; }
            .overlay { position:relative; display:inline-block; }
            .quote-bar { background:#eeeef0 url(/img/dm16-land-quote.png) no-repeat center center ; min-height:180px; }
            .quote { margin:3em 6em; }
            .quote h4 { font-size:19px; }
            .contact-form { }
            .sm-meta { padding:1em; }
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
                .item { margin:1em 2em 0em 2em;}
                .item h3, .item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li, .q-item h2 { font-size:16px; }
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
                .item { margin:1em 2em 0em 2em;}
                .item h3, .item h4 { font-size:30px; margin: 0.5em 0; }
                .item h2, .item p, .item li, .q-item h2 { font-size:16px; }
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
                .item { margin:2em 4em 0em 4em;}
                .item h3, .item h4 { font-size:42px; margin: 0.75em 0; }
                .item h2, .item p, .item li, .q-item h2 { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { /*height:396px;*/ }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body .address { width:70%; }
                .dm16 .gform_body .suite { width:20%; }
                .dm16 .gform_body .city { width:30%; }
                .dm16 .gform_body .state { width:30%; }
                .dm16 .gform_body .zip { width:30%; }
                .dm16 .gform_body li:nth-child(n+3):nth-child(-n+5) { clear:unset; float:unset; width:95%; }
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="row">
            <div class="header small-12 medium-8 medium-offset-1 columns">
             <img src="/img/dm16-land-logo.png">
            </div>
        </div>
        
        <div class="row">
            <div class="fadein hide-for-small-only medium-12">
                <img src="/img/NWFD-Featured-Image.gif"/>
            </div>
            <div class="fadein hide-for-medium small-12">
                <img src="/img/NWFD-Featured-Image Mobile.gif"/>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="show-for-medium medium-12 columns">
                <div class="item" style="text-align:center;">
                    <h4 style="margin-top:1.5em; text-align:center;">Success!</h4>
                    <p>We've received your tool apron order and you'll be receiving it soon.<br />Thanks again for contributing to our industry's success!</p>
                </div>
            </div>
            <div class="hide-for-medium small-12 columns">
                <div class="item">
                    <h4 style="margin-top:1.5em; text-align:center;">Success!</h4>
                    <p>We've received your tool apron order and you'll be receiving it soon.<br />Thanks again for contributing to our industry's success!</p>

                </div>
            </div>
            <br />
            <div class="row collapse">
                <div class="small-12 small-centered">
                    
                    <div class="q-item" style="text-align:center;">
                    <h2 style="color:#00467f;">Follow Us On:</h2>    
                    <div style="position:relative; margin-bottom:20px;">
                       <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle;" >
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=919298978187663";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                           <div class="fb-like" data-href="https://www.facebook.com/MadicoWindowFilms/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                       </div>

                       <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle;" >
                        <a href="https://twitter.com/MadicoInc" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow </a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                       </div> 
                        <span class="show-for-small-only"><br /></span>
                       <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle;" >
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
    <script type="IN/FollowCompany" data-id="5232794"></script>
                       </div>

                       <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle;" >
                        <!-- Place this tag in your head or just before your close body tag. -->
                        <script src="https://apis.google.com/js/platform.js" async defer></script>
                        <!-- Place this tag where you want the widget to render. -->
                        <div class="g-follow" data-annotation="none" data-height="24" data-href="https://plus.google.com/109912744876993567602" data-rel="publisher"></div>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
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

    </body>
</html>