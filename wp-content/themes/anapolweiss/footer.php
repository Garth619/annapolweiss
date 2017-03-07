
<footer>

<section id="free_consultation" class="get_started">
	
	
	<div class="get_started_left">
		
		<div id="footer_wave_trigger" class="get_started_title_wrapper">
			
			<span class="sub_header"><?php the_field( 'get_started_sub_title','option'); ?></span><!-- sub_header -->
			<span class="large_header"><?php the_field( 'get_started_large_title','option'); ?></span><!-- large_header -->
			<span class="info_required"><?php the_field( 'info_required','option'); ?></span><!-- large_header -->
			<span class="get_started_orangeline"></span><!-- get_started_orangeline -->
			
		</div><!-- get_started_title_wrapper -->
		
		
		
	</div><!-- get_started_left -->
	
	<div class="get_started_right">
		
		
		<div class="form">
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
		</div><!-- form -->
		
	</div><!-- get_started_right -->
	
	
</section><!-- get_started -->

<div class="wavy_footer">
	
	<svg id="footer_wave" data-name="content wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1969.01 224.39"><defs><style></style></defs><title>footer_waves</title><path class="wavy_footer_line" d="M1968.86,161.84c-28-15.2-64.3-27-107.8-35.1-41.9-7.8-88.3-11.7-138-11.7a944.09,944.09,0,0,0-148.5,11.7c-50.8,8.1-97.7,19.9-139.3,35.1-40.5,14.8-89.3,26.2-144.9,33.9-50.4,7-105.1,10.7-162.6,11.1-104.9.9-210.2-9.5-281.6-27.7-30.5-7.8-61.9-17.2-95.2-27.1-113.4-33.9-241.8-72.2-374.3-56.1-86.8,10.5-158.1,25.6-218.1,45.9C97.66,162.54,46,189.44.46,224.24" transform="translate(-0.16 -0.25)"/><circle class="wavy_footer_circle" cx="1422.28" cy="165.92" r="2.66"/><circle class="wavy_footer_circle" cx="1738.8" cy="115.2" r="2.66"/><path class="wavy_footer_line" d="M.46,70.34c28-15.2,64.3-27,107.8-35.1,41.9-7.8,88.3-11.7,138-11.7a944.09,944.09,0,0,1,148.5,11.7c50.8,8.1,97.7,19.9,139.3,35.1,40.5,14.8,89.3,26.2,144.9,33.9,50.4,7,105.1,10.7,162.7,11.2,104.9.9,210.2-9.5,281.6-27.7,30.5-7.8,61.9-17.2,95.2-27.1,113.3-33.9,241.8-72.2,374.2-56.1,86.8,10.5,158.1,25.6,218.1,45.9,60.9,20.7,112.6,47.6,158.1,82.4" transform="translate(-0.16 -0.25)"/><circle class="wavy_footer_circle" cx="1601.8" cy="5.2" r="2.66"/><circle class="wavy_footer_circle" cx="1213.28" cy="61.92" r="2.66"/><circle class="wavy_footer_circle" cx="790.28" cy="163.92" r="2.66"/><circle class="wavy_footer_circle" cx="561.28" cy="78.92" r="2.66"/><circle class="wavy_footer_circle" cx="380.28" cy="95.92" r="2.66"/><circle class="wavy_footer_circle" cx="273.28" cy="23.92" r="2.66"/></svg>
</div><!-- wavy_footer -->


