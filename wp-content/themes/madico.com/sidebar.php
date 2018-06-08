<?php 
global $post, $section, $sf_page_id, $wf_page_id, $sf_category_id, $wf_category_id, $language;
$cat = get_query_var('cat');
?><!-- <?php echo $section; ?> -->
<ul>
	<?php if ( is_category() ): ?>
	<li id="rss-subscribe">
		<h3><a href="<?php echo get_category_feed_link($cat);?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/rss.png" />Subscribe to <?php single_cat_title(); ?></a></h3>
	</li>
	<?php endif; ?>

	<?php if ( $language == 'chinese' /*&& ! is_page('contact')*/ ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<!--<h3>Contact Lantic Technologies</h3>
			<p><strong>Phone</strong> 86-512-63004468<br />
			<strong>Fax</strong> 86-512-63004478‏<br />
			<a href="mailto:china@lantictech.com">china@lantictech.com</a></p>-->
            <p><a href="/zh-hans/about/contact/" class="button contact">联系方式</a></p>
            <p><strong>窗膜总部</strong><br />
                Madico, Inc.<br />
                2630 Fairfield Ave. South<br />
                St. Petersburg, FL  33712<br />
                USA<br />
                +1 727 388 2183<br />
                <br />
                <!--<strong>公司总部</strong><br />
                Madico, Inc.<br />
                64 Industrial Parkway<br />
                Woburn, MA 01801<br />
                USA<br />-->
            </p>
		</div>
	</li>
	<?php endif; ?>

    <?php
    if ( $GLOBALS['section'] == 'window-film' && is_page('contact') )
        dynamic_sidebar('Window Film Pages');
    ?>
	
	<?php if ( $section == 'window-film' && ! is_page('contact') ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/<?php echo $section; ?>/contact/" class="button contact">Contact Us</a></p>
			<p>If US, call your local service center at <strong>888-887-2022</strong> or find an <a href="<?php echo get_page_link(669); ?>">international distributor</a>.</p>
		</div>
	</li>
	<?php endif; ?>

	<?php if ( $section === 'contract-coating' && ! is_page('contact') ) : ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/specialty-film/contact/" class="button contact">Contact Us</a></p>
		</div>
	</li>
	<?php endif; ?>

	<?php //if ( $section === 'pv-backsheets' && ! is_page('contact') ) : ?>
	<!--<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/<?php //echo $section; ?>/contact/" class="button contact">Contact Us</a></p>
		</div>
	</li>-->
	<?php //endif; ?>

	<?php if ( $section === 'specialty-film' && ! is_page('contact') ) : ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/<?php echo $section; ?>/contact/" class="button contact">Contact Us</a></p>
		</div>
	</li>
	<?php endif; ?>

	<?php if ( is_page('anti-fog-film') || is_page('anti-fog-film-test-data') || is_page('anti-fog-faqs') ) : ?>
		<li class="more-information feature">
			<h2 style="display:inline-block;">For More Information or to place an order please call:</h2>
			<div class="textwidget">
				<p>
					<strong>Rob Comeau</strong><br />
					Director of Business Development<br />
					+1 781-756-4211<br />
					<a href="mailto:rcomeau@madico.com">rcomeau@madico.com</a>
				</p>
			</div>
		</li>
	<?php endif; ?>

	<?php 
	if ( $sidebar_nav = madico_sidebar_nav() )
		echo $sidebar_nav;
	?>
	
	<?php if( function_exists('madico_related_links') ) madico_related_links(); ?> 
	
	<?php if ( $section === 'specialty-film' ) : ?>
	<li class="recent-blog-posts links-list">
		<?php 
		// Window films
		if ( $section == 'window-film' ) {
			query_posts("cat=$wf_category_id&posts_per_page=8");
			$widgetTitle = "Recent Window Films Blog Posts";
 		} 
 		// Category page
 		else if ( is_category() ) { 
			query_posts( 'posts_per_page=8&cat=' . get_query_var('cat') );
			$widgetTitle = "Recent Posts";
 		}
 		if ( have_posts() ) : 
 		?> 			
		<h2><?php echo $widgetTitle;?></h2>
		<ul>
			<?php 
			while ( have_posts() ) : 
			the_post();
			$categories;
			foreach( ( get_the_category() ) as $category ) { 
				$categories .= $category->category_nicename  . ' '; 
			}
			?> 
			<li class="<?php echo $categories ?>"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php $categories = null; endwhile; wp_reset_query(); ?>
		</ul>
 		<?php endif; ?>
	</li>
	<?php endif; ?>

    <?php      
    // Dynamic sidebars
	if ( is_page($wf_page_id) || ( isset($post->ancestors) && in_array($wf_page_id, $post->ancestors) ) ) {
		if ( !is_page('contact') )
            dynamic_sidebar('Window Film Pages');
	}
	elseif ( is_page($sf_page_id) || ( isset($post->ancestors) && in_array($sf_page_id, $post->ancestors) ) ) { 
		dynamic_sidebar('Specialty Film Pages');
	}
	elseif ( is_page('invisifilm') || is_page('nano-ceramic') )  { ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/<?php echo $section; ?>/contact/" class="button contact">Contact Us</a></p>
			<p>If US, call your local service center at <strong>888-887-2022</strong> or find an <a href="<?php echo get_page_link(669); ?>">international distributor</a>.</p>
		</div>
	</li>
	<?php 
		dynamic_sidebar('Window Film Pages');
	} 
	elseif ( is_page() )  {
		dynamic_sidebar('General Page');
	} 
	else {
		dynamic_sidebar('Blog');
	}
	?>
	
</ul>