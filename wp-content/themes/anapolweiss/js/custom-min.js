jQuery(document).ready(function(){function e(){jQuery(window).width()>730&&(jQuery(".single_case").mouseenter(function(){jQuery(this).find(".hover_case").fadeIn()}),jQuery(".single_case").mouseleave(function(){jQuery(this).find(".hover_case").fadeOut()}))}jQuery(".play_button").mouseenter(function(){jQuery("img.play_reg").fadeOut(200),jQuery("img.play_hover").fadeIn(200)}),jQuery(".play_button").mouseleave(function(){jQuery("img.play_reg").fadeIn(200),jQuery("img.play_hover").fadeOut(200)}),jQuery(".inner_stats").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,dots:!1}),jQuery(".about_slide_inner").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:".about_arrow_left",nextArrow:".about_arrow_right"}),jQuery(".about_arrow_left").mouseenter(function(){jQuery("img.about_arrow_left_img").fadeOut(200),jQuery("img.about_arrow_left_hover").fadeIn(200)}),jQuery(".about_arrow_left").mouseleave(function(){jQuery("img.about_arrow_left_img").fadeIn(200),jQuery("img.about_arrow_left_hover").fadeOut(200)}),jQuery(".about_arrow_right").mouseenter(function(){jQuery("img.about_arrow_right_img").fadeOut(200),jQuery("img.about_arrow_right_hover").fadeIn(200)}),jQuery(".about_arrow_right").mouseleave(function(){jQuery("img.about_arrow_right_img").fadeIn(200),jQuery("img.about_arrow_right_hover").fadeOut(200)}),jQuery(".blog_inner_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:".spacer.next"}),jQuery(".slider_thumbs_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,prevArrow:".team_back",nextArrow:".team_next",focusOnSelect:!0,asNavFor:".slide_main_inner"}),jQuery(".slide_main_inner").slick({slidesToShow:1,slidesToScroll:1,asNavFor:".slider_thumbs_wrapper",fade:!0,arrows:!1}),jQuery(".single_thumb").mouseenter(function(){jQuery(this).find(".thumb_overlay").fadeIn(200)}),jQuery(".single_thumb").mouseleave(function(){jQuery(this).find(".thumb_overlay").fadeOut(200)}),jQuery(".team_back").mouseenter(function(){jQuery(this).find(".arrow_reg").fadeOut(200),jQuery(this).find(".arrow_hov").fadeIn(200)}),jQuery(".team_back").mouseleave(function(){jQuery(this).find(".arrow_reg").fadeIn(200),jQuery(this).find(".arrow_hov").fadeOut(200)}),jQuery(".team_next").mouseenter(function(){jQuery(this).find(".arrow_reg_next").fadeOut(200),jQuery(this).find(".arrow_hov_next").fadeIn(200)}),jQuery(".team_next").mouseleave(function(){jQuery(this).find(".arrow_reg_next").fadeIn(200),jQuery(this).find(".arrow_hov_next").fadeOut(200)}),jQuery(".blog_posts_wrapper").mouseenter(function(){jQuery(".spacer.next").addClass("slideright")}),jQuery(".blog_posts_wrapper").mouseleave(function(){jQuery(".spacer.next").removeClass("slideright")}),e()});