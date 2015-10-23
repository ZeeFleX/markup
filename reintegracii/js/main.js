$(document).ready(function(){
	$('a.header').on('click', function(e){
		e.preventDefault();
		$.scrollTo('.block1', 1000);
	});
		
	var $slider = $('.slider');
	var $controls = $slider.find('.controls');
	var $circlesContainer = $controls.find('.circles');
	var $links = $controls.find('.link');
	var $wrapper = $slider.find('.reviews');
	var $reviews = $wrapper.find('.review');
	var currentIndex = 0; //Индекс текущего слайда
	var reviewsCount = $reviews.length;
	$.each($reviews, function(key, value){
		$circlesContainer.append('<div class="circle"></div>');
	});
	var $circles = $circlesContainer.find('.circle');
	$reviews
		.css('display', 'none')
		.first()
			.addClass('active')
			.css('display', 'block');
	$circles.first().addClass('active');

	$circles.on('click', function(){
		changeSlide($(this).index('.circle'));
	});

	$links.on('click', function(){
		if($(this).hasClass('next')){
			++currentIndex;
		}else if($(this).hasClass('prev')){
			--currentIndex;
		}
		if(currentIndex > reviewsCount - 1){
			currentIndex = 0;
		}else if(currentIndex < 0){
			currentIndex = reviewsCount - 1;
		}
		changeSlide(currentIndex);
	});

	//$wrapper.css('height',  $reviews.first().outerHeight() + 50 + 'px');


	function changeSlide(nextIndex){

		$slider.find('.review.active')
			.fadeOut(200, function(){
				$.scrollTo('.block6', 200);
				var $nextReview = $reviews.eq(nextIndex);
				var targetHeight = $nextReview.outerHeight();
				$wrapper.animate({
					//'height':  targetHeight + 50 + 'px'
				}, 200, function(){
					$nextReview
						.addClass('active')
						.fadeIn(200)
				});
				console.log(targetHeight);
			})
			.removeClass('active');
		$circles.eq(nextIndex)
			.addClass('active')
			.siblings('.circle').removeClass('active');
		currentIndex = nextIndex;
	}
});

			