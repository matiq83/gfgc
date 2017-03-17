<?php
/*
Plugin Name: Gravity From - Google Calender Field
Description: Plugin will add a new field for gravity forms
Version: 1.0.0
Author: Muhammad Atiq
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

define( 'GFGCF_PLUGIN_NAME', 'Google Date/Time' );
define( 'GFGCF_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'GFGCF_PLUGIN_URL', plugin_dir_url(__FILE__) );
define( 'GFGCF_SITE_BASE_URL',get_bloginfo('url'));

require(GFGCF_PLUGIN_PATH.'includes/gfgcf_functions.php');
add_action('init', 'gfgcf_init');
function gfgcf_init() {
	wp_enqueue_style('gfgcf_css', GFGCF_PLUGIN_URL.'css/gfgcf.css');
	//wp_enqueue_style('jquery-ui-core-css-gfgcf', 'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');
	wp_enqueue_script('jquery');
	//wp_enqueue_script('jquery-ui-core-gfgcf','http://code.jquery.com/ui/1.10.3/jquery-ui.js');
}
?>