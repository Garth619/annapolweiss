<div class="sidebar">
	
	<span class="sub_header">Practice Areas</span><!-- sub_header -->
	<span class="sidebar_line"></span><!-- sidebar_line -->
	

<!-- personal injury sidebar -->

<?php if ( 140 == $post->post_parent || is_page(140) ) { ?>

	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'personal_injury_sidebar' ) ); ?>

<?php } ?>


<!-- Car Accident sidebar -->
	

<?php if ( 142 == $post->post_parent || is_page(142) ) { ?>

	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'car_accidents_sidebar' ) ); ?>

<?php } ?>


<!-- Medial Malpractice sidebar -->
	

<?php if ( 225 == $post->post_parent || is_page(225) ) { ?>

	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'medical_malpractice_sidebar' ) ); ?>

<?php } ?>

<!-- Mass Torts sidebar -->


<?php if ( 273 == $post->post_parent || is_page(273) ) { ?>

	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'mass_torts_sidebar' ) ); ?>

<?php } ?>

<!-- Class Actions sidebar -->

<?php if ( 269 == $post->post_parent || is_page(269) ) { ?>

	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'class_actions_sidebar' ) ); ?>

<?php } ?>

	
	<div class="keep_up">
		
		<span class="keep_up_sub_header">Keep up to Date</span><!-- sub_header -->
		<span class="keep_up_large_header">Follow Us</span><!-- keep_up_large_header -->
		
		<div class="follow_us_posts">
			
				<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '3', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
         	<div class="follow_us_single_post">
				
				 		<a href="<?php the_permalink();?>">
					
				 		<span class="keep_up_date"><?php the_date();?></span><!-- keep_up_date -->
				 		<span class="keep_up_post_title"><?php the_title();?></span><!-- keep_up_post_title -->
					
						</a>
				
					</div><!-- follow_us_single_post -->
         	
         	
         <?php endwhile; ?>
         <?php wp_reset_postdata(); // reset the query ?>

			
		</div><!-- follow_us_posts -->
		
	</div><!-- keep_up -->
	
	
</div><!-- sidebar -->