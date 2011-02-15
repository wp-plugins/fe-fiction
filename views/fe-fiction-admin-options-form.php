<div class="wrap">
	<div id="icon-ms-admin" class="icon32"><br></div>
	<h2><?php echo __('FE Fiction Options'); ?></h2> 

	<?php if($options_updated) { ?><div id="message" class="updated below-h2"><p><?php echo __('FE Fiction options have been updated'); ?></p></div><?php } ?>

	<form method="post" action="options-general.php?page=fe-fiction-class.php">
	<?php
		settings_fields('fe-fiction-options');
	?>

	<table class="form-table" style="width:75%;">
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
	</table>

	<p class="submit"><input type="submit" class="button-primary" name="Submit" value="<?php echo __('Save Changes'); ?>"></p>

  </form>

</div>