$(document).ready(function(){
	introSliderInit();
	reviewsSliderInit();
});

reviewsSliderInit = function(){
	var $slider = $('.y-review-slider'),
		$contentContainer = $slider.find('.y-reviews-text'),
		$arrows = $slider.find('.y-arrow'),
		$wrapper = $slider.find('.y-photos-wrapper'),
		$photos = $wrapper.find('.y-photo-radius'),
		$texts = $contentContainer.find('.y-review'),
		photoWidth = $photos.first().outerWidth() + parseInt($photos.first().css('marginLeft')) + parseInt($photos.first().css('marginRight')),
		currentIndex = 2;
		
	$texts.eq(currentIndex).addClass('active');
	slideTo(currentIndex);

	$photos.on('click', function(){
		currentIndex = $(this).index();
		slideTo(currentIndex);
	});

	$arrows.on('click', function(){
		if($(this).hasClass('left')){
			currentIndex--;
		}else if($(this).hasClass('right')){
			currentIndex++;
		}
		if(currentIndex < 0) currentIndex = 0;
		if(currentIndex > $photos.length - 1)  currentIndex = $photos.length - 1;
		slideTo(currentIndex);
	});

	function setActive(index){
		$photos.eq(index)
			.addClass('active')
			.siblings()
				.removeClass('active').removeClass('half-active');
		$photos.eq(index - 1).addClass('half-active');
		$photos.eq(index + 1).addClass('half-active');
	}

	function slideTo(index){
		setActive(index);
		$contentContainer.find('.y-review.active')
			.removeClass('active')
			.fadeOut(250, function(){
				$texts.eq(index)
					.addClass('active')
					.fadeIn(250);
			});
		$wrapper.stop().animate({
			left: photoWidth * (index - 2) * -1 + 'px'
		},500);
	}
}

introSliderInit = function(){
	var $slider = $('.y-intro-slider'),
		$imgs = $slider.find('img').detach();
		
	sliderWidth = $slider.outerWidth();

	$slider
		.append('<div class="y-controls">')
		.append('<div class="y-nav">')
		.append('<div class="y-container">');

	$slider
		.find('.y-controls').append('<div class="y-arrow left"></div><div class="y-arrow right"></div>').end()
		.find('.y-nav').append('<div class="y-wrapper"><div class="y-circles"></div></div>');
	
	var $container = $slider.find('.y-container'),
		$slidesWrapper = $('<div class="y-wrapper">').appendTo($container),
		$arrows = $slider.find('.y-arrow'),
		$navCirclesContainer = $slider.find('.y-circles'),
		slidesCount = $imgs.length,		
		currentIndex = 0;

	$slidesWrapper.css('width', sliderWidth * slidesCount + 'px');

	$.each($imgs, function(key, img){
		$img = $(img);
		$slidesWrapper
		 	.append('<div class="y-slide" style="background: url(' + $img.attr('src') + '); width:' + sliderWidth + 'px"></div>');
		$navCirclesContainer
			.append('<div class="y-circle"></div>').end()
			.find('.y-circle').first().addClass('active');

		$img.remove();
	});

	var $circles = $slider.find('.y-circle');
	
	$arrows.on('click', function(){
		if($(this).hasClass('right')){
			currentIndex++;
		}else if($(this).hasClass('left')){
			currentIndex--;
		}
		if(currentIndex > slidesCount - 1) currentIndex = 0;
		if(currentIndex < 0) currentIndex = slidesCount - 1;
		slide(currentIndex);
	});

	$circles.on('click', function(){
		currentIndex = $(this).index('.y-circle');
		slide(currentIndex);
	});

	function slide(nextIndex){
		$circles.eq(nextIndex)
			.addClass('active')
			.siblings('div').removeClass('active');
		$slidesWrapper.stop().animate({
		 	left: sliderWidth * currentIndex * -1 + 'px'
		}, 500);
		console.log(nextIndex);
	}
}