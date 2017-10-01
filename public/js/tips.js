jQuery(document).ready(function($) {

  $('.phoinikas--detail-swiper .swiper-container').swiper({
  	slidesPerView: 4,
    spaceBetween: 16,
  	nextButton: '.phoinikas--detail-swiper .swiper-button-next',
    prevButton: '.phoinikas--detail-swiper .swiper-button-prev',
    breakpoints: {
    	// when window width is <= 767px
	    767: {
	      slidesPerView: 2
	    },
    	// when window width is <= 479px
	    399: {
	      slidesPerView: 1
	    },
	  }
  })
});
