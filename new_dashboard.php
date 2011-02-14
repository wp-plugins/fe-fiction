<?php

// Create the function to output the contents of the Dashboard

function new_cms_dashboard_widget_function() {
	/** from fe-fiction-class **/
	global $custom_post_type;

	/** WordPress Administration Bootstrap */
?>

<ul id="dashboard-cms">
	<?php if(current_user_can('manage_options')) { ?><li class="left-gray"><a href="post-new.php?post_type=page"><div id="icon-edit-pages" class="icon32">&nbsp;</div> Add Site Page</a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li class="right-gray"><a href="edit.php?post_type=page"><div id="icon-edit-pages" class="icon32">&nbsp;</div> Edit Site Pages</a></li><?php }

	if(!post_type_exists( $custom_post_type )) { ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="left-gray"><a href="post-new.php"><div id="icon-edit" class="icon32">&nbsp;</div> New Blog Post</a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="right-gray"><a href="edit.php"><div id="icon-edit" class="icon32">&nbsp;</div> Edit Blog Posts</a></li><?php } ?>

	<?php } else { ?>

		<?php if(current_user_can('manage_options')) { ?><li class="left-gray"><a href="post-new.php"><div id="icon-edit" class="icon32">&nbsp;</div> New Blog Post</a></li><?php } ?>
		<?php if(current_user_can('manage_options')) { ?><li class="right-gray"><a href="edit.php"><div id="icon-edit" class="icon32">&nbsp;</div> Edit Blog Posts</a></li><?php } ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="left-gray"><a href="post-new.php?post_type=fiction"><div id="icon-edit" class="icon32">&nbsp;</div> New Fiction Story</a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="right-gray"><a href="edit.php?post_type=fiction"><div id="icon-edit" class="icon32">&nbsp;</div> Manage Fiction Stories</a></li><?php } ?>

	<?php } ?>

	<?php if(current_user_can('edit_themes')) { ?><li class="left-gray"><a href="widgets.php"><div id="icon-themes" class="icon32">&nbsp;</div> Manage Widgets</a></li><?php } ?>
	<?php if(current_user_can('edit_themes')) { ?><li class="right-gray"><a href="nav-menus.php"><div id="icon-themes" class="icon32">&nbsp;</div> Manage Menus</a></li><?php } ?>
	<?php if(current_user_can('add_users')) { ?><li class="left-gray"><a href="user-new.php"><div id="icon-users" class="icon32">&nbsp;</div> Add User</a></li><?php } ?>
	<?php if(current_user_can('edit_users')) { ?><li class="right-gray"><a href="users.php"><div id="icon-users" class="icon32">&nbsp;</div> Manage Users</a></li><?php } ?>
	<?php if(current_user_can('edit_posts')) { ?><li><a href="edit-comments.php"><div id="icon-edit-comments" class="icon32">&nbsp;</div> Manage Comments</a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li><a href="options-general.php"><div id="icon-options-general" class="icon32">&nbsp;</div> Settings</a></li><?php } ?>
</ul>
	
<br class="clear" />
	
<?php	
} 

// Create the function use in the action hook

function new_cms_dashboard_widgets() {
	wp_add_dashboard_widget('new_cms_dashboard_widget', 'Your Options', 'new_cms_dashboard_widget_function');	
} 

// Hoook into the 'wp_dashboard_setup' action to register our other functions

add_action('wp_dashboard_setup', 'new_cms_dashboard_widgets' );

function admin_register_head_new_cms_dashboard_37() {
    $siteurl = get_option('siteurl');
    $url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/new_dashboard.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
}

add_action('admin_head', 'admin_register_head_new_cms_dashboard_37');

/** START CUSTOM CONTENT DASHBOARD WIDGET **/
include_once('custom_content_dashboard_widget.php');
/** END CUSTOM CONTENT DASHBOARD WIDGET **/
