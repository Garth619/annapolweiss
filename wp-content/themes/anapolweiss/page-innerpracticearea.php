<?php
/**
* Template Name: Inner Practice Area
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		

		<h1><?php the_title();?></h1>
		
		<div class="content">
			
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			
		</div><!-- content -->
		
	</div><!-- inner_page_content -->
	
	<?php get_sidebar(); ?>
	
	
</div><!-- inner_main_container -->











<?php get_footer(); ?>
