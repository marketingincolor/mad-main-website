<?php
/**
 * Crisis post type setup
 */

/** User role */
function crisis_manager_role() {

	/** Define crisis manager */
	add_role('crisis_manager', 'Crisis Manager');

	/** Add caps from Author role */
	$role =& get_role('crisis_manager');
	$role->add_cap('upload_files');
	$role->add_cap('edit_pages');
	$role->add_cap('read');
	$role->add_cap('level_7');
	$role->add_cap('level_6');
	$role->add_cap('level_5');
	$role->add_cap('level_4');
	$role->add_cap('level_3');
	$role->add_cap('level_2');
	$role->add_cap('level_1');
	$role->add_cap('level_0');

	/** Add "crisis" post type capabilities */
	$role->add_cap('publish_crisiss');
	$role->add_cap('edit_crisiss');
	$role->add_cap('edit_others_crisiss');
	$role->add_cap('delete_crisiss');
	$role->add_cap('delete_others_crisiss');
	$role->add_cap('read_private_crisiss');
	$role->add_cap('edit_crisis');
	$role->add_cap('delete_crisis');
	$role->add_cap('read_crisis');

	$role->add_cap('publish_teams');
	$role->add_cap('edit_teams');
	$role->add_cap('edit_others_teams');
	$role->add_cap('delete_teams');
	$role->add_cap('delete_others_teams');
	$role->add_cap('read_private_teams');
	$role->add_cap('edit_team');
	$role->add_cap('delete_team');
	$role->add_cap('read_team');

	$role =& get_role('administrator');

	$role->add_cap('publish_crisiss');
	$role->add_cap('edit_crisiss');
	$role->add_cap('edit_others_crisiss');
	$role->add_cap('delete_crisiss');
	$role->add_cap('delete_others_crisiss');
	$role->add_cap('read_private_crisiss');
	$role->add_cap('edit_crisis');
	$role->add_cap('delete_crisis');
	$role->add_cap('read_crisis');

	$role->add_cap('publish_teams');
	$role->add_cap('edit_teams');
	$role->add_cap('edit_others_teams');
	$role->add_cap('delete_teams');
	$role->add_cap('delete_others_teams');
	$role->add_cap('read_private_teams');
	$role->add_cap('edit_team');
	$role->add_cap('delete_team');
	$role->add_cap('read_team');
}
# add_action('init', 'crisis_manager_role');

/**
 * Switch email to post to specific post type on publish
 *
 * @param $post_ID Return value of wp_insert_post() used in /wp-mail.php
 */
function crisis_email_post_to_post_type_switch( $post_ID )
{
	$post_type = 'crisis';

	set_post_type( $post_ID, $post_type );

	return $post_ID;
}
add_action( 'publish_phone', 'crisis_email_post_to_post_type_switch' );

/**
 * Filter email before it becomes a new crisis post
 *
 * @param $content
 */
function crisis_email_post_filtering( $content )
{
	$new_content = strip_tags($content, '<p><a><ol><ul><li><br><b><u><i><em><strong>');

	$new_content = str_replace( 'Content-Type: text/html; charset=UTF-8', '', $new_content );

	$new_content = str_replace( 'Content-Transfer-Encoding: 8bit', '', $new_content );

	$new_content = trim($new_content);

	$new_content = preg_replace("'\s+'", ' ', $new_content);

	return $new_content;
}
add_action( 'phone_content', 'crisis_email_post_filtering' );

/**
 * Check for new emails in post-to-email box every 5 minutes
 */
function crisis_retrieve_post_via_mail()
{
	flush(); // Display the page before the mail fetching begins

	if(get_transient('retrieve_post_via_mail'))
	{
		return;
	}
	else
	{
		$mail = wp_remote_get( get_bloginfo('wpurl') . '/wp-mail.php' );

		if( !is_wp_error($mail) )
			set_transient('retrieve_post_via_mail', 1, 60 * 2); // check again in 2 minutes.
		else
			set_transient('retrieve_post_via_mail', 1, 60 * 2); // check again in 2 minutes
	}
}
add_action('shutdown', 'crisis_retrieve_post_via_mail');

/**
 *	Redirect crisis managers after they login
 */
