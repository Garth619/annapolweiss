<?php
/**
* Template Name: Attorney & Staff Profile
 */

get_header(); ?>



<?php include('banner.php');?>

<div class="inner_page_orangeline">
	
	<span class="line"></span>
	
</div><!-- inner_page_orangeline -->

<div class="inner_main_wrapper">
	
	
	
	<div class="inner_page_content">
		
		<h1><?php the_title();?></h1>
		<span class="profile_title"><?php the_field( 'position' ); ?></span><!-- profile_title -->
		
		
		<div class="mobile_profile">
		
			<?php include('sidebar-profile.php');?>
		
		</div><!-- mobile_profile -->
		
		
		<div class="content">
			
			<?php the_field( 'profile_content' ); ?>
			
			
			
		</div><!-- content -->
		
	</div><!-- inner_page_content -->
	
	<div class="desktop_profile">
	
	
	<?php include('sidebar-profile.php');?>
	
	</div>
	
	
</div><!-- inner_main_container -->






<?php // get_template_part( 'loop', 'page' ); ?>




<?php get_footer(); ?>
