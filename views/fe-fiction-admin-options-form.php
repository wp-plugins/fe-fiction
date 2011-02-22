<div class="wrap">
	<div id="icon-ms-admin" class="icon32"><br></div>
	<h2><?php echo __('FE Fiction Options','fe-fiction'); ?></h2> 

	<?php if(isset($options_updated) && $options_updated['success']) { ?><div id="message" class="updated below-h2"><p><?php echo __('FE Fiction options have been updated','fe-fiction'); ?></p></div><?php } ?>
	<?php if(isset($options_updated['page_created_error']) && $options_updated['page_created_error'] != '') { ?><div id="error" class="error below-h2"><p><?php echo __('There were complications with page creation.  Please see message below.','fe-fiction'); ?></p></div><?php } ?>

	<form method="post" action="admin.php?page=fe-fiction-class">
	<?php
		settings_fields('fe-fiction-options');
	?>

	<table class="form-table" style="width:75%;">
	<tr>
		<th width="25%" style="vertical-align:top;">
	    <p><strong><?php echo __('Create Fiction Page','fe-fiction'); ?></strong></p></th>
		<td width="75%" style="vertical-align:top;">
			<?php if(isset($options_updated) && $options_updated['page_created']) { ?><div id="message" class="updated below-h2"><p><?php echo __('Page has been created for you','fe-fiction'); ?></p></div><?php } ?>
			<?php if(isset($options_updated) && $options_updated['page_deleted']) { ?><div id="message" class="updated below-h2"><p><?php echo __('Page has been deleted!  You may safely create a new page.','fe-fiction'); ?></p></div><?php } ?>

			<?php if(isset($options_updated) && !$options_updated['page_created'] && $options_updated['page_created_error'] != '') { ?><div id="error" class="error below-h2"><p><?php echo $options_updated['page_created_error']; ?></p></div><?php } ?>		

			<?php if($current_fe_fiction_page != '0') { ?><div id="message" class="updated below-h2"><p><?php echo __('page already exists.','fe-fiction'); ?></p><p><a href="/wp-admin/post.php?post=<?php echo $current_fe_fiction_page; ?>&action=edit"><?php echo __('Manage the page here','fe-fiction'); ?></a></p><p><?php echo "<a title='" . esc_attr(__('Delete the existing page','fe-fiction')) . "' href='javascript:FeFiction_Confirm_Page_Delete();'>" . __('Delete the existing page.','fe-fiction') . "</a>"; ?></p></div><?php } ?>

			<?php if($current_fe_fiction_page == '0') { ?>
			<label><input name="create_fe_fiction_page" type="checkbox" id="create_fe_fiction_page" tabindex="1" value="1" /><?php echo __('Yes, Create the page for me','fe-fiction'); ?></label><br />
			<?php } ?>
			<label><?php echo __('The page title (anything other than "Fiction")','fe-fiction'); ?>: <input name="fe_fiction_page_title" type="text" id="fe_fiction_page_title" tabindex="1" style="font-size:1.7em;" size="50" value="<?php if(get_option($fe_fiction_wp_options['fe_fiction_page_title']) != '') { echo stripslashes(get_option($fe_fiction_wp_options['fe_fiction_page_title'])); } ?>" /></label><br />
			<em><?php echo __('(this will create a page for you that will be used to display your fiction list.  This is a single page that will be used for listing all fiction and fictin search results)','fe-fiction'); ?></em><br /><br />
			<em><?php echo __('<strong>Note:</strong> you don\'t need to have us do this!  You can create the page yourself.  just add [fe-fiction] where you want the fiction listing or story to display :)','fe-fiction'); ?></em>
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
		<th width="25%" style="vertical-align:top;">
	    <p><strong><?php echo __('Dashboard','fe-fiction'); ?></strong></p></th>
		<td width="75%" style="vertical-align:top;"><?php if(isset($options_updated) && isset($options_updated['custom_dashboard_enabled'])) { ?><div id="message" class="updated below-h2"><p><?php echo __('Override Dashboard option enabled','fe-fiction'); ?></p></div><?php } ?>
			<label><input name="custom_dashboard" type="checkbox" id="custom_dashboard" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['custom_dashboard']) == '1') { ?>checked="checked"<?php } ?> /><?php echo __('Override Dashboard','fe-fiction'); ?></label><br />
			<em><?php echo __('(this will change the standard WP dashboard and replace it with a nice options dashboard)','fe-fiction'); ?></em>
			<br /><strong>sample admin dashboard:</strong><br />
			<img src="<?php echo $plugin_view_path; ?>/images/db-ss-admin.png" />
			<br /><br />
			<strong>sample user (author) dashboard:</strong><br />
			<img src="<?php echo $plugin_view_path; ?>/images/db-ss-author.png" />
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Enhanced Admin Interface','fe-fiction'); ?></strong></th>
	  <td style="vertical-align:top;"><?php if(isset($options_updated) && isset($options_updated['hide_admin_menus_enabled'])) { ?><div id="message" class="updated below-h2"><p><?php echo __('Admin menus are now hidden (except for admins)','fe-fiction'); ?></p></div><?php } ?>
		<label><input name="hide_admin_menus" type="checkbox" id="hide_admin_menus" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['hide_admin_menus']) == '1') { ?>checked="checked"<?php } ?> /><?php echo __('Click to enable','fe-fiction'); ?></label>
		<br />
		<em><?php echo __('(Set up the admin interface so that Authors can only access their profile, read and manage comments, and manage their fiction)','fe-fiction'); ?></em></td>
	  </tr>
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Default Role','fe-fiction'); ?></strong></th>
	  <td style="vertical-align:top;"><?php if(isset($options_updated) && isset($options_updated['default_role_set'])) { ?><div id="message" class="updated below-h2"><p><?php echo __('Default role has been set to Author','fe-fiction'); ?></p></div><?php } ?>
		<label><input name="enable_fe_fiction_default_role" type="checkbox" id="enable_fe_fiction_default_role" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['enable_fe_fiction_default_role']) != '') { ?>checked="checked"<?php } ?> /><?php echo __('Change the default role to Author','fe-fiction'); ?></label>
		<br />
		<em><?php echo __('(Allow FE Fiction to set the default role for new users to the Author level.  The Author level allows for users to submit and publish their own stories.  It also allows them to manage the comments for their stories.  You can always not enable this and continue to manage roles yourself.)','fe-fiction'); ?></em>
		<br /><br />
		<em><?php echo __('<strong>Note:</strong> If you disable this feature after having it enabled, make sure to go to the <a href="'.(is_multisite() ? 'ms-options.php' : 'options-general.php').'">settings</a> page and ensure the default level is what you desire. Typically this is set to "subscriber"'); ?></em></td>
	  </tr>
	<!-- 
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Update Role For Users','fe-fiction'); ?></strong></th>
	  <td style="vertical-align:top;">
		<label><input name="update_roles[Subscribers]" type="checkbox" id="update_roles_subscribers" tabindex="1" value="1" /><?php echo __('Subscribers','fe-fiction'); ?></label>
		<br />
		<label><input name="update_roles[Contributors]" type="checkbox" id="update_roles_contributors" tabindex="1" value="1" /><?php echo __('Contributors','fe-fiction'); ?></label>
		<br />
		<label><input name="update_roles[Editors]" type="checkbox" id="update_roles_editors" tabindex="1" value="1" /><?php echo __('Editors','fe-fiction'); ?></label>

		<em><?php echo __('(For each user associated to the checked roles, we will update them to the Author role.  The Author role is the new default role.  We will only perform this action if you have also selected to allow us to set the default role)','fe-fiction'); ?></em></td>
	  </tr>
		-->
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	</table>

	<p class="submit"><input type="submit" class="button-primary" name="Submit" value="<?php echo __('Save Changes','fe-fiction'); ?>"></p>

  </form>

</div>