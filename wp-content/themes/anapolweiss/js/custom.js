

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
	slidesToScroll: 3,
	arrows:false,
	dots:false


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

