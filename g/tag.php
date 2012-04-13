<?php get_header(); ?>
				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>
<?php get_template_part( 'loop', 'index' ); ?>
<?php get_footer(); ?>