function madico_redirect_on_login() {
	global $redirect_to, $user;

	if( $user->user_login == 'crisismanager' )
		return home_url() . '/wp-admin/post-new.php?post_type=crisis';

	else
		return $redirect_to;
}
add_filter('login_redirect', 'madico_redirect_on_login');

/**
 *	Map meta cap
 *
 *	What this means is that users will be granted meta capabilities on a
 * per-post basis so they can do things like edit their own posts.
 */
function madico_map_meta_cap( $caps, $cap, $user_id, $args ) {

	/* If editing, deleting, or reading a movie, get the post and post type object. */
	if ( 'edit_crisis' == $cap || 'delete_crisis' == $cap || 'read_crisis' == $cap ) {
		$post = get_post( $args[0] );
		$post_type = get_post_type_object( $post->post_type );

		/* Set an empty array for the caps. */
		$caps = array();
	}

	/* If editing a crisis, assign the required capability. */
	if ( 'edit_crisis' == $cap ) {
		if ( $user_id == $post->post_author )
			$caps[] = $post_type->cap->edit_posts;
		else
			$caps[] = $post_type->cap->edit_others_posts;
	}

	/* If deleting a crisis, assign the required capability. */
	elseif ( 'delete_crisis' == $cap ) {
		if ( $user_id == $post->post_author )
			$caps[] = $post_type->cap->delete_posts;
		else
			$caps[] = $post_type->cap->delete_others_posts;
	}

	/* If reading a private crisis, assign the required capability. */
	elseif ( 'read_crisis' == $cap ) {

		if ( 'private' != $post->post_status )
			$caps[] = 'read';
		elseif ( $user_id == $post->post_author )
			$caps[] = 'read';
		else
			$caps[] = $post_type->cap->read_private_posts;
	}

	/* If editing, deleting, or reading a movie, get the post and post type object. */
	if ( 'edit_team' == $cap || 'delete_team' == $cap || 'read_team' == $cap ) {
		$post = get_post( $args[0] );
		$post_type = get_post_type_object( $post->post_type );

		/* Set an empty array for the caps. */
		$caps = array();
	}

	/* If editing a crisis, assign the required capability. */
	if ( 'edit_team' == $cap ) {
		if ( $user_id == $post->post_author )
			$caps[] = $post_type->cap->edit_posts;
		else
			$caps[] = $post_type->cap->edit_others_posts;
	}

	/* If deleting a team, assign the required capability. */
	elseif ( 'delete_team' == $cap ) {
		if ( $user_id == $post->post_author )
			$caps[] = $post_type->cap->delete_posts;
		else
			$caps[] = $post_type->cap->delete_others_posts;
	}

	/* If reading a private team, assign the required capability. */
	elseif ( 'read_team' == $cap ) {

		if ( 'private' != $post->post_status )
			$caps[] = 'read';
		elseif ( $user_id == $post->post_author )
			$caps[] = 'read';
		else
			$caps[] = $post_type->cap->read_private_posts;
	}

	/* Return the capabilities required by the user. */
	return $caps;
}
# add_filter( 'map_meta_cap', 'madico_map_meta_cap', 10, 4 );

/** Custom meta boxes */
$crisis_media_access = new WPAlchemy_MediaAccess();
$crisis_details = new WPAlchemy_MetaBox(array
(
	'id' => '_crisis_meta',
	'title' => 'Crisis Details',
	'types' => array('page'),
	'include_template' => array('page-crisis.php'),
	'priority' => 'high',
	'template' => TEMPLATEPATH . '/inc/crisis_details_meta.php',
));

