<?php
function FeFiction_the_permalink($the_data,$echo=true)
{
	global $custom_post_type,$pagename;

	$new_permalink = str_replace($custom_post_type,$pagename.'/read_story',$the_data);
	//echo 'the permalink: '.$the_data.'<br>';
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

function FeFiction_the_excerpt($the_data)
{
	add_filter( 'excerpt_more', 'FeFiction_change_excerpt_continue_reading');
	the_excerpt();
}

function FeFiction_change_excerpt_continue_reading($output)
{
	global $custom_post_type,$pagename;
	$output = str_replace($custom_post_type,$pagename.'/read_story',$output);
	return $output;
}

/**
get_the_term_list( $post->ID, 'genre', '<strong>Genre(s): </strong>', ' , ', '' );
get_the_term_list( $post->ID, 'rating', '<strong>Rating: </strong>', ' , ', '' );
get_the_term_list( $post->ID, 'story_category', '<strong>Category(s): </strong> ', ' , ', '' );
<p><strong>Copyright:</strong> get_post_meta( $post->ID, '_fefic_copyright', true ) </p>
<p><strong>Disclaimer:</strong> get_post_meta( $post->ID, '_fefic_disclaimer', true ) </p>
**/

function FeFiction_the_terms($post_ID,$name,$before,$separator,$after)
{
	echo get_the_term_list( $post_ID, $name, $before, $separator, $after );
}

function FeFiction_the_metas($post_ID,$name,$display_before,$display_after)
{
	global $fic_post_custom_fields_prefix;

	echo $display_before.get_post_meta( $post_ID, $fic_post_custom_fields_prefix.$name, true ).$display_after;
}

function FeFiction_the_ID($echo = true)
{
	global $id;
	if($echo) { echo $id; } else { return $id; }
}

?>