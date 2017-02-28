<?php
/**
* Template Name: Profile Grid
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1>Meet the Team</h1>
		
		<?php if(get_field('attorney_grid')): ?>
		
		<div class="profile_grid_wrapper">
			
			<?php while(has_sub_field('attorney_grid')): ?>
			
			<span class="grid_title"><?php the_sub_field('position_title');?></span>
		 
				
				<?php $posts = get_sub_field('single_profile');
				
				if( $posts ): ?>
				    
				    
				    <div class="profile_grid_inner">
				    
				    
				    
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        
				        <?php setup_postdata($post); ?>
				       	
				       	
									<div class="single_profile_box">
					
					
										<div class="img_wrapper">
					
											<img src="<?php the_field( 'my_profile_image' ); ?>"/>
					
											<div class="profile_overlay">
						
												<a href="<?php the_permalink();?>"><span>View Profile</span></a>
						
											</div><!-- profile_overlay -->
					
										</div><!-- img_wrapper -->
					
										<div class="profile_grid_title_wrapper">
						
											<a class="profile_grid_title" href="<?php the_permalink();?>"><?php the_title();?></a><!-- profile_grid_title -->
						
										</div><!-- profile_title_wrapper -->
					
					
									</div><!-- single_profile_box -->
				       	
				       	
				       	 <?php endforeach; ?>
				  
				  	</div><!-- profile_grid_inner -->
				  
				  
				  
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						
						<?php endif; ?>
				
				
			<?php endwhile; ?>
			
		</div><!-- profile_grid_wrapper -->
		 
		<?php endif; ?>
		

				
	</div><!-- inner_page_content -->
	
</div><!-- inner_main_container -->


<?php get_footer(); ?>
