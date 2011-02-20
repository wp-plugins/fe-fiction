<?php
global $wp_query;

$query_posts_str = 'post_type=fiction';

if(array_key_exists('rating',$wp_query->query_vars) && $wp_query->query_vars['rating'] != '')
{
	$query_posts_str .= '&rating='.$wp_query->query_vars['rating'];
}
if(array_key_exists('story_author',$wp_query->query_vars) && $wp_query->query_vars['story_author'] != '')
{
	$query_posts_str .= '&author_name='.$wp_query->query_vars['story_author'];
}

query_posts($query_posts_str);


//The Loop
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry-meta">
			<?php
			printf( __( '<span class="%1$s">Written on</span> %2$s <span class="meta-sep">by</span> %3$s' ),
				'meta-prep meta-prep-author',
				sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
					get_permalink(),
					esc_attr( get_the_time() ),
					get_the_date()
				),
				sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
					$permalink.'story_author/'.get_the_author(),
					sprintf( esc_attr__( 'View all stories by %s' ), get_the_author() ),
					get_the_author()
				)
			);
			?>
		</div>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	</div>
<?php
endwhile; else:
?>
NO RESULTS!
<?php
endif;

//Reset Query
wp_reset_query();

?>