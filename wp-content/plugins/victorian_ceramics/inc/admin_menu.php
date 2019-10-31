<?php
add_action( 'admin_menu', 'vc_admin_menu' );
function vc_admin_menu()
{
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'Tiles', 'Tiles', 'manage_options', 'vc_tiles', 'vc_tilescb', 'dashicons-welcome-widgets-menus', 30 );
}

function vc_tilescb()
{
	require_once('tiles_menu.php');
}
?>