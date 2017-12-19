<?php
/**
 * Template Name: WFD 2015 Landing Page
 */
 ?>
<!DOCTYPE html>
<html lang="en">
      <head> 
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <meta charset="utf-8">
          <title>Window Film Day</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
          <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700|Unlock|Raleway:400,500,600' rel='stylesheet' type='text/css'>
          <link href="http://static.formstack.com/forms/css/3/default_18b91c4cb4.css" type="text/css" rel="stylesheet">
          
          <style>
              body { background: url('http://www.madico.com/img/grfx_wfd15_bgnd.gif') transparent repeat scroll center top; color: #000; font-family: 'Raleway',sans-serif; margin:0; }
              #container { position: relative; margin-left:auto; margin-right:auto; text-align:center; }
              p { font-size:32px; font-weight:500; letter-spacing: -0.02em; }
              a { text-decoration:none; }
              a:hover { text-decoration:underline; }
              #header { background: url('http://www.madico.com/img/grfx_wfd15_hdr.gif') transparent repeat scroll center top; }
              #header-branding { position:relative; text-align:center; padding:0px 30px; }
              #wrapper { max-width:1540px; padding:0px 30px; position:relative; display:inline-block; text-align:left; }
              #form { display:inline-block; max-width:630px; width:46%; background: url('http://www.madico.com/img/grfx_wfd15_form_bgnd.png') no-repeat scroll center bottom; float:right; min-height:1000px; }
              #copy img { width:100%; }
              .white { color:#FFFFFF; }
              .yellow { color:#DAAD2C; }
              .red { color:#E65446; }
              .bold { font-weight:bold; }
              .form-text { font-family:'Unlock', serif; font-size:2.125em; text-align:center; }
              #footer, #footer a { color:#000; }
              .rfloat { float:right; }
              .lfloat { float:left; } 
              form { margin: 0px; !important }
              #lightbox { position:absolute; top:0; left:0; width:100%; height:2400px; background:rgba(40, 40, 40, 0.75) repeat; text-align:center; z-index:1000; }
              #lightbox p { text-align:right; color:#fff; margin-right:20px; font-size:12px; }
              #lightbox img { box-shadow:0 0 25px #111; -webkit-box-shadow:0 0 25px #111; -moz-box-shadow:0 0 25px #111; max-width:940px; }
		
              @media all and (min-width: 721px)  {
                  body { }
                  #container { }
                  #nwfdlogo { float:left; }
                  #madlogo { float:right; }
                  #header { position:relative; width:100%; text-align:center; height:437px; display:inline-block;}
                  #header h2 { font-family:'Cabin Sketch', cursive; font-size:70px; margin:40px 0px; }
                  #copy { display:inline-block; width:52%; float:left; }
                  #form { display:inline-block; width:46%; background: url('http://www.madico.com/img/grfx_wfd15_form_bgnd.png') no-repeat scroll center bottom; float:right; min-height:1000px; }
                  #form_box { width:90%; margin-left:30px; overflow:auto;  }
                  #footer { position:relative; display:block; padding:20px; text-align:center; }
              }
	
              @media all and (max-width: 720px) {
                  body { }
                  p { font-size:22px; }
                  #container { position: relative; margin-left:auto; margin-right:auto; text-align:center; }
                  #header { position:relative; float:none; margin:10px; }
                  #header h2 { font-family:'Cabin Sketch', cursive; font-size:48px; margin:24px 0px; }
                  #form { width:100%; float:none; min-height:1000px; }
                  #form_box { margin:0px 20px; }
                  #copy { margin:0px 20px; font-size:17px; }
                  #footer {  position:relative; padding:10px;}
                  img {  max-width:100%; height: auto; }
                  #lightbox { position:fixed; top:0; left:0; width:100%; background:rgba(40, 40, 40, 0.75) repeat; text-align:center; }
                  #lightbox img { max-width:98%; }
              }
          </style>
          
          <script>
          jQuery(document).ready(function($) {

                $('.lightbox_trigger').click(function(e) {
                    e.preventDefault();
                    var image_href = $(this).attr("href");
                    if ($('#lightbox').length > 0) { 
                        $('#content').html('<img src="' + image_href + '" />');
                        $('#lightbox').show();
                        window.scrollTo(0,0);
                    }
                    else {
                        var lightbox = '<div id="lightbox"><p>Click to close</p><div id="content">' + 
                        '<img src="' + image_href +'" />' +
                        '</div></div>';
                        //$('body').append(lightbox);
                        $('#container').prepend(lightbox);
                        window.scrollTo(0,0);
                    }

                });
                $(document).on('click', '#lightbox', function(){ 
                    $('#lightbox').hide();
                });

            });
            </script>
          
    </head>

<body>
    <div id="container">
		
        <div id="header-branding">
            <img id="nwfdlogo" src="http://www.madico.com/img/grfx_wfd_nwfd_logo.png" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img id="madlogo" src="http://www.madico.com/img/grfx_wfd_mwf_co_logo.png" >
		</div>
        <div id="header">
            <h2 class="white">We're Rocking this</h2>
            <h2 class="yellow">National Window Film Day</h2>
            <h2 class="white">with a Free Poster from Madico!</h2> 
        </div>

        <div id="wrapper">
            <div id="copy">
                <p>What better way to honor the unsung heroes of the Window Tinting Industry than to make you the headline act on this crazy cool 18"x24" poster!</p>
                <p>You can get your poster by calling <span class="bold red">888-887-2022</span>. Or simply submit the form on this page to register for yours now!</p>
                <p>Supplies are limited, so get yours today. <br />One poster per customer. And ... oh yeah ... <span class="bold yellow">Rock On!</span></p>
                <p class="bold red">Click on the poster below to get a closer look!</p>
                <a href="http://www.madico.com/img/grfx_wfd15_lg_poster.png" class="lightbox_trigger"><img src="http://www.madico.com/img/grfx_wfd15_sm_poster.jpg" style="max-width:726px;"></a>
                <br /><br />
            </div>

            <div id="form">
                <br />
                <div id="form_box">
                    <h2 class="form-text white">Poster Request Form</h2>
                    <script type="text/javascript" src="https://marketingincolor.formstack.com/forms/js.php?1980727-vU3JH2FMsr-v3"></script><noscript><a href="https://marketingincolor.formstack.com/forms/window_film_day_poster_request…" title="Online Form">Online Form - Window Film Day Poster Request</a></noscript>
                </div>
                <br /><br />
            </div>
        </div>
        
		<br clear="all" />
		<div id="footer">
			2015 Madico, Inc. &#124; <a href="http://www.madico.com/wp-content/themes/madico.com/media/Madico-Terms-and-Conditions.pdf" target="_new">Terms and Conditons</a>
		</div>
			
	</div>
    

    
</body>
</html>