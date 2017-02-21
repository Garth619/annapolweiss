<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
			<?php //get_template_part( 'loop', 'index' ); ?>
			
			
			
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