<div class="extended_footer">
	
	
	
	<div class="locations_mobile">
		
		<span class="locations_mobile_title">Locations</span><!-- locations_mobile_title -->
		
		<div class="locations_mobile_inner">
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_1_state', 16 ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_1_link', 16 ); ?>" target="_blank"><?php the_field( 'locations_1_address',16 ); ?></a><!-- address -->
				<a class="footer_get_directions" href="<?php the_field( 'locations_1_link', 16 ); ?>" target="blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_1_phone_number',16 ); ?>"><?php the_field( 'locations_1_phone_number',16 ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_1_state',16 ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_2_link',16 ); ?>" target="_blank"><?php the_field( 'locations_2_address',16 ); ?></a><!-- address -->
				<a class="footer_get_directions" href="<?php the_field( 'locations_2_link',16 ); ?>" target="blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_2_phone_number', 16 ); ?>"><?php the_field( 'locations_2_phone_number', 16 ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_3_state', 16 ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_3_link',16 ); ?>" target="_blank"><?php the_field( 'locations_3_address',16 ); ?></a><!-- address -->
				<a class="footer_get_directions" href="<?php the_field( 'locations_3_link',16 ); ?>" target="blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_3_phone_number',16 ); ?>"><?php the_field( 'locations_3_phone_number',16 ); ?></a>
			
			</div><!-- single_location -->
			
			<div class="single_location_mobile">
			
				<span class="state"><?php the_field( 'locations_4_state', 16 ); ?></span><!-- state -->
				<span class="location_line"></span><!-- location_line -->
				<a class="address" href="<?php the_field( 'locations_4_link', 16 ); ?>" target="_blank"><?php the_field( 'locations_4_address', 16 ); ?></a><!-- address -->
				<a class="footer_get_directions" href="<?php the_field( 'locations_4_link', 16 ); ?>" target="blank">Get Directions</a>
				<a class="location_tel" href="tel:<?php the_field( 'locations_4_phone_number', 16 ); ?>"><?php the_field( 'locations_4_phone_number', 16 ); ?></a>
			
			</div><!-- single_location -->

		</div><!-- locations_mobile_inner -->
		
		<div class="locations_mobile_button">
			
			<div class="locations_mobile_back_wrapper">
				
				<img class="locations_mobile_back" src="<?php bloginfo('template_directory');?>/images/content_left_arrow.png"/>
				<img class="locations_mobile_back_hover" src="<?php bloginfo('template_directory');?>/images/content_left_arrow_orange.png"/>
				
			</div><!-- locations_mobile_back -->
			
			<div class="locations_mobile_next_wrapper">
				
				<img class="locations_mobile_next" src="<?php bloginfo('template_directory');?>/images/content_right_arrow.png"/>
				<img class="locations_mobile_next_hover" src="<?php bloginfo('template_directory');?>/images/content_right_arrow_orange.png"/>
				
			</div><!-- locations_mobile_next_wrapper -->
			
		</div><!-- locations_mobile_button -->
				
	</div><!-- locations_mobile -->
	
	
	
	<div class="locations_wrapper">
		
		<span class="location_title">locations</span><!-- location_title -->
		
		<div class="location_slider">
			
			<div class="location_slider_inner">
				
				<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_1_state', 16 ); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_1_link',16 ); ?>" target="_blank"><?php the_field( 'locations_1_address',16 ); ?></a><!-- address -->
							<a class="footer_get_directions" href="<?php the_field( 'locations_1_link',16 ); ?>" target="blank">Get Directions</a>
							<a class="location_tel" href="tel:<?php the_field( 'locations_1_phone_number',16 ); ?>"><?php the_field( 'locations_1_phone_number',16 ); ?></a>
					
						</div><!-- single_location -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_2_link',16 ); ?>" target="_blank"><?php the_field( 'locations_2_address',16 ); ?></a><!-- address -->
							<a class="footer_get_directions" href="<?php the_field( 'locations_2_link',16 ); ?>" target="blank">Get Directions</a>
							<a class="location_tel" href="tel:<?php the_field( 'locations_2_phone_number',16 ); ?>"><?php the_field( 'locations_2_phone_number',16 ); ?></a>
					
						</div><!-- single_location -->
					
					
					</div><!-- location_col -->
					
					<div class="tablet">
					
					<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_3_state', 16 ); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_3_link',16); ?>" target="_blank"><?php the_field( 'locations_3_address',16); ?></a><!-- address -->
							<a class="footer_get_directions" href="<?php the_field( 'locations_3_link',16); ?>" target="blank">Get Directions</a>
							<a class="location_tel" href="tel:<?php the_field( 'locations_3_phone_number',16 ); ?>"><?php the_field( 'locations_3_phone_number',16 ); ?></a>
					
						</div><!-- single_location -->
						
					
					
					
					</div><!-- location_col -->
					
					<div class="location_col">
					
					<span class="state"><?php the_field( 'locations_4_state',16); ?></span><!-- state -->
						
						<span class="location_line"></span><!-- location_line -->
						
						<div class="single_location">
						
							<a class="address" href="<?php the_field( 'locations_4_link', 16 ); ?>" target="_blank"><?php the_field( 'locations_4_address',16 ); ?></a><!-- address -->
							<a class="footer_get_directions" href="<?php the_field( 'locations_4_link', 16 ); ?>" target="blank">Get Directions</a>
							<a class="location_tel" href="tel:<?php the_field( 'locations_4_phone_number',16 ); ?>"><?php the_field( 'locations_4_phone_number',16 ); ?></a>
					
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
				
					<?php if(get_field('social_media_links', 16)): ?>
				 
					<?php while(has_sub_field('social_media_links', 16)): ?>
				 
						<li><a href="<?php the_sub_field( 'link' ); ?>" target="_blank"><?php the_sub_field( 'title' ); ?></a></li>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</ul>
		
		</div><!-- social_inner -->
		
		
	</div><!-- social_links -->
	
