<div class="sidebar">
	
	
	<div class="profile_wrapper">
	
		
		<div class="tablet_profile">
			
			
			<?php if ( get_field( 'my_profile_image') ) { ?>
				
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
					
					
					
					<a class="email" href="mailto:<?php the_field( 'profile_email' ); ?>"><?php the_field( 'profile_email' ); ?></a>
					
					
					<a class="profile_tel" href="tel:<?php the_field( 'profile_phone' ); ?>"><span class="orange">P</span><?php the_field( 'profile_phone' ); ?></a><!-- profile_tel -->
					<a class="profile_tel" href="tel:<?php the_field( 'fax' ); ?>"><span class="orange">F</span><?php the_field( 'fax' ); ?></a><!-- profile_tel -->
					
					<div class="profile_locations">
				
						<span class="profile_location_title">Office Location</span><!-- sub_header -->
						<span class="profile_greyline"></span><!-- profile_greyline -->
						
						
						
						
						<?php if ( have_rows( 'profile_locations' ) ) : ?>
							
							
							
							<?php while ( have_rows( 'profile_locations' ) ) : the_row(); ?>
								
								
								<div class="profile_locations_single">
						
									<a class="profile_address" href="<?php the_sub_field( 'address_link' ); ?>" target="_blank"><?php the_sub_field( 'address' ); ?></a><!-- profile_address -->
									<a class="profile_tel_single" href=""><span class="orange">P</span><?php the_sub_field( 'mulit_location_phone' ); ?></a><!-- profile_tel -->
						
								</div><!-- profile_locations_single -->
								
				
							<?php endwhile; ?>
								
							
						
						<?php endif; ?>
						
						
						
						
					
				
				</div><!-- profile_locations -->
					
				</div><!-- profile_content_info -->
				
				
				
			</div><!-- profile_inner_content -->
				
			
			
			
		</div><!-- profile_sidebar_content -->
		
		<div class="profile_awards">
			
			
			
			<?php if ( have_rows( 'awards' ) ) : ?>
				
				<?php while ( have_rows( 'awards' ) ) : the_row(); ?>
				
					<img src="<?php the_sub_field( 'award_image' ); ?>"/>
					
				<?php endwhile; ?>

			<?php endif; ?>
			
			
			
			</div><!-- profile_awards -->
	
	</div><!-- profile_wrapper -->
	
</div><!-- sidebar -->