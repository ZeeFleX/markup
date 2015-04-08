(function(){
	$(document).ready(function(){
		var $clock = $('.clock');
		$clock.css({
			position: 'relative',
			boxShadow: '0 0 2px #666',
			overflow: 'hidden',
			border: 'solid 2px #eeeeee',
			width: '90px',
			borderRadius: '6px'
		});
		var $hourSection = $('<div class="hours"></div>').appendTo($clock);
		var $minuteSection = $('<div class="minutes"></div>').appendTo($clock);
		$hourSection.css({
			height: '36px',
			width: '50%',
			backgroundColor: '#0f445f',
			boxSizing: 'border-box',
			mozBoxSizing: 'border-box',
			float: 'left',
			borderRadius: '5px 0 0 5px',
			borderRight: 'solid 1px #eee',
			color: '#eeeeee',
			lineHeight: '36px',
			textAlign: 'center',
			fontWeight: 'bold',
			fontSize: '25px'
		});
		$minuteSection.css({
			height: '36px',
			width: '50%',
			backgroundColor: '#0f445f',
			boxSizing: 'border-box',
			mozBoxSizing: 'border-box',
			float: 'right',
			borderRadius: '0 5px 5px 0',
			color: '#eeeeee',
			lineHeight: '36px',
			textAlign: 'center',
			fontWeight: 'bold',
			fontSize: '25px'
		});
		var $fader = $('<div class="clock-fader"></div>').appendTo($clock);
		$fader.css({
			position: 'absolute',
			width: '100%',
			height: '50%',
			zIndex: 1,
			backgroundColor: 'rgba(6,44,61,0.4)'
		});
		setupTime($hourSection, $minuteSection);
		setInterval(function(){
			setupTime($hourSection, $minuteSection)
		}, 10000);
	});
	var setupTime = function($hourSection, $minuteSection){
		var date = new Date();
		$hourSection.html(convertTo2Digits(date.getUTCHours() + 3));
		$minuteSection.html(convertTo2Digits(date.getMinutes()));
	}

	var convertTo2Digits = function(digit){
		if(digit.toString().length == 1)  digit = '0' + digit;
		return digit;
	}
})();