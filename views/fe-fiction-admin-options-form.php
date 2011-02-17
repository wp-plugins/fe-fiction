<div class="wrap">
	<div id="icon-ms-admin" class="icon32"><br></div>
	<h2><?php echo __('FE Fiction Options'); ?></h2> 

	<?php if($options_updated) { ?><div id="message" class="updated below-h2"><p><?php echo __('FE Fiction options have been updated'); ?></p></div><?php } ?>

	<form method="post" action="admin.php?page=fe-fiction-class">
	<?php
		settings_fields('fe-fiction-options');
	?>

	<table class="form-table" style="width:75%;">
	<tr>
		<th width="25%" style="vertical-align:top;">
	    <p><strong><?php echo __('Custom Template Files'); ?></strong></p></th>
		<td width="75%" style="vertical-align:top;">
			<label><input name="create_custom_post_type_file" type="checkbox" id="create_custom_post_type_file" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['create_custom_post_type_file']) == '1') { ?>checked="checked"<?php } ?> /><?php echo __('Yes, Create them for me'); ?></label><br />
			<em><?php echo __('(this will attempt to create <strong>single-'.$custom_post_type.'.php</strong>.  You must have a single.php file in your active theme in order for us to create it.  If you do not have a single.php file, you will have to create the templates.)'); ?></em>
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
		<th width="25%" style="vertical-align:top;">
	    <p><strong><?php echo __('Dashboard'); ?></strong></p></th>
		<td width="75%" style="vertical-align:top;">
			<label><input name="custom_dashboard" type="checkbox" id="custom_dashboard" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['custom_dashboard']) == '1') { ?>checked="checked"<?php } ?> /><?php echo __('Override Dashboard'); ?></label><br />
			<em><?php echo __('(this will change the standard WP dashboard and replace it with a nice options dashboard)'); ?></em>
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
	  <th style="vertical-align:top;"><strong><?php echo __('Enhanced Admin Interface'); ?></strong></th>
	  <td style="vertical-align:top;"><label>
	    <input name="hide_admin_menus" type="checkbox" id="hide_admin_menus" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['hide_admin_menus']) == '1') { ?>checked="checked"<?php } ?> />
	    <?php echo __('Click to enable'); ?>
	    </label>
	    <br />
	    <em><?php echo __('(Set up the admin interface so that Authors can only access their profile, read and manage comments, and manage their fiction)'); ?></em></td>
	  </tr>
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Default Role'); ?></strong></th>
	  <td style="vertical-align:top;">
		<label><input name="enable_fe_fiction_default_role" type="checkbox" id="enable_fe_fiction_default_role" tabindex="1" value="1" <?php if(get_option($fe_fiction_wp_options['enable_fe_fiction_default_role']) != '') { ?>checked="checked"<?php } ?> /><?php echo __('Change the default role to Author'); ?></label>
		<br />
		<em><?php echo __('(Allow FE Fiction to set the default role for new users to the Author level.  The Author level allows for users to submit and publish their own stories.  It also allows them to manage the comments for their stories.  You can always not enable this and continue to manage roles yourself.)'); ?></em>
		<br />
		<em><?php echo __('Note: If you disable this feature after having it enabled, make sure to go to the <a href="'.(is_multisite() ? 'ms-options.php' : 'options-general.php').'">settings</a> page and ensure the default level is what you desire. Typically this is set to "subscriber"'); ?></em></td>
	  </tr>
	<!-- 
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Update Role For Users'); ?></strong></th>
	  <td style="vertical-align:top;">
		<label><input name="update_roles[Subscribers]" type="checkbox" id="update_roles_subscribers" tabindex="1" value="1" /><?php echo __('Subscribers'); ?></label>
		<br />
		<label><input name="update_roles[Contributors]" type="checkbox" id="update_roles_contributors" tabindex="1" value="1" /><?php echo __('Contributors'); ?></label>
		<br />
		<label><input name="update_roles[Editors]" type="checkbox" id="update_roles_editors" tabindex="1" value="1" /><?php echo __('Editors'); ?></label>

		<em><?php echo __('(For each user associated to the checked roles, we will update them to the Author role.  The Author role is the new default role.  We will only perform this action if you have also selected to allow us to set the default role)'); ?></em></td>
	  </tr>
		-->
	<tr>
		<td colspan="2"><hr size="1" color="#dddddd" /></td>
	</tr>
	</table>

	<p class="submit"><input type="submit" class="button-primary" name="Submit" value="<?php echo __('Save Changes'); ?>"></p>

  </form>

</div>