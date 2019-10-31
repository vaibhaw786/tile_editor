<?php
/*
 Plugin Name:  Victorian Ceramics
 Plugin URI: http://www.creativebrainchintan.com/
 Description: It's Victorian Ceramics editor plugin, specially developed for designing the  tiles.
 Version: 0.1
 Author: Chintan Trivedi
 Author URI: http://www.creativebrainchintan.com/
 */
 //defining the url,path and slug for the plugin
define( 'VC_URL', plugin_dir_url(__FILE__) );
define( 'VC_PATH', plugin_dir_path(__FILE__) );
define( 'VC_SLUG','vc' );

//required files
require('inc/ajax.php');
require('inc/functions.php');
require('inc/admin_menu.php');
require('inc/custom_posts.php');

require('inc/shortcodes/poarch.php');
require('inc/shortcodes/dashboard.php');
require('inc/shortcodes/fire_place.php');
require('inc/shortcodes/custom_editor.php');
require('inc/shortcodes/design_decorative.php');
//required files

add_action( 'wp_enqueue_scripts', 'vc_frontend_scripts' );
function vc_frontend_scripts() 
{
    wp_enqueue_style(VC_SLUG."bootstrap_css",VC_URL."css/bootstrap.css");
    wp_enqueue_style(VC_SLUG."colorpicker_cs",VC_URL."css/colorpicker.css");
    wp_enqueue_style(VC_SLUG."font_awesome_min_css",VC_URL."css/font-awesome.min.css");
    wp_enqueue_style(VC_SLUG."jquery_ui_css",VC_URL."css/jquery-ui.css");
    wp_enqueue_style(VC_SLUG."spectrum_css",VC_URL."css/spectrum.css");
    wp_enqueue_style(VC_SLUG."style_css",VC_URL."css/style.css");
    wp_enqueue_style(VC_SLUG."front_style_css",VC_URL."css/front-style.css");

	wp_enqueue_script('jquery');
	wp_enqueue_script(VC_SLUG."colorpicker_js",VC_URL."js/colorpicker.js");
	wp_enqueue_script(VC_SLUG."bootstrap_min_js",VC_URL."js/bootstrap.min.js");
	wp_enqueue_script(VC_SLUG."jquery_ui_js",VC_URL."js/jquery-ui.min.js");
	wp_enqueue_script(VC_SLUG."spectrum_js",VC_URL."js/spectrum.js");
    wp_enqueue_script(VC_SLUG."custom_js",VC_URL."js/custom.js");
    wp_enqueue_script(VC_SLUG."front_scripts_js",VC_URL."js/front-scripts.js");
    wp_localize_script( VC_SLUG.'front_scripts_js','ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    )); 
}

add_action( 'admin_print_scripts', 'vc_backend_scripts' );
function vc_backend_scripts() 
{
    wp_enqueue_style('thickbox');
    wp_enqueue_style(VC_SLUG."admin_styles_css",VC_URL."css/admin-styles.css");

    wp_enqueue_script('jquery');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script(VC_SLUG."admin_scripts_js",VC_URL."js/admin-scripts.js");
    wp_localize_script( VC_SLUG.'admin_scripts_js','ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    )); 
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


//echo 'test'.rand();
?>