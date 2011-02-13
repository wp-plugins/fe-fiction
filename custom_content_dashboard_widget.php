<?php

$custom_dashboard_content_file = 'custom_dashboard_content.php';

add_action('init', 'custom_content_dashboard_init');

function custom_content_dashboard_init() {
	load_plugin_textdomain('custom_content_dashboard', false, dirname(plugin_basename(__FILE__)).'/i18n');
}
//------------------------------------------------------------------------//
//---Config---------------------------------------------------------------//
//------------------------------------------------------------------------//
$custom_content_widget_title = __('Custom Content', 'custom_content_dashboard');
function custom_content_widget_content() {
	global $custom_dashboard_content_file;

	/** custom content goes here **/
	include_once($custom_dashboard_content_file);

}

//------------------------------------------------------------------------//
//---Hook-----------------------------------------------------------------//
//------------------------------------------------------------------------//
add_action( 'wp_dashboard_setup', 'custom_content_dashboard_widget' );
//------------------------------------------------------------------------//
//---Functions------------------------------------------------------------//
//------------------------------------------------------------------------//

function custom_content_dashboard_widget() {
	global $custom_content_widget_title;

	if(file_exists($custom_dashboard_content_file)) { 
		wp_add_dashboard_widget( 'custom_content_dashboard_widget', __( $custom_content_widget_title , 'custom_content_dashboard'), 'custom_content_widget_content' );
	}
}
//------------------------------------------------------------------------//
//---Output Functions-----------------------------------------------------//
//------------------------------------------------------------------------//

function wp_dashboard_custom_content( $sidebar_args ) {
	extract( $sidebar_args, EXTR_SKIP );

	echo $before_widget;
	echo $before_title . $widget_name . $after_title;
	custom_content_widget_content();
	echo $after_widget;
}
