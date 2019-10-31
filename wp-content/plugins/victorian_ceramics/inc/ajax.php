<?php
add_action( 'wp_ajax_save_share_editor', 'save_share_editor_cb' );
add_action( 'wp_ajax_nopriv_save_share_editor', 'save_share_editor_cb' );
function save_share_editor_cb()
{
	extract($_POST);
	/*$content = base64_decode($content);
	$content = urldecode($content);*/


	$content = trim($content);
	$content = urldecode($content);
	$content = stripslashes($content);
	$content = htmlentities($content,ENT_QUOTES);




	$slug = getrandomestring(12);
	$title = $slug;
	$arr = array( "post_name" => $slug, "post_title" => $title, "post_content" => $content, "post_status" => "publish", "post_type" => "design", "post_author" => 1 );
	$post_id = create_vc_designs("", $arr);
	//saving design

	//saving post meta
	update_post_meta($post_id, "user_name", $user_name);
	update_post_meta($post_id, "user_mail", $user_mail);
	update_post_meta($post_id, "user_phone", $user_phone);
	update_post_meta($post_id, "user_message", $user_message);
	update_post_meta($post_id, "editor_type", $editor_type);
	/*if($editor_type == "custom_editor")
	{
		update_post_meta($post_id, "room_width", $width);
		update_post_meta($post_id, "room_height", $height);
	}*/
	//saving post meta

	//mailing to user
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	/*$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();*/

	$to = $user_mail;
	$subject = 'Your tile design';
	$design_link = get_permalink($post_id);
	$body = '<html><body>';
	$body .= 'Hi '.$user_name.', Your tile design is <a href="'.$design_link.'">here</a>.';
	$body .= '</body></html>';
	mail( $to, $subject, $body, $headers );
	//mailing to user

	echo "success";
    wp_die();
}

add_action( 'wp_ajax_showdesigntiles', 'showdesigntiles_cb' );
add_action( 'wp_ajax_nopriv_showdesigntiles', 'showdesigntiles_cb' );
function showdesigntiles_cb()
{
	extract($_POST);
	$selected;
	$designer_tiles = designer_tiles(); 
	$designer_tile_images = get_option( "designer_tile_images" );
	$html = '';
	if(!empty($designer_tile_images))
	{
		$designer_tile_images = unserialize($designer_tile_images);
	}
	if(count($designer_tiles[$selected]) > 1)
	{
		$html .= '<select class="form-control" id="sel1small" name="showmyinnerfloral" onchange="showmyinnerfloral(this);">';
			foreach($designer_tiles[$selected] as $slctd)
			{
				$html .= '<option value="'.$slctd.'">'.$slctd.'</option>';
			}
		$html .= '</select>';
		$html .= '<div></div>';
	}
	else
	{
		$index = get_designer_tiles_key($selected);
		$images = $designer_tile_images[$index];
		if(!empty($images))
		{
			foreach($images as $image)
			{
				$html .= '<li>';
					$html .= '<div class="draggable">';
						$html .= '<img src='.$image.'" />';
					$html .= '</div>';
				$html .= '</li>';
			}
		}
	}
	echo $html;
	//echo "success";
    wp_die();
}

add_action( 'wp_ajax_showinnerdesigntiles', 'showinnerdesigntiles_cb' );
add_action( 'wp_ajax_nopriv_showinnerdesigntiles', 'showinnerdesigntiles_cb' );
function showinnerdesigntiles_cb()
{
	extract($_POST);
	$selected;
	$designer_tiles = designer_tiles(); 
	$designer_tile_images = get_option( "designer_tile_images" );
	$html = '';
	if(!empty($designer_tile_images))
	{
		$designer_tile_images = unserialize($designer_tile_images);
	}
	if(count($designer_tiles[$selected]) > 1)
	{
		$html .= '<select class="form-control" id="sel1small" name="showmyinnerfloral" onchange="showmyinnerfloral(this);">';
			foreach($designer_tiles[$selected] as $slctd)
			{
				$html .= '<option value="'.$slctd.'">'.$slctd.'</option>';
			}
		$html .= '</select>';
		$html .= '<div></div>';
	}
	else
	{
		$index = get_designer_tiles_key($selected);
		$images = $designer_tile_images[$index];
		if(!empty($images))
		{
			foreach($images as $image)
			{
				$html .= '<li>';
					$html .= '<div class="draggable">';
						$html .= '<img src='.$image.'" />';
					$html .= '</div>';
				$html .= '</li>';
			}
		}
	}
	echo $html;
	//echo "success";
    wp_die();
}
?>