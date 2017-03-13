<?php
/**
 * Template Name: Foundation
 */

get_header(); ?>


<div class="inner_banner_foundation">
	
	<div class="inner_content_foundation">
	
		<span class="sub_header"><?php the_field( 'foundation_banner_sub_header' ); ?></span><!-- sub_header -->
		<span id="foundation_trigger" class="large_header"><?php the_field( 'foundation_banner_large_header' ); ?></span><!-- large_header -->
	
	</div><!-- inner_content_foundation -->
	
	
	
</div><!-- inner_banner_foundation -->


<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div id="arrows_trigger" class="inner_main_wrapper_no_sidebar">
	
	
	
	<div class="inner_page_content_about">
		
		<h1><?php the_title();?></h1>
		
		<div class="content">
			
			<?php the_field( 'foundation_intro' ); ?>
			
			
			
			<?php if(get_field('foundation_content')): ?>
			 
				<?php while(has_sub_field('foundation_content')): ?>
			 
				
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<span class="aboutus_greyline"></span><!-- greyline -->
			
					<?php the_sub_field( 'content' ); ?>

				
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
					
		</div><!-- content -->
		
	</div><!-- inner_page_content_about -->
	
	
	<div class="about_orange_box">
		
		<div class="inner_about_slider_wrapper">
			
<!-- 			<div class="orange_caption"><?php the_field( 'foundstion_slider_caption' ); ?></div> -->
			
			<div class="inner_about_slider">
				
				
				<?php if(get_field('foundation_slider')): ?>
				 
					<?php while(has_sub_field('foundation_slider')): ?>
				 
						<div class="inner_about_slides">
					
							
							<div class="caption"><?php the_sub_field( 'caption' ); ?></div>
							
							
							<img src="<?php the_sub_field( 'slides' ); ?>"/>
							
							
					
							</div><!-- inner_about_slides -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
				
				<div class="inner_about_buttons">
				
				<div class="inner_about_back">
					
					<img class="inner_about_back_img" src="<?php bloginfo('template_directory');?>/images/content_left_arrow.png"/>
					<img class="inner_about_back_hover_img" src="<?php bloginfo('template_directory');?>/images/content_left_arrow_orange.png"/>
					
				</div><!-- inner_about_back -->
				
				<div class="inner_about_counter_spacer"></div><!-- inner_about_counter_spacer -->
				
				<div class="inner_about_next">
					
					<img class="inner_about_next_img" src="<?php bloginfo('template_directory');?>/images/content_right_arrow.png"/>
					<img class="inner_about_next_hover_img" src="<?php bloginfo('template_directory');?>/images/content_right_arrow_orange.png"/>
					
				</div><!-- inner_about_back -->
				
			</div><!-- inner_about_buttons -->				
				
			</div><!-- inner_about_slider -->
			
			<div class="inner_about_caption">
				
				<span class="inner_about_caption_title"><?php the_field( 'foundation_slider_title' ); ?></span><!-- inner_about_caption_title -->
				<span class="inner_about_line"></span><!-- inner_about_greyline -->
				
			</div><!-- inner_about_caption -->
			
			
			
			
			
		</div><!-- inner_about_slider_wrapper -->
		
	</div><!-- about_orange_box -->
	
	
	
</div><!-- inner_main_container -->



<?php get_footer(); ?>
