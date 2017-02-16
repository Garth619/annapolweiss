

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
		dots:false //,
		
	
		
		
/*
		responsive: [
    {
      breakpoint: 1600,
      settings: {
        infinite: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				pauseOnHover: false,
				arrows:false,
				dots:true,
				vertical:false,
      }
    },
    {
      breakpoint: 1145,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				pauseOnHover: false,
				arrows:false,
				dots:true,
				vertical:false,
      }
    }
    
  ]
*/
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





// Case Results Hover



jQuery('.blog_posts_wrapper').mouseenter(function(){
	
	jQuery('.spacer.next').addClass('slideright');
	
	
});

jQuery('.blog_posts_wrapper').mouseleave(function(){
	
	jQuery('.spacer.next').removeClass('slideright');
	
	
});





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

