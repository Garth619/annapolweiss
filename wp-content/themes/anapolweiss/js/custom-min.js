jQuery(document).ready(function(){function e(){jQuery(window).width()>730&&(jQuery(".single_case").mouseenter(function(){jQuery(this).find(".hover_case").fadeIn()}),jQuery(".single_case").mouseleave(function(){jQuery(this).find(".hover_case").fadeOut()}))}jQuery(".play_button").mouseenter(function(){jQuery("img.play_reg").fadeOut(200),jQuery("img.play_hover").fadeIn(200)}),jQuery(".play_button").mouseleave(function(){jQuery("img.play_reg").fadeIn(200),jQuery("img.play_hover").fadeOut(200)}),jQuery(".inner_stats").slick({slidesToShow:4,slidesToScroll:4,arrows:!1,dots:!1}),jQuery(".blog_inner_wrapper").slick({slidesToShow:4,slidesToScroll:3,arrows:!1,dots:!1}),e()});