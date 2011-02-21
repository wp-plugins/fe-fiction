<?php
function FeFiction_the_permalink($the_permalink,$echo=true)
{
	global $taxonomies,$fe_fiction_wp_options,$option_name,$custom_post_type,$fe_fiction_default_role,$pagename,$wp_query;

	$new_permalink = str_replace($custom_post_type,$pagename.'/read_story',$the_permalink);
	//echo 'the permalink: '.$the_permalink.'<br>';
	//echo 'new permalink: '.$new_permalink.'<br>';
	if($echo)
	{
		echo $new_permalink;
	}
	else
	{
		return $new_permalink;
	}
}
?>