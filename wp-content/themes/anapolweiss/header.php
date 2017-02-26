<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/butler-and-newscycle/stylesheet.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/helvetica/demo.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/news-cycle-bold/stylesheet.css" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/butler_new/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	
	
	<header>
		
		<div class="inner_header">
			
			<div class="logo_wrapper">
				
				<a href="<?php bloginfo('url');?>">
					
					<img src="<?php bloginfo('template_directory');?>/images/header_logo.png"/>
				
				</a>
				
			</div><!-- logo_wrapper -->
			
			<nav class="desktop">

				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>

			</nav>
			
			<div class="mobile_header">
				
				<a class="mobile_tel" href="">866.735.2792</a><!-- mobile_tel -->
				
				<div class="mobile_menu">
					
					<div class="mobile_bars"></div><!-- mobile_bars -->
					<div class="mobile_bars"></div><!-- mobile_bars -->
					<div class="mobile_bars"></div><!-- mobile_bars -->
					
				</div><!-- mobile_menu -->
				
			</div><!-- mobile_header -->
			

		</div><!-- inner_header -->
		
		<div style="clear:both;"></div>
		
	</header>
	
	
	
			