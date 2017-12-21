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
        <meta property="og:title" content="ClearPlex by Madico" />
        <meta property="og:description" content="ClearPlex by Madico windshield protection absorbs the impact of rocks and road debris, leaving windshields in pristine condition. Learn more here." />
        <meta property="og:image" content="http://www.madico.com/wp-content/uploads/Introducing-ClearPlex-by-Madico.jpg" />
        <title>Introducing ClearPlex&reg; by Madico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
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
            html,body,h1,h2,h3,h4,h5,h6,p,li { font-family: 'Montserrat', sans-serif; }
            #slideshow { position:relative; height:396px; }
            #slideshow > div { position:absolute; }
            
            .fadein { position:relative; height:396px; overflow:hidden; }
            .fadein img { max-width:none; display:block; position:absolute; }
            
            .slides img { width:100%; }
            .item { display:inline-block; }
            .item h2, .item h3 { line-height:1; color:#00467f; }
            .overlay {
              position:absolute;
              top:0;
              display:inline-block
            }
            .quote-bar { background:#eeeef0 url(/img/dm16-land-quote.png) no-repeat center center ; min-height:180px; }
            .quote { margin:3em 6em; }
            .quote h4 { font-size:19px; }
            
            .dm16 .gform_heading {display:none}
            .dm16 .gform_description h3 { padding:0.175em 0;}
            .dm16 .gform_body { display:inline-block; color:#fff; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
            .dm16 .gform_body li:nth-child(n+5) { clear:unset; float:unset; width:95%; }
            .dm16 .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .dm16 .gform_body li:nth-last-child .gfield_description { display:none; }
            .validation_error,.validation_message{color:red}
            .validation_message{text-align:left}
            .dm16 .gform_body li label { color:#fff; text-align:left; }
            .dm16 .gform_body li .ginput_container_text { }
            .dm16 .gform_body li .ginput_container_select select { border-radius: 3px; }
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; }
            .dm16 .gform_body li input[type="text"] { border-radius: 3px; }
            .dm16 .gform_body li textarea { border-radius: 3px; height:140px !important; }
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer { color:#fff; margin:1em 2em; background-color:#00467f; display:block; text-align:center; }
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
            .dm16 .gform_footer .button:hover {
              background-color: #FFF;
              color: #dc582a;
            }
            #input_28_9{resize:none}

            .hero{
              background-image:url(/img/hero-no-text.jpg);
              background-repeat:no-repeat;;
              background-position:center center;
              background-size:cover;
              height:600px;
              display:flex;
              align-items:flex-end;
              padding-bottom: 65px;
            }
            .hero .item h3{
              font-size: 48px;
              line-height: 54px;
              color:#FFF;
              font-weight:300;
              margin-bottom:20px;
              width: 61%;
            }
            .hero .item p{
              color:#89b8ea;
              text-transform: uppercase;
              font-size:24px;
              font-weight:400;
              letter-spacing:2px;
            }
            .hero img{
              width:100%
            }
            .form-section{padding-bottom: 8%}

            .form-container{
              max-width:80%;
              padding:8% 0;
              text-align:center;
              border-bottom-right-radius: 5px;
              border-bottom-left-radius: 5px;
              background-color:#00467F;
            }
            .form-container h3,.form-container p{
              padding: 0 30px;
              color: #FFF;
            }
            .form-container h3{
              font-weight:300;
              font-size:30px;
              line-height:1.2em;
            }
            .form-container p{margin-bottom:50px}
            .form-container img{margin-bottom:50px}

            .features h4{
              color:#00467f;
              font-size:36px;
              font-weight:300;
              margin-top:1.5em;
              line-height: 48px;
              margin-bottom: 50px;
            }
            .features p{color:#787878}

            .icons{
              background-color:#eeeef0;
              padding:5% 0
            }
            .icons .icon-row{
              display: flex;
              align-items: center;
              margin: 15px 0;
            }
            .icons p{color:#787878}

            .images .row.collapse{
              display: flex;
              align-items: center;
            }
            .images .item{padding: 0 10%;margin: 0;}
            .images .item h3{
              margin-top:0;
              font-weight:300;
              font-size:40px;
              line-height:40px;
              margin-bottom: 20px;
            }
            .images .item p{margin-bottom:0;color:#787878}
            .images img{width: 100%}

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
            .orbit-container{
              height: 166px !important;
            }
            .orbit-bullets{text-align:left}
            .orbit-bullets button{
              height: 15px;
              width: 15px;
              background-color: #fff;
              border: 2px solid #d1d1d1;
              cursor: pointer;
            }
            .orbit-bullets button.is-active{
              background-color: #dc582a;
              border: none;
              position: relative;
              top: 2px;
            }

            .footer{padding:8% 0}
            .footer img{margin-bottom:30px}
            .footer p{color:#787878}
            .footer p,.footer a{font-size: 13px}
            .footer p:first-of-type{margin-bottom: 0}
            
            /* Small screens */
            @media only screen {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:16px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16_wrapper { max-width:100%; }
                .dm16 .gform_body {margin:0}
                .dm16 .gform_heading {top:0px}
                .dm16 .gform_body li {width:95%}
                .quote {margin:3em 3em}
                .logo {display:block;height: auto;width:175px;padding:.5em}
                .fadein img { left: -100px; top: 7px; height: 192px; }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2 { font-size:16px; }
                .item p{font-weight:300;font-size:18px;line-height:30px}
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein {height:396px}
                .fadein img { left:-218px; top:0; height:390px;}
                .dm16 .gform_body {margin:0 1em}
                .dm16 .gform_heading { top:-140px; }
                .dm16 .gform_body li { width: 95%; }
                .quote { margin: 3em 6em; }
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2 { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16 .gform_body li { width:46%; }
                .logo { margin: initial; display:initial; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
            @media(max-width:1024px){
              .images .item h3{
                font-size: 32px;
                line-height: 36px;
              }
            }
            @media(max-width:640px){
              .logo{margin: 0 auto}
              .hero{
                align-items: center;
                text-align: center;
                height: 250px;
                padding-bottom: 0;
              }
              .hero .item{margin: 0}
              .hero .item h3{
                font-size: 26px;
                width: 100%;
                line-height: 32px;
                margin-bottom: 10px;
              }
              .hero .item p{
                font-size: 16px;
              }

              .form-section{padding-bottom:0}
              .form-container{
                max-width:100%;
                margin-top:0px;
                padding:8% 20px;
              }
              .form-container h3,.form-container p{padding:0}
              .overlay{display:block;position:relative}
              .no-pad-mobile{padding: 0}

              .features.item{margin-left:15px !important;margin-bottom:15px}
              .features.item h4{font-size:24px;line-height:38px;margin-bottom:30px}
              .features.item p{font-size:16px}

              .dm16 .gform_footer .button{
                padding: 10px 20px;
                font-size: 14px;
              }
              .dm16 .gform_footer{
                margin:1em 0.5em;
              }
              .images .row.collapse{
                display: block;
              }
              .images .item{
                padding: 7%;
              }
              .images .item h3{
                font-size: 26px;
                line-height: 34px;
              }
              .testimonials{
                background-image: none;
                padding: 8% 0;
                background-color: #eaeef7;
              }
              .testimonials .columns{padding:0 30px}
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="row expanded">
            <div class="header small-12 large-8 large-offset-1 columns">
             <img class="logo" src="/img/cplex-land-logo.png">
            </div>
        </div>
        
        <section class="hero">
          <div class="row">
            <div class="small-12 columns">
              <div class="item">
                <h3>A new way to drive more sales:</h3>
                <p>Windshield Protection</p>
              </div>
            </div>
          </div>
        </section>
        
        <section class="form-section">
          <div class="row">
            <div class="medium-6 columns">
              <div class="item features">
                <h4>Generate new revenue with ClearPlex<sup>®</sup> Windshield Protection Film by Madico<sup>®</sup>.</h4>
                <p>ClearPlex Windshield Protection Film is not intended for use on conventional cars. Ideally, it is the best solution to the astronomical cost of windshield replacement for luxury, exotic, and classic cars, as well as fleets, and construction equipment.</p>
                <p>It effectively absorbs the impact of rocks and debris, leaving windshields in pristine condition. And since the film is replaced annually, you can expect repeat business from these high-end vehicle owners and investors.</p>
              </div>
            </div>
            <div class="small-12 medium-6 columns no-pad-mobile">
              <div class="contact-form overlay">
                <div class="form-container">
                  <img src="/img/form-icon.png" alt="">
                  <h3>Put yourself in the driver's seat and grow with us.</h3>
                  <p>Take your business to the next level with ClearPlex and other premium protection film products. Complete the form below to get started.</p>
                  <?php gravity_form( 28, false ); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="icons clearfix">
          <div class="row">
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/optically-icon.png" alt="Optically clear">
                </div>
                <div class="small-8 columns">
                  <p>Optically Clear</p>
                </div>
              </div>
            </div>
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/protect-icon.png" alt="Protects against normal abrasion">
                </div>
                <div class="small-8 columns">
                  <p>Protects against normal abrasion</p>
                </div>
              </div>
            </div>
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/hard-coatedicon.png" alt="Patented hard-coated film">
                </div>
                <div class="small-8 columns">
                  <p>Patented hard-coated film</p>
                </div>
              </div>
            </div>
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/rain-snow-icon.png" alt="Faster run-offs of rain and snow">
                </div>
                <div class="small-8 columns">
                  <p>Faster run-offs of rain and snow</p>
                </div>
              </div>
            </div>
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/uv-icon.png" alt="99% UV blocking">
                </div>
                <div class="small-8 columns">
                  <p>99% UV blocking</p>
                </div>
              </div>
            </div>
            <div class="medium-6 columns">
              <div class="row icon-row">
                <div class="small-4 large-3 columns text-center">
                  <img src="/img/support-icon.png" alt="Exceptional support from Madico">
                </div>
                <div class="small-8 columns">
                  <p>Exceptional support from Madico</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="images">
          <div class="row expanded collapse">
              <div class="small-12 medium-6 columns"><img src="/img/sports-car.jpg" /></div>
              <div class="small-12 medium-6 columns">
                <div class="item">
                  <h3>It's more than a car. It's a prized possession.</h3>
                  <p>High performance cars deserve the world's best performing windshield protection.</p>
                </div>
              </div>
          </div>
          
          <div class="row expanded collapse">
              <div class="hide-for-medium small-12 columns"><img src="/img/commercial-fleet.jpg" /></div>
              <div class="small-12 medium-6 columns">
                <div class="item">
                  <h3>Keeps fleets on the road &mdash; and off the repair list.</h3>
                  <p>With well-engineered ClearPlex, windshields and bottom lines are protected.</p>
                </div>
              </div>
              <div class="show-for-medium medium-6 columns"><img src="/img/commercial-fleet.jpg" /></div>
          </div>
          
          <div class="row expanded collapse">
              <div class="small-12 medium-6 columns"><img src="/img/classic-car.jpg" /></div>
              <div class="small-12 medium-6 columns">
                  <div class="item">
                    <h3>Adds instant credibility.</h3>
                    <p>Dealerships that recommend ClearPlex know it's the world's most respected name in windshield protection, backed by the highest level of customer service.</p>
                  </div>
              </div>
          </div>
        </section>
        
        <div class="row expanded">
          <section class="testimonials clearfix">
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
          </section>
        </div>

        <section class="footer">
          <div class="row expanded">
            <div class="small-12 columns text-center">
            <img src="/img/footer-logo.png" alt="ClearPlex Logo">
            <p><a href="/">Madico.com</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="/window-film/privacy-policy/">Privacy Policy</a></p>
            <p>&copy; <?php echo date('Y'); ?> ClearPlex by Madico. All rights reserved.</p>
            </div>
          </div>
        </section>
        
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
        $('.validation_message').each(function(){
          $(this).prev('div').find('input').css({'border':'1px solid red'})
        });
        </script> 
    </body>
</html>