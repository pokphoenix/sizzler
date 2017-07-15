jQuery(document).ready(function($) {

  $('.phoinikas--media-tvc .swiper-container').swiper({
  	slidesPerView: 3,
    spaceBetween: 16,
  	nextButton: '.phoinikas--media-tvc .swiper-button-next',
    prevButton: '.phoinikas--media-tvc .swiper-button-prev',
    pagination: '.phoinikas--media-tvc .swiper-pagination',
    breakpoints: {
    	// when window width is <= 767px
	    767: {
	      slidesPerView: 1
	    },
    	// when window width is <= 479px
	    399: {
	      slidesPerView: 1
	    },
	  }
  })

  $('.phoinikas--media-press .swiper-container').swiper({
  	slidesPerView: 4,
    spaceBetween: 16,
  	nextButton: '.phoinikas--media-press .swiper-button-next',
    prevButton: '.phoinikas--media-press .swiper-button-prev',
    pagination: '.phoinikas--media-press .swiper-pagination',
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
