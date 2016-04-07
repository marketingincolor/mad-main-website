<?php
/*
Template Name: Page Gallery
*/

get_header(); ?>

<script type="text/javascript" src="/wp-content/themes/madico.com/glass_film_kit/js/specific.js"></script>
<link type="text/css" id="standardStyleSheet" title="standard" rel="stylesheet" href="/wp-content/themes/madico.com/glass_film_kit/css/style.css" media="screen" />

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<div class="breadcrumbs">
		<?php show_breadcrumb(); ?>
	</div>

	<div id="columns">
		<div class="main" style="margin-right:0; padding-right: 0; width: auto; background: none;">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>

				<div class="cms">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>


 	 <div id="inhalt">

	     <div id="inhalt_content">

 				<div id="filmPickerWrap">
 					<div id="filmPicker">
 						<div id="breadcrumb"><a class="current b1" href="#">Choose a Building</a> <a class="b2" href="#">Choose a Film</a> <a class="b3" href="#">Film Applied</a></div>
	 				 	<ul>
		 					<li class="stage1">
								<span class="wrap"><span class="overlay">Commercial</span><img class="com1" src="/wp-content/themes/madico.com/glass_film_kit/images/commercialThumb1.jpg" alt="Commercial" /></span>
								<span class="wrap"><span class="overlay">Commercial</span><img class="com2" src="/wp-content/themes/madico.com/glass_film_kit/images/commercialThumb2.jpg" alt="Commercial" /></span>
								<span class="wrap"><span class="overlay">Commercial</span><img class="com3" src="/wp-content/themes/madico.com/glass_film_kit/images/commercialThumb3.jpg" alt="Commercial" /></span>
								<span class="wrap"><span class="overlay">Commercial</span><img class="com4" src="/wp-content/themes/madico.com/glass_film_kit/images/commercialThumb4.jpg" alt="Commercial" /></span>
								<span class="wrap"><span class="overlay">Residential</span><img class="res1" src="/wp-content/themes/madico.com/glass_film_kit/images/residentialThumb1.jpg" alt="Residential" /></span>
								<span class="wrap"><span class="overlay">Residential</span><img class="res2" src="/wp-content/themes/madico.com/glass_film_kit/images/residentialThumb2.jpg" alt="Residential"  /></span>
								<span class="wrap"><span class="overlay">Residential</span><img class="res3" src="/wp-content/themes/madico.com/glass_film_kit/images/residentialThumb3.jpg" alt="Residential"  /></span>
		 					</li>
		 					<li class="stage2">
		 						<img class="dg35" src="/wp-content/themes/madico.com/glass_film_kit/images/dg35Thumb.png" alt="DG-35" />
		 						<img class="ng20" src="/wp-content/themes/madico.com/glass_film_kit/images/ng20Thumb.png" alt="NG-20" />
		 						<img class="sg330" src="/wp-content/themes/madico.com/glass_film_kit/images/sg330Thumb.png" alt="SG-330" />
		 						<img class="tsg335" src="/wp-content/themes/madico.com/glass_film_kit/images/tsg335Thumb.png" alt="TSG-335" />
		 						<img class="sl280" src="/wp-content/themes/madico.com/glass_film_kit/images/sl280Thumb.png" alt="SL-280" />
		 						<img class="rs440" src="/wp-content/themes/madico.com/glass_film_kit/images/rs440Thumb.png" alt="RS-440" />
		 						<img class="sb221" src="/wp-content/themes/madico.com/glass_film_kit/images/sb221Thumb.png" alt="SB-221" />
		 					</li>
		 					<li class="stage3">
		 						<img src="/wp-content/themes/madico.com/glass_film_kit/images/loader.gif" />
		 					</li>
	 					</ul>
 					</div>
 				</div>

 			</div>
 		</div>



		</div>

	</div>

		</div>

	</div>
	</div>
	</div>

<?php get_footer(); ?>