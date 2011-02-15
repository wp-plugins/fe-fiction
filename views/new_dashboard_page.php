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

	<?php if(current_user_can('read')) { ?><li class="gray"><a href="profile.php"><div id="icon-users" class="icon32">&nbsp;</div> My Profile</a></li><?php } ?>

	<?php if(current_user_can('edit_posts')) { ?><li><a href="edit-comments.php"><div id="icon-edit-comments" class="icon32">&nbsp;</div> Manage Comments</a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li><a href="options-general.php"><div id="icon-options-general" class="icon32">&nbsp;</div> Settings</a></li><?php } ?>
</ul>
	
<br class="clear" />