<?php 
/**
 * Template Name: DM ClearPlex Landing Page
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
        <title>Introducing ClearPlex&reg; by Madico</title>
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
            
            .fadein { position:relative; height:396px; overflow:hidden; }
            .fadein img { max-width:none; display:block; position:absolute; }
            
            .slides img { width:100%; }
            .item { display:inline-block; }
            .item h2, .item h3 { line-height:1; color:#00467f; }
            .item p { line-height:1.25; }
            .item li { margin:2em; }
            .overlay { position:relative; display:inline-block; }
            .quote-bar { background:#eeeef0 url(/img/dm16-land-quote.png) no-repeat center center ; min-height:180px; }
            .quote { margin:3em 6em; }
            .quote h4 { font-size:19px; }
            .contact-form { }
            
            .dm16_wrapper { background-color:#00467f; display:inline-block; margin-top:-60px; }
            .dm16 .gform_heading { text-align:center; color:#fff; padding:1em; background-color:#00467f; position:relative; display:inline-block; width:100%; }
            .dm16 .gform_description h3 { padding:0.175em 0;}
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
            .dm16 .gform_footer { color:#fff; margin:1em 2em; background-color:#00467f; display:block; text-align:center; }
            .dm16 .gform_footer .button { background-color:#f5971d; color:#00467f; font-weight:bold; }
            
            /* Small screens */
            @media only screen {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16_wrapper { max-width:100%; }
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
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body { margin:0 1em; margin-top:-100px; }
                .dm16 .gform_heading { top:-140px; }
                .dm16 .gform_body li { width: 95%; }
                .quote { margin: 3em 6em; }
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body li { width:46%; }
                .logo { margin: initial; display:initial; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="row">
            <div class="header small-12 large-8 large-offset-1 columns">
             <img class="logo" src="/img/cplex-land-logo.png">
            </div>
        </div>
        
        <div class="row">
            <div class="fadein small-12">
                <img class="auto" src="/img/cplex-land-slide-car.jpg"/>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="show-for-medium medium-6 columns">
                <div class="item" style="margin-left:19%;">
                    <h4 style="margin-top:1.5em;">Introducing ClearPlex<sup>&reg;</sup> Windshield Protection Film by Madico.</h4>
                    <p>ClearPlex film absorbs the impact of rocks and road debris, leaving windshields in pristine condition. Your customers will feel good about protecting their vehicles and their investments.</p>
                    <p>Now, the world's most respected windshield protection brand is distributed by Madico, which means you can count on a quality product along with exceptional customer service.</p>
                    <ul style="margin:0; padding:0;">
                        <li style="margin-left:1em;">Optically clear</li>
                        <li style="margin-left:1em;">Patented hard-coated exterior film</li>
                        <li style="margin-left:1em;">Scratch-resistant</li>
                        <li style="margin-left:1em;">Protects against normal abrasion</li>
                        <li style="margin-left:1em;">99% UB blocking</li>
                        <li style="margin-left:1em;">Faster run-offs of rain and snow</li>
                    </ul>
                </div>
            </div>
            <div class="small-12 medium-6 columns">
                <div class="contact-form overlay">
                <?php gravity_form( 28, false ); ?>
                </div>
            </div>
            <div class="hide-for-medium small-12 columns">
                <div class="item">
                    <h4>Introducing ClearPlex<sup>&reg;</sup> Windshield Protection Film by Madico.</h4>
                    <p>ClearPlex film absorbs the impact of rocks and road debris, leaving windshields in pristine condition. Your customers will feel good about protecting their vehicles and their investments.</p>
                    <p>Now, the world's most respected windshield protection brand is distributed by Madico, which means you can count on a quality product along with exceptional customer service.</p>
                    <ul>
                        <li>Optically clear</li>
                        <li>Patented hard-coated exterior film</li>
                        <li>Scratch-resistant</li>
                        <li>Protects against normal abrasion</li>
                        <li>99% UB blocking</li>
                        <li>Faster run-offs of rain and snow</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row quote-bar">
            <div class="small-12 medium-6 columns">
                <div class="quote">
                    <h4>"We estimate that we have saved $620,000 in windscreen replacement over the past year."<br />- <i>Geoff Bell, Reliability Officer Metro Trans</i></h4>
                </div>
            </div>
            <div class="hide-for-small-only medium-6 columns">
                <div class="quote">
                    <h4>"... I've applied your product to my car's windshield. I'm very happy with the results and the protection."<br />- <i>Dave, Self-installer</i></h4>
                </div>
            </div>
        </div>

        <div class="row collapse">
            <div class="small-12 medium-6 columns"><img src="/img/cplex-land-grfx-exotic.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>It's more than a car. It's a prized possession.</h3>
                    <p>High performance cars deserve the world's best performing windshield protection.</p>
                </div>
            </div>
        </div>

        <div class="row collapse">
            <div class="hide-for-medium small-12 columns"><img src="/img/cplex-land-grfx-equip.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>Keeps fleets on the road - and off the repair list.</h3>
                    <p>With well-engineered ClearPlex, windshields and bottom lines are protected.</p>
                </div>
            </div>
            <div class="show-for-medium medium-6 columns"><img src="/img/cplex-land-grfx-equip.jpg" /></div>
        </div>

        <div class="row collapse">
            <div class="small-12 medium-6 columns"><img src="/img/cplex-land-grfx-fleet.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>Adds instant credibility.</h3>
                    <p>Dealerships that recommend ClearPlex know it's the world's most respected name in windshield protection, backed by the highest level of customer service.</p>
                </div>
            </div>
        </div>
        
        <div class="row quote-bar">
            <div class="small-12 medium-6 columns">
                <div class="quote">
                    <h4>"There were incidents of road debris hitting the windshields. ClearPlex film protected the windshield."<br />- <i>Roger Zimmerman, Hertz Rent-A-Car</i></h4>
                </div>
            </div>
            <div class="hide-for-small-only medium-6 columns">
                <div class="quote">
                    <h4>"I'd like to thank you for making such a great product available for my customers."<br />- <i>Ryan Tounsley, President, Protective Film Solutions</i></h4>
                </div>
            </div>
        </div>

        <div class="row" style="text-align:center;">
            <div class="item" style="margin:0em;">
            <p style="margin-bottom:0em; font-size: .75em;"><a href="http://madico.com/" style="color: #0a0a0a;">Madico.com</a> | <a href="http://www.madico.com/window-film/privacy-policy/" style="color: #0a0a0a;">Privacy Policy</a></p>
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