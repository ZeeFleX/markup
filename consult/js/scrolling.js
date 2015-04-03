/*by Kardapolov Ilya*/
(function(){
	$(document).ready(function(){
		scrolling(60);
	});
	var scrolling = function(speed){
		var containers = $('.scrolltarget');
		$.each(containers, function(key, container){
			$(this).css({
				overflow: 'hidden',
				position: 'relative'
			});
			var targetElements = $(container).children('*');
			if(!$(container).hasClass('wrapped')){
				$(targetElements).wrapAll("<div class='scroll-wrapper' style='position:relative; top:0; padding-top:1px; padding-bottom:1px'></div>");
			}
			$(container).addClass('wrapped');
			var scrollBlock = $(container).find('.scroll-wrapper');
			
			if(!$(container).hasClass('mouseover')){
				var eventTarget = $(document);
			} else{
				var eventTarget = $(container);
			}
			var wrapper = $(container).find('.scroll-wrapper');
			var relativeHeight = wrapper.outerHeight() / $(container).outerHeight();
			if($(container).hasClass('scrollbar')){
				if(relativeHeight >= 1){
					wrapper.css({
						boxSizing: 'border-box',
						paddingRight: '10px'
					});
					$(wrapper).after('<div class="scrollbar" style="position: absolute; border-radius: 6px; display:none; width:6px; height:100%; right: 0; top: 0; background: none"></div>');
				
					var scrollbar = $(wrapper).siblings('.scrollbar');
					var scrollbarHeight = scrollbar.outerHeight();
					var scrollbarHandlerPosition = 0;
					var scrollbarHandlerHeight = scrollbarHeight / relativeHeight;
					$(wrapper).siblings('.scrollbar').html('<div class="scrollbar-handler" style="width:100%; border-radius: 6px; position:relative; top:0; background:rgba(0, 0, 0, 0.2);;; height:' + scrollbarHandlerHeight + 'px"></div>');
					var scrollbarHandler = scrollbar.find('.scrollbar-handler')

					$(wrapper).hover(function(){
						$(this).siblings('.scrollbar').stop().fadeIn(200);
					}, function(){
						$(this).siblings('.scrollbar').stop().fadeOut(200);
					});
					eventTarget.off('mousewheel');
					$(eventTarget).mousewheel(function(e){
						e.preventDefault();
						moveWrapper(container, scrollBlock, scrollbar, scrollbarHandler, scrollbarHandlerPosition, speed, e);
					});
				}
			}else{
				eventTarget.off('mousewheel');
				eventTarget.mousewheel(function(e){
					moveWrapper(container, scrollBlock, scrollbar, scrollbarHandler, scrollbarHandlerPosition, speed, e);
				});
			}
			
			var moveWrapper = function(container, scrollBlock, scrollbar, scrollbarHandler, scrollbarHandlerPosition, speed, e){
				var scrollBlockPosition = parseInt(scrollBlock.css('top'));
				switch(e.deltaY){
					case -1:
						if(scrollBlockPosition * (-1) < scrollBlock.outerHeight() - $(container).outerHeight() - speed){
							scrollBlock.css('top', scrollBlockPosition - speed);
						}else{
							scrollBlock.css('top', (scrollBlock.outerHeight() - $(container).outerHeight()) * (-1));
						}
					break;
					case 1:
						if(scrollBlockPosition <  0 - speed){
							scrollBlock.css('top', scrollBlockPosition + speed);
						}else{
							scrollBlock.css('top', 0);
						}
					break;
				}
				if($(container).hasClass('scrollbar')){
					var relativeWrapperPosition = $(scrollBlock).position().top * (-1) / ($(scrollBlock).outerHeight() - $(container).outerHeight());
					$(scrollbarHandler).stop().animate({
						'top': ($(scrollbar).outerHeight() - scrollbarHandler.outerHeight()) * relativeWrapperPosition + 'px'
					}, 200);
				}
			}
		});
	}
})();