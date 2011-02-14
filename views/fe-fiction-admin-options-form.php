<div class="wrap">
	<div id="icon-ms-admin" class="icon32"><br></div>
	<h2><?php echo __('FE Fiction Options'); ?></h2> 

	<form method="post" action="options-general.php?page=fe-fiction-class.php">
	<?php
		settings_fields('fe-fiction-options');
	?>

	<table class="form-table">
	<tr>
		<td style="vertical-align:top;">
		<?php echo __('FE Fiction'); ?>
		</td>
	</tr>
	<tr>
		<td style="vertical-align:top;">
		content
		</td>
	</tr>
	</table>

	<p class="submit"><input type="submit" class="button-primary" name="Submit" value="Save Changes"></p>

	</form>

</div>
