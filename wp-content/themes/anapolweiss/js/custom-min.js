jQuery(document).ready(function(){function e(){jQuery(window).width()>1145?(jQuery(".cases_grid.desktop .single_case").mouseenter(function(){jQuery(this).find(".hover_case").fadeIn()}),jQuery(".cases_grid.desktop .single_case").mouseleave(function(){jQuery(this).find(".hover_case").fadeOut()})):(jQuery(".cases_grid.desktop .single_case").click(function(){jQuery(this).find(".hover_case").fadeIn(),jQuery(".single_case").not(this).find(".hover_case").fadeOut()}),jQuery(".cases_grid.desktop .hover_case").click(function(){jQuery(this).fadeOut()}))}function r(){jQuery(window).width()<1145&&jQuery("nav.desktop li.menu-item-has-children a").click(function(){jQuery(this).next("ul.sub-menu").toggleClass("openmenu")})}function e(){jQuery(window).width()>1145&&jQuery("a.case_button").removeAttr("href")}jQuery(".play_button_wrapper").mouseenter(function(){jQuery("img.play_reg").fadeOut(200),jQuery("img.play_hover").fadeIn(200)}),jQuery(".play_button_wrapper").mouseleave(function(){jQuery("img.play_reg").fadeIn(200),jQuery("img.play_hover").fadeOut(200)}),jQuery(".single_profile_box").mouseenter(function(){jQuery(this).find(".profile_overlay").fadeIn()}),jQuery(".single_profile_box").mouseleave(function(){jQuery(this).find(".profile_overlay").fadeOut()}),jQuery(".members_list_inner").slick({slidesToShow:4,slidesToScroll:4,arrows:!0,dots:!1,responsive:[{breakpoint:1730,settings:{slidesToShow:2,slidesToScroll:2,arrows:!0,dots:!1,prevArrow:".members_back",nextArrow:".members_next"}},{breakpoint:935,settings:{slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".members_back",nextArrow:".members_next",adaptiveHeight:!0}}]}),jQuery(".members_back").mouseenter(function(){jQuery("img.memebers_img_back_reg").fadeOut(200),jQuery("img.memebers_img_back_reg_hover").fadeIn(200)}),jQuery(".members_back").mouseleave(function(){jQuery("img.memebers_img_back_reg").fadeIn(200),jQuery("img.memebers_img_back_reg_hover").fadeOut(200)}),jQuery(".members_next").mouseenter(function(){jQuery("img.memebers_img_next_reg").fadeOut(200),jQuery("img.memebers_img_reg_next_hover").fadeIn(200)}),jQuery(".members_next").mouseleave(function(){jQuery("img.memebers_img_next_reg").fadeIn(200),jQuery("img.memebers_img_reg_next_hover").fadeOut(200)}),jQuery(".map").click(function(){jQuery(".map iframe").css("pointer-events","auto")}),jQuery(".map").mouseleave(function(){jQuery(".map iframe").css("pointer-events","none")});var o=jQuery(".inner_about_counter_spacer span"),t=jQuery(".inner_about_slider");t.on("init reInit afterChange",function(e,r,o,t){var n=(o?o:0)+1;jQuery(this).find(".inner_about_counter_spacer").text(n+" / "+r.slideCount)}),t.slick({slide:".inner_about_slides",slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".inner_about_back",nextArrow:".inner_about_next"}),jQuery(".inner_about_back").mouseenter(function(){jQuery(".inner_about_back_img").fadeOut(200),jQuery(".inner_about_back_hover_img").fadeIn(200)}),jQuery(".inner_about_back").mouseleave(function(){jQuery(".inner_about_back_img").fadeIn(200),jQuery(".inner_about_back_hover_img").fadeOut(200)}),jQuery(".inner_about_next").mouseenter(function(){jQuery(".inner_about_next_img").fadeOut(200),jQuery(".inner_about_next_hover_img").fadeIn(200)}),jQuery(".inner_about_next").mouseleave(function(){jQuery(".inner_about_next_img").fadeIn(200),jQuery(".inner_about_next_hover_img").fadeOut(200)}),jQuery(".locations_mobile_inner_inner_page").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".locations_mobile_back_wrapper_inner_page",nextArrow:".locations_mobile_next_wrapper_inner_page"}),jQuery(".locations_mobile_back_wrapper_inner_page").mouseenter(function(){jQuery(".locations_mobile_back").fadeOut(),jQuery(".locations_mobile_back_hover").fadeIn()}),jQuery(".locations_mobile_back_wrapper_inner_page").mouseleave(function(){jQuery(".locations_mobile_back").fadeIn(),jQuery(".locations_mobile_back_hover").fadeOut()}),jQuery(".locations_mobile_next_wrapper_inner_page").mouseenter(function(){jQuery(".locations_mobile_next").fadeOut(),jQuery(".locations_mobile_next_hover").fadeIn()}),jQuery(".locations_mobile_next_wrapper_inner_page").mouseleave(function(){jQuery(".locations_mobile_next").fadeIn(),jQuery(".locations_mobile_next_hover").fadeOut()}),jQuery(".locations_mobile_inner").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".locations_mobile_back_wrapper",nextArrow:".locations_mobile_next_wrapper"}),jQuery(".locations_mobile_back_wrapper").mouseenter(function(){jQuery(".locations_mobile_back").fadeOut(200),jQuery(".locations_mobile_back_hover").fadeIn(200)}),jQuery(".locations_mobile_back_wrapper").mouseleave(function(){jQuery(".locations_mobile_back").fadeIn(200),jQuery(".locations_mobile_back_hover").fadeOut(200)}),jQuery(".locations_mobile_next_wrapper").mouseenter(function(){jQuery(".locations_mobile_next").fadeOut(200),jQuery(".locations_mobile_next_hover").fadeIn(200)}),jQuery(".locations_mobile_next_wrapper").mouseleave(function(){jQuery(".locations_mobile_next").fadeIn(200),jQuery(".locations_mobile_next_hover").fadeOut(200)}),jQuery(".cases_grid_mobile").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!1}),jQuery(".inner_stats").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,dots:!1,responsive:[{breakpoint:1450,settings:{slidesToShow:2,slidesToScroll:2,arrows:!0,dots:!1,prevArrow:".stat_left",nextArrow:".stat_right"}},{breakpoint:675,settings:{slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".stat_left",nextArrow:".stat_right"}}]}),jQuery(".stat_left").mouseenter(function(){jQuery(".stat_left_regular").fadeOut(),jQuery(".stat_left_hover").fadeIn()}),jQuery(".stat_left").mouseleave(function(){jQuery(".stat_left_regular").fadeIn(),jQuery(".stat_left_hover").fadeOut()}),jQuery(".stat_right").mouseenter(function(){jQuery(".stat_right_regular").fadeOut(),jQuery(".stat_right_hover").fadeIn()}),jQuery(".stat_right").mouseleave(function(){jQuery(".stat_right_regular").fadeIn(),jQuery(".stat_right_hover").fadeOut()});var n=jQuery(".about_counter span"),a=jQuery(".about_slide_inner");a.on("init reInit afterChange",function(e,r,o,t){var n=(o?o:0)+1;jQuery(this).find(".about_counter span").text(n+" / "+r.slideCount)}),a.slick({dots:!1,slide:".about_slide",arrows:!0,slidesToShow:1,slidesToScroll:1,prevArrow:".about_arrow_left",nextArrow:".about_arrow_right"}),jQuery(".about_arrow_left").mouseenter(function(){jQuery("img.about_arrow_left_img").fadeOut(200),jQuery("img.about_arrow_left_hover").fadeIn(200)}),jQuery(".about_arrow_left").mouseleave(function(){jQuery("img.about_arrow_left_img").fadeIn(200),jQuery("img.about_arrow_left_hover").fadeOut(200)}),jQuery(".about_arrow_right").mouseenter(function(){jQuery("img.about_arrow_right_img").fadeOut(200),jQuery("img.about_arrow_right_hover").fadeIn(200)}),jQuery(".about_arrow_right").mouseleave(function(){jQuery("img.about_arrow_right_img").fadeIn(200),jQuery("img.about_arrow_right_hover").fadeOut(200)}),jQuery(".blog_inner_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:".spacer.next",responsive:[{breakpoint:1665,settings:{slidesToShow:3,slidesToScroll:1,arrows:!0,dots:!1}},{breakpoint:1e3,settings:{slidesToShow:2,slidesToScroll:1,arrows:!0,dots:!1}},{breakpoint:675,settings:{slidesToShow:2,slidesToScroll:2,arrows:!1,dots:!0}},{breakpoint:630,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0}}]}),jQuery(".blog_posts_wrapper").mouseenter(function(){jQuery(".spacer.next").addClass("slideright")}),jQuery(".blog_posts_wrapper").mouseleave(function(){jQuery(".spacer.next").removeClass("slideright")}),jQuery(".slider_thumbs_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,prevArrow:".team_back",nextArrow:".team_next",focusOnSelect:!0,asNavFor:".slide_main_inner"});var i=jQuery(".team_counter span"),s=jQuery(".slide_main_inner");s.on("init reInit afterChange",function(e,r,o,t){var n=(o?o:0)+1;jQuery(this).find(".team_counter span.counter_inner").html('<span class="emphasis">'+n+'</span><span class="hash"></span><span class="slide_count">'+r.slideCount+"</span>")}),s.slick({slide:".single_main_slide",slidesToShow:1,slidesToScroll:1,asNavFor:".slider_thumbs_wrapper",fade:!0,arrows:!1}),jQuery(".single_thumb").mouseenter(function(){jQuery(this).find(".thumb_overlay").fadeIn(200)}),jQuery(".single_thumb").mouseleave(function(){jQuery(this).find(".thumb_overlay").fadeOut(200)}),jQuery(".team_back").mouseenter(function(){jQuery(this).find(".arrow_reg").fadeOut(200),jQuery(this).find(".arrow_hov").fadeIn(200)}),jQuery(".team_back").mouseleave(function(){jQuery(this).find(".arrow_reg").fadeIn(200),jQuery(this).find(".arrow_hov").fadeOut(200)}),jQuery(".team_next").mouseenter(function(){jQuery(this).find(".arrow_reg_next").fadeOut(200),jQuery(this).find(".arrow_hov_next").fadeIn(200)}),jQuery(".team_next").mouseleave(function(){jQuery(this).find(".arrow_reg_next").fadeIn(200),jQuery(this).find(".arrow_hov_next").fadeOut(200)}),e(),jQuery(".single_case_mobile").click(function(){jQuery(this).find(".hover_case").fadeIn()}),jQuery(".cases_grid_mobile .hover_case").click(function(){jQuery(this).fadeOut()}),jQuery(".mobile_menu").click(function(){jQuery("nav.desktop").toggleClass("slidein"),jQuery(".mobile_bars").toggleClass("open")}),r(),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})});var u=new Waypoint({element:document.getElementById("free_consultation"),handler:function(e){jQuery("span.get_started_orangeline").addClass("fadein")}}),_=new Waypoint({element:document.getElementById("footer_wave_trigger"),handler:function(e){jQuery(".wavy_footer").addClass("fadein")}});jQuery("a.case_button").first().addClass("active"),jQuery("a.case_button").click(function(){jQuery(this).addClass("active"),jQuery("a.case_button").not(this).removeClass("active")}),e();var l=["internal_header_img1.jpg","internal_header_img2.jpg","internal_header_img3.jpg","internal_header_img4.jpg","internal_header_img5.jpg","internal_header_img6.jpg","internal_header_img7.jpg"],c=l[Math.floor(Math.random()*l.length)],d="http://anapol.com/wp-content/themes/anapolweiss/images/banners/",m=d+c;jQuery(".inner_banner_wrapper").css("background-image","url("+m+")")});