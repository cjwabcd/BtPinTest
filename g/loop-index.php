<div id="loop-square">
<?php get_template_part( 'loop', 'tag' ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="column-post">
<div class="entry cf" onmousemove="this.childNodes[0].style.display='block';this.childNodes[2].style.display='block'" onmouseout="this.childNodes[0].style.display='none';this.childNodes[2].style.display='none'"><h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" target="_blank"><?php the_title(); ?></a></h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_content(''); ?></a><?php	$tags_list = get_the_tag_list( '', ', ' ); if ( $tags_list ): ?><div class="tag-links"><?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?></div><?php endif; ?></div>
			</div>
<?php endwhile; ?>
</div>

<script src="<?php bloginfo( 'template_directory' ); ?>/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/jquery.masonry.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('#loop-square').masonry({
		itemSelector: '.column-post',
		isAnimated: true
    });

  });
</script>