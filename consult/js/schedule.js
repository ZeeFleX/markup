/* kardapolov@gmail.com */
(function(){
	var pressed = false; //Флаг, выделяется ли область
	var changePressed = false; //Флаг, редактируется ли область
	var currentChange; //Переменная. В какую сторону редактируется область
	var time; //Универсальная переменная
	var marker; //Переменная с контейнером, над которым работаем (выделяемая область, редактируемая область)
	var timeArray = []; //Массив времени из двух элементов: начало периода, конец периода
	var tmpArr = []; //Временный массив для промежуотчных рассчётов
	var reservedHoursArray = []; //Массив забронированных часов
	var cursorPosition;
	var eventNames = { //Типы и перевод событий
		'private' : 'Личная консультация',
		'skype' : 'Skype-консультация'
	};
	var events = {}
	$(document).ready(function(){
		var grid = $('.schedule-container .grid'); //Контейнер с расписанием
		var taskList = $('.today-events .events');
		//Вызов календаря
		$('.day-choose a#select-date').on('click', function(e){
			e.preventDefault();
			$('.calendars').fadeIn(300);
		});
		$('.calendars').on('click', '.close', function(){
			$(this).closest('.calendars').fadeOut(300);
		});
		//Если есть расписание, то спрашиваем евенты на эту дату, ждем JSON, строим зарезервированные области
		if($(grid).length){
			var date = '19-02-2015'; //Дата для примера
			$.ajax({	//AJAX-запрос на события определенной даты
				url: 'server_side/get_schedule.php',
				type: 'POST',
				dataType: 'JSON',
				data: {
					action: 'getSchedule',
					date: date
				},
				success: function(data){
					//console.log(data);
					events = data;
					buildTaskList(events, taskList);
					$.each(events, function(key,evnt){	//Перебор типов событий
						//Добавление события на сетку
						$(grid).prepend('<div class="reserved-marker ' + evnt.method + '" data-id="' + evnt.id + '"><div class="slider-top slider"></div><div class="slider-bottom slider"></div><p class="title">' + evnt.title + '</p></div>');	//Формаирование областей
						var reservedMarker = $(grid).find('div[data-id="' + evnt.id + '"]');	//Переменная с областью для этого прохода
						timeArray = timesToRows(evnt.time);	//Конвертация времени с исходных данных в номера строк
						placeSelector(reservedMarker, timeArray);	//Размещение теущего селектора
						reservedHoursArray = _.union(_.range(timeArray[0], timeArray[1]), reservedHoursArray);	//Добавление текущего селектора в зарезервированные часы
						//Добавление события в столбец справа
					});
				}
			});
		}

		//Выделяем события в правом столбце
		$(taskList).on('click', '.event', function(e){
			e.preventDefault();
			if($(e.target).closest('.removeEvent').length){
				var evnt = $(this).closest('.event');
				timeArray = removeEvent(evnt, reservedHoursArray);
				reservedHoursArray = _.difference(reservedHoursArray, _.range(_.min(timeArray), _.max(timeArray)));
			}else{
				var id = $(this).attr('data-id');
				$(this)
					.addClass('active')
					.siblings('.event').removeClass('active');
				marker = $(grid).find('.reserved-marker[data-id="' + id + '"]');
				$(grid).find('.marker').css('display', 'none');
				$(marker)
					.addClass('selected')
					.siblings('.reserved-marker').removeClass('selected');
			}
					
		});
		//Выделение существующих евентов
		$(grid).on('mousedown', function(e){	//При нажатии мыши на сетке
			if(!$(e.target).closest('.reserved-marker').length){	//Если элемент не относится к зарезервированной области
				$(grid).find('.reserved-marker.selected').removeClass('selected');	//Снимаем выделение со всех областей
				$(taskList).find('.event.active').removeClass('active');
			}else{	//Если элемент ОТНОСИТСЯ к зарезервированной области
				marker = $(e.target).closest('.reserved-marker');
				var id = $(marker).attr('data-id');
				var task = $(taskList).find('.event[data-id="' + id + '"]');
				$(marker)
					.addClass('selected')
					.siblings('.reserved-marker').removeClass('selected');	//Выделяем элемент, с остальных снимаем выделение
				$(task)
					.addClass('active')
					.siblings('.event').removeClass('active');	//Выделяем элемент, с остальных снимаем выделение
				$(grid).find('.marker').css('display', 'none');	//Селектор выделения скрываем
				if($(e.target).hasClass('title') || $(e.target).hasClass('reserved-marker')){
					changePressed = true;
					currentChange = 'drag';
					marker = $(e.target).closest('.reserved-marker');
					cursorPosition = Math.floor((e.pageY - $(grid).offset().top) / 16) + 1;
				}
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
			tmpArr = _.range(timeArray[0], timeArray[1]);	//Временный массив для сдвига
			reservedHoursArray = _.difference(reservedHoursArray, tmpArr); //Удаляем из зарезервированных часов текущую область, чтобы была возможность редактировать область
		});
		//Выделение ячеек
		$(grid).on('mousedown', '.row, .marker', function(e){	//При клике по строке или по маркеру выделения
			marker = $(grid).find('.marker')	//Переменная с маркером
			pressed = true;	//Флаг, что началось выделение области
			timeArray = [];	//Обнуляем массив
			time = Math.floor((e.pageY - $(grid).offset().top) / 16) + 1;	//Считаем колонку исходя из позиции мыши при нажатии (стартовая)
			timeArray[0] = (time);	//Заносим в массив начало выделения
			
			//console.log(timeArray);
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
						timeArray[1] = Math.floor((e.pageY - $(grid).offset().top) / 16) + 2;	//Меняем конечное значение области
					}else if(currentChange == 'top'){	//Если изменение вверх
						timeArray[0] = Math.floor((e.pageY - $(grid).offset().top) / 16) + 1;	//Меняем начальное значение области
					}else if(currentChange == 'drag'){
						timeArray = getEventRows(marker, grid);
						tmpArr = _.range(timeArray[0], timeArray[1]);	//Временный массив для сдвига
						reservedHoursArray = _.difference(reservedHoursArray, tmpArr); //Удаляем из зарезервированных часов текущую область, чтобы была возможность редактировать область
						var currentCursorPosition = Math.floor((e.pageY - $(grid).offset().top) / 16) + 1;
						timeArray[0] = timeArray[0] + (currentCursorPosition - cursorPosition);
						timeArray[1] = timeArray[1] + (currentCursorPosition - cursorPosition);
						if(!isReserved(timeArray,reservedHoursArray)){
							cursorPosition = currentCursorPosition;
						}
						if(timeArray[1] > 49) timeArray[1] = 49;
						if(timeArray[0] <= 1) timeArray[0] = 1;
					}
				}
				if(pressed){	//Если флаг нового выделения
					timeArray[1] = Math.floor((e.pageY - $(grid).offset().top) / 16) + 2;	//Меняем конечное значение области выделения
				}
				if(!isReserved(timeArray,reservedHoursArray)){	//Если рассчитанный выше массив времени не пересекается с резервным временем
					placeSelector(marker, timeArray);	//Устанавливаем селектор в это положение
				}
			}
		});
		$(grid).on('mouseup', function(){	//При отпускании мыши
			if(changePressed){	//Если был флаг редактирования области
				timeArray = getEventRows(marker, grid);	//Получаем массив начальной и конечной строк этой области
				//timeArray[1]--;	//Последнюю строку режем на единицу
				reservedHoursArray = _.union(_.range(timeArray[0], timeArray[1]), reservedHoursArray);	//Добавляем в зарезервированный массив строки отредактированной области
				ajaxUpdateEventTime(marker, timeArray);
				var tasks = $(taskList).find('.event');
				tasks = _.sortBy(tasks, function(num){
					return parseInt($(num).attr('data-begin'))
				});
				$.each(tasks, function(key, task){
					console.log($(task).attr('data-begin'));
				});
				$(taskList).prepend(tasks);
				changePressed = false;	//Флаг редактирования области снимаем
			}
			pressed = false;	//Флаг нового выделения снимаем
			$('input#begin-time').val(rowToTime(_.min(timeArray) - 1));	//Пишем начальный период области в нужное поле
			$('input#end-time').val(rowToTime(_.max(timeArray) - 1));	//Пишем конечный период области в нужное поле
			loadTimePickers();	//Подгружаем ползунки для выбора времени
		});
		$('body').on('mouseup', function(){	//При отпускании мыши на любой области
			pressed = false;	//Снимаем флаг нового выделения
			changePressed = false;	//Снимаем флаг редактирования области
		});
	});
	//Функция перестройки списка задач
	var buildTaskList = function(events, taskList){
		$(taskList).find('.event').remove();
		events = _.sortBy(events, function(x){
			return timesToRows(x.time)[0] * -1
		});
		$.each(events, function(key, evnt){
			timeArray = timesToRows(evnt.time);
			$(taskList).prepend('<div class="event ' + evnt.method + '" data-id="' + evnt.id + '" data-begin="' + timesToRows(evnt.time)[0] + '"><div class="border"></div><h5 class="title">' + evnt.title + '</h5><p class="time">Время: <span class="value">' + rowToTime(timeArray[0] - 1) + ' - ' + rowToTime(timeArray[1] - 1) + '</span></p><p class="method">Способ: <span class="value">' + eventNames[evnt.method] + '</span></p><p class="participiant">Участник: <a href="' + evnt.participiantProfile + '" class="value">' +evnt.participiant + '</a></p><a class="fa fa-close removeEvent" href="" title="Удалить событие"></a></div>');
		});
	}

	//Функция удаления события
	var removeEvent = function(evnt, reservedHoursArray){
		var id = $(evnt).attr('data-id');
		var grid = $('.schedule-container .grid');
		var marker = $(grid).find('.reserved-marker[data-id="' + id + '"]');
		var timeArray = getEventRows(marker, grid);
		//Скрываем с виду и удаляем блоки
		$(evnt).slideUp(300, function(){
			$(this).remove();
		});
		$(marker).fadeOut(300, function(){
			$(this).remove();
		});
		ajaxRemoveEvent(id);
		//Возвращаем массив строк удалённого события
		return timeArray;
	}

	//Функция получения строк у события (зарезервированного маркера)
	var getEventRows = function(marker, grid){
		var timeArray = []; //объявляем локальный массив времени
		timeArray[0] = Math.floor(($(marker).offset().top - $(grid).offset().top) / 16 + 1) + 1;	//Считаем время начала от позиции области
		timeArray[1] = Math.floor(($(marker).offset().top - $(grid).offset().top + $(marker).outerHeight()) / 16) + 1;	//Считаем время окончания от позиции области
		//console.log(timeArray);
		return timeArray
	}
	//Функция проверки пересечения массива текущего времени и массива зарезервированного времени
	var isReserved = function(timeArray, reservedHoursArray){
		return _.intersection(_.range(_.min(timeArray) - 1,_.max(timeArray) + 1), reservedHoursArray).length
	}
	//Функция размещения области по переданному селектору и временному массиву (в строках)
	var placeSelector = function(selector, timeArray){
		if(timeArray.length){	//Если массив времени нормальный
			$(selector).css({	//пишем CSS для области
				top: (_.min(timeArray) - 1) * 16 - 1 + 'px',
				height: (_.max(timeArray) - _.min(timeArray)) * 16 + 1 + 'px',
				display: 'block'
			});
		}
		if($(selector).hasClass('reserved-marker')) setEventTime($(selector).attr('data-id'), timeArray);
	}

	var disableSelfReserve = function(timeArray, reservedHoursArray){
		
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
			var row = (hour + (minute / 60)) * 2 + 1;	//Считаем строку для этого времени
			rows.push(row);	//Пушим строку в локальный массив

		});
		//rows[1]--;	//Строку окончания декрементируем
		//console.log(rows);
		return rows
	}

	//Установка времени для события справа
	var setEventTime = function(eventId, timeArray){
		var taskList = $('.today-events .events');
		var evnt = $(taskList).find('.event[data-id="' + eventId + '"]');
		$(evnt).find('p.time span.value').html(rowToTime(_.min(timeArray) - 1) + ' - ' + rowToTime(_.max(timeArray) - 1));
		$(evnt).attr('data-begin', _.min(timeArray) - 1);
	}

	//Отправка данных на сервер о изменении времени события
	var ajaxUpdateEventTime = function(marker, timeArray){
		var id = $(marker).attr('data-id');
		var evnt = {};
		evnt.id = id;
		evnt.time = [];
		evnt.time.push(rowToTime(_.min(timeArray) - 1));
		evnt.time.push(rowToTime(_.max(timeArray) - 1));
		$.ajax({	//AJAX-запрос на события определенной даты
			url: 'server_side/events.php',
			type: 'POST',
			data: {
				action: 'updateEventTime',
				evnt: evnt
			},
			success: function(data){
				//колбек о записи события в БД
				console.log(data);
			}
		});
	}

	var ajaxRemoveEvent = function(eventId){
		var evnt = {};
		evnt.id = eventId;
		$.ajax({	//AJAX-запрос на события определенной даты
			url: 'server_side/events.php',
			type: 'POST',
			data: {
				action: 'removeEvent',
				evnt: evnt
			},
			success: function(data){
				//колбек о записи события в БД
				console.log(data);
			}
		});
	}
})();
