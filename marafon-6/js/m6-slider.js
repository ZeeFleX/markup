$(document).ready(function(){
	var $slider = $('.m6-slider'); //Переменная со слайдером
	var $wrapper = $slider.find('.m6-images-wrapper'); //Переменная с длинным контейнером изображеним, который будем двигать
	var slidesCount = $wrapper.find('img').length; //Общее количество слайдов
	var slideWidth = $slider.outerWidth();	//Фактическая ширина слайда
	var currentIndex = 0;//Начальный индекс слайда  - 0
	var $handlerContainer = $('.m6-nav .m6-handler-container'); //Контейнер для ползунка
	var $handler = $('.m6-nav .m6-handler');	//Сам ползунок
	var handlerWidth = $handlerContainer.outerWidth() / slidesCount;	//Считаем ширирну ползунка исходя из размера контейнера и количества слайдов
	var $currentSlideText = $slider.find('.m6-currentslide');	//Контейнер с номером текущего слайда
	$handler.css('width', handlerWidth); //Устанавливаем расчитанную ширину для ползунка

	$wrapper.find('img').css('width', slideWidth + 'px'); //Устанавливаем ширину изображений = ширине слайдера
	$wrapper.css('width', slideWidth * slidesCount + 'px');	//Устанавливаем ширрину длинного контейнера исходя из ширины слайда и их количества

	$currentSlideText.html((currentIndex+ 1) + ' из ' + slidesCount);	//при загрузке страницы пишем текст 1 из 3
	
	// var timer = setInterval(function(){
	// 	changeSlide(currentIndex + 1);
	// }, 3000);

	$handlerContainer.on('click', function(e){ //Обработчик клика на контейнера ползунка
		var cursorPosition = e.pageX - $handlerContainer.offset().left;	//Считаем относительную позицию курсора мыши (позиция курсора минус позиция контейнера)
		var nextIndex = Math.floor(cursorPosition / handlerWidth);	//Считаем индекс слайда, основываясь на относительной позиции курсора
		changeSlide(nextIndex);	//Вызываем функцию смены слайда
	});

	function changeSlide(nextIndex){ //Функция смены слайда, принимает номер следующего слайда
		$currentSlideText.html((nextIndex + 1) + ' из ' + slidesCount);	//Устанавливаем текст 2 из 3
		if(nextIndex > slidesCount - 1){	//Проверка на то, что номер слайда не уходит за рамки диапазона (0 - количество слайдов)
			nextIndex = 0;	//Если вышел вправо, то обнуляем индекс
		}else if(nextIndex < 0){	//Если вышел влево, то индекс  = количеству слайдов
			nextIndex = slidesCount - 1;
		}
		$wrapper.stop().animate({ //Анимация wrapper с длительностью 500 мс
			left: slideWidth * nextIndex * (-1) + 'px'	//Координата = ширина слайда * индекс * -1 (двигаем влево)
		}, 500);
		
		$handler.stop().animate({ //Анимация ползунка при смене слайда
			left: handlerWidth * nextIndex + 'px'	//Координата = ширина ползунка * индекс
		}, 500);
	}
});


