jQuery(document).ready(function(){function e(){jQuery(window).width()>730&&(jQuery(".single_case").mouseenter(function(){jQuery(this).find(".hover_case").fadeIn()}),jQuery(".single_case").mouseleave(function(){jQuery(this).find(".hover_case").fadeOut()}))}jQuery(".play_button").mouseenter(function(){jQuery("img.play_reg").fadeOut(200),jQuery("img.play_hover").fadeIn(200)}),jQuery(".play_button").mouseleave(function(){jQuery("img.play_reg").fadeIn(200),jQuery("img.play_hover").fadeOut(200)}),jQuery(".inner_stats").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,dots:!1}),jQuery(".blog_inner_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,dots:!1,nextArrow:".spacer.next"}),jQuery(".slider_thumbs_wrapper").slick({slidesToShow:4,slidesToScroll:1,arrows:!0,prevArrow:".team_back",nextArrow:".team_next",focusOnSelect:!0,asNavFor:".slide_main_inner"}),jQuery(".slide_main_inner").slick({slidesToShow:1,slidesToScroll:1,asNavFor:".slider_thumbs_wrapper",fade:!0,arrows:!1}),jQuery(".single_thumb").mouseenter(function(){jQuery(this).find(".thumb_overlay").fadeIn(200)}),jQuery(".single_thumb").mouseleave(function(){jQuery(this).find(".thumb_overlay").fadeOut(200)}),jQuery(".blog_posts_wrapper").mouseenter(function(){jQuery(".spacer.next").addClass("slideright")}),jQuery(".blog_posts_wrapper").mouseleave(function(){jQuery(".spacer.next").removeClass("slideright")}),e()});