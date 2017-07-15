jQuery(document).ready(function($) {
  $('.phoinikas--home-banner .swiper-container').swiper({
  	effect: 'fade',
  	autoplay: 3000,
  	parallax: true,
  	speed: 800,
  	fade: {
			crossFade: true
		}
  })

  $('.phoinikas--home-foodmenu-slider .swiper-container').swiper({
  	slidesPerView: 3,
  	nextButton: '.phoinikas--home-foodmenu-slider .swiper-button-next',
    prevButton: '.phoinikas--home-foodmenu-slider .swiper-button-prev',
    breakpoints: {
    	// when window width is <= 767px
	    767: {
	      slidesPerView: 2
	    },
    	// when window width is <= 479px
	    479: {
	      slidesPerView: 1
	    },
	  }
  })

});
