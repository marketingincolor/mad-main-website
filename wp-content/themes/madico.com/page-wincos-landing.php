<?php
/**
 * Template Name: Wincos Landing Page
 */
 ?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title>Wincos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	body {
		color: #333333;
		font-family: Verdana,Helvetica,sans-serif;
	    font-size: 14px;
		margin:0;
	}
	#copy { display:inline-block; width:371px; height:352px; background: url('http://www.sunscapefilms.com/images/grfx_wincos_bluebox.png') no-repeat scroll 0 0; margin: 80px 0px 0px 40px; }
	#copy h2 { display:inline-block; width: 100%; line-height:24px; font-size:24px; text-align:center; }
	#copy h3 { display:inline-block; width: 100%; margin:10px 0px 20px 0px; font-size:16px; text-align:center; }
	#copy h4 { display:inline-block; width: 100%; font-size:13px; color:#fff; font-weight:normal; text-align:center; line-height:16px; }
	#form { display:inline-block; width:371px; height:100px; /*height:654px;*/ background: url('http://www.sunscapefilms.com/images/grfx_wincos_form_bgnd.png') no-repeat scroll 0 0; margin: 30px 0px 0px 40px; }
	#form h2 { color:#fff; text-align:center; }
	#frame { margin: 5px 0px 0px 35px; border:0px; width:380px; height:1000px; }
		
	@media all and (min-width: 721px)  {
		body {
			background: #fff url('http://www.sunscapefilms.com/images/grfx_wincos_bgnd.jpg') no-repeat scroll center 200px;
		}
		#container { position: relative; width: 960px; margin-left:auto; margin-right:auto; }
		#header { position:relative; float:right; width:270px; margin:15px; }
		#footer { font-size:12px; position:relative; float:right; width:490px; margin:15px; top:-630px; }
	}
	
	@media all and (max-width: 720px) and (min-width: 321px) {
		body {
			background:#000 url('http://www.sunscapefilms.com/images/grfx_wincos_bgnd.jpg') no-repeat fixed -10px top;
		}
		#container { position: relative; margin-left:auto; margin-right:auto; }
		#header { position:relative; float:none; width:270px; margin:10px 0px 0px 40px; }
		#copy { margin: 10px 0px 0px 40px; }
		#footer { background-color: #fff; font-size:12px; position:relative; width:350px; margin:10px 0px 0px 40px; padding:10px;}
		#frame { margin: 5px 0px 0px 35px; border:0px; width:380px; height:1000px; }
	}
	
	@media all and (max-width: 320px)  {
		body { background:#ccc url('') no-repeat; }
		#container { position: relative; margin-left:auto; margin-right:auto; text-align:center; }
		#header { position:relative; float:none; margin:10px; }
		#copy, #form { margin: 10px; background:#fff url('') no-repeat; width:300px; }
		#copy h4, #form h2 { color: #333; }
		#footer { font-size:12px; position:relative; margin:10px; padding:10px;}
		#frame { margin:0px; border:0px; width:310px; height:1060px; }
	}
	</style>
  </head>

  <body>
	<div id="container">
		
		<div id="header">
			<img src="http://www.sunscapefilms.com/images/grfx_wincos_logo.png">
		</div>
		
		<div id="copy">
			<h2>Want to double<br />your profits<br />without increasing<br />your efforts?</h2>
			<h3>Wincos Window Films offer<br />premier performance for those<br />willing to pay for the best.</h3>
			<h4>Wincos breakthrough material offers drivers<br />high heat rejection without the look of dark,<br />tinted windows - nor the potential for<br />signal interference.</h4>
		</div>
		
		<div id="form">
			<h2>Sign Up Now For Our FREE Wincos Sales Kit!</h2>
		</div>
		<br clear="all" />
			<iframe id="frame" src="http://www.formstack.com/forms/?1296324-e8chbuNKAW" title="Wincos Sales Kit Form" frameborder="0" scrolling="no"></iframe>

		
		<br clear="all" />
		<div id="footer">
			<i>Wincos automotive films are manufactured by Lintec and exclusively distributed in North America by Madico, Inc.</i>
			<br /><br />
			&copy;2012 Madico, Inc. &#124; <a href="http://www.madico.com/wp-content/themes/madico.com/media/Madico-Terms-and-Conditions.pdf">Terms and Conditons</a>
		</div>
			
	</div>
  <br /><br />

  </body>
</html>