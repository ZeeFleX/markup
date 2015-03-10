$(document).ready(function(){
	var grid = $('.schedule-container .grid');
	//Выделение ячеек
	var pressed = false;
	var time;
	var marker = $(grid).find('.marker');
	var timeArray;
	$(grid).on('mousedown', '.row, .marker', function(e){
		pressed = true;
		timeArray = [];
		time = Math.floor((e.pageY - $(grid).offset().top) / 16);
		timeArray[0] = (time);
		placeSelector(marker, timeArray);
	});
	$(grid).on('mousemove', function(e){
		if(pressed){
			time = Math.floor((e.pageY - $(grid).offset().top) / 16);
			timeArray[1] = (time);
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