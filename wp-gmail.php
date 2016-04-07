<?php

   /**
		* wp-gmail.php
		* Copyright (c) 2003-2005 The Wordpress Team
		* Copyright (c) 2004-2005 - John B. Hewitt - jb@stcpl.com.au
		* Copyright (c) 2004 - Dan Cech - dcech@lansmash.com
		* Copyright (c) 2005 - Matthew M.I. Romaine - mromaine@gmail.com
		*
		* Licensed under the GNU GPL.  For full terms visit 
		* http://www.gnu.org/copyleft/gpl.html
		*
		* -= README =-
		* This is a drop in replacement modification for the Wordpress 1.2 series
		* that enables you to send e-mail's with picture and document attachments.
		* For more information check out my blog - http://blade.lansmash.com
		*
		* -= History =-
		* Version 0.4 - 03.06.2005
    *
		* -= Notes =-
		* -) Apparently Gmail does some funky backend shit w.r.t. their pop server.
		* Basically, message counts and deletion currently do NOT work; it's as if
		* browser-based access reads from a different server, and yet imap_ calls
		* (per class_imap.php) have no effect.  Probably something to do with their
		* funky GFS.
		*
		* -) There might be some funky-ness with post-dates.  The wp-mail.php this
		* was based off of used $time_difference, but I found it was not needed so
		* its use is currrently commented out.  If you find your post times are
		* off, you may want to start by looking here.
    */

$debug = false;

require(dirname(__FILE__) . '/wp-config.php');
require_once(dirname(__FILE__) . '/wp-admin/admin-functions.php');
require_once(dirname(__FILE__) . '/class_mbox.php');

// error reporting
error_reporting(E_ALL);

// $time_difference = get_settings('gmt_offset') * 3600;

$mbox = new MBOX();

if (!$mbox->connect( get_settings('mailserver_url'), 
                     get_settings('mailserver_port'), 
                     get_settings('mailserver_login'), 
                     get_settings('mailserver_pass') ) )
{
	echo "ERROR: Ooops $mbox->ERROR <br />\n";
	exit;
} else {
	echo "<body> Connection Success! <br />";
}

if ($debug) {
  echo "<p>(Debugging is ON)</p>";
}

$count = $mbox->get_count();
if (0 == $count) die(_("There doesn't seem to be any new mail.</body>"));

echo "Received $count messages <br />\n";

