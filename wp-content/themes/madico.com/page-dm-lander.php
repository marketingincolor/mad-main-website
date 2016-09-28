<?php 
/**
 * Template Name: DM 16 Landing Page
 *
 * Landing page template without a sidebar
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
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
            
            .fadein { position:relative; height:396px; overflow:hidden; }
            .fadein img { max-width:none; display:block; position:absolute; }
            
            .slides img { width:100%; }
            .item { display:inline-block; }
            .item h3 { line-height:1; color:#00467f; }
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
                .item { margin:2em 2em 1em 2em;}
                .item h3, item h4 { font-size:21px; margin-bottom: 0.5em; }
                .item p, .item li { font-size:16px; }
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16_wrapper { max-width:100%; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_body li { width:95%; }
            }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em;}
                .item h3, item h4 { font-size:21px; margin-bottom: 0.5em; }
                .item p, .item li { font-size:16px; }
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
                .dm16 .gform_heading { top:-140px; }
                .dm16 .gform_body { margin:0 1em; margin-top:-100px; }
                .dm16 .gform_body li { width:46%; }
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em; }
                .item h3, item h4 { font-size:30px; margin-bottom: 0.75em; }
                .item p, .item li { font-size:21px; }
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16_wrapper { max-width:80%; }
            }
        </style>
    <?php //wp_head(); ?>
    </head>
    <body>
 
        <div class="row">
            <div class="header small-12 medium-8 medium-offset-1 columns">
             <img src="/img/dm16-land-logo.png">
            </div>
        </div>
        
        <div class="row">
            <div class="fadein small-12">
                <img src="/img/dm16-land-slide-arch.jpg"/>
                <img src="/img/dm16-land-slide-auto.jpg"/>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="show-for-medium medium-6 columns">
                <div class="item" style="margin-left:19%;">
                    <h4 style="margin-top:1.5em;">With Madico, you always have a product and a partner you can trust.</h4>
                    <ul style="margin:0; padding:0;">
                        <li style="margin-left:1em;">Best-in-class commercial and residential window films have made our name synonymous with durability for more than 40 years.</li>
                        <li style="margin-left:1em;">Unmatched combination of quality, function, and style in automotive tinted films.</li>
                        <li style="margin-left:1em;">Oustanding support and personal attention through a dedicated, knowledgeable team.</li>
                    </ul>
                </div>
            </div>
            <div class="small-12 medium-6 columns">
                <div class="contact-form overlay">
                <?php gravity_form( 22, false ); ?>
                </div>
            </div>
            <div class="hide-for-medium small-12 columns">
                <div class="item">
                    <h4>With Madico, you always have a product and a partner you can trust.</h4>
                    <ul>
                        <li>Best-in-class commercial and residential window films have made our name synonymous with durability for more than 40 years.</li>
                        <li>Unmatched combination of quality, function, and style in automotive tinted films.</li>
                        <li>Oustanding support and personal attention through a dedicated, knowledgeable team.</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row quote-bar">
            <div class="small-12 medium-6 columns">
                <div class="quote">
                    <h4>"Superb product and customer support throughout 20 years."<br />- <i>Mike Amado, Tint Master</i></h4>
                </div>
            </div>
            <div class="hide-for-small-only medium-6 columns">
                <div class="quote">
                    <h4>"Products and service second to none."<br />- <i>Leonard Aguanno, Cool World Solutions</i></h4>
                </div>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="small-12 medium-6 columns"><img src="/img/dm16-land-grfx-car.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>When it comes to paint protection, we've left no stone unturned.</h3>
                    <p>We've perfected our Invisi-Film Paint Protection to provide superior invisible protection, unrivaled durability, total ease of installation and an easy boost to your bottom line.</p>
                </div>
            </div>
        </div>
        
        <div class="row collapse">
            <div class="hide-for-medium small-12 columns"><img src="/img/dm16-land-grfx-film.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>Roll out the best line of defense: Safety &amp; Security Window Films</h3>
                    <p>In addition to holding shattered glass together, this line of films will also hold something else together: your customer's peace of mind.</p>
                </div>
            </div>
            <div class="show-for-medium medium-6 columns"><img src="/img/dm16-land-grfx-film.jpg" /></div>
        </div>
        
        <div class="row collapse">
            <div class="small-12 medium-6 columns"><img src="/img/dm16-land-grfx-eetips.jpg" /></div>
            <div class="small-12 medium-6 columns">
                <div class="item">
                    <h3>Driving new business to our valued dealers.</h3>
                    <p>Our blog raises awareness about how window film can help stop climate change and drives traffic to our dealers.</p>
                </div>
            </div>
        </div>
        
        <div class="row quote-bar">
            <div class="small-12 medium-6 columns">
                <div class="quote">
                    <h4>"I am extremely satisfied with the product and services - our years with Madico are proof!"<br />- <i>Russell Dupuis, The Top Shop</i></h4>
                </div>
            </div>
            <div class="hide-for-small-only medium-6 columns">
                <div class="quote">
                    <h4>"Switched to Madico because of the reliability and the great help I get from customer service."<br />- <i>Ray Caamano, Hudson Valley Window Film</i></h4>
                </div>
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