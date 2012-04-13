<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

<?php get_template_part( 'loop', 'index' ); ?>

<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="page-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
                    <p class="words-not-found"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
				</div><!-- #post-0 -->
<?php endif; ?>

<?php get_footer(); ?>