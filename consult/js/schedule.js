$(document).ready(function(){
	var grid = $('.schedule-container .grid');
	var pressed = false;
	var time;
	var marker = $(grid).find('.marker');
	var timeArray = [];
	var reservedHoursArray = [];
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
						$(grid).prepend('<div class="reserved-marker ' + typeKey + '" id="' + typeKey + '-' + timeKey + '"></div>');
						var reservedMarker = $(grid).find('div#' + typeKey + '-' + timeKey);
						$.each(timeValues, function(key, time){
							if(key){
								timeArray[key] = timeToRow(time) - 1;
							}else{
								timeArray[key] = timeToRow(time);
							}
							reservedHoursArray.push(timeToRow(time));
						});
						placeSelector(reservedMarker, timeArray);
					});
				});
			}
		});
	}
	//Выделение ячеек
	$(grid).on('mousedown', '.row, .marker', function(e){
		pressed = true;
		timeArray = [];
		time = Math.floor((e.pageY - $(grid).offset().top) / 16);
		timeArray[0] = (time);
		console.log(_.indexOf(reservedHoursArray, timeArray[1]));
		if(_.indexOf(reservedHoursArray, timeArray[1]) !== -1) {
			pressed = false;
		}
		placeSelector(marker, timeArray);
	});
	$(grid).on('mousemove', function(e){
		if(pressed){
			time = Math.floor((e.pageY - $(grid).offset().top) / 16);
			timeArray[1] = time;
			if(_.indexOf(reservedHoursArray, timeArray[1]) !== -1) {
				pressed = false;
			}
			placeSelector(marker, timeArray);
		}
	});
	$(grid).on('mouseup', function(){
		pressed = false;
		$('input#begin-time').val(rowToTime(_.min(timeArray)));
		$('input#end-time').val(rowToTime(_.max(timeArray) + 1));
		loadTimePickers();
	});
	$('body').on('mouseup', function(){
		pressed = false;
	});
});


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

var timeToRow = function(time){
	var hour = parseInt(time.split('-')[0]);
	var minute = parseInt(time.split('-')[1]);
	var row = (hour + (minute / 60)) * 2;
	return row
}