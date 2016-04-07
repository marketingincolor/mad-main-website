<?php
/**
 * Setup theme options
 */
function madico_theme_setup() {
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 265, 60 );
	add_image_size( 'sidebar-featured', 300, 200 );
}
add_action( 'after_setup_theme', 'madico_theme_setup', 11 );

add_action( 'init', 'register_custom_posttypes' );
add_filter( 'wp_list_pages', 'base_better_lists' );
add_filter( 'wp_list_categories', 'base_better_lists' );

/**
 * Dependencies
 */
include_once TEMPLATEPATH . '/inc/theme-customizer.php';
include_once TEMPLATEPATH . '/inc/MetaBox.php';
include_once TEMPLATEPATH . '/inc/MediaAccess.php';
if ( is_admin() ) wp_enqueue_style( 'custom_meta_css', get_bloginfo( 'stylesheet_directory' ) . '/css/meta.css' );
include_once TEMPLATEPATH . '/inc/team.inc.php';

// Only for main domain
if ( is_main_site() )
	include_once TEMPLATEPATH . '/inc/crisis.inc.php';

if ( class_exists( 'SitePress' ) )
	include_once TEMPLATEPATH . '/inc/WPMLPersistence.class.php';
include_once TEMPLATEPATH . '/inc/SafetyShield.php';


/**
 * Relevanssi Excerpt Content Filtering
 */
function madico_search_excerpt_filters( $content ) {
	// Remove text between { and } to avoid showing commands
	// for the Tabs Slides plugin used for tabbed content
	$content = preg_replace( '/{([^}]*)}/', '.', $content );

	return $content;
}
add_filter( 'relevanssi_excerpt_content', 'madico_search_excerpt_filters' );


/**
 * Main Menu
 *
 * Added to the header of the site, allows 3 levels for
 * site navigation.
 */
function _madico_main_menu() {
	global $current_site;
	?>
	<div class="menu">
		<?php
		// SafetyShield subsite
		if ( $current_site === 'safety-shield' && has_nav_menu('safety_shield') ) {
			wp_nav_menu( array(
				'theme_location' => 'safety_shield',
				'container' => false,
			) );
		}

		// Main site
		else {
			echo '<ul>';
			wp_list_pages( array(
				'sort_column' => 'menu_order',
				'title_li' => '',
				'depth' => 3,
				'walker' => new Madico_Custom_Walker_Page()
			) );
			echo '</ul>';
		}
		?>
	</div>
	<?php
}


/**
 * Footer Menu
 *
 * Added to the footer of the site, allows 1 level for
 * site navigation.
 */
function _madico_footer_menu() {
	global $current_site;
	?>
	<div class="menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer_menu',
			'depth' => 1,
			'menu_class' => 'menu clearfix'
		) );
		?>
	</div>
	<?php
}


/**
 * Is a crisis currently active?
 *
 * If a crisis is set to active on the /crisis-alert/ page
 * this will return true.
 *
 * @uses $crisis_details (WPAlchemy_MetaBox Class)
 *
 * @param unknown $slug Slug for the alert page, just in case it changes in the future
 */
function is_crisis( $slug = 'crisis-alert' ) {
	global $crisis_details;
	$crisis_alert_page = get_page_by_path( $slug );
	$crisis_details->the_meta( $crisis_alert_page->ID );
	$status = ( $crisis_details->get_the_value( 'active' ) == 'yes' ? true : false );
	return $status;
}

/**
 * Post type entries listing
 */
function madico_custom_post_type_list( $post_type = 'crisis', $excerpt = TRUE ) {
	$query = new WP_Query( 'post_type=' . $post_type );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			$html .= '<div class="' . $post_type . '-post clearfix">';
			$html .= '<div class="post-date">' . get_the_time( 'M j, Y' ) . '</div>';
			$html .= '<div class="post-content">';
			$html .= '<h2 class="post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
			if ( $excerpt ) {
				$html .= '<div class="entry">' . get_the_excerpt() . '</div>';
			} else {
				$html .= '<div class="entry">' . get_the_content() . '</div>';
			}
			$html .= '</div>';
			$html .= '</div><!--// end .' . $post_type . '-post -->';
		}
	} else {
		$html .= '<p>No ' . $post_type . ' entries have been entered into the system. Madico is currently operating safely.</p>';
	}

	echo $html;
}