for ($i=1; $i <= $count; $i++) {

	//variables
	$content = '';
	$url_image = '';
	//$url_thumbs = array();
	
	$header = $mbox->parse_header($i);
	$body = $mbox->parse_content($i);

  if ($debug) {
  	walk('headers',$header);
		walk('body',$body);
	}

	/* See notes above regarding actual message deletion */
	if(!$mbox->delete_msg($i)) {
		echo '<p>Oops '.$mbox->ERROR.'</p></div>';
		$mbox->reset();
		exit;
	} else {
		echo "Mission complete, message <strong>$i</strong> deleted.<br />";
	}
	
	$from = $header['fromaddress'];
	$subject = $header['subject'];
	$ddate = $header['date'];

	if (preg_match('/^[^<>]+<([^<>]+)>$/',$from,$matches))
	{
		$from = $matches[1];
	}

  for ($j=1; $j <= $body['parts']; $j++)
	{
		$content = $content . get_content($body, $j);
	}
	
	//date reformating 
	$post_date = date('Y-m-d H:i:s', time($ddate)); // + $time_difference);
	$post_date_gmt = gmdate('Y-m-d H:i:s', time($ddate) );
	
	//filter content
	$search = array (
		'/ (\n|\r\n|\r)/',
		'/(\n|\r\n|\r)/'
	);
	
	$replace = array (
		' ',
		"\n"
	);
	
	// strip extra line breaks
	$content = preg_replace($search,$replace,trim($content));
	
	$post_categories = array();

	// if subject line begins with text enclosed in brackets, use that text as
	// the category (i.e. "Subject: [food] funkyness" --> Category: food)

	if ( preg_match( '#^\[(.+)\](.+)$#', $subject, $matches ) )
	{
		$post_categories[0]		= $matches[1];
		$subject			= trim($matches[2]);
	}
	
	// always put it in the moblog category.
	// change this as you please
	if ( !isset( $post_categories[0] ) || 
			 strcmp( $post_categories[0], "moblog" ) != 0 )
	{
			array_push( $post_categories, moblog );
	}

	// to force into other categories, add below line for each category
	// (don't put category name in quotes; see above example)
	//array_push( $post_categories, CATEGORY_NAME );
	
	// report
	// print '<p><b>Mail Format</b>: ' . $mailformat . '</p>' . "\n";
	print '<p><b>From</b>: ' . $from . '<br />' . "\n";
	print '<b>Date</b>: ' . $post_date . '<br />' . "\n";
	print '<b>Date GMT</b>: ' . $post_date_gmt . '<br />' . "\n";
	print '<b>Category</b>: ' . $post_categories[0] . '<br />' . "\n";
	print '<b>Subject</b>: ' . $subject . '<br />' . "\n";
	print '<b>Posted content:</b></p>' . $content . '<br />'."\n";
	
	$sql = 'SELECT id FROM '.$tableusers.' WHERE user_email=\'' . addslashes($from) . '\'';

	// from: email address must be registered in wordpress and with valid access
	// levels (I think '4' allows for posting)
	if (!$poster = $wpdb->get_var($sql))
	{
		echo 'INVALID SENDER: ' . htmlentities($from) . "<br />\n";
		continue;
	}
 
	$post_name = sanitize_title( $subject );
	
	$details = array(
		'post_author'		=> $poster,
		'post_date'		=> $post_date,
		'post_date_gmt'		=> $post_date_gmt,
		'post_content'		=> $content,
		'post_title'		=> $subject,
		'post_modified'		=> $post_date,
		'post_modified_gmt'	=> $post_date_gmt,
		'post_name'		=> $post_name
	);
	
	//generate sql	
	$sql = 'INSERT INTO '.$tableposts.' ('. implode(',',array_keys($details)) .') VALUES (\''. implode('\',\'',array_map('addslashes',$details)) . '\')';

	$result = $wpdb->query($sql);
	$post_ID = $wpdb->insert_id;

  if ($debug) {
		echo "<br>".$sql."<br>";
		if ($result) {echo "<b>SUCCESS</b><br>";}
		else{"<b>FAIL</b><br>";}
	}

	// sanitize_title makes nasty post_name for UTF-8, so replace with post_ID
	$sql = 'UPDATE '.$tableposts.' SET post_name='.$post_ID.' WHERE ID='.$post_ID;
	$result = $wpdb->query($sql);

	if ($debug) { 
		echo "<br>".$sql."<br>"; 
		if ($result) {echo "<b>SUCCESS</b><br>";}
		else{"<b>FAIL</b><br>";}
	}

	do_action('publish_post', $post_ID);
	do_action('publish_phone', $post_ID);
	pingback($content, $post_ID); // probably not needed, but keep it anyways

  // Store image meta data 
	$sql = "INSERT INTO $tablepostmeta (post_id,meta_key,meta_value) VALUES ('$post_ID','url_image','$url_image')";
	$result = $wpdb->query($sql);

	if ($debug) { 
			echo "<br>".$sql."<br>"; 
			if ($result) {echo "<b>SUCCESS</b><br>";}
			else{"<b>FAIL</b><br>";}
	}

  /* not using thumbnails for now */
//	$sql = "INSERT INTO $tablepostmeta (post_id,meta_key,meta_value) VALUES ('$post_ID','url_thumb','$url_thumb')";
  //$result = $wpdb->query($sql);
 // echo "SQL query: ".$sql."<br><br>";

  // what exactly does this do? undocumented in the codex, but seems important
  add_meta($post_ID);

	// Store into respective categories
	foreach ($post_categories as $post_category) {
		// MLC, if category is a string changeover to id
		if ( !preg_match( '#[0-9]+#', $post_category ) ) {
			$catIdSql = "
				SELECT cat_ID
				FROM $tablecategories
				WHERE 1 = 1
				AND cat_name = '$post_category'";

			$id = $wpdb->get_var( $catIdSql );

			// grab whichever is valid
			$post_category = ( !is_null( $id ) ) ? $id : $post_categories[0];
		}

		$post_category = intval($post_category);

		// Double check it's not already there
		$sql = "SELECT * FROM $tablepost2cat WHERE post_id = $post_ID AND category_id = $post_category";
		if ($debug) {echo "SQL query: ".$sql."<br><br>";}
		$exists = $wpdb->get_row($sql);

		if ($debug) { 
			echo "<br>".$sql."<br>"; 
			if ($exists) {echo "<b>EXISTS</b><br>";} 
			else{"<b>DOES NOT EXIST</b><br>";}
		}

		if (!$exists && $result) { 
				$sql = "INSERT INTO $tablepost2cat (post_id, category_id) VALUES ($post_ID, $post_category)";
				$result = $wpdb->query($sql);

				if ($debug) { 
						echo "<br>".$sql."<br>"; 
						if ($result) {echo "<b>SUCCESS</b><br>";} 
						else{"<b>FAIL</b><br>";}
				}
		}
	} // end foreach for post_categories

} // end looping over messages

