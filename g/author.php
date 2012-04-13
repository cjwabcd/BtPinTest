<?php get_header(); ?>

<?php /*query_posts( 'orderby=rand' );*/
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'orderby'   => rand,
    'paged' => $paged
);
query_posts($args);
?>

<?php if ( have_posts() ) : ?>
		<div class="page-title">当前显示：<span>随机了一下</span></div>
<?php get_template_part( 'loop', 'index' ); ?>
<?php endif; ?>
<?php get_footer(); ?>