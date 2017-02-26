

jQuery(document).ready(function(){



jQuery('.play_button_wrapper').mouseenter(function(){
	
	
	jQuery('img.play_reg').fadeOut(200);
	jQuery('img.play_hover').fadeIn(200);
	
	
});


jQuery('.play_button_wrapper').mouseleave(function(){
	
	
	jQuery('img.play_reg').fadeIn(200);
	jQuery('img.play_hover').fadeOut(200);
	
	
	
});


// Profile Grid



jQuery('.single_profile_box').mouseenter(function(){
	
	jQuery(this).find('.profile_overlay').fadeIn();
	
	
});


jQuery('.single_profile_box').mouseleave(function(){
	
	jQuery(this).find('.profile_overlay').fadeOut();
	
	
});






// Memberships


jQuery('.members_list_inner').slick({
  	slidesToShow: 4,
		slidesToScroll: 4,
		arrows:true,
		dots:false,
		responsive: [
    {
      breakpoint: 1730,
      settings: {
        slidesToShow: 2,
				slidesToScroll: 2,
				arrows:true,
				dots:false,
				prevArrow:".members_back",
				nextArrow:".members_next",
				
      }
    },
    {
      breakpoint: 935,
      settings: {
        slidesToShow: 1,
				slidesToScroll: 1,
				arrows:true,
				dots:false,
				prevArrow:".members_back",
				nextArrow:".members_next",
				adaptiveHeight: true,
      }
    }
    
  ]

});



jQuery('.members_back').mouseenter(function(){
	
	
	jQuery('img.memebers_img_back_reg').fadeOut(200);
	jQuery('img.memebers_img_back_reg_hover').fadeIn(200);
	
});


jQuery('.members_back').mouseleave(function(){

	jQuery('img.memebers_img_back_reg').fadeIn(200);
	jQuery('img.memebers_img_back_reg_hover').fadeOut(200);
	
});



jQuery('.members_next').mouseenter(function(){
	
	
	jQuery('img.memebers_img_next_reg').fadeOut(200);
	jQuery('img.memebers_img_reg_next_hover').fadeIn(200);
	
});



jQuery('.members_next').mouseleave(function(){
	
	
	jQuery('img.memebers_img_next_reg').fadeIn(200);
	jQuery('img.memebers_img_reg_next_hover').fadeOut(200);
	
});





// Enable Map Zoom back on when on page scroll on Desktop

jQuery('.map').click(function () {
    jQuery('.map iframe').css("pointer-events", "auto");
});

jQuery( ".map" ).mouseleave(function() {
  jQuery('.map iframe').css("pointer-events", "none"); 
});


// Inner About Slider 






var $statusinnerabout = jQuery('.inner_about_counter_spacer span');
    var $slickElementinnerabout = jQuery('.inner_about_slider');

    $slickElementinnerabout.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
       jQuery(this).find('.inner_about_counter_spacer').text(i + ' / ' + slick.slideCount);
    });



    $slickElementinnerabout.slick({
      	slide: '.inner_about_slides',
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:true,
				dots:false,
				prevArrow:".inner_about_back",
				nextArrow:".inner_about_next"
    });











jQuery('.inner_about_back').mouseenter(function(){
	
	jQuery('.inner_about_back_img').fadeOut(200);
		jQuery('.inner_about_back_hover_img').fadeIn(200);
	
});



jQuery('.inner_about_back').mouseleave(function(){
	
	jQuery('.inner_about_back_img').fadeIn(200);
	jQuery('.inner_about_back_hover_img').fadeOut(200);
	
});




jQuery('.inner_about_next').mouseenter(function(){
	
	jQuery('.inner_about_next_img').fadeOut(200);
		jQuery('.inner_about_next_hover_img').fadeIn(200);
	
});



jQuery('.inner_about_next').mouseleave(function(){
	
	jQuery('.inner_about_next_img').fadeIn(200);
	jQuery('.inner_about_next_hover_img').fadeOut(200);
	
});

// Mobile Locations Inner Page



jQuery('.locations_mobile_inner_inner_page').slick({
  	slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		dots:false,
		prevArrow:".locations_mobile_back_wrapper_inner_page",
		nextArrow:".locations_mobile_next_wrapper_inner_page"
});



	jQuery('.locations_mobile_back_wrapper_inner_page').mouseenter(function(){
		
		jQuery('.locations_mobile_back').fadeOut();
		jQuery('.locations_mobile_back_hover').fadeIn();
		
	});
	
	
	
	jQuery('.locations_mobile_back_wrapper_inner_page').mouseleave(function(){
		
		jQuery('.locations_mobile_back').fadeIn();
		jQuery('.locations_mobile_back_hover').fadeOut();
		
	});
	
	
	
	jQuery('.locations_mobile_next_wrapper_inner_page').mouseenter(function(){
		
		jQuery('.locations_mobile_next').fadeOut();
		jQuery('.locations_mobile_next_hover').fadeIn();
		
	});
	
	
	
	jQuery('.locations_mobile_next_wrapper_inner_page').mouseleave(function(){
		
		jQuery('.locations_mobile_next').fadeIn();
		jQuery('.locations_mobile_next_hover').fadeOut();
		
	});




// Mobile Locations



jQuery('.locations_mobile_inner').slick({
  	slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		dots:false,
		prevArrow:".locations_mobile_back_wrapper",
		nextArrow:".locations_mobile_next_wrapper"
});




