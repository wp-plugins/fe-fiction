<?php
//The Loop
if ( have_posts() ) : while ( have_posts() ) : the_post();
	if($num_stories > 1)
	{
		include('fe-fiction-site-browse-multiple.php');
	}
	else
	{
		include('fe-fiction-site-browse-single.php');
	}
?>

<?php
endwhile; else:

/* If there are no posts to display, such as an empty archive page */
if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested fiction. Perhaps searching will help find a related story.'); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
endif;

//Reset Query
wp_reset_query();

?>