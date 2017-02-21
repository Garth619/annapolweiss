<?php
/**
 * Main template file

 */

get_header(); ?>

<?php include('banner.php');?>



<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		

		
		<div class="content">
			
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
			
		</div><!-- content -->
		
	</div><!-- inner_page_content -->
	
	<?php include('sidebar-blog.php');?>
	
	
</div><!-- inner_main_container -->




<?php get_footer(); ?>
