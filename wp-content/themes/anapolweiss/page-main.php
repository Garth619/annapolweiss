<?php
/**

 * Template Name: Main
 
 */

get_header(); ?>


<section class="main_banner">
	
	
	<div class="inner_main_content">
		
		
		<a class="play_button" href="">
			
			<img class="play_reg" src="<?php bloginfo('template_directory');?>/images/video_play_button.png"/>
			<img class="play_hover" src="<?php bloginfo('template_directory');?>/images/video_play_button_hover.png"/>
			
			
		</a><!-- play_button -->
		
		<span class="subheader">good people</span><!-- subheader -->
		
		<span class="largeheader">Great Lawyers</span><!-- large_header -->
		
		<a class="white_button consulation" href="">Start Your free consultation</a>
		
		<div class="mouse_scroll_wrapper">
			
			
			<div class="mouse_inner_wrapper">
				
				<img class="outer" src="<?php bloginfo('template_directory');?>/images/header_scroll_outer.svg"/>
				<img class="inner" src="<?php bloginfo('template_directory');?>/images/header_scroll_inner.svg"/>
				
			</div><!-- mouse_inner_wrapper -->
			
		</div><!-- mouse_scroll_wrapper -->
		
		
	</div><!-- inner_main_content -->
	
	
</section><!-- main_banner -->

<section class="stats">
	
	<div class="inner_stats">
		
		<div class="single_stat">
			
			<div class="svg_icon">
				
				<img src="<?php bloginfo('template_directory');?>/images/sp_icon_1.svg"/>
				
			</div><!-- svg_icon -->
			
			<div class="stats_content">
				
				<span class="number">1</span><!-- number -->
				
				<span class="orange_line"></span><!-- orange_line -->
				
				<span class="sub_header">Tier 1 Ranking in</span><!-- sub_header -->
				<span class="large_header">best law firms</span><!-- large_header -->
			
			</div><!-- stats_content -->
			
		</div><!-- single_stat -->
		
	</div><!-- inner_stats -->
	
</section><!-- stats -->



<?php get_footer(); ?>
