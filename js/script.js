/*global jQuery, document,window*/
$(function() {
    
   "use strict";
    
    $('document').ready(function () {
        /* ===== PRELOADER  ===== */
        $("#loader-overlay").delay(500).fadeOut();
        $(".loader").delay(1000).fadeOut("slow");
    });
    
    
    var nav_offset_top = $('.header_area').height()+50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
    
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.clients-csrousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        autoplayTimeout:1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
    
    /* ~~~ Testimonial Slider 2 ~~~ */
	$('.doctors-csrousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        touchDrag:true,
        lazyLoad:true,
        autoplay:true,
        autoplayTimeout:2500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });
    
    
    // Tabs
    (function ($) {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        $('.tab ul.tabs li a').on('click', function (g) {
            var tab = $(this).closest('.tab'), 
            index = $(this).closest('li').index();
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
            g.preventDefault();
        });
    })(jQuery);
 
    $('.header_area .main_menu .navbar .nav .nav-item .nav-link').click(function () {
        $('.navbar-collapse').removeClass('show');
    });
    
});