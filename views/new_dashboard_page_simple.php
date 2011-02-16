<ul id="dashboard-cms">
	<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="post-new.php?post_type=page" class="small">Add Site Page</a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="edit.php?post_type=page" class="small">Edit Site Pages</a></li><?php }

	if(!post_type_exists( $custom_post_type )) { ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="post-new.php" class="small">New Blog Post</a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit.php" class="small">Edit Blog Posts</a></li><?php } ?>

	<?php } else { ?>

		<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="post-new.php" class="small">New Blog Post</a></li><?php } ?>
		<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="edit.php" class="small">Edit Blog Posts</a></li><?php } ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="post-new.php?post_type=fiction" class="small">New Fiction Story</a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit.php?post_type=fiction" class="small">Manage Fiction Stories</a></li><?php } ?>

	<?php } ?>

	<?php if(current_user_can('edit_themes')) { ?><li class="gray"><a href="widgets.php" class="small">Manage Widgets</a></li><?php } ?>
	<?php if(current_user_can('edit_themes')) { ?><li class="gray"><a href="nav-menus.php" class="small">Manage Menus</a></li><?php } ?>
	<?php if(current_user_can('add_users')) { ?><li class="gray"><a href="user-new.php" class="small">Add User</a></li><?php } ?>
	<?php if(current_user_can('edit_users')) { ?><li class="gray"><a href="users.php" class="small">Manage Users</a></li><?php } ?>

	<?php if(current_user_can('read')) { ?><li class="gray"><a href="profile.php" class="small">My Profile</a></li><?php } ?>

	<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit-comments.php" class="small">Manage Comments</a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="options-general.php" class="small">Settings</a></li><?php } ?>
</ul>
	
<br class="clear" />