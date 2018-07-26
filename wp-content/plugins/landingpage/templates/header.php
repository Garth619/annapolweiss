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


<!-- landing Page Custom Post Type -->
<?php if( 'landing' === get_post_type() ) { ?>
<meta name="robots" content="noindex, nofollow">
<?php } ?>




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



<style type="text/css">










</style>

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93761748-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="application/ld+json">
{
     "@context": "https://schema.org",
     "@type": "Attorney",
     "name": "Anapol Weiss",
     "alternateName": " Anapol Weiss Law",
         "description": "Anapol Weiss is a Philadelphia personal injury law firm with a history of obtaining multi-million dollar settlements. ",
     "url" : "https://www.anapolweiss.com",
     "logo" : "https://www.anapolweiss.com/wp-content/themes/anapolweiss/images/header_logo.png",
     "image" : "https://www.anapolweiss.com/wp-content/themes/anapolweiss/images/header_logo.png",
     "telephone": " (215) 735-1130",
     "openingHours" : "Mo,Tu,We,Th,Fr 09:00-17:00",
     "hasMap": "https://www.google.com/maps/place/Anapol+Weiss/@39.956399,-75.170112,15z/data=!4m5!3m4!1s0x0:0x253e6492eeb946cd!8m2!3d39.956399!4d-75.170112",
     "address":
          {
          "@type": "PostalAddress",
          "streetAddress": "One Logan Square 130 N. 18th St. Ste. 1600 ",
          "addressLocality": "Philadelphia",
          "addressRegion": "PA",
          "postalCode": "19103",
          "addressCountry": "USA"
          },
     "sameAs": [
     "https://twitter.com/AnapolWeiss",
     "https://profiles.superlawyers.com/pennsylvania/philadelphia/lawfirm/anapol-weiss/79822eae-8d87-4397-b988-78a59426883f.html",
     "https://www.linkedin.com/company-beta/340419/",
     "https://www.facebook.com/AnapolWeiss"
     ]
}
</script>
</head>

<body <?php body_class(); ?>>
	
	






	
	<header>


		<div class="logo_wrapper">
			<a href="#">
				<img src="<?php bloginfo('template_directory');?>/images/header_logo.png"/>
			</a>
		</div>
		<div class="flex">
			<!-- number -->
			<div class="flex-item num">
				<p>Call us today <span>We are available 24/7</span></p>
				<a class="mobile-num" href="tel:8667352792">866.735.2792</a>
				<a class="desktop-num" href="tel:8667352792">1 (866) 735-2792</a>
			</div>
			<!-- number icon-->
			<div class="flex-item img">
				<a href="tel:8667352792"><img src="/wp-content/plugins/landingpage/images/icon-phone.svg"></a>
			</div>
			<!-- cta -->
			<div class="flex-item header-btn">
				<a href="#free_consultation">Begin free case consult</a>
			</div>
		</div>


	</header>
	
	
	
			