/** Register post type */
function crisis_register() {

	$crisis_labels = array(
		'name' => _x('Crisis', 'post type general name'),
		'singular_name' => _x('Crisis', 'post type singular name'),
		'add_new' => _x('Add New', 'crisis item'),
		'add_new_item' => __('Add New Crisis'),
		'edit_item' => __('Edit Crisis'),
		'new_item' => __('New Crisis'),
		'view_item' => __('View Crisis'),
		'search_items' => __('Search Crisis'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
	$crisis_args = array(
		'labels' => $crisis_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-shield-alt',
		'rewrite' => array( 'slug' => 'crisis', 'with_front' => false ),
		'has_archive' => 'crisis',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor')
	);
	register_post_type( 'crisis' , $crisis_args );

	/** Location taxonomy
	$location_labels = array(
		'name' => _x( 'Location', 'taxonomy general name' ),
		'singular_name' => _x( 'Location', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Locations' ),
		'all_items' => __( 'All Locations' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item' => __( 'Edit Location' ),
		'update_item' => __( 'Update Location' ),
		'add_new_item' => __( 'Add New Location' ),
		'new_item_name' => __( 'New Location Name' ),
	);
	register_taxonomy('location','crisis',array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'crisis/location', 'with_front' => false ),
		'labels' => $location_labels
	));
	*/
}
add_action('init', 'crisis_register');

/** CSS stylesheet */
function crisis_stylesheet() {
	/** Crisis */
	if( is_tax('location') || is_post_type_archive('crisis') || get_post_type() == 'crisis' ) {
		wp_enqueue_style('crisis', get_stylesheet_directory_uri() .'/css/crisis.css', false, '1.0', 'all');
	}
}
add_action('wp_print_styles', 'crisis_stylesheet');

/**
 *	Crisis email notification sent on activate
 */
function crisis_activate_notification(){
	global $post;
	/** Load only in the admin for pages with the page-crisis.php page template set */
	if( get_post_meta( $post->ID, '_wp_page_template', TRUE ) == 'page-crisis.php' ) {
		$crisis_activate_notification_ajax_nonce = wp_create_nonce("crisis-activate-notification");
		?>
		<script type="text/javascript" >
		(function($){
			$(function(){
				$('input[name="_crisis_meta[active]"]').change(function () {
					if ( $(this).attr('checked') ) {
						var data = {
							action: 'crisis_activate_notification',
							security: '<?php echo $crisis_activate_notification_ajax_nonce; ?>'
						};
						confirmation = confirm('Are you sure you want to send a company-wide crisis alert email?');
						/** User accepts request */
						if( confirmation ){
							$.post(ajaxurl, data, function(response) {
								/** Message sent successfully */
								if( response == 1 ) {
									alert('Notification message has successfully been sent.');
									$('#_crisis_meta_metabox .alert').after('<span class="reminder">Remember to save using the <strong>Update</strong> button</span>').hide().fadeIn(2000);
								}
								/** Error occured while trying to send message */
								else {
									alert('An error occurred and the notification was not sent.');
									$('input[name="_crisis_meta[active]"]').removeAttr('checked');
								}
							});
						}
						/** User cancels request */
						else {
							$('input[name="_crisis_meta[active]"]').removeAttr('checked');
						}
						return;
					}
				});
			});
		})(jQuery);
		</script>
		<?php
	}
}
add_action('admin_head', 'crisis_activate_notification');

function crisis_activate_notification_callback() {

	check_ajax_referer( 'crisis-activate-notification', 'security' );

	/** Send email notification */

	$email = array('ksampson@madico.com');

	$message = "
	<html>
	<body style='background:url(http://www.madico.com/wp-content/themes/madico.com/images/dark-textured-bg.jpg) repeat scroll 0 0 #2F3C42; color:#C0C4C6; font:15px/1.6em Helvetica,Arial,sans-serif'>
		<div style='width:500px; padding:50px;'>
		<a title='Madico Crisis Center' href='http://www.madico.com/crisis-alert' style='border:none;display:block;'>
			<img src='http://www.madico.com/wp-content/themes/madico.com/images/madico-crisis-logo.png' border='none' style='margin-bottom:30px;'>
		</a>
		Attention Madico Employees,<br /><br />

		You've recieved this message because Madico is currently experiencing a crisis. To stay informed with the status of the situation please visit our <a href='http://www.madico.com/crisis-alert' style='color:#fff;'>crisis center online</a>.<br /><br />

		<strong style='color:#fff;'>The Madico Crisis Management Team</strong><br />
		<a href='mailto:crisis@madico.com' style='color:#fff;'>crisis@madico.com</a><br />
		(781)935-7850

		</div>
	</body>
	</html>
	";

	$headers = array(
		'From: Madico Crisis Alert <crisis@madico.com>',
		'Content-Type: text/html'
	);

	if( wp_mail($email, '*ALERT* Madico is experiencing a crisis', $message, $headers) ) {
		echo 1;
	} else {
		echo 0;
	}

	die(); /** Required to return a proper result */
}
add_action('wp_ajax_crisis_activate_notification', 'crisis_activate_notification_callback');