</div><!-- extended_footer -->

<div class="bottom_footer">
	
	<span class="copyright"><?php echo date("Y"); ?> <?php the_field( 'copyright_text','option' ); ?> &nbsp;|&nbsp; <a class="footer_google" href="<?php the_field( 'google_plus_next_to_the_copyright','option'); ?>" tagret="_blank">Google +</a></span>
	<a href="jttps://ilawyermarketing.com" targte="_blank"><img class="ilawyer_logo" src="<?php bloginfo('template_directory');?>/images/ilawyer_logo.png"/></a>
	
</div><!-- bottom_footer -->

</footer>


	
<?php wp_footer(); ?>





<script type="text/javascript">

jQuery(document).ready(function(){

// Banners


var bgArray = ['internal_header_img1.jpg', 'internal_header_img2.jpg', 'internal_header_img3.jpg', 'internal_header_img4.jpg','internal_header_img5.jpg', 'internal_header_img6.jpg','internal_header_img7.jpg'];
  var bg = bgArray[Math.floor(Math.random() * bgArray.length)];
  var path = '<?php bloginfo('template_directory');?>/images/banners/';
  var imageUrl = path + bg;
 
 
 
  jQuery('.inner_banner_wrapper').css('background-image', 'url(' + imageUrl +')');

}); // Document Ready

</script>

<?php if(is_front_page()):?>


<script type="text/javascript">

jQuery(document).ready(function(){


// Selling Points

	var waypointtwo = new Waypoint({
  element: document.getElementById('selling_points_trigger'),
  handler: function(direction) {
    
    
    jQuery('#case_1').addClass('svg_fadein');
		jQuery('#case_1').find('span.orange_line').addClass('fadein');
    

    
   jQuery('#case_2').delay(700).queue(function(){
	    
	    
	    jQuery(this).addClass('svg_fadein');
	    jQuery(this).find('span.orange_line').addClass('fadein');
	    
	    
    });
    
    
    jQuery('#case_3').delay(1500).queue(function(){
	    
	    
	    jQuery(this).addClass('svg_fadein');
	    jQuery(this).find('span.orange_line').addClass('fadein');
	    
    });
    
    
    
    jQuery('#case_4').delay(2200).queue(function(){
	    
	    
	    jQuery(this).addClass('svg_fadein');
	    jQuery(this).find('span.orange_line').addClass('fadein');
	    
    });

    
    
    
    
   
    
    
   
    
  }
})





// About

	var waypoint = new Waypoint({
  element: document.getElementById('about_waypoint'),
  handler: function(direction) {
    
    
    
    jQuery('section.about span.header_line').addClass('fadein');
    jQuery('section.about img.content_img').addClass('fadein');
    jQuery('section.about .greyline').addClass('fadein');
    
  }
})



// Wavy One



	var waypointwave = new Waypoint({
  element: document.getElementById('wavy_one_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.wavy_one').addClass('fadein');


    
  }
})


// Featured Line



	var waypointfeaturedline = new Waypoint({
  element: document.getElementById('featured_line_trigger'),
  handler: function(direction) {
    
    
    
   
    jQuery('span.featured_orange_line').addClass('fadein');

    
  }
})


// Grid Line Trigger


var waypointwave = new Waypoint({
  element: document.getElementById('grid_line_trigger'),
  handler: function(direction) {
    
    
    

    jQuery('span.case_greyline').addClass('fadein');

    
  }
})




// Wavy Blog



	var waypointwave = new Waypoint({
  element: document.getElementById('wavy_blog_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.wavy_blog').addClass('fadein');
     jQuery('span.blog_orangeline').addClass('fadein');
     jQuery('span.inner_blog_line').addClass('fadein');
     
     
 

    
  }
})







