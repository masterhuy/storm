$(window).load(function(){
	if($('.slider').length > 0)
	$('.slider').fractionSlider({	
		'slideTransition' : jmsslider_trans,
		'slideEndAnimation' : jmsslider_end_animate,
		'transitionIn' : jmsslider_trans_in,
		'transitionOut' : jmsslider_trans_out,
		'fullWidth' : jmsslider_full_width,
		'delay' : jmsslider_delay,
		'timeout' : jmsslider_duration,
		'speedIn' : jmsslider_speed_in,
		'speedOut' : jmsslider_speed_out,
		'easeIn' : jmsslider_ease_in,
		'easeOut' : jmsslider_ease_out,
		'controls' : jmsslider_navigation,
		'pager' : jmsslider_pagination,
		'autoChange' : jmsslider_autoplay,
		'pauseOnHover' : jmsslider_pausehover,
		'backgroundAnimation' : jmsslider_bg_animate,
		'backgroundEase' : jmsslider_bg_ease,
		'responsive' : jmsslider_responsive,
		'dimensions' : jmsslider_dimensions,
		'fullscreen' : true
	});
});
jQuery(function ($) {
    "use strict";
    if($(".product-carousel_12_1").length) {		
		var productCarousel_12_1 = $(".product-carousel_12_1");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel_12_1.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p_12_1_itemsDesktop
				},
				991:{
					items:p_12_1_itemsDesktopSmall
				},
				768:{
					items:p_12_1_itemsTablet
				},
				481:{
					items:p_12_1_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin: 0,
			nav: p_12_1_nav,
			dots: p_12_1_pag,
			autoplay: p_12_1_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".testimonial-carousel").length) {
		var testimonialCarousel = $(".testimonial-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		testimonialCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:testi_itemsDesktop
				},
				991:{
					items:testi_itemsDesktopSmall
				},
				768:{
					items:testi_itemsTablet
				},
				481:{
					items:testi_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin:0,
				nav: p_nav_testi,
		        dots: p_pag_testi,
				autoplay:auto_play_testi,
				slideSpeed: 800,
				loop: true
		});
	}		

	if($(".product-carousel2").length) {		
		var productCarousel2 = $(".product-carousel2");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel2.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p2_itemsDesktop
				},
				991:{
					items:p2_itemsDesktopSmall
				},
				768:{
					items:p2_itemsTablet
				},
				481:{
					items:p2_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:30,
			nav: p2_nav,
			dots: p2_pag,
			autoplay: p2_auto_play_carousel,
			loop: true,
			slideSpeed: 800,
		});
	}

	if($(".flashsales-carousel").length) {		
		var flashsalesCarousel = $(".flashsales-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		flashsalesCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:2
				},
				991:{
					items:2
				},
				768:{
					items:1
				},
				481:{
					items:1
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:0,
			nav: true,
			dots: false,
			autoplay: false,
			loop: true,
			slideSpeed: 800,
		});
	}
});


jQuery(document).ready(function($) {
	$(".best_seller .product-miniature").hover(function(){
	    $(".best_seller").css("z-index", "3");
		}, function(){
        $(".best_seller").css("z-index", "1");
	});
});