if (!$mbox->quit()) {
  echo "ERROR: quiting failed (!)";
} else {
  echo "<br>Connection Closed<br></body></html>";
}

/** FUNCTIONS **/

//tear apart the meta part for useful information
function get_content ($body, $i)
{
  global $debug; // ...
	if ($debug) echo "getting content for part $i<br>";

	global $subject;
  global $mbox; // so we can call fix_coding
	global $url_image;
	//global $url_thumbs;

  // change "photosdir" to be whatever you want
	// **just make sure it's writeable by your apache user/group**
	$urlBase					= get_settings('siteurl').'/';
	$photosdir				= 'moblog';

	// MLC, prior to others
	$meta_return = '';

  // first fix the coding
  $body['part'.$i]['body'] = $mbox->fix_coding( $body['part'.$i]['encoding'], $body['part'.$i]['body'] );
			
	switch ($body['part'.$i]['type'])
	{
		case 0: // text
				$content = $body['part'.$i]['body'];
				$charset = $body['part'.$i]['charset'];
				if ($debug) { 
						echo "detected charset:".mb_detect_encoding($content,"auto")."<br>";
						echo "actual body charset: ".$charset."<br>"; 
						echo "body text b4: ".$content."<br>";
				}
				if (strcasecmp($charset,"utf-8") != 0)
				{ 
						$content = iconv($charset,"UTF-8",$content);
						if ($debug) 
						{echo "body text after UTF-8 conversion: ".$content."<br>";}
				}
				$meta_return .= htmlentities($content,ENT_COMPAT,"UTF-8") ."\n";
				//$meta_return .= htmlentities($content) ."\n";
				//$meta_return .= htmlentities($body['part'.$i]['body']) ."\n";
			break;
		case 1: // multipart
			break;
		case 2: // message
		  break;
		case 3: // application **XXX: THIS CASE IS UNTESTED
			//pgp signature
			if ( $part->ctype_secondary == 'pgp-signature' ) {break;}
			//other attachments
			$filename = $filesdir . '/' . $part->ctype_parameters['name'];
			$fp = fopen($filename, 'w');
			fwrite($fp, $part->body);
			fclose($fp);
			$meta_return .= '<a href="' . $urlBase . $filename . '">' . $part->ctype_parameters['name'] . '</a>' . "\n";
			break;
		case 4: // audio
		  break;
		case 5: // image
			if ($debug) {echo "writing image file<br>";}

			// write image file
			$filename = $body['part'.$i]['filename'];
			$filepath = "$photosdir/$filename";
			$fp = fopen($filepath, 'w');
			fwrite($fp, $body['part'.$i]['body']);
			fclose($fp);

			// create thumbnail
			// second param is max dimension (H or W) in pixels
			//$result = wp_create_thumbnail($filepath, 100);
			//$thumbname = 'thumb-' . $filename;
			//$thumbpath = "$photosdir/$thumbname";

			$url_image = $filename; //$urlBase . $filepath; just store filename
		//$url_thumbs[$i] = $urlBase . $thumbpath;

			// don't load HTML into content -- use metadata instead
			// $meta_return .= '<a class="img" title="' . $subject . '" href="http://' . $url_image . '"><img src="http://' . $url_thumb . '" alt="' . $subject . '"/></a>' . "\n";
			$meta_return = '';
			break;
		case 6: // video
		  break;
		case 7: // other
		  break;
	}		

	return $meta_return;
}

// debugging helper function; prints arrays out nicely
function walk($prefix, $array)
{
		if (is_array($array)) foreach ($array as $key=>$val)
		{
				walk($prefix."[".$key."]",$val);
		}
		else
		{
				echo "$prefix=$array<br>\n";
		}
}

// end of script
?>
