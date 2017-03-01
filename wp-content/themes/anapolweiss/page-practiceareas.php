<?php
/**
* Template Name: Practice Areas
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1><?php the_title();?></h1>
		
		
		<div class="practice_areas_list_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_directory' ) ); ?>
						
		</div><!-- practice_areas_list_wrapper -->

				
	</div><!-- inner_page_content -->
	

	
	
</div><!-- inner_main_container -->


<?php get_footer(); ?>
