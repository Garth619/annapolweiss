<?php
/**
* Template Name: Video Grid
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1>Video Center</h1>
		
		<div class="video_wrapper">
			
			
			<?php if(get_field('video')): ?>
			 
				<?php while(has_sub_field('video')): ?>
			 

					<div class="single_video_wrapper">
				
						<?php the_sub_field('wistia_code');?> 
						
						<div class="video_title"><?php the_sub_field('video_title');?> </div><!-- video_title -->
						
						<div class="play_overlay">
							
							
							<div class="play_inner_overlay">
							
								<img class="play_reg" src="<?php bloginfo('template_directory');?>/images/video_play.png"/>
								<img class="play_reg_hover" src="<?php bloginfo('template_directory');?>/images/video_play_hover.png"/>
							
							</div><!-- play_inner_overlay -->
							
						
						</div><!-- play_overlay -->
				
					</div><!-- single_video_wrapper -->
					
					
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
		</div><!-- video_wrapper -->

				
	</div><!-- inner_page_content -->
	
</div><!-- inner_main_container -->


<?php get_footer(); ?>
