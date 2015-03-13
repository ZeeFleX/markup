/* kardapolov@gmail.com */

$(document).ready(function(){
	var grid = $('.schedule-container .grid'); //Контейнер с расписанием
	var pressed = false; //Флаг, выделяется ли область
	var changePressed = false; //Флаг, редактируется ли область
	var currentChange; //Переменная. В какую сторону редактируется область
	var time; //Универсальная переменная
	var marker; //Переменная с контейнером, над которым работаем (выделяемая область, редактируемая область)
	var timeArray = []; //Массив времени из двух элементов: начало периода, конец периода
	var tmpArr = []; //Временный массив для промежуотчных рассчётов
	var reservedHoursArray = []; //Массив забронированных часов
	var eventNames = { //Типы и перевод событий
		'private' : 'Личная консультация',
		'skype' : 'Skype-консультация'
	};
	//Если есть расписание, то спрашиваем евенты на эту дату, ждем JSON, строим зарезервированные области
	if($(grid).length){
		var date = '19-02-2015'; //Дата для примера
		$.ajax({	//AJAX-запрос на события определенной даты
			url: 'server_side/get_schedule.php',
			type: 'POST',
			dataType: 'JSON',
			data: {
				date: date
			},
			success: function(data){
				$.each(data, function(typeKey,typeValue){	//Перебор типов событий
					$.each(typeValue, function(timeKey, timeValues){	//Перебор элементов каждого типа
						$(grid).prepend('<div class="reserved-marker ' + typeKey + '" id="' + typeKey + '-' + timeKey + '"><div class="slider-top slider"></div><div class="slider-bottom slider"></div><p class="title">' + eventNames[typeKey] + '</p></div>');	//Формаирование областей
						var reservedMarker = $(grid).find('div#' + typeKey + '-' + timeKey);	//Переменная с областью для этого прохода
						timeArray = timesToRows(timeValues);	//Конвертация времени с исходных данных в номера строк
						placeSelector(reservedMarker, timeArray);	//Размещение теущего селектора
						reservedHoursArray.push(timeArray[0], timeArray[1]);	//Добавление текущего селектора в зарезервированные часы
					});
				});
			}
		});
	}
	//Выделение существующих евентов
	$(grid).on('mousedown', function(e){	//При нажатии мыши на сетке
		if(!$(e.target).closest('.reserved-marker').length){	//Если элемент не относится к зарезервированной области
			$(grid).find('.reserved-marker.selected').removeClass('selected');	//Снимаем выделение со всех областей
		}else{	//Если элемент ОТНОСИТСЯ к зарезервированной области
			$(e.target).closest('.reserved-marker')	
				.addClass('selected')
				.siblings('.reserved-marker').removeClass('selected');	//Выделяем элемент, с остальных снимаем выделение
			$(grid).find('.marker').css('display', 'none');	//Селектор выделения скрываем
		}
	});
	//Растягивание евента вниз
	$(grid).on('mousedown', '.slider', function(e){	//По клику на тягучки евента
		if($(this).hasClass('slider-top')){	//Если тягучка верхняя
		 	currentChange = 'top';	//Переменная в статус top
		}else if($(this).hasClass('slider-bottom')){	//Если тягучка нижняя
		 	currentChange = 'bottom';	//Переменная в статус bottom
		}
		marker = $(this).closest('.reserved-marker');	//Переменная с текущей областью
		changePressed = true;	//Переменная со статусом редактирования
		timeArray = getEventRows(marker, grid);	//Массив времени для текущей области
		tmpArr = timeArray;	//Временный массив для сдвига
		tmpArr[1]--;	//Сдвигаем последнее значение на 1
		reservedHoursArray = _.difference(reservedHoursArray, tmpArr); //Удаляем из зарезервированных часов текущую область, чтобы была возможность редактировать область
	});
	//Выделение ячеек
	$(grid).on('mousedown', '.row, .marker', function(e){	//При клике по строке или по маркеру выделения
		marker = $(grid).find('.marker')	//Переменная с маркером
		pressed = true;	//Флаг, что началось выделение области
		timeArray = [];	//Обнуляем массив
		time = Math.floor((e.pageY - $(grid).offset().top) / 16);	//Считаем колонку исходя из позиции мыши при нажатии (стартовая)
		timeArray[0] = (time);	//Заносим в массив начало выделения
		if(isReserved(timeArray,reservedHoursArray)) {	//Проверяем не попадает ли в зарезервированную область
			pressed = false;	//Если попадает, то снимаем флаг нового выделения
		}else{	
			placeSelector(marker, timeArray);	//Если не попадает, то устанавливаем селектор нового выделения в позицию с начальным временем
		}
	});
	$(grid).on('mousemove', function(e){	//При движени мыши по сетке
		if(pressed || changePressed){	//Если есть флаги нового выделения или изменения
			if(changePressed){	//Если флаг изменения
				if(currentChange == 'bottom' || pressed){	//Если изменение вниз
					timeArray[1] = Math.floor((e.pageY - $(grid).offset().top) / 16);	//Меняем конечное значение области
				}else if(currentChange == 'top'){	//Если изменение вверх
					timeArray[0] = Math.floor((e.pageY - $(grid).offset().top) / 16);	//Меняем начальное значение области
				}
			} 
			if(pressed){	//Если флаг нового выделения
				timeArray[1] = Math.floor((e.pageY - $(grid).offset().top) / 16);	//Меняем конечное значение области выделения
			}
			if(!isReserved(timeArray,reservedHoursArray)){	//Если рассчитанный выше массив времени не пересекается с резервным временем
				placeSelector(marker, timeArray);	//Устанавливаем селектор в это положение
			}
		}
	});
	$(grid).on('mouseup', function(){	//При отпускании мыши
		if(changePressed){	//Если был флаг редактирования области
			timeArray = getEventRows(marker, grid);	//Получаем массив начальной и конечной строк этой области
			timeArray[1]--;	//Последнюю строку режем на единицу
			reservedHoursArray = _.union(timeArray, reservedHoursArray);	//Добавляем в зарезервированный массив строки отредактированной области
		}
		pressed = false;	//Флаг нового выделения снимаем
		changePressed = false;	//Флаг редактирования области снимаем
		$('input#begin-time').val(rowToTime(_.min(timeArray)));	//Пишем начальный период области в нужное поле
		$('input#end-time').val(rowToTime(_.max(timeArray) + 1));	//Пишем конечный период области в нужное поле
		loadTimePickers();	//Подгружаем ползунки для выбора времени
	});
	$('body').on('mouseup', function(){	//При отпускании мыши на любой области
		pressed = false;	//Снимаем флаг нового выделения
		changePressed = false;	//Снимаем флаг редактирования области
	});
});

