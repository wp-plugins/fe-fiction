<?php
/*
Plugin Name: FE Fiction
Plugin URI: http://wordpress.org/extend/plugins/fe-fiction/
Description: FE Fiction provides ability to manage stories with genres, categories, ratings, etc. This is a fairly straight forward plugin, still in its infancy. Soon to be completed will be front-end posting, search, browsing, and more.
Version: 1.0
Author: Chad Horton
Author URI: http://www.fandomentertainment.com/
Text Domain: fe-fiction
Copyright: 2011

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

$plugin_dir = basename(dirname(__FILE__));

/** START OF FE FICTION PLUGIN **/

/** INCLUDE THE CLASS FILES **/
include_once("fe-fiction-class.php");
register_activation_hook(__FILE__ , 'FeFiction_Activate');
register_deactivation_hook(__FILE__ , 'FeFiction_DeActivate');
add_action('init', 'FeFiction_Init_Taxonomies',0);
add_action( 'admin_menu', 'FeFiction_Init_Create_Custom_Fields', 2 );
add_action('admin_menu', 'disable_default_dashboard_widgets');
add_action( 'save_post', 'FeFiction_Save_Custom_Fields', 1, 1 );
add_shortcode('fe-fiction-submit', 'FeFiction_Site_Submit_Display');
/** END FE FICTION PLUGIN **/

/** START OVERRIDE THE DASHBOARD WITH A NICE CLEAN OPTIONS PAGE **/
include_once('new_dashboard.php');
/** END OVERRIDE THE DASHBOARD WITH A NICE CLEAN OPTIONS PAGE **/

/** START SWAP OUT THE FOOTER TEXT **/
$admin_footer_text_output = '';

add_filter( 'admin_footer_text', 'admin_footer_text_output' );

function admin_footer_text_output( )
{
	global $admin_footer_text_output;
	return $admin_footer_text_output;
}
/** END SWAP OUT THE FOOTER TEXT **/
