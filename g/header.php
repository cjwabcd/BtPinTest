<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '-', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' - ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="header" class="cf">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
                <div id="search-box">
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >
	<div><label class="screen-reader-text" for="s">搜索：</label>
	<input type="text" name="s" id="s" class="s_i_i" value="站内搜索 有木有啊" onfocus="this.className='s_i_ii';if(this.value=='站内搜索 有木有啊')this.value='';" onblur="this.className='s_i_i';if(this.value=='')this.value='站内搜索 有木有啊';" />
	<input type="submit" id="searchsubmit" value="&nbsp;&nbsp;" />
	</div>
</form>
                </div>
                <div class="share-icons">
<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://share.baidu.com/static/images/type-button-1.jpg" /></div>
<!-- Baidu Button END -->
                </div>
			</div><!-- #branding -->
		</div><!-- #masthead -->
</div><!-- #header -->
    
<div id="wrapper" class="cf">

	<div id="main">