//Функция получения строк у события (зарезервированного маркера)
var getEventRows = function(marker, grid){
	var timeArray = []; //объявляем локальный массив времени
	timeArray[0] = Math.floor(($(marker).offset().top - $(grid).offset().top) / 16) + 1;	//Считаем время начала от позиции области
	timeArray[1] = Math.floor(($(marker).offset().top - $(grid).offset().top + $(marker).outerHeight()) / 16);	//Считаем время окончания от позиции области
	return timeArray
}
//Функция проверки пересечения массива текущего времени и массива зарезервированного времени
var isReserved = function(timeArray, reservedHoursArray){
	return _.intersection(_.range(_.min(timeArray) - 1,_.max(timeArray) + 2), reservedHoursArray).length
}
//Функция размещения области по переданному селектору и временному массиву (в строках)
var placeSelector = function(selector, timeArray){
	if(timeArray.length){	//Если массив времени нормальный
		$(selector).css({	//пишем CSS для области
			top: _.min(timeArray) * 16 - 1 + 'px',
			height: (_.max(timeArray) - _.min(timeArray) + 1) * 16 + 1 + 'px',
			display: 'block'
		});
	}
}
//Функция конвертации строк в соответствующее время (1 строка в 1 время)
var rowToTime = function(row){
	var hour = Math.floor(row / 2);	//Считаем час от номера строки
	var minute = (row / 2) % 1 * 60;	//Считаем минуты от номера строки
	if(hour.toString().length == 1) hour = '0' + hour; //Если час единичной цифрой, то дописываем 0
	if(hour == 24) hour = '00';	//Если час 24, то час 00
	if(minute.toString().length == 1) minute = '0' + minute;	//Если минуты единичной цифрой, то дописываем 0
	return hour + ':' + minute	//Возвращаем строку времени
}
//Функция конвартации начального и конечного времени в начальную и конечно строку сетки
var timesToRows = function(times){
	var rows = [];	//Локальный массив строк
	$.each(times, function(key, time){	//Приходит 2 времени - начало и конец, считаем для каждого
		var hour = parseInt(time.split('-')[0]);	//Считаем час
		var minute = parseInt(time.split('-')[1]);	//Считаем минуты
		var row = (hour + (minute / 60)) * 2;	//Считаем строку для этого времени
		rows.push(row);	//Пушим строку в локальный массив
	});
	rows[1]--;	//Строку окончания декрементируем
	return rows
}