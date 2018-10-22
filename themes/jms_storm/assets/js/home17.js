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
    if($(".product-carousel-col5").length) {		
		var productCarouselcol5 = $(".product-carousel-col5");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarouselcol5.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p5_itemsDesktop
				},
				991:{
					items:p5_itemsDesktopSmall
				},
				768:{
					items:p5_itemsTablet
				},
				481:{
					items:p5_itemsMobile
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
			nav: p5_nav,
			dots: p5_pag,
			loop: true,
			autoplay: p5_auto_play_carousel,
			slideSpeed: 800,
		});
	}

	if($(".blog-carousel").length) {
		var blogCarousel = $(".blog-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		blogCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:blog_itemsDesktop
				},
				991:{
					items:blog_itemsDesktopSmall
				},
				768:{
					items:blog_itemsTablet
				},
				481:{
					items:blog_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin:30,
				nav: p_nav_blog,
		        dots: p_pag_blog,
				autoplay:auto_play_blog,
				loop: true,
				slideSpeed: 800,	
		});
	}

	if($(".brand-carousel").length) {
		var brandCarousel = $(".brand-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		brandCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:brand_itemsDesktop
				},
				991:{
					items:brand_itemsDesktopSmall
				},
				768:{
					items:brand_itemsTablet
				},
				481:{
					items:brand_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin:0,
				nav: p_nav_brand,
		        dots: p_pag_brand,
				autoplay:auto_play_brand,
				loop: true,
				slideSpeed: 800,	
		});
	}

    if($(".product-carousel").length) {		
		var productCarousel = $(".product-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		productCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:p_itemsDesktop
				},
				991:{
					items:p_itemsDesktopSmall
				},
				768:{
					items:p_itemsTablet
				},
				481:{
					items:p_itemsMobile
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
			nav: p_nav,
			dots: p_pag,
			loop: true,
			autoplay: auto_play_carousel,
			slideSpeed: 800,
		});
	}

	if($(".categories-carousel2").length) {
		var cateCarousel = $(".categories-carousel2");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		cateCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cs_itemsDesktop
					},
				991:{
					items:cs_itemsDesktopSmall
				},
				768:{
					items:cs_itemsTablet
				},
				481:{
					items:2
				},
				0: {
					items:1
				}

			},
			rtl: rtl,
			margin: 30,
			nav: cs_nav,
			dots: cs_pag,
			autoplay: cs_auto_play_carousel,
			slideSpeed: 200,
			loop: true
		});
	}

	if($(".categorytab-carousel").length) {
		var categorytabCarousel = $(".categorytab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		categorytabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:cattab_itemsDesktop
				},
				991:{
					items:cattab_itemsDesktopSmall
				},
				768:{
					items:cattab_itemsTablet
				},
				481:{
					items:cattab_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 0,
			    nav: cattab_nav,
		        dots: cattab_pag,
				autoplay: cattab_auto_play_carousel,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}
	
	if($(".producttab-carousel").length) {
		var producttabCarousel = $(".producttab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		producttabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:tab_itemsDesktop
				},
				991:{
					items:tab_itemsDesktopSmall
				},
				768:{
					items:tab_itemsTablet
				},
				481:{
					items:tab_itemsMobile
				},
				361:{
					items:1
				},
				0: {
					items:1
				}
			},
			rtl: rtl,
				margin: 0,
			    nav: p_nav_tab,
		        dots: p_pag_tab,
				autoplay: auto_play_tab,
				loop:true,
			    navigationText: ["", ""],
			    slideSpeed: 200
		});
	}

	if($(".hotdeal-carousel").length) {		
		var hotdealCarousel = $(".hotdeal-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		hotdealCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:h_itemsDesktop
				},
				991:{
					items:h_itemsDesktopSmall
				},
				768:{
					items:h_itemsTablet
				},
				481:{
					items:h_itemsMobile
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
			nav: h_nav,
			dots: h_pag,
			loop:true,
			autoplay: h_auto_play_carousel,
			slideSpeed: 800,
		});
	}

	if($(".instagram-carousel").length) {
		var instagramCarousel = $(".instagram-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		instagramCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:5
					},
				991:{
					items:4
				},
				768:{
					items:3
				},
				481:{
					items:2
					},
				0: {
					items:2
				}
			},
			rtl: rtl,
			margin: 0,
			nav: false,
			dots: false,
			autoplay: true,
			slideSpeed: 200,
			loop: true
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
});


jQuery(document).ready(function($) {
	$(".product_tab .product-miniature").hover(function(){
	    $(".product_tab").css("z-index", "3");
		}, function(){
        $(".product_tab").css("z-index", "1");
	});
	$(".product_carousel .product-miniature").hover(function(){
	    $(".product_carousel").css("z-index", "3");
		}, function(){
        $(".product_carousel").css("z-index", "1");
	});
	$(".new_arrivals .product-miniature").hover(function(){
	    $(".new_arrivals").css("z-index", "4");
		}, function(){
        $(".new_arrivals").css("z-index", "2");
	});
	$(".onsale .product-miniature").hover(function(){
	    $(".onsale").css("z-index", "5");
		}, function(){
        $(".onsale").css("z-index", "3");
	});
	$(".most_view .product-miniature").hover(function(){
	    $(".most_view").css("z-index", "3");
		}, function(){
        $(".most_view").css("z-index", "1");
	});
});