/**
 * Replace useless paragraph tags from strings output by the WYSIWYG editor
 */
function base_tinymce_filtering( $content ) {
	$content_editted = preg_replace( '#<p[^>]*>(\s|&nbsp;?)*</p>#', '', $content ); // Remove empty paragraphs

	return $content_editted;
}
//add_filter( 'the_content', 'base_tinymce_filtering', 10 );

/**
 * Pagination for archives and listing pages
 */
function madico_pagination() {
	global $wp_query;

	$total = $wp_query->max_num_pages;

	$permalink_structure = get_option( 'permalink_structure' );

	$format = ( empty( $permalink_structure ) ) ? '&page=%#%' : 'page/%#%/';

	$paginate_links = paginate_links( array(
			'base' => get_pagenum_link( 1 ) . '%_%',
			'format' => $format,
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $total
		) );

	if ( $paginate_links ) {
		echo '<div class="pagination">';
		echo $paginate_links;
		echo '</div><!--// end .pagination -->';
	}
}

/**
 * Contact sidebar
 */
function madico_contact_sidebar() {

	// Show on all pages with the slug "contact" (currently there are 7)
	if ( is_page( 'contact' ) ) {
?>
		<ul>
			<li>
				<h2>Get in Touch</h2>
				<div class="textwidget">
					<?php if ( $GLOBALS['section'] == 'window-film' ): ?>

					<h3>Window Films Headquarters</h3>
					<address>
					<strong>Madico Window Films</strong><br />
					2630 Fairfield Ave. South<br />
					St. Petersburg, FL<br />
					33712<br>
                    (727)-327-2544
					</address>
					<hr />
					<h3>Corporate Headquarters</h3>
					<address>
					<strong>Madico, Inc.</strong><br />
					64 Industrial Parkway<br />
					Woburn, Mass.<br />
					01801
					</address><br>

					<?php else: ?>

					<h3>Corporate Headquarters</h3>
					<address>
					<strong>Madico, Inc.</strong><br />
					64 Industrial Parkway<br />
					Woburn, Mass.<br />
					01801
					</address>
					<hr />
					<h3>Window Films Headquarters</h3>
					<address>
					<strong>Madico Window Films</strong><br />
					2630 Fairfield Ave. South<br />
					St. Petersburg, FL<br />
					33712
					</address><br>

					<?php endif; ?>
				</div>
			</li>
		</ul>
		<?php
	}
}
add_action( 'get_sidebar', 'madico_contact_sidebar' );

/**
 * Configure default oEmbed video sizes
 */
function base_oembed_defaults( $embed_size ) {
	if ( is_single() ) {
		$embed_size['width'] = 580;
		$embed_size['height'] = 435;
	}
	return $embed_size;
}
add_filter( 'embed_defaults', 'base_oembed_defaults' );

/**
 * Editor styles and added classes
 */
add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );

function madico_tinymce_add_styleselect( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'madico_tinymce_add_styleselect' );

function madico_tinymce_set_formats( $settings ) {
	$style_formats = array(
		// Buttons
		array(
			'title' => 'Button',
			'block' => 'p',
			'classes' => 'button'
		)
	);
	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'madico_tinymce_set_formats' );

/**
 * Callout post type list
 */
if ( !function_exists( 'madico_post_type_list' ) ) {
	function madico_post_type_list( $post_type = 'team', $size = -1 ) {
		$pos = strpos( $post_type, ',' );

		/** Get multiple post types if passed an array */
		if ( $pos !== false ) {
			$post_types = explode( ',', $post_type );
		} else {
			$post_types = $post_type;
		}

		/** Query arguments */
		$query_args = array(
			'post_type' => $post_types,
			'posts_per_page' => $size,
			'post_status' => 'publish'
		);
		$query = null;
		$query = new WP_Query( $query_args );
		$query_size = $query->post_count;
		$counter = 0;

		if ( $query->have_posts() ) {

			global $post;
			$current_page = $post->ID;

			$html = "<ul>";

			while ( $query->have_posts() ) {

				/** Settings */
				$counter++;
				global $post;
				$query->the_post();
				$id = get_the_ID();
				$title = get_the_title();
				$link = get_permalink();
				$classes = array();
				array_push( $classes, $post->post_type );
				if ( $id == $current_page ) array_push( $classes, 'current' );
				if ( $query_size == $counter ) array_push( $classes, 'last' );
				$class = implode( ' ', $classes );

				/** Output */
				$html .= "<li id='entry-$id' class='$class'><a href='$link' title='$title'>$title</a></li>";
			}

			wp_reset_query();

			$html .= "</ul>";

			return $html;

		} else {

			return false;

		}
	}
}

