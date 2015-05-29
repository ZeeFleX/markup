(function(){
	$(document).ready(function(){
		var $editableBlocks = $('.editable');
		$.each($editableBlocks, function(key, block){
			var $block = $(block);
			$block.css({
				position: 'relative',
				boxSizing: 'border-box',
				mozBoxSizing: 'border-box',
				paddingRight: '20px'
			});
			var params = {};
			var $content = $(block).find('*').detach();
			var $container = $('<div class="editable-block-content-container"></div>').appendTo($block);
			$container.append($content);
			var $handler = $('<i class="fa fa-pencil" style="position:absolute; top:0; right:0px; font-size:1.4rem; cursor:pointer; z-index:1; color:#4ad0c5"></i>').prependTo($block);
			$handler.on('click', function(){
				if(!$block.find('.editable-form').length){
					$handler.css('display', 'none');
					var $form = $('<form class="editable-form" action="' + $block.attr('data-url') + '" style="top:0; left:0; position:absolute; background: #fff; z-index:1; height:' + $block.outerHeight() + 'px; width: ' + ($block.outerWidth() - 20) + 'px;"></form>').prependTo($block).show(300);
					var $input = $('<textarea name="content" style="width:100%; height:100%; font-size:1.4rem; line-height:135%;" class="allow-clear"></textarea>').prependTo($form);
					$input.html($.trim(strip_tags($container.html())));
					var $cancel = $('<i class="fa fa-times" style="position:absolute; top:20px; right:0px; font-size:1.4rem; cursor:pointer; z-index:1; color:#f85649"></i>').prependTo($block);
					var $submit = $('<i class="fa fa-check" style="position:absolute; top:40px; right:0px; font-size:1.4rem; cursor:pointer; z-index:1; color:#0f9b58"></i>').prependTo($block);	

					$input.focus();
					$cancel.on('click', function(){
						$form.remove();
						$input.remove();
						$cancel.remove();
						$submit.remove();
					});
					$submit.on('click', function(){

						var content = $input.val();
						$container.html(content);
						params.id = parseInt($block.attr('data-id'));
						params.url = $block.attr('data-url');
						params.content = content;
						sendData(params);
						$form.remove();
						$input.remove();
						$cancel.remove();
						$submit.remove();
						$handler.css('display', 'block');
					});
				}else{
					$form.show(0);
					$input.show(0);
					$cancel.show(0);
					$submit.show(0);
					$handler.css('display', 'none');
				}
			});
		});
		function strip_tags(str){
		    return str.replace(/<\/?[^>]+>/gi, '');
		}
		function sendData(params){
			console.log(params);
			$.ajax({
				url: params.url,
				type: 'POST',
				data: {
					id: params.id,
					content: params.content
				},
				success: function(data){
					console.log(data);
				}
			});
		}

	});

})();