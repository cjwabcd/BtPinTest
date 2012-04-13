	</div><!-- #main -->
</div><!-- #wrapper -->

<?php wp_pagenavi(); ?>

<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<p>Since 2002 &copy; bfya.com all rights reserved &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					G = Girls <?php bloginfo( 'name' ); ?>
				</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#header">返回顶部</a>
                </p>
                <p>友情链接： 
				<?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&before=<span>&after=</span>'); ?></p>
			</div><!-- #site-info -->

		</div><!-- #colophon -->
</div><!-- #footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=119514" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
</script>
</body>
</html>
