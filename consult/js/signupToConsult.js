(function(){
	$(document).ready(function(){
		if($('.window.sign-up-consultation').length){
			$('.window.sign-up-consultation').on('click', '.fa-close, a#cancel', function(e){
				e.preventDefault();
				$(this).closest('.window').fadeOut(300);
			});
			function setHandler(cursorPosition){
				if(cursorPosition >= $bar.offset().left && cursorPosition <= $bar.offset().left + $bar.outerWidth()){
					$handler.css({
						left: cursorPosition - $bar.offset().left + 'px'
					});
				}
			}
			function setLongTime(){
				var barWidth = $bar.outerWidth();
				var handlerRelativePosition = $handler.offset().left - $bar.offset().left + 10;
				var $labels = $timeSlider.find('.label');
				var handlerRelativePositionPercent = handlerRelativePosition / barWidth;
				if(handlerRelativePositionPercent <= 0.18){
					longtime = 1;
				}else if(handlerRelativePositionPercent > 0.18 && handlerRelativePositionPercent <= 0.50){
					longtime = 2;
				}else if(handlerRelativePositionPercent > 0.50 && handlerRelativePositionPercent <= 0.82){
					longtime = 3;
				}else if(handlerRelativePositionPercent >= 0.82){
					longtime = 4;
				}
				$labels.eq(longtime - 1)
					.addClass('selected')
					.siblings().removeClass('selected');
			}
			function placeSelector(rowArray){
				var beginRow = _.min(rowArray);
				var endRow = _.max(rowArray) + 1;
				if(!_.intersection(rowArray, reservedHoursArray).length) {
					if(endRow > $rows.length) {
						endRow = $rows.length;
						beginRow = endRow - longTime;
					}else if(beginRow < 0){
						beginRow = 0;
						endRow = beginRow + longTime;
					}
					$selector.css({
						top: beginRow * $row.outerHeight() + 'px',
						height: (endRow - beginRow) * $row.outerHeight() + 'px'
					});
				}
				$selector
					.attr('data-begin', beginRow)
					.attr('data-end', endRow);
				$form.find('input[name="begin"]').val(rowToTime(beginRow));
				$form.find('input[name="end"]').val(rowToTime(endRow));
			}

			function searchRange(longTime){
				
				var arr = [];
				var begin;
				for(var i = 0; i <= 48; i++){
					var rangeArray = [];
					if(parseInt($selector.attr('data-begin'))){
						begin = parseInt($selector.attr('data-begin'));
						//begin = i;
					}else{
						begin = i;
					}
					if(longTime - (begin + longtime) > 0){
						rangeArray = _.range(begin,begin+longTime);
					} else{
						rangeArray = [begin, begin + longTime];
					}
					rangeArray[1]--;
					//console.log(reservedHoursArray);
					if(!_.intersection(rangeArray, reservedHoursArray).length) {
						// arr.push(i);
						// arr.push(i+longTime);
						return rangeArray;
					}
				}
				
				
				//console.log(longTime);
			}
			function getWorkTime(date){
				$.ajax({
					url: 'server_side/get_worktime.php',
					dataType: 'JSON',
					type: 'POST',
					data: {
						date: date
					},
					success:function(data){
						worktimeArray = data;
						$rows
							.removeClass('unwork')
							.removeClass('reserved');
						$.each(worktimeArray, function(key, row){
							if(row.length){
								if(_.indexOf(row, 'unwork') != -1 || _.indexOf(row, type) == -1 || !row.length) $rows.eq(key).addClass('unwork');
							}
						});
						reservedHoursArray = [];
						$.each($rows, function(key, row){
							var $row = $(row);
							if($row.hasClass('unwork') || $row.hasClass('reserved')) reservedHoursArray.push(parseInt($row.attr('data-time')));
						});
						var matchedRange = searchRange(longtime);
						placeSelector(matchedRange);
					}
				});
			}
			function getEvents(date){
				$.ajax({
					url: 'server_side/get_schedule.php',
					dataType: 'JSON',
					type: 'POST',
					data: {
						date: date
					},
					success:function(data){
						events = data;
						$.each(events, function(key, evnt){
							var range = _.range(timesToRows(evnt.time)[0], timesToRows(evnt.time)[1]);
							console.log(range);
							$.each(range, function(key, val){
								$grid.find('.row[data-time="' + val + '"]').addClass('reserved');
							});
						});
						reservedHoursArray = [];
						$.each($rows, function(key, row){
							var $row = $(row);
							if($row.hasClass('unwork') || $row.hasClass('reserved')) reservedHoursArray.push(parseInt($row.attr('data-time')));
						});
						var matchedRange = searchRange(longtime);
						placeSelector(matchedRange);
					}
				});
			}
			$('select[name="method"]').on('change', function(){
				type = $(this).val();
				console.log(type);
				$selector.attr('data-begin', '');
				$rows
					.removeClass('unwork')
					.removeClass('reserved');
				$.each(worktimeArray, function(key, row){
					if(row.length){
						if(_.indexOf(row, 'unwork') != -1 || _.indexOf(row, type) == -1 || !row.length) $rows.eq(key).addClass('unwork');
					}
				});
				$.each(events, function(key, evnt){
					var range = _.range(timesToRows(evnt.time)[0], timesToRows(evnt.time)[1]);
					console.log(range);
					$.each(range, function(key, val){
						$grid.find('.row[data-time="' + val + '"]').addClass('reserved');
					});
				});
				reservedHoursArray = [];

				$.each($rows, function(key, row){
					var $row = $(row);
					if($row.hasClass('unwork') || $row.hasClass('reserved')) reservedHoursArray.push(parseInt($row.attr('data-time')));
				});
				//console.log(reservedHoursArray);
				var matchedRange = searchRange(longtime);
				placeSelector(matchedRange);
			});
			var $form = $('form#signup-to-consult');
			var $timeSlider = $('.time-slider');
			var $bar = $timeSlider.find('.bar');
			var $handler = $bar.find('.handler');
			var $grid = $('.time-container .grid');
			var $selector = $grid.find('.selector');
			var $rows = $grid.find('.row');
			var $row = $rows.first();
			var dragFlag = false;
			var cursorOffset;
			var startCursorPosition, endCursorPosition, currentCursorPosition;
			var startHandlerPosition, endHandlerPosition, currentHandlerPosition;
			var longtime = 1;
			var reservedHoursArray = [];
			var rowHeight = $row.outerHeight();
			var $calendar = $('.calendar');
			var type = $('select[name="method"]').val();
			var worktimeArray = [];
			var events = [];

			$calendar.on('click', 'a.item', function(e){
				e.preventDefault();
				$(this)
					.addClass('selected')
					.siblings('a.item').removeClass('selected');
				$form.find('input[name="date"]').val($(this).attr('data-date'));
				getWorkTime($(this).attr('data-date'));
				getEvents($(this).attr('data-date'));
			});
			getWorkTime($calendar.find('a.today').attr('data-date'));
			getEvents($calendar.find('a.today').attr('data-date'));
			setLongTime();
			$form.find('input[name="date"]').val($calendar.find('a.today').attr('data-date'));
			$.each($rows, function(key, row){
				var $row = $(row);
				if($row.hasClass('unwork') || $row.hasClass('reserved')) reservedHoursArray.push(parseInt($row.attr('data-time')));
			});
			//placeSelector([28,31]);

			$handler.on('mousedown', function(e){
				startCursorPosition = e.pageX;
				startHandlerPosition = $handler.offset().left + 10 - $timeSlider.offset().left;
				dragFlag = true;
			});
			$timeSlider.on('mousemove', function(e){
				if(dragFlag){
					setHandler(e.pageX);
					setLongTime();
					var matchedRange = searchRange(longtime);
					placeSelector(matchedRange);
				}
			});
			$('body').on('mouseup', function(e){
				if(dragFlag){
					switch(longtime){
						case 1:
							endHandlerPosition = 0;
						break;
						case 2:
							endHandlerPosition = 100;
						break;
						case 3:
							endHandlerPosition = 190;
						break;
						case 4:
							endHandlerPosition = 290;
						break;
					}
					$handler.animate({
						left: endHandlerPosition + 'px'
					}, 100);
					$selector
						.attr('data-begin', ($selector.offset().top - $grid.offset().top) / rowHeight)
						.attr('data-end', ($selector.offset().top - $grid.offset().top) / rowHeight + longtime);
					$form.find('input[name="begin"]').val(rowToTime(parseInt($selector.attr('data-begin'))));
					$form.find('input[name="end"]').val(rowToTime(parseInt($selector.attr('data-end'))));
				}
				dragFlag = false;
				//placeSelector([0,15]);
			});
			$selector.on('mousedown', function(e){
				dragFlag = true;
				startCursorPosition = e.pageY;
			});
			$grid.on('mousemove', function(e){
				if(dragFlag){
					currentCursorPosition = e.pageY;
					var timeArray = [];
					if(currentCursorPosition - startCursorPosition >= rowHeight){
						startCursorPosition = currentCursorPosition;
						timeArray = [parseInt($selector.attr('data-begin')) + 1, parseInt($selector.attr('data-end'))];
						console.log(_.intersection(timeArray, reservedHoursArray));
						placeSelector(timeArray);
					}else if(currentCursorPosition - startCursorPosition <= rowHeight * (-1)){
						startCursorPosition = currentCursorPosition;
						timeArray = [parseInt($selector.attr('data-begin')) - 1, parseInt($selector.attr('data-end')) - 2];
						placeSelector(timeArray);
					}
					
				}
			});
		}
	});
})();