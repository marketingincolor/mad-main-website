<?php 
/**
 * Template Name: Protection Pro Landing Page
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
            #slideshow { position:relative; /*height:396px;*/ }
            #slideshow > div { position:absolute; }
            .fadein { position:relative; height:396px; overflow:hidden; }
            .fadein div { max-width:none; display:block; position:absolute; }
            .slide { font-family:'Oswald'; }
            .slide h3 { display:block; position:relative; top:0; left:0; font-weight:400; font-size:42px; }
            .slide .title { color:#f8e275; }
            .slide .title sup { font-size:45%; top:-1.25em; }
            .slide p { display:block; font-weight:300; font-size:24px; color:#fff; }
            .slide .slide-copy { margin:4em; width:calc(50% - 4em); }
            .cta-button { 
                background-color:#f8e275; 
                padding:10px 20px; 
                border-radius:10px; 
                border:3px solid #d9c666; 
                color:#6D1611; 
                font-weight:700; 
                font-size:36px; 
            }
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
            .dm16 .gform_heading { 
                text-align:center; color:#fff; 
                padding:1em; 
                background-color:#00467f; 
                position:relative; 
                display:inline-block; 
                width:100%; 
            }
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
                .fadein div { left:0; top:0; }
                .dm16_wrapper { max-width:100%; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body li { width:95%; }
                .quote { margin: 3em 3em; }
                .logo { margin: 0 auto; display:block; height: auto; width: 175px; padding: .5em; }
                .fadein div { left:0px; top: 7px; height: 192px; }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:396px; }
                .fadein div { left:0; top:0; height:390px;}
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body { margin:0 1em; margin-top:-100px; }
                .dm16 .gform_heading { top:-140px; }
                .dm16 .gform_body li { width: 95%; }
                .quote { margin: 3em 6em; }
                .logo { margin: initial; display:initial; width:auto;}
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { height:666px; }
                .fadein div { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_body li { width:46%; }
                .logo { margin: initial; display:initial; }
                .fadein div { left:0px; top: 0px;  height: auto;}
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
        <!-- End Google Tag Manager (noscript) -->
        <div class="row">
            <div class="header small-12 large-8 large-offset-1 columns">
                <img class="logo" src="/img/prop-land-grfx-logo.png">
            </div>
        </div>
        
        <div class="row">
            <div id="slideshow" class="fadein small-12">
                <div id="img-1" class="slide">
                    <img class="auto" src="/img/prop-land-grfx-slide1.jpg"/>
                    <div class="slide-copy">
                        <h3 class="title">Introducing ClearPlex<sup>&reg;</sup> Protection Pro</h3>
                        <p>Imagine offering custom cut screen protectors on demand, for any touchscreen device, in seconds flat!</p> 
                        <br>
                        <p><button class="cta-button">Get Started</button></p>
                    </div>
                </div>

                <div id="img-2" class="slide">
                    <img class="auto" src="/img/prop-land-grfx-slide2.jpg"/>
                    <div class="slide-copy">
                        <h3 class="title">Introducing ClearPlex<sup>&reg;</sup> Protection Pro 2</h3>
                        <p>Imagine offering custom cut screen protectors on demand, for any touchscreen device, in seconds flat!</p> 
                        <br>
                        <p><button class="cta-button">Get Started</button></p>
                    </div>
                </div>

                <div id="img-3" class="slide">
                    <img class="auto" src="/img/prop-land-grfx-slide3.jpg"/>
                    <div class="slide-copy">
                        <h3 class="title">Introducing ClearPlex<sup>&reg;</sup> Protection Pro 3</h3>
                        <p>Imagine offering custom cut screen protectors on demand, for any touchscreen device, in seconds flat!</p> 
                        <br>
                        <p><button class="cta-button">Get Started</button></p>
                    </div>
                </div>

                <div id="img-4" class="slide">
                    <img class="auto" src="/img/prop-land-grfx-slide4.jpg"/>
                    <div class="slide-copy">
                        <h3 class="title">Introducing ClearPlex<sup>&reg;</sup> Protection Pro4</h3>
                        <p>Imagine offering custom cut screen protectors on demand, for any touchscreen device, in seconds flat!</p> 
                        <br>
                        <p><button class="cta-button">Get Started</button></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="small-12 columns">
                <div class="item">
                    <h4>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</h4>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor.</p>
                    <ul>
                        <li>Optically clear</li>
                        <li>Patented hard-coated exterior film</li>
                        <li>Scratch-resistant</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row video-bar collapse">
            <div class="small-12 columns">
                <div class="video-headline"><img src="/img/prop-land-grfx-vid-hdr.png" /></div>
                <div class="inner-video"></div>
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

        <div class="row form-bar collapse">
            <div class="small-12 medium-6 columns">
                <div class="contact-form overlay">
                <?php gravity_form( 28, false ); ?>
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
        
        <script>
            $(function(){
                $("#slideshow > div:gt(0)").hide();
                setInterval(function() { 
                  $('#slideshow > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#slideshow');
                },  
                5000);
            });
        </script>

        <?php //wp_footer(); ?>

        <!--<script type="text/javascript"> 
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
        </script> -->
    </body>
</html>