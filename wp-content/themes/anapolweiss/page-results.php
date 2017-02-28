<?php
/**
* Template Name: Case Results
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1>Case Results</h1>
		
		
	<div class="inner_case_results_wrapper">
		
		<div class="intro_cases">
			
			<h2  class="sub_header">Verdicts & Settlements</h2>
			
			<p>Anapol Weiss is a national leader in personal injury, product liability and mass tort litigation, having successfully litigated thousands of cases in state and federal courts. Our personal injury lawyers have obtained billions of dollars in successful verdicts, settlements and judgments on behalf of clients in a variety of mass tort, class action, environmental toxin, medical malpractice and automobile accident lawsuits.</p>
			
		</div><!-- intro_cases -->
		
	</div><!-- inner_case_results_wrapper -->
		
		
</div><!-- inner_page_content -->
	
	
</div><!-- inner_main_container -->


<div id="back_top_top" class="case_results_button_wrapper">
	
		<div class="inner_case_wrapper">
			
			
			<?php if(get_field('case_results')): ?>
			 
			 	<?php $count=1; ?>
			 	
				<?php while(has_sub_field('case_results')): ?>
			 

				
					<a href="#scroll" class="case_button case_button_<?php echo $count; ?>">
						
						<span><?php the_sub_field('button_title');?></span>
					
					</a><!-- case_button -->

					<?php $count++; ?>

				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
				
			
		</div><!-- inner_case_wrapper -->
			
	</div><!-- case_results__button_wrapper -->
	
	
	
	<div id="scroll" class="parent_wrapper">
		

		<?php if(get_field('case_results')): ?>
				
				<?php $count=1; ?>
			 
				<?php while(has_sub_field('case_results')): ?>
				
					<div class="single_cases_wrapper single_cases_wrapper_<?php echo $count; ?>">
						
						<div class="single_cases_inner">
			 
			
						<?php if(get_sub_field('case_results_listings')): ?>
						
			 
							<?php while(has_sub_field('case_results_listings')): ?>
			    


											<div class="inner_page_single_case">
					
												<span class="inner_page_case_number"><?php the_sub_field( 'case_results_dollar_amount' ); ?></span><!-- inner_page_case_number -->
					
												<span class="inner_page_money_title"><?php the_sub_field( 'case_results_money_title' ); ?></span><!-- inner_page_money_title -->
					
												<span class="inner_page_greyline_wrapper"><span class="inner_page_line"></span></span><!-- inner_page_greyline_wrapper -->
					
												<div class="inner_page_case_content_wrapper">
						
													<span class="inner_page_case_title"><?php the_sub_field( 'case_results_title' ); ?></span><!-- inner_page_case_title -->
						
													<span class="inner_page_case_content"><?php the_sub_field( 'case_results_content' ); ?></span><!-- inner_page_case_content -->
					
												</div><!-- inner_page_case_content_wrapper -->
					
										</div><!-- inner_page_single_case -->
							
									

						
							<?php endwhile; ?>
							
								</div><!-- single_cases_inner -->
							
							</div><!-- single_cases_wrapper -->
			 
						<?php endif; ?>
						
						<?php $count++; ?>
				
				<?php endwhile; ?>
			 
			<?php endif; ?>
		

	</div><!-- parent_wrapper -->
	
	<a class="back_to_top" href="#back_top_top">Back to top</a><!-- back_to_top -->


<?php get_footer(); ?>















