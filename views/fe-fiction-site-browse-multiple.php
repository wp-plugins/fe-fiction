<div id="post-<?php FeFiction_the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php FeFiction_the_permalink(post_permalink()); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<div class="entry-meta">
		<?php
		printf( __( '<span class="%1$s">Written on</span> %2$s <span class="meta-sep">by</span> %3$s' ),
			'meta-prep meta-prep-author',
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
				FeFiction_the_permalink(post_permalink(),false),
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

		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'genre', '<strong>'.__('Genre(s)').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'rating', '<strong>'.__('Rating').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'story_category', '<strong>'.__('Categories(s)').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_metas( FeFiction_the_ID(false), 'copyright', '<strong>'.__('Copyright').':</strong><br />','' ); ?>
		<br /><?php echo FeFiction_the_metas( FeFiction_the_ID(false), 'disclaimer', '<strong>'.__('Disclaimer').':</strong><br />','' ); ?>
		<hr />
	</div>

	<div class="entry-summary">
		<?php FeFiction_the_excerpt(FeFiction_the_permalink(post_permalink(),false)); ?>
	</div>

</div>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>
