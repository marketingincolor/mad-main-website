<?php
global $post, $section, $current_site, $language;
$cat = get_query_var('cat');
?>
<ul>
	<?php if ( is_category() ): ?>
	<li id="rss-subscribe">
		<h3><a href="<?php echo get_category_feed_link($cat);?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/rss.png" />Subscribe to <?php single_cat_title(); ?></a></h3>
	</li>
	<?php endif; ?>

	<?php if ( $language === 'chinese' ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<h3>Contact Lantic Technologies</h3>
			<p><strong>Phone</strong> 86-512-63004468<br />
			<strong>Fax</strong> 86-512-63004478‏<br />
			<a href="mailto:china@lantictech.com">china@lantictech.com</a></p>
		</div>
	</li>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() ): ?>
	<li class="featured-image">
		<?php the_post_thumbnail('sidebar-featured'); ?>
	</li>
	<?php endif; ?>

    <?php
    if ( $GLOBALS['section'] === 'window-film' && is_page('contact') )
        dynamic_sidebar('Window Film Pages');
    ?>

	<?php if ( $section === 'window-film' ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/window-film/contact/" class="button contact">Contact Us</a></p>
			<p>If US, call your local service center at <strong>301-349-2000</strong> or find an <a href="<?php echo get_page_link(669); ?>">international distributor</a>.</p>
		</div>
	</li>
	<?php elseif ( $current_site === 'safety-shield' ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
			<p><a href="/safety-shield/contact/" class="button contact">Contact Us</a></p>
			<p>If US, call your local service center at <strong>562-277-8775</strong> or <a href="/safety-shield/locate-partner/">locate a partner</a>.</p>
			<p>Find all <a href="http://dealerdirectory.madico.com" target="_blank">Madico film dealers</a>.</p>
		</div>
	</li>
	<?php endif; ?>

	<?php if( function_exists('madico_related_links') ) madico_related_links(); ?>

	<?php if ( $current_site !== 'safety-shield' ) : ?>
	<li class="recent-blog-posts links-list">
		<?php
		// Filter blog posts by category
		$widgetTitle = "Latest Blog Updates";
		$query_args = array(
			'posts_per_page' => 6,
			'post_type' => 'post',
		);
		if ( $section === 'specialty-film' || $section === 'window-film' ) {

			// Window films
			if ( $section === 'window-film' ) {
				$widgetTitle = "Recent Window Films Blog Posts";
				$query_args['category'] = $wf_category_id;
	 		}
	 		// Specialty Films
	 		else if ( $section === 'specialty-film' ) {
				$widgetTitle = "Recent Specialty Films Blog Posts";
				$query_args['category'] = $sf_category_id;
	 		}
	 		// Category page
	 		else if ( is_category() ) {
				$query_args['category'] = get_query_var('cat');
	 		}
	 		// President's message
	 		else {
				$widgetTitle = "Recent Message From Our President";
				$query_args['category'] = 28535;
	 		}
	 	}

	 	// Loop
 		$latestPosts = get_posts( $query_args );
 		if ( $latestPosts ) :
 		?>
		<h2><?php echo $widgetTitle;?></h2>
		<ul>
			<?php
			foreach ( $latestPosts as $latestPost ) :
				$categories = null;
				foreach( ( get_the_category( $latestPost->ID ) ) as $category ) {
					$categories .= $category->category_nicename  . ' ';
				}
			?>
			<li class="<?php echo sanitize_html_class( $categories ); ?>">
				<a href="<?php echo get_permalink( $latestPost->ID ); ?>"><?php echo get_the_title( $latestPost->ID ); ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
 		<?php endif; ?>
	</li>
	<?php endif; ?>

    <?php
    // Dynamic sidebars
	if ( $section === 'window-films' && ! is_page('contact') ) {
        dynamic_sidebar('Window Film Pages');
	}
	elseif ( $section === 'specialty-films' ) {
		dynamic_sidebar('Specialty Film Pages');
	}
	elseif ( is_page() )  {
		dynamic_sidebar('General Page');
	}
	else {
		dynamic_sidebar('Blog');
	}
	?>

</ul>