/**
 * Remove plugin meta boxes for page templates and post types
 */
function madico_remove_plugin_meta_boxes() {
	if ( is_admin() ) {
		global $post;
		$current_template = get_post_meta( $post->ID, '_wp_page_template', TRUE );
		$page_templates = array(
			'page-crisis.php',
			'page-team.php'
		);
		if ( in_array( $current_template, $page_templates ) ) {
			remove_meta_box( 'cftdiv', 'page', 'normal' );
			remove_meta_box( 'page-links-to', 'page', 'advanced' );
		}
	}
}
add_action( 'admin_notices', 'madico_remove_plugin_meta_boxes', 99 );

/**
 * Hide page from search engines using META robots tag
 */
function madico_noindex() {
	if ( !is_admin() ) {
		global $post;
		$current_template = get_post_meta( $post->ID, '_wp_page_template', TRUE );
		$page_templates = array(
			'page-crisis.php',
			'page-team.php'
		);
		if ( in_array( $current_template, $page_templates ) || is_singular( 'crisis' ) || is_singular( 'team' ) ) {
			echo "<meta name='robots' content='noindex,nofollow' />\n";
		}
	}
}
add_action( 'wp_head', 'madico_noindex' );

/**
 * Custom meta boxes
 *
 * @requires /inc/MetaBox.class.php, /inc/MediaAccess.class.php
 */
$media_access = new WPAlchemy_MediaAccess();

$page_details = new WPAlchemy_MetaBox( array(
		'id' => '_page_meta',
		'title' => 'Details',
		'types' => array( 'page' ),
		'exclude_template' => array('page-tint-simulator.php', 'template-home-2015.php'),
		'priority' => 'high',
		'template' => get_stylesheet_directory() . '/inc/page_details_meta.php',
	) );

/**
 * Get the current URL
 */
function base_get_current_url() {
	$pageURL = 'http';

	if ( isset( $_SERVER["HTTPS"] ) && $_SERVER["HTTPS"] == "on" )
		$pageURL .= "s";

	$pageURL .= "://";

	if ( $_SERVER["SERVER_PORT"] != "80" )
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	else
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

	return $pageURL;
}

/**
 * Register global variables
 */
function madico_globals() {
	// Check for Chinese translation
	$url = parse_url( base_get_current_url() );
	if ( strstr( $url['path'], '/zh-hant/' ) || strstr( $url['path'], '/zh-hans/' ) )
		$GLOBALS['language'] = 'chinese';
	else
		$GLOBALS['language'] = 'english';
}
add_action( 'template_redirect', 'madico_globals', 1 );

/**
 * Related links callout
 *
 * @size The number of links to display
 * @requires WPAlechmy Meta Box & Media Access Classes
 */
