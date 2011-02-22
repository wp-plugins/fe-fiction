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
	if($the_data == '')
	{
		add_filter( 'excerpt_more', 'FeFiction_remove_excerpt_continue_reading');
	}
	else
	{
		add_filter( 'excerpt_more', 'FeFiction_change_excerpt_continue_reading');
	}
	the_excerpt();
}

function FeFiction_remove_excerpt_continue_reading($output)
{
	global $custom_post_type,$pagename;
	$output = '';
	return $output;
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
	global $custom_post_type,$pagename;

	$the_term = str_replace($name,$pagename.'/'.$name,get_the_term_list( $post_ID, $name, $before, $separator, $after ));

	if($the_term == '')
	{
		echo $before.' '.__('N/A','fe-fiction');
	}
	else
	{
		echo $the_term;
	}
}

function FeFiction_the_metas($post_ID,$name,$display_before,$display_after)
{
	global $fic_post_custom_fields_prefix;

	$the_meta = get_post_meta( $post_ID, $fic_post_custom_fields_prefix.$name, true );
	if($the_meta == '')
	{
		$the_meta = __('N/A','fe-fiction');
	}
	echo $display_before.$the_meta.$display_after;
}

function FeFiction_the_ID($echo = true)
{
	global $id;
	if($echo) { echo $id; } else { return $id; }
}

function FeFiction_Pagination($pages = '',$paged=1, $range = 4)
{
	global $wp_query;

	$showitems = ($range * 2)+1;

	if(empty($paged)) { $paged = 1; }

	if($pages == '')
	{
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}

	if($pages <> 1)
	{
		echo "<div class=\"FeFiction_pagination\"><span>Page ".$paged." of ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages)
		{
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		}
		if($paged > 1 && $showitems < $pages)
		{
			echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		}

		for ($i=1; $i <= $pages; $i++)
		{
			if ($pages != 1 &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages)
		{
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
		}
		if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages)
		{
			echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		}
		echo "</div>\n";
	}
}
?>