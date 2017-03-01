<?php
/**
	
	* Template Name: Downloads

 */

get_header(); ?>

<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	

	
	<div class="inner_page_content">
		
		<h1>Downloads</h1>
		
		<div class="content">
			
			<?php the_field( 'download_conent' ); ?>
			
				
				
				
				<?php if(get_field('downloads')): ?>
				 
					<div class="download_list">
					
					<?php while(has_sub_field('downloads')): ?>
					
					
						<div class="single_download">
							
						<?php if( get_sub_field('file_or_link') == 'PDF' ): ?>
	
							<a href="<?php the_sub_field( 'download_pdf' ); ?>" target="_blank">
	
						<?php endif; ?>
						
						<?php if( get_sub_field('file_or_link') == 'LINK' ): ?>
	
							<a href="<?php the_sub_field( 'download_link' ); ?>" target="_blank">
	
						<?php endif; ?>
						
						
						
						<span class="download_title"><?php the_sub_field( 'title' ); ?></span>
						
						<span class="download_pdf">Download PDF</span><!-- download_pdf -->
						
						</a>
						
					</div><!-- single_download -->
						
						
						<?php the_sub_field('');?>
				    
					<?php endwhile; ?>
					
					
					</div><!-- download_list -->
				 
				<?php endif; ?>
				
				
				
							
		</div><!-- content -->
		
	</div><!-- inner_page_content -->
	
	<?php include('sidebar-blog.php');?>
	
	
</div><!-- inner_main_container -->






<?php // get_template_part( 'loop', 'page' ); ?>




<?php get_footer(); ?>
