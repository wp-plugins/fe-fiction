<div id="post-<?php FeFiction_the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php FeFiction_the_permalink(post_permalink()); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<div class="entry-meta entry-utility">
		<strong><?php echo __('Date'); ?>: </strong><?php echo get_the_date(); ?>
		<br /><strong><?php echo __('Author'); ?>: </strong><a href="<?php echo $permalink.'story_author/'.get_the_author(); ?>"><?php the_author(); ?></a>
		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'genre', '<strong>'.__('Genre(s)').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'rating', '<strong>'.__('Rating').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_terms( FeFiction_the_ID(false), 'story_category', '<strong>'.__('Categories(s)').':</strong> ', ' , ', '' ); ?>
		<br /><?php echo FeFiction_the_metas( FeFiction_the_ID(false), 'copyright', '<strong>'.__('Copyright').':</strong> ','' ); ?>
		<br /><?php echo FeFiction_the_metas( FeFiction_the_ID(false), 'disclaimer', '<strong>'.__('Disclaimer').':</strong><br />','' ); ?>
		<br />
	</div>

	<div class="entry-summary entry-utility">
		<?php FeFiction_the_excerpt(FeFiction_the_permalink(post_permalink(),false)); ?>
	</div>
	<br />
	<hr />

</div>