jQuery('.locations_mobile_back_wrapper').mouseenter(function(){
	
	jQuery('.locations_mobile_back').fadeOut(200);
	jQuery('.locations_mobile_back_hover').fadeIn(200);
	
});


jQuery('.locations_mobile_back_wrapper').mouseleave(function(){
	
	jQuery('.locations_mobile_back').fadeIn(200);
	jQuery('.locations_mobile_back_hover').fadeOut(200);
	
});




jQuery('.locations_mobile_next_wrapper').mouseenter(function(){
	
	jQuery('.locations_mobile_next').fadeOut(200);
	jQuery('.locations_mobile_next_hover').fadeIn(200);
	
});


jQuery('.locations_mobile_next_wrapper').mouseleave(function(){
	
	jQuery('.locations_mobile_next').fadeIn(200);
	jQuery('.locations_mobile_next_hover').fadeOut(200);
	
});




// Featured Cases



jQuery('.cases_grid_mobile').slick({
  	slidesToShow: 1,
		slidesToScroll: 1,
		arrows:false,
		dots:false,

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
    },
    {
      breakpoint: 675,
      settings: {
        slidesToShow: 1,
				slidesToScroll: 1,
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



/*
jQuery('.about_slide_inner').slick({
  slidesToShow: 1,
	slidesToScroll: 1,
	arrows:true,
	dots:false,
	prevArrow:".about_arrow_left",
	nextArrow:".about_arrow_right"


});
*/







    var $status = jQuery('.about_counter span');
    var $slickElement = jQuery('.about_slide_inner');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
       jQuery(this).find('.about_counter span').text(i + ' / ' + slick.slideCount);
    });



    $slickElement.slick({
      	dots: false,
        slide: '.about_slide',
				arrows: true,
        slidesToShow: 1,
				slidesToScroll: 1,
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
	nextArrow:".spacer.next",
	responsive: [
    {
      breakpoint: 1665,
      settings: {
        slidesToShow: 3,
				slidesToScroll: 1,
				arrows:true,
				dots:false,
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
				slidesToScroll: 1,
				arrows:true,
				dots:false,
      }
    },
    {
      breakpoint: 675,
      settings: {
        slidesToShow: 2,
				slidesToScroll: 2,
				arrows:false,
				dots:true,
				
      }
    },
    {
      breakpoint: 630,
      settings: {
        slidesToShow: 1,
				slidesToScroll: 1,
				arrows:false,
				dots:true,
				
      }
    }

    
  ]



});



jQuery('.blog_posts_wrapper').mouseenter(function(){
	
	jQuery('.spacer.next').addClass('slideright');
	
	
});

jQuery('.blog_posts_wrapper').mouseleave(function(){
	
	jQuery('.spacer.next').removeClass('slideright');
	
	
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

/*
jQuery('.slide_main_inner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider_thumbs_wrapper',
	fade: true,
	 arrows: false
  
});
*/






 var $statusteam = jQuery('.team_counter span');
    var $slickElementteam = jQuery('.slide_main_inner');

    $slickElementteam.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
       jQuery(this).find('.team_counter span.counter_inner').html('<span class="emphasis">' + i + '</span><span class="hash"></span><span class="slide_count">' + slick.slideCount + '</span>');
    });



    $slickElementteam.slick({
      	slide: '.single_main_slide',
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









// Case Results Hover Desktop


function checkWidth() {
    
    if (jQuery(window).width() > 1145) {
        
       
       jQuery('.cases_grid.desktop .single_case').mouseenter(function(){
	       
	      jQuery(this).find('.hover_case').fadeIn();
	       
	     });
	     
	     jQuery('.cases_grid.desktop .single_case').mouseleave(function(){
	       
	      jQuery(this).find('.hover_case').fadeOut();
	       
	     });
    		
    	   		
    		
    } else {
	    
	    
	    
	    
	    jQuery('.cases_grid.desktop .single_case').click(function(){
	       
	      jQuery(this).find('.hover_case').fadeIn();
	      jQuery('.single_case').not(this).find('.hover_case').fadeOut();
	       
	     });
	     
	     jQuery('.cases_grid.desktop .hover_case').click(function(){
	       
	      jQuery(this).fadeOut();
	       
	     });
	    
	    
	    

    }
};


checkWidth();


// Case Results Mobile







jQuery('.single_case_mobile').click(function(){
	
	jQuery(this).find('.hover_case').fadeIn();
	
	
});


jQuery('.cases_grid_mobile .hover_case').click(function(){
	
	jQuery(this).fadeOut();
	
	
});



// Mobile Menu 


jQuery('.mobile_menu').click(function(){
	
	
	jQuery('nav.desktop').toggleClass('slidein');
	jQuery('.mobile_bars').toggleClass('open');
	
	
});




function checkWidthtwo() {
    
    if (jQuery(window).width() < 1145) {
        
           	
           	
           	
           	jQuery('nav.desktop li.menu-item-has-children a').click(function(){
	           	
	           	
	           		jQuery(this).next('ul.sub-menu').toggleClass('openmenu');
	           	
           	});
           	
           	
           	
           	
           	
           	
    	   		
    		
    } else {

    }
};


checkWidthtwo();



// Consultation Scroll 



jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});













}); // document ready 