function madico_related_links() {
	global $page_details, $post;

	$page_details->the_meta();

	// Only display if Links are entered in the CMS
	if ( isset( $page_details->meta ) && !empty( $page_details->meta ) && !empty( $page_details->meta['links'] ) ) {
		$callout_title = ( $page_details->get_the_value( 'title' ) ) ? $page_details->get_the_value( 'title' ) : 'Related Links';

		$count = 0;
		while ( $page_details->have_fields( 'links', 10 ) ) {

			// Require an entered name to display links, if no links with names found do not display the widget
			if ( $page_details->get_the_value( 'name' ) ) {
				$count++;

				// Links found, open the container
				if ( $count === 1 ) {
					echo '<li id="related-links" class="links-list">';
					echo "<h2>$callout_title</h2>";
					echo '<ul>';
				}

				// Links to file
				if ( $page_details->get_the_value( 'name' ) && $page_details->get_the_value( 'file' ) )
					echo '<li><a href="' . $page_details->get_the_value( 'file' ) . '">' . $page_details->get_the_value( 'name' ) . '</a></li>';

				// Internal link
				if ( $page_details->get_the_value( 'name' ) && $page_details->get_the_value( 'internal_link' ) )
					echo '<li><a href="' . get_page_link( $page_details->get_the_value( 'internal_link' ) ) . '">' . $page_details->get_the_value( 'name' ) . '</a></li>';

				// External link
				if ( $page_details->get_the_value( 'name' ) && $page_details->get_the_value( 'external_link' ) )
					echo '<li><a href="' . $page_details->get_the_value( 'external_link' ) . '">' . $page_details->get_the_value( 'name' ) . '</a></li>';

				// Close container at last item
				if ( $count == count( $page_details->meta['links'] ) ) {
					echo '</ul>';
					echo '</li><!--// end #related-links -->';
				}
			}
		}
?>

	<?php
	}
}

/**
 * Careers post type & shortcode
 */
