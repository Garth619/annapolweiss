<div class="sidebar">
	
	
	<div class="profile_wrapper">
	
		
		<div class="tablet_profile">
			
			
			<?php if ( get_field( 'image') ) { ?>
				
				<img class="profile_pic" src="<?php the_field( 'my_profile_image' ); ?>" />
			
			<?php } ?>
			
			
		

		
		</div><!-- tablet_profile -->
		
		<div class="profile_sidebar_content">
			
			<div class="profile_inner_content">
				
				<span class="profile_contact_title">Contact</span><!-- profile_contact_title -->
				
				<div class="profile_content_info">
					
					
					<?php if ( get_field( 'download_vcard_link' ) ) { ?>
						
						<a class="vcard" href="<?php the_field( 'download_vcard_link' ); ?>" target="_blank"><?php the_field( 'download_vcard' ); ?></a>
					
					<?php } ?>
					
					
					<a class="email" href="">tanapol@anapolweiss.com</a>
					
					
					<a class="profile_tel" href=""><span class="orange">P</span>(215) 790-4572</a><!-- profile_tel -->
					<a class="profile_tel" href=""><span class="orange">F</span>(215) 875-7707</a><!-- profile_tel -->
					
					<div class="profile_locations">
				
						<span class="profile_location_title">Office Location</span><!-- sub_header -->
						<span class="profile_greyline"></span><!-- profile_greyline -->
						
						<div class="profile_locations_single">
						
							<a class="profile_address" href="" target="_blank">One Logan Square 130 N. 18th St. Ste. 1600 Philadelphia, PA 19103</a><!-- profile_address -->
							<a class="profile_tel_single" href=""><span class="orange">P</span>(215) 790-4572</a><!-- profile_tel -->
						
						</div><!-- profile_locations_single -->
				
				</div><!-- profile_locations -->
					
				</div><!-- profile_content_info -->
				
				
				
			</div><!-- profile_inner_content -->
				
			
			
			
		</div><!-- profile_sidebar_content -->
		
		<div class="profile_awards">
				
				<a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/award.jpg"/></a>
				
				
			</div><!-- profile_awards -->
	
	</div><!-- profile_wrapper -->
	
</div><!-- sidebar -->