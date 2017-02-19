

jQuery(document).ready(function(){



jQuery('.play_button').mouseenter(function(){
	
	
	jQuery('img.play_reg').fadeOut(200);
	jQuery('img.play_hover').fadeIn(200);
	
	
});


jQuery('.play_button').mouseleave(function(){
	
	
	jQuery('img.play_reg').fadeIn(200);
	jQuery('img.play_hover').fadeOut(200);
	
	
});



// Stats

jQuery('.inner_stats').slick({
  	slidesToShow: 4,
		slidesToScroll: 4,
		arrows:false,
		dots:false,
		
	
		
		

		responsive: [
    {
      breakpoint: 1450,
      settings: {
        slidesToShow: 2,
				slidesToScroll: 2,
				arrows:true,
				dots:false,
				prevArrow:".stat_left",
				nextArrow:".stat_right"
      }
    }
    
  ]

});


jQuery('.stat_left').mouseenter(function(){
	
	jQuery('.stat_left_regular').fadeOut();
	jQuery('.stat_left_hover').fadeIn();
	
});


jQuery('.stat_left').mouseleave(function(){
	
	jQuery('.stat_left_regular').fadeIn();
	jQuery('.stat_left_hover').fadeOut();
	
});



jQuery('.stat_right').mouseenter(function(){
	
	jQuery('.stat_right_regular').fadeOut();
	jQuery('.stat_right_hover').fadeIn();
	
});


jQuery('.stat_right').mouseleave(function(){
	
	jQuery('.stat_right_regular').fadeIn();
	jQuery('.stat_right_hover').fadeOut();
	
});




// About Slider



jQuery('.about_slide_inner').slick({
  slidesToShow: 1,
	slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:".about_arrow_left",
	nextArrow:".about_arrow_right"


});



jQuery('.about_arrow_left').mouseenter(function(){
	
	jQuery('img.about_arrow_left_img').fadeOut(200);
	jQuery('img.about_arrow_left_hover').fadeIn(200);
	
});

jQuery('.about_arrow_left').mouseleave(function(){
	
	jQuery('img.about_arrow_left_img').fadeIn(200);
	jQuery('img.about_arrow_left_hover').fadeOut(200);
	
});


jQuery('.about_arrow_right').mouseenter(function(){
	
	jQuery('img.about_arrow_right_img').fadeOut(200);
	jQuery('img.about_arrow_right_hover').fadeIn(200);
	
});

jQuery('.about_arrow_right').mouseleave(function(){
	
	jQuery('img.about_arrow_right_img').fadeIn(200);
	jQuery('img.about_arrow_right_hover').fadeOut(200);
	
});






// In the News


jQuery('.blog_inner_wrapper').slick({
  slidesToShow: 4,
	slidesToScroll: 1,
	arrows:true,
	dots:false,
	nextArrow:".spacer.next"


});




// Meet the Team



jQuery('.slider_thumbs_wrapper').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: ".team_back",
  nextArrow: ".team_next",
	focusOnSelect: true,
  asNavFor: '.slide_main_inner'
});

jQuery('.slide_main_inner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider_thumbs_wrapper',
	fade: true,
	 arrows: false
  
});




jQuery('.single_thumb').mouseenter(function(){
	
	
	jQuery(this).find('.thumb_overlay').fadeIn(200);
	
	
});


jQuery('.single_thumb').mouseleave(function(){
	
	
	jQuery(this).find('.thumb_overlay').fadeOut(200);
	
	
});

// Back Arrows


jQuery('.team_back').mouseenter(function(){
	
	
	jQuery(this).find('.arrow_reg').fadeOut(200);
	jQuery(this).find('.arrow_hov').fadeIn(200);
	
	
});


jQuery('.team_back').mouseleave(function(){
	
	
	jQuery(this).find('.arrow_reg').fadeIn(200);
	jQuery(this).find('.arrow_hov').fadeOut(200);
	
	
});

// Next Arrows


jQuery('.team_next').mouseenter(function(){
	
	
	jQuery(this).find('.arrow_reg_next').fadeOut(200);
	jQuery(this).find('.arrow_hov_next').fadeIn(200);
	
	
});


jQuery('.team_next').mouseleave(function(){
	
	
	jQuery(this).find('.arrow_reg_next').fadeIn(200);
	jQuery(this).find('.arrow_hov_next').fadeOut(200);
	
	
});






// In the news


jQuery('.blog_posts_wrapper').mouseenter(function(){
	
	jQuery('.spacer.next').addClass('slideright');
	
	
});

jQuery('.blog_posts_wrapper').mouseleave(function(){
	
	jQuery('.spacer.next').removeClass('slideright');
	
	
});


// Case Results Hover


function checkWidth() {
    
    if (jQuery(window).width() > 730) {
        
       
       jQuery('.single_case').mouseenter(function(){
	       
	      jQuery(this).find('.hover_case').fadeIn();
	       
	     });
	     
	     jQuery('.single_case').mouseleave(function(){
	       
	      jQuery(this).find('.hover_case').fadeOut();
	       
	     });
    		
    	   		
    		
    } else {

    }
};


checkWidth();




}); // document ready 

