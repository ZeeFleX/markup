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