$(document).ready(function(){
	introSliderInitiate();
});

introSliderInitiate = function(){
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

	slide = function(nextIndex){
		$circles.eq(nextIndex)
			.addClass('active')
			.siblings('div').removeClass('active');
		$slidesWrapper.stop().animate({
		 	left: sliderWidth * currentIndex * -1 + 'px'
		}, 500);
		console.log(nextIndex);
	}
}