function register_custom_posttypes() {

	// Only for main domain
	if ( ! is_main_site() )
		return;

	// Careers
	register_post_type( 'career', array(
		'label' => __( 'Careers Job Listings' ),
		'labels' => array(
			'menu_name' => 'Careers',
		),
		'singular_label' => __( 'Career' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-businessman',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 21,
		'rewrite' => array( 'slug' => 'career', 'with_front' => true ),
		'query_var' => 'career',
	) );
}

/**
 * SalesForce Contact Form
 */
function madico_career_listings() {
	// Display all job openings
	$careers = new WP_Query( 'posts_per_page=-1&post_status=publish&caller_get_posts=1&post_type=career' );

	$form = '<div id="job-list">';

	// No career entries found
	if ( !$careers ->have_posts() ) {
		$form .= '<p>Currently there are no job openings at Madico.</p>';
	}

	// Career entries found
	else {
		$form .= '<ul>';

		// List all job post type entries
		while ( $careers->have_posts() ) {
			$careers->the_post();
			$form .= '<li><a href="/?career=' . basename( get_permalink() ) . '">' . get_the_title() . ' <span>' . get_post_meta( $post->ID, 'location', true ) . '</span></a></li>';
		}

		$form .= '</ul>';
	}

	$form .= '</div><!--// end #job-list -->';

	return $form;
}
add_shortcode( 'careers', 'madico_career_listings' );

/**
 * New more link
 */
function new_excerpt_more( $more ) {
	global $post;
	return '&hellip; <p><a href="'. get_permalink( $post->ID ) . '" class="button more-link">' . translate( 'Read More' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function new_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'new_excerpt_length' );

/**
 * Constructs an ordered array from cf metadata
 *
 * THIS FUNCTION REQUIRES A CFT SETUP LIKE SO:
 * [NAME_fieldset] is the fieldset
 * [NAME_field]  for each field
 * call function using NAME
 */
function get_cft_repeating_data( $like_item ) {
	global $post, $wpdb;

	$sql = "SELECT *
	FROM $wpdb->postmeta
	WHERE post_id = $post->ID
	AND meta_key LIKE '%" . $like_item . "%'
	ORDER BY meta_id ASC";


	$return = array();
	$images = array(); //cft_slideshow_image
	$captions = array();//cft_slideshow_description

	$data_objects = $wpdb->get_results( $sql );
	if ( $data_objects ) {
		foreach ( $data_objects as $data ) {
			if ( $data->meta_key == 'cft_slideshow_image' ) {
				$images[] = $data->meta_value;
			}
			else
				if ( $data->meta_key == 'cft_slideshow_description' ) {
					$captions[] = $data->meta_value;
				}
		}
	}

	if ( $images ) {
		foreach ( $images as $index => $image ) {

			$caption = ( isset( $captions[$index] ) ? $captions[$index] : '' );

			$return[$index] = array(
				'cft_slideshow_image' => $image,
				'cft_slideshow_description' => $caption,
			);

		}
	}
	return $return;
}

// Generate Breadcrumbs
function show_breadcrumb() {
	global $post;

	// If page has a parent build the breadcrumbs
	if ( !isset( $post->post_parent ) || empty( $post->post_parent ) )
		return false;

	// Breadcrumb output
	$html = '<div class="breadcrumbs">';

	if ( isset( $post->ancestors ) )
		$ancestors = ( is_array( $post->ancestors ) ) ? array_values( $post->ancestors ) : array( $post->ancestors );
	else
		$ancestors = array( $post->post_parent );

	// More than 1 level deep
	if ( $ancestors ) {
		$ancestors = array_reverse( $ancestors );
		$count = count( $ancestors );
		$i = 0;
		foreach ( $ancestors as $ancestor ) {
			$html .= '<a href="' . get_permalink( $ancestor ) . '">' . strip_tags( get_the_title( $ancestor ) ) . '</a> ';

			// Add separator
			if ( $i != $count )
				$html .= ' <span class="divider">&raquo;</span> ';

			$i++;
		}
		$html .= '<strong>' . apply_filters( 'the_title', $post->post_title ) . '</strong>';
	}

	$html .= '</div>';

	echo $html;
}

function custom_page_menu_args( $args ) {
	$args["show_home"] = true;
	return $args;
}
add_filter( "wp_page_menu_args", "custom_page_menu_args" );

//Add 'first' and 'last' classes to ends of wp_list_pages and wp_list_categories
function base_better_lists( $content ) {
	$pattern = '/<li class="/is';
	$content = preg_replace( $pattern, '<li class="first ', $content, 1 );
	$pattern = '/<li class="(?!.*<li class=")/is';
	$content = preg_replace( $pattern, '<li class="last ', $content, 1 );
	return $content;
}

// Additional Admin Styles
function admin_register_head() {
	$siteurl = get_option( 'siteurl' );
	$url = get_bloginfo( 'template_directory' ) . '/css/admin.css';
	echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
	$url = get_bloginfo( 'template_directory' ) . '/js/admin.js';
	echo "<script type='text/javascript' src='$url'></script>\n";
}
add_action( 'admin_head', 'admin_register_head' );

// Modded wp_list_pages() function for dropdown's
function main_navigation() {
	wp_list_pages( 'title_li=&sort_column=menu_order&depth=2&sort_order=ASC&link_before=<span>&link_after=</span>' );
}


/**
 * Theme JavaScript
 */
function madico_enqueue_js() {

	// Only load for front facing website
	if ( is_admin() )
		return;

	// Theme JS
	wp_enqueue_script( 'headjs', get_stylesheet_directory_uri() . '/js/head.load.min.js', false, filemtime( get_stylesheet_directory() . '/js/head.load.min.js' ), true );
	wp_enqueue_script( 'global', get_stylesheet_directory_uri() . '/js/global.min.js', array( 'headjs', 'jquery' ), filemtime( get_stylesheet_directory() . '/js/global.min.js' ), true );

	// AddThis
	wp_enqueue_script( 'addthis', 'http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-5048a8671bd27785', array( 'global' ), false, true );

	// Comments
	if ( is_singular() && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'madico_enqueue_js' );


/**
 * Theme CSS
 */
function madico_enqueue_css() {
	wp_enqueue_style( 'madico-styles', get_stylesheet_directory_uri() . '/css/style.css', false, filemtime( get_stylesheet_directory() . '/css/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'madico_enqueue_css' );


/**
 * AddThis Sharing Widgets
 *
 * Add AddThis social sharing widgets the website
 */
function addthis_widgets() {
?>
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
	</div>
	<!-- AddThis Button END -->
	<?php
}

/**
 * Generates semantic classes for BODY element
 */
function base_body_class( $print = true ) {
	global $wp_query, $language, $blog_details;

	// It's surely a WordPress blog, right?
	$c = array();

	// Generic semantic classes for what type of content is displayed
	is_home()        ? $c[] = 'blog'       : null; // For the blog posts page, if set
	is_search()      ? $c[] = 'search'     : null;
	is_404()         ? $c[] = 'error-404'  : null; // CSS does not allow a digit as first character

	// Home
	if ( get_post_meta( $wp_query->post->ID, "_wp_page_template", true ) == 'homepage.php'
		|| get_post_meta( $wp_query->post->ID, "_wp_page_template", true ) == 'page-films-landing.php' )
		$c[] = 'home';

	// Special classes for BODY element when a single post
	if ( is_single() ) {
		$postID = $wp_query->post->ID;
		the_post();

		// Adds post slug class, prefixed by 'slug-'
		$c[] = 'slug-' . $wp_query->post->post_name;

		// Adds 'single' class and class with the post ID
		$c[] = 'single';

		rewind_posts();
	}

	//if the page is using a subnav
	global $post;
	if ( $post->post_parent != 0 ) {
		$c[] = 'has-sub-nav';
	}

	// Category name classes for BODY on category archvies
	elseif ( is_category() ) {
		$cat = $wp_query->get_queried_object();
		$c[] = 'category';
	}

	// Page author for BODY on 'pages'
	elseif ( is_page() ) {
		$pageID = $wp_query->post->ID;
		$page_children = wp_list_pages( "child_of=$pageID&echo=0" );
		the_post();

		$c[] = 'page';

		// Checks to see if the page has children and/or is a child page; props to Adam
		if ( $page_children )
			$c[] = 'page-parent';
		if ( $wp_query->post->post_parent )
			$c[] = 'page-child parent-pageid-' . $wp_query->post->post_parent;

		// Checks to see if the page is using a template
		if ( is_page_template() & !is_page_template( 'default' ) )
			$c[] = 'page-template-' . str_replace( '.php', '-php', get_post_meta( $pageID, '_wp_page_template', true ) );

		rewind_posts();
	}

	// Search classes for results or no results
	elseif ( is_search() ) {
		the_post();
		if ( have_posts() ) {
			$c[] = 'search-results';
		} else {
			$c[] = 'search-no-results';
		}
		rewind_posts();
	}

	// For when a visitor is logged in while browsing
	if ( is_user_logged_in() )
		$c[] = 'loggedin';

	// Translations
	if ( $language == 'chinese' )
		$c[] = 'chinese';

	// About section
	$c[] = ( in_array( 2, get_post_ancestors( $postID ) ) ) ? "about" : null;

	// Section / current site
	global $section;
	if ( $section )
		$c[] = $section;

	// Multisite path
	global $current_site;
	if ( $current_site )
		$c[] = $current_site;

	// Separates classes with a single space, collates classes for BODY
	$c = array_filter( $c );
	$c = join( ' ', apply_filters( 'body_class',  $c ) ); // Available filter: body_class

	// And tada!
	return $print ? print( $c ) : $c;
}

// Nasty setup from before my time that uses
// the Custom Field Template plugin. -KL
// used in: banner.php
function p_slideshow($h = 330) {
	global $postID;
	echo '<ul style="height:'.$h.'px;">';
	for ($i = 0; $i < 10; $i++) {
		$slideshow_image = get_post_meta($postID, 'cft_slideshow'.$i.'_image', true);
		$slideshow_text  = get_post_meta($postID, 'cft_slideshow'.$i.'_description', true);

		if(isset($slideshow_image) && !empty($slideshow_image)) {

		$background = wp_get_attachment_image_src( $slideshow_image, array(940,$h) );
		$background = str_replace( 'sites/1/', '', $background[0] );
		?>
		<li style="background:url(<?php print $background; ?>);height:<?php echo $h;?>px;width:100%;<?php print ($i > 0)? "display:none;" : ""; ?>">
		<?php print $slideshow_text;
		echo '</li>';
		}
	}
	echo '</ul>';
}

// Multiple Sidebars
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name'=>'Specialty Film Pages',
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
	register_sidebar( array(
		'name'=>'Window Film Pages',
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
	register_sidebar( array(
		'name'=>'General Page',
		'before_widget' => '<li id="%1$s" class="callout">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
	register_sidebar( array(
		'name'=>'Event',
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name'=>'Blog',
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
}

// Wordpress 2.7 Comments
function base_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="author-data">
				<?php echo get_avatar( $comment, $size='40', $default='<path_to_url>' ); ?>
				<?php printf( __( '<h3 class="author">%s</h3>' ), get_comment_author_link() ) ?>
				<div class="comment-meta commentmetadata"><?php printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ) ?> <?php edit_comment_link( __( '(Edit)' ), '  ', '' ) ?></div>
			</div>
<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'madicotheme' ) ?></em>
<?php endif; ?>
			<div class="comment-entry">
				<?php comment_text() ?>
			</div>
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
			</div>
		</div>
	</li>
<?php
}

/**
 * Child page conditional
 * @ Accept's page ID, page slug or page title as parameters
 */
function is_child( $parent = '' ) {
	global $post;

	$parent_obj = get_page( $post->post_parent, ARRAY_A );
	$ancestors = $parent_obj->ancestors;
	$parent = (string) $parent;
	$parent_array = (array) $parent;

	if ( in_array( (string) $parent_obj['ID'], $parent_array ) ) {
		return true;
	}
	else if ( in_array( (string) $parent_obj['post_name'], $parent_array ) ) {
			return true;
		}
	else {
		return false;
	}
}

/**
 *
 */
/**
 * Define custom globals
 *
 * @global
 * @param
 * @return
 * @staticvar
 */
function madico_define_globals() {

	// Defaults
	$GLOBALS['wf_page_id'] = null;
	$GLOBALS['wf_category_id'] = null;
	$GLOBALS['sf_page_id'] = null;
	$GLOBALS['sf_category_id'] = null;
	$GLOBALS['section'] = null;
	$GLOBALS['current_site'] = null;

	// Main site
	if ( is_main_site() ) {

		global $post;

		// Window film page and category ID's
		$wf_page = get_page_by_path( 'window-film' );
		$GLOBALS['wf_page_id'] = intval( $wf_page->ID );
		$wf_category = get_category_by_slug( 'window-films' );
		$GLOBALS['wf_category_id'] = intval( $wf_category->term_id );

		// Specialty film page and category ID's
		$sf_page = get_page_by_path( 'specialty-film' );
		$GLOBALS['sf_page_id'] = intval( $sf_page->ID );
		$sf_category = get_category_by_slug( 'pv-backsheets' );
		$GLOBALS['sf_category_id'] = intval( $sf_category->term_id );

		// Get post ancestors
		$ancestors = ( isset( $post->ancestors ) && is_array( $post->ancestors ) && !empty( $post->ancestors ) ) ? $post->ancestors : array();

		// Define site section
		if ( ! empty( $wf_page_id ) || ! empty( $sf_page_id ) ) {

			// Window films site section
			if (
				is_page( $wf_page_id ) ||
				in_array( $wf_page_id, $ancestors ) ||
				in_category( $wf_category_id )
			) {
				$GLOBALS['section'] = 'window-film';
			}

			// Specialty films site section
			else if (
				is_page( $sf_page_id ) ||
				in_array( $sf_page_id, $ancestors ) ||
				in_category( $sf_category_id )
			) {
				$GLOBALS['section'] = 'specialty-film';
			}
		}
	}

	// Multisite sub-sites
	else {
		$blog_details = get_blog_details();
		$GLOBALS['current_site'] = str_replace( '/', '', $blog_details->path );
	}
}
add_action( 'wp', 'madico_define_globals' );


/**
 * Add styles to TinyMCE link class dropdown
 */
function madico_mce_css( $wp ) {
	return $wp .= ',' . get_bloginfo( 'template_directory' ) . '/css/mce.css';
}
add_filter( 'mce_css', 'madico_mce_css' );


/**
 * Register Nav Manus
 */
function _madico_register_menus() {
	register_nav_menus( array(
		'footer_menu' => 'Footer Menu'
	) );
}
add_action( 'init', '_madico_register_menus' );


/**
 * Custom menu walker
 */
class Madico_Custom_Walker_Page extends Walker_Page {
	function start_lvl( &$output, $depth ) {
		$indent = str_repeat( "\t", $depth );
		$tier_number = $depth + 2;
		$output .= "\n$indent<div class=\"tier-$tier_number\"><ul class='children'>\n";
	}
	function end_lvl( &$output, $depth ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul></div>\n";
	}
}
