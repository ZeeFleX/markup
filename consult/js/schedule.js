$(document).ready(function(){
	var grid = $('.schedule-container .grid');
	var pressed = false;
	var changePressed = false;
	var time;
	var marker;
	var timeArray = [];
	var tmpArr = [];
	var reservedHoursArray = [];
	var eventNames = {
		'private' : 'Личная консультация',
		'skype' : 'Skype-консультация'
	};
	//Если есть расписание, то спрашиваем евенты на эту дату, ждем JSON, строим зарезервированные области
	if($(grid).length){
		var date = '19-02-2015';
		$.ajax({
			url: 'server_side/get_schedule.php',
			type: 'POST',
			dataType: 'JSON',
			data: {
				date: date
			},
			success: function(data){
				$.each(data, function(typeKey,typeValue){
					$.each(typeValue, function(timeKey, timeValues){
						$(grid).prepend('<div class="reserved-marker ' + typeKey + '" id="' + typeKey + '-' + timeKey + '"><div class="slider-top"></div><div class="slider-bottom"></div><p class="title">' + eventNames[typeKey] + '</p></div>');
						var reservedMarker = $(grid).find('div#' + typeKey + '-' + timeKey);
						timeArray = timesToRows(timeValues);
						placeSelector(reservedMarker, timeArray);
						// timeArray[0]--;
						// timeArray[1]++;
						reservedHoursArray.push(timeArray[0], timeArray[1]);
						console.log(reservedHoursArray);
					});
				});
			}
		});
	}
	//Выделение существующих евентов
	$(grid).on('mousedown', function(e){
		if(!$(e.target).closest('.reserved-marker').length){
			$(grid).find('.reserved-marker.selected').removeClass('selected');
		}else{
			$(e.target).closest('.reserved-marker')
				.addClass('selected')
				.siblings('.reserved-marker').removeClass('selected');
			$(grid).find('.marker').css('display', 'none');
		}
	});
	//Растягивание евента вниз
	$(grid).on('mousedown', '.slider-bottom', function(){
		marker = $(this).closest('.reserved-marker');
		changePressed = true;
		timeArray = getEventRows(marker, grid);
		tmpArr = timeArray;
		tmpArr[1]--;
		reservedHoursArray = _.difference(reservedHoursArray, tmpArr);
		console.log(reservedHoursArray);
		time = Math.floor((e.pageY - $(grid).offset().top) / 16);
		timeArray[0] = (time);
	});
	//Выделение ячеек
	$(grid).on('mousedown', '.row, .marker', function(e){
		marker = $(grid).find('.marker')
		pressed = true;
		timeArray = [];
		time = Math.floor((e.pageY - $(grid).offset().top) / 16);
		timeArray[0] = (time);
		if(isReserved(timeArray,reservedHoursArray)) {
			pressed = false;
		}else{
			placeSelector(marker, timeArray);
		}
	});
	$(grid).on('mousemove', function(e){
		if(pressed){
			timeArray[1] = time;
			if(!isReserved(timeArray,reservedHoursArray)){
				time = Math.floor((e.pageY - $(grid).offset().top) / 16);
				placeSelector(marker, timeArray);
			}else{
				if(timeArray[1] > timeArray[0]){
					timeArray[1]--;
				}else{
					timeArray[1]++;
				}
				pressed = false;
			}
		}
		
		if(changePressed){
			if(!isReserved(timeArray,reservedHoursArray)){
				placeSelector(marker, timeArray);
				timeArray[1] = Math.floor((e.pageY - $(grid).offset().top) / 16);
			}
		} 
	});
	$(grid).on('mouseup', function(){
		if(changePressed){
			timeArray = getEventRows(marker, grid);
			timeArray[1]--;
			reservedHoursArray = _.union(timeArray, reservedHoursArray);
			console.log(reservedHoursArray);
		}
		pressed = false;
		changePressed = false;
		$('input#begin-time').val(rowToTime(_.min(timeArray)));
		$('input#end-time').val(rowToTime(_.max(timeArray) + 1));
		loadTimePickers();
	});
	$('body').on('mouseup', function(){
		pressed = false;
		changePressed = false;
	});
});

var getEventRows = function(marker, grid){
	var timeArray = [];
	timeArray[0] = Math.floor(($(marker).offset().top - $(grid).offset().top) / 16) + 1;
	timeArray[1] = Math.floor(($(marker).offset().top - $(grid).offset().top + $(marker).outerHeight()) / 16);
	return timeArray
}

var isReserved = function(timeArray, reservedHoursArray){
	return _.intersection(_.range(_.min(timeArray) - 1,_.max(timeArray) + 2), reservedHoursArray).length
}

var placeSelector = function(selector, timeArray){
	if(timeArray.length){
		$(selector).css({
			top: _.min(timeArray) * 16 - 1 + 'px',
			height: (_.max(timeArray) - _.min(timeArray) + 1) * 16 + 1 + 'px',
			display: 'block'
		});
	}
}

var rowToTime = function(row){
	var hour = Math.floor(row / 2);
	var minute = (row / 2) % 1 * 60;
	if(hour.toString().length == 1) hour = '0' + hour;
	if(hour == 24) hour = '00';
	if(minute.toString().length == 1) minute = '0' + minute;
	return hour + ':' + minute
}

var timesToRows = function(times){
	var rows = [];
	$.each(times, function(key, time){
		var hour = parseInt(time.split('-')[0]);
		var minute = parseInt(time.split('-')[1]);
		var row = (hour + (minute / 60)) * 2;
		rows.push(row);
	});
	rows[1]--;
	return rows
}