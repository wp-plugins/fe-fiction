<ul id="dashboard-cms">
	<?php if(current_user_can('edit_pages')) { ?><li class="gray"><a href="post-new.php?post_type=page" class="small"><?php echo __('Add Site Page','fe-fiction'); ?></a></li><?php } ?>
	<?php if(current_user_can('edit_pages')) { ?><li class="gray"><a href="edit.php?post_type=page" class="small"><?php echo __('Edit Site Pages','fe-fiction'); ?></a></li><?php }

	if(!post_type_exists( $custom_post_type )) { ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="post-new.php" class="small"><?php echo __('New Blog Post','fe-fiction'); ?></a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit.php" class="small"><?php echo __('Edit Blog Posts','fe-fiction'); ?></a></li><?php } ?>

	<?php } else { ?>

		<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="post-new.php" class="small"><?php echo __('New Blog Post','fe-fiction'); ?></a></li><?php } ?>
		<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="edit.php" class="small"><?php echo __('Edit Blog Posts','fe-fiction'); ?></a></li><?php } ?>

		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="post-new.php?post_type=fiction" class="small"><?php echo __('New Fiction Story','fe-fiction'); ?></a></li><?php } ?>
		<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit.php?post_type=fiction" class="small"><?php echo __('Manage Fiction Stories','fe-fiction'); ?></a></li><?php } ?>

	<?php } ?>

	<?php if(current_user_can('edit_themes')) { ?><li class="gray"><a href="widgets.php" class="small"><?php echo __('Manage Widgets','fe-fiction'); ?></a></li><?php } ?>
	<?php if(current_user_can('edit_themes')) { ?><li class="gray"><a href="nav-menus.php" class="small"><?php echo __('Manage Menus','fe-fiction'); ?></a></li><?php } ?>
	<?php if(current_user_can('add_users')) { ?><li class="gray"><a href="user-new.php" class="small"><?php echo __('Add User','fe-fiction'); ?></a></li><?php } ?>
	<?php if(current_user_can('edit_users')) { ?><li class="gray"><a href="users.php" class="small"><?php echo __('Manage Users','fe-fiction'); ?></a></li><?php } ?>

	<?php if(current_user_can('read')) { ?><li class="gray"><a href="profile.php" class="small"><?php echo __('My Profile','fe-fiction'); ?></a></li><?php } ?>

	<?php if(current_user_can('edit_posts')) { ?><li class="gray"><a href="edit-comments.php" class="small"><?php echo __('Manage Comments','fe-fiction'); ?></a></li><?php } ?>
	<?php if(current_user_can('manage_options')) { ?><li class="gray"><a href="options-general.php" class="small"><?php echo __('Settings','fe-fiction'); ?></a></li><?php } ?>
</ul>
	
<br class="clear" />