<div class="wrap">
	<div id="icon-ms-admin" class="icon32"><br></div>
	<h2><?php echo __('FE Fiction Options'); ?></h2> 

	<form method="post" action="options-general.php?page=fe-fiction-class.php">
	<?php
		settings_fields('fe-fiction-options');
	?>

	<table class="form-table" style="width:75%;">
	<tr>
		<th width="35%" style="vertical-align:top;">
	    <p><strong><?php echo __('Dashboard'); ?></strong></p></th>
		<td width="65%" style="vertical-align:top;"><label>
		  <input name="custom_dashboard" type="checkbox" id="custom_dashboard" tabindex="1" value="1" />
	    <?php echo __('Override Dashboard'); ?></label><br />
	    <em><?php echo __('(this will change the standard WP dashboard and replace it with a nice options dashboard)'); ?>
		</em></td>
	</tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Roles and Permissions'); ?></strong></th>
	  <td width="65%" style="vertical-align:top;"><label>
	    <input name="custom_dashboard" type="checkbox" id="custom_dashboard" tabindex="1" value="1" />
	    <?php echo __('Set default user (Author) and override role permissions'); ?></label>
	    <br />
	    <em><?php echo __('(new users will get the &quot;Author&quot; role assigned by default. Also, we will modify the Author role to remove the &quot;upload files&quot; permission. Don\'t worry, we will make a backup of your current roles and permissions for you.)'); ?></em></td>
	  </tr>
	<tr>
	  <th style="vertical-align:top;"><strong><?php echo __('Enhanced Admin Interface'); ?></strong></th>
	  <td style="vertical-align:top;"><label>
	    <input name="custom_dashboard2" type="checkbox" id="custom_dashboard2" tabindex="1" value="1" />
	    <?php echo __('Click to enable'); ?>
	  </label>
	    <br />
	    <em><?php echo __('(Set up the admin interface so that Authors can only access their profile, read and manage comments, and manage their fiction)'); ?></em></td>
	  </tr>
	</table>

	<p class="submit"><input type="submit" class="button-primary" name="Submit" value="<?php echo __('Save Changes'); ?>"></p>

  </form>

</div>