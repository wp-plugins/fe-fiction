	<li id="categories">
		<h2><?php _e('Posts by Category'); ?></h2>
		<form action="<?php bloginfo('url'); ?>/" method="get">
		<div>
	<?php
	$categories_select = wp_dropdown_categories('taxonomy=story_category&hierarchical=1&orderby=name&hide_empty=0&echo=0');
	if(stristr($categories_select,'level-0'))
	{
		$categories_select = str_replace('"level-0"','"level-0" disabled',$categories_select);
		$categories_select = str_replace('<select','<select multiple',$categories_select);
	}
	echo $categories_select;

	wp_dropdown_categories('show_option_none=Select Rating&taxonomy=rating&orderby=name&hide_empty=0');

	wp_dropdown_categories('show_option_none=Select Genre&taxonomy=genre&orderby=name&hide_empty=0');
	?>
		</div>
		</form>
	</li>
