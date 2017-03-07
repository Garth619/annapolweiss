<?php
/**
 * Template Name: About Us
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div  id="arrows_trigger" class="inner_main_wrapper_no_sidebar">
	
	
	
	<div class="inner_page_content_about">
		
		<h1>about us</h1>
		
		<div class="content">
			
			
			<?php the_field( 'about_intro' ); ?>
			
			
			<?php if(get_field('about_content')): ?>
			 
				<?php while(has_sub_field('about_content')): ?>
			 
					<h2><?php the_sub_field( 'title' ); ?></h2>
					
					<span class="aboutus_greyline"></span><!-- greyline -->
			
					<?php the_sub_field( 'content' ); ?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- content -->
		
	</div><!-- inner_page_content_about -->
	
	
	<div class="about_orange_box">
		
		<div class="inner_about_slider_wrapper">
			
			<div  class="inner_about_slider">
				
				
				<?php if(get_field('about_inner_page_slider')): ?>
				 
					<?php while(has_sub_field('about_inner_page_slider')): ?>
				 
						<div class="inner_about_slides">
					
							<img src="<?php the_sub_field( 'image' ); ?>"/>
					
						</div><!-- inner_about_slides -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
								
				
				<div class="inner_about_buttons">
				
				<div class="inner_about_back">
					
					<img class="inner_about_back_img" src="<?php bloginfo('template_directory');?>/images/content_left_arrow.png"/>
					<img class="inner_about_back_hover_img" src="<?php bloginfo('template_directory');?>/images/content_left_arrow_orange.png"/>
					
				</div><!-- inner_about_back -->
				
				<div class="inner_about_counter_spacer"><span></span></div><!-- inner_about_counter_spacer -->
				
				<div class="inner_about_next">
					
					<img class="inner_about_next_img" src="<?php bloginfo('template_directory');?>/images/content_right_arrow.png"/>
					<img class="inner_about_next_hover_img" src="<?php bloginfo('template_directory');?>/images/content_right_arrow_orange.png"/>
					
				</div><!-- inner_about_back -->
				
			</div><!-- inner_about_buttons -->
				
				
			</div><!-- inner_about_slider -->
			
			<div class="inner_about_caption">
				
				<span class="inner_about_caption_title"><?php the_field( 'about_us_slider_caption' ); ?></span><!-- inner_about_caption_title -->
				<span class="inner_about_line"></span><!-- inner_about_greyline -->
				
			</div><!-- inner_about_caption -->
			
			
			
			
			
		</div><!-- inner_about_slider_wrapper -->
		
	</div><!-- about_orange_box -->
	
	
	
</div><!-- inner_main_container -->


<div id="inner_about_wave_trigger" class="inner_about_quote">
	
	<span class="client_review_title"><?php the_field( 'client_review_title' ); ?></span><!-- client_review -->
	<span class="client_review_line"></span><!-- client_review_line -->
	
	<span class="inner_about_quote"><?php the_field( 'client_review_quote' ); ?></span><!-- inner_about_quote -->
	
</div><!-- inner_about_quote -->


<div class="wavy_inner_about">
	
	
<svg id="inner_about_wave" data-name="inner_about_wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1969.31 224.84"><defs></defs><title>content_waves_1</title><path class="inner_about_wavy_lines" d="M1968.5,223.5c-45.5-34.8-97.2-61.7-158.1-82.4-60-20.3-131.3-35.4-218.1-45.9-132.5-16.1-260.9,22.2-374.3,56.1-33.3,9.9-64.7,19.3-95.2,27.1-71.4,18.2-176.7,28.6-281.6,27.7C783.7,205.7,729,202,678.6,195c-55.6-7.7-104.4-19.1-144.9-33.9-41.6-15.2-88.5-27-139.3-35.1a944.09,944.09,0,0,0-148.5-11.7c-49.7,0-96.1,3.9-138,11.7C64.4,134.1,28.1,145.9.1,161.1" transform="translate(0.36 0.74)"/><circle class="inner_about_wavy_circles" cx="546.88" cy="166.17" r="2.66"/><circle class="inner_about_wavy_circles" cx="230.36" cy="115.45" r="2.66"/><path class="inner_about_wavy_lines" d="M.1,132.1C45.6,97.3,97.3,70.4,158.2,49.7c60-20.3,131.3-35.4,218.1-45.9C508.7-12.3,637.2,26,750.5,59.9c33.3,9.9,64.7,19.3,95.2,27.1,71.4,18.2,176.7,28.6,281.6,27.7,57.6-.5,112.3-4.2,162.7-11.2,55.6-7.7,104.4-19.1,144.9-33.9,41.6-15.2,88.5-27,139.3-35.1a944.09,944.09,0,0,1,148.5-11.7c49.7,0,96.1,3.9,138,11.7,43.5,8.1,79.8,19.9,107.8,35.1" transform="translate(0.36 0.74)"/><circle class="inner_about_wavy_circles" cx="367.36" cy="5.45" r="2.66"/><circle class="inner_about_wavy_circles" cx="755.88" cy="62.17" r="2.66"/><circle class="inner_about_wavy_circles" cx="1178.88" cy="164.17" r="2.66"/><circle class="inner_about_wavy_circles" cx="1407.88" cy="79.17" r="2.66"/><circle class="inner_about_wavy_circles" cx="1588.88" cy="96.17" r="2.66"/><circle class="inner_about_wavy_circles" cx="1695.88" cy="24.17" r="2.66"/></svg>

	
	
</div><!-- wavy_inner_about -->


<div class="memberships">
	
	
	<div class="membership_title">
		
		<span class="members"><?php the_field( 'members_title' ); ?></span>
		<span class="membership_line"></span><!-- membership_line -->
		
	</div><!-- membership_title -->
	
	
	<div class="members_list">
		
		
		<div class="members_list_inner">
			
			<div class="single_member member_one">
				
				<img src="<?php the_field( 'membership1_image' ); ?>"/>
				<span class="member_greyline"></span><!-- member_greyline -->
				<span class="single_member_title"><?php the_field( 'membership1_title' ); ?></span><!-- single_member_title -->
				<span class="single_member_content"><?php the_field( 'membership_1_content' ); ?></span>
				
			</div><!-- single_member -->
			
			<div class="single_member member_two">
				
				<img src="<?php the_field( 'membership2_image' ); ?>"/>
				<span class="member_greyline"></span><!-- member_greyline -->
				<span class="single_member_title"><?php the_field( 'membership2_title' ); ?></span><!-- single_member_title -->
				<span class="single_member_content"><?php the_field( 'membership_2_content' ); ?></span>
				
			</div><!-- single_member -->
			
			<div class="single_member member_three">
				
				<img src="<?php the_field( 'membership3_image' ); ?>"/>
				<span class="member_greyline"></span><!-- member_greyline -->
				<span class="single_member_title"><?php the_field( 'membership3_title' ); ?></span><!-- single_member_title -->
				<span class="single_member_content"><?php the_field( 'membership_3_content' ); ?></span>
				
				
				<a class="visit_site" href="<?php the_field( 'membership_3_visit_link' ); ?>" target="_blank"><?php the_field( 'membership_3_visit_site' ); ?></a>
				
			</div><!-- single_member -->
			
			<div class="single_member member_four">
				
				<img src="<?php the_field( 'membership4_image' ); ?>"/>
				<span class="member_greyline"></span><!-- member_greyline -->
				<span class="single_member_title"><?php the_field( 'membership4_title' ); ?></span><!-- single_member_title -->
				<span class="single_member_content"><?php the_field( 'membership_4_content' ); ?></span>
				
			</div><!-- single_member -->
			
		</div><!-- members_list_inner -->
		
		<div class="members_button">
			
			
			<div class="members_back">
				
				<img class="memebers_img_back_reg" src="<?php bloginfo('template_directory');?>/images/content_left_arrow.png"/>
				<img class="memebers_img_back_reg_hover" src="<?php bloginfo('template_directory');?>/images/content_left_arrow_orange.png"/>
				
			</div><!-- members_back -->
			
			
			<div class="members_next">
				
				<img class="memebers_img_next_reg" src="<?php bloginfo('template_directory');?>/images/content_right_arrow.png"/>
				<img class="memebers_img_reg_next_hover" src="<?php bloginfo('template_directory');?>/images/content_right_arrow_orange.png"/>
				
			</div><!-- members_back -->
			
			
			
			
		</div><!-- members_button -->
		
		
	</div><!-- members_list -->
	
	
</div><!-- memberships -->

<?php get_footer(); ?>
