<?php
/**
* Template Name: Contact
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1>Contact</h1>
		
		
		<div class="locations_mobile_inner_page">
		
		<span class="locations_mobile_title">Locations</span><!-- locations_mobile_title -->
		
		<div class="locations_mobile_inner_inner_page">
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_1_state' ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_1_link' ); ?>" target="_blank"><?php the_field( 'locations_1_address' ); ?></a><!-- address -->
				<a href="<?php the_field( 'locations_1_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_1_phone_number' ); ?>"><?php the_field( 'locations_1_phone_number' ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_1_state' ); ?></span><!-- note same state as the above -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_2_link' ); ?>" target="_blank"><?php the_field( 'locations_2_address' ); ?></a><!-- address -->
				<a href="<?php the_field( 'locations_2_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_2_phone_number' ); ?>"><?php the_field( 'locations_2_phone_number' ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_3_state' ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_3_link' ); ?>" target="_blank"><?php the_field( 'locations_3_address' ); ?></a><!-- address -->
				<a href="<?php the_field( 'locations_3_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_3_phone_number' ); ?>"><?php the_field( 'locations_3_phone_number' ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_4_state' ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_4_link' ); ?>" target="_blank"><?php the_field( 'locations_4_address' ); ?></a><!-- address -->
				<a href="<?php the_field( 'locations_4_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_4_phone_number' ); ?>"><?php the_field( 'locations_4_phone_number' ); ?></a>
			
			</div><!-- single_location -->

		</div><!-- locations_mobile_inner -->
		
		<div class="locations_mobile_button_inner_page">
			
			<div class="locations_mobile_back_wrapper_inner_page">
				
				<img class="locations_mobile_back" src="<?php bloginfo('template_directory');?>/images/content_left_arrow.png"/>
				<img class="locations_mobile_back_hover" src="<?php bloginfo('template_directory');?>/images/content_left_arrow_orange.png"/>
				
			</div><!-- locations_mobile_back -->
			
			<div class="locations_mobile_next_wrapper_inner_page">
				
				<img class="locations_mobile_next" src="<?php bloginfo('template_directory');?>/images/content_right_arrow.png"/>
				<img class="locations_mobile_next_hover" src="<?php bloginfo('template_directory');?>/images/content_right_arrow_orange.png"/>
				
			</div><!-- locations_mobile_next_wrapper -->
			
		</div><!-- locations_mobile_button -->
				
	</div><!-- locations_mobile -->
		
		
		

		
	<div class="locations_outer_wrapper">
		
		
		<div class="locations_wrapper">
		
		<span class="location_title">locations</span><!-- location_title -->
		
		<div class="location_slider">
			
			<div class="location_slider_inner">
				
				<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_1_state' ); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_1_link' ); ?>" target="_blank"><?php the_field( 'locations_1_address' ); ?></a><!-- address -->
							<a href="<?php the_field( 'locations_1_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
						
							<a class="location_tel" href="tel:<?php the_field( 'locations_1_phone_number' ); ?>"><?php the_field( 'locations_1_phone_number' ); ?></a>
					
						</div><!-- single_location -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_2_link' ); ?>" target="_blank"><?php the_field( 'locations_2_address' ); ?></a><!-- address -->
							<a href="<?php the_field( 'locations_2_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
						
							<a class="location_tel" href="tel:<?php the_field( 'locations_2_phone_number' ); ?>"><?php the_field( 'locations_2_phone_number' ); ?></a>
					
						</div><!-- single_location -->
					
					
					</div><!-- location_col -->
					
					<div class="tablet">
					
					<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_3_state' ); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_3_link' ); ?>" target="_blank"><?php the_field( 'locations_3_address' ); ?></a><!-- address -->
							<a href="<?php the_field( 'locations_3_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
						
							<a class="location_tel" href="tel:<?php the_field( 'locations_3_phone_number' ); ?>"><?php the_field( 'locations_3_phone_number' ); ?></a>
					
						</div><!-- single_location -->
						
					
					
					
					</div><!-- location_col -->
					
					<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_4_state' ); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_4_link' ); ?>" target="_blank"><?php the_field( 'locations_4_address' ); ?></a><!-- address -->
							<a href="<?php the_field( 'locations_4_link' ); ?>" class="get_directions" target="_blank">Get Directions</a>
						
							<a class="location_tel" href="tel:<?php the_field( 'locations_4_phone_number' ); ?>"><?php the_field( 'locations_4_phone_number' ); ?></a>
					
						</div><!-- single_location -->
						
						</div><!-- tablet -->
					
					
					</div><!-- location_col -->
				
			</div><!-- location_slider_inner -->
			
			
			
		</div><!-- location_slider -->
		
	</div><!-- locations -->
	
	<div class="social_links">
		
		<div class="social_inner">
		
			<span class="social_title">social</span><!-- socail_title -->
		
			<ul>
				
				
				
				<?php if(get_field('social_media_links')): ?>
				 
					<?php while(has_sub_field('social_media_links')): ?>
				 
						<li><a href="<?php the_sub_field( 'link' ); ?>" target="_blank"><?php the_sub_field( 'title' ); ?></a></li>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				

			</ul>
		
		</div><!-- social_inner -->
		
		
	</div><!-- social_links -->
	
	
	</div><!-- locations_outer_wrapper -->
	
	
	

				
				
	</div><!-- inner_page_content -->
	

	
	
</div><!-- inner_main_container -->


<div class="map">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6612.7298281230305!2d-75.17435784458159!3d39.956282927043794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c633b894d95d%3A0x45460f48646c7b9b!2s130+N+18th+St+%231600%2C+Philadelphia%2C+PA+19103!5e0!3m2!1sen!2sus!4v1487786762366" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div><!-- <a href="" class="get_directions" target="_blank">Get Directions</a> -->


<?php get_footer(); ?>