// Second About


var waypointsecondabout = new Waypoint({
  element: document.getElementById('second_about_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.about_orange_box').addClass('fadein');
    jQuery('.about_slider_wrapper').addClass('fadein');
    jQuery('.about_content_orangeline').addClass('fadein');
    

    
  }
})



// Second About Arrows Animation

var waypointsecondaboutarrows = new Waypoint({
  element: document.getElementById('arrows_animation_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.about_orange_box').addClass('fadein');
    jQuery('.about_arrows_count').addClass('fadein');
    

    
  }
})



// Team

var waypointteam = new Waypoint({
  element: document.getElementById('team_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('span.team_orangeline').addClass('fadein');

    
  }
})


// Quote

var waypointquote = new Waypoint({
  element: document.getElementById('quote_line_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('span.inner_quote_line').addClass('fadein');

    
  }
})



}); /* Ready */

</script>




<?php endif;?>


<?php if(is_page_template( 'page-aboutus.php' )):?>


<script type="text/javascript">

jQuery(document).ready(function(){


// Inner About Wave



var waypointinnerabout = new Waypoint({
  element: document.getElementById('inner_about_wave_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.wavy_inner_about').addClass('fadein');
  

    
  }
})



var waypointinnerabouttwo = new Waypoint({
  element: document.getElementById('orange_line_trigger'),
  handler: function(direction) {
    
    
    
   
    jQuery(' .about_orange_box').addClass('fadein');
    jQuery(' .inner_about_slider_wrapper').addClass('fadein');
    
    
   

    
  }
})



var waypointinneraboutsliderarrows = new Waypoint({
  element: document.getElementById('arrows_trigger'),
  handler: function(direction) {
    
    
    
   
    jQuery('.inner_about_buttons').addClass('fadein');
    
    
    
   

    
  }
})








});

</script>




<?php endif;?>


<?php if(is_page_template( 'page-foundation.php')):?>


<script type="text/javascript">

jQuery(document).ready(function(){

var waypointinnerfoundation = new Waypoint({
  element: document.getElementById('foundation_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.inner_page_orangeline span.line').addClass('fadein');
    
    
    jQuery('.about_orange_box').addClass('fadein');
    jQuery('.inner_about_slider_wrapper').addClass('fadein');

    
  }
})




var waypointinnerfoundationarrows = new Waypoint({
  element: document.getElementById('arrows_trigger'),
  handler: function(direction) {
    
    
    
   
    jQuery('.inner_about_buttons').addClass('fadein');
    
    
    
   

    
  }
})





});

</script>



<?php endif;?>



<?php if(is_page_template( 'page-aboutus.php') || is_page_template('page-thankyou.php') || is_page_template('page-download_pdfs.php') || is_page_template('page-staff.php') || is_page_template('page-videos.php') || is_page_template('page-contact.php') || is_page_template('page-practiceareas.php') || is_page_template('page-results.php') || is_page_template('page-innerpracticearea.php') ||  is_page_template('page-attprofile.php') ||  is_page_template('page-profilegrid.php')):?>


<script type="text/javascript">

jQuery(document).ready(function(){




// Inner Page Orange Lines


var waypointinnerpage = new Waypoint({
  element: document.getElementById('orange_line_trigger'),
  handler: function(direction) {
    
    
    
    jQuery('.inner_page_orangeline span.line').addClass('fadein');

    
  }
})





});

</script>


<?php endif;?>



<?php if(is_page_template( 'page-results.php')):?>



			
			
			<?php if(get_field('case_results')): ?>
			 
			 	<?php $count=1; ?>
			 	
			 	<script type="text/javascript">
							
						jQuery(document).ready(function(){
			 	
						<?php while(has_sub_field('case_results')): ?>
			 
							
							jQuery('a.case_button_<?php echo $count; ?>').click(function(){
	
								jQuery('.single_cases_wrapper:not(.single_cases_wrapper_<?php echo $count; ?>)').fadeOut();
								jQuery('.single_cases_wrapper_<?php echo $count; ?>').delay(200).fadeIn();
	
							});
							
							
							<?php $count++; ?>

				
						<?php endwhile; ?>
				
						}); // Document Ready
							
					</script>
			 
			<?php endif; ?>


<?php endif;?>


</body>
</html>
