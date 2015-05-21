(function(){
	$(document).ready(function(){
		readMoreProfile();
		readMoreReview();
		consultsToColumns();
	});
	var consultsToColumns = function(){
		var $container = $('.page-user-consults > .wrapper > .consults');
		var $columns = [];
		var $consults = $container.find('.consult').detach();
		for(var i = 0; i <= 1; i++){
			$columns.push($('<div class="column"></div>').appendTo($container));
		}
		$.each($consults, function(key, consult){
			var $consult = $(consult);
			$consult.appendTo($columns[key % 2]);
		});
		$consults.find('a#read-more').on('click', function(e){
			e.preventDefault();
			$(this).siblings('.question-container').append($(this).siblings('.question-container').find('.question').last().clone());
		});
	}

	var readMoreProfile = function(){
		var $readMoreProfile = $('.profile a.readmore');
		$readMoreProfile.on('click', function(e){
			e.preventDefault();
			var $container = $(this).siblings('.introtext-container');
			if($(this).hasClass('opened')){
				$(this)
					.removeClass('opened')
					.html('подробнее');
				$container.removeClass('opened');
			}else{
				$(this)
					.addClass('opened')
					.html('свернуть');
				$container.addClass('opened');
			}
		});
	}

	var readMoreReview = function(){
		$('.reviews').on('click', '.review a.readmore', function(e){
			e.preventDefault();
			var $container = $(this).closest('.review').find('.content-container');
			if($(this).hasClass('opened')){
				$(this)
					.removeClass('opened')
					.html('читать весь отзыв');
				$container.removeClass('opened');
			}else{
				$(this)
					.addClass('opened')
					.html('свернуть');
				$container.addClass('opened');
			}
			//$(this).closest('.review').find('p.content').html('Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что укрепление и развитие структуры в значительной степени обуславливает создание модели развития. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки существенных финансовых и административных условий.');
		});
	}
})();