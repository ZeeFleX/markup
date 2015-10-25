$(document).ready(function(){
	console.log($('.y-lifewheel').length);
	if($('.y-lifewheel').length){
		$('.y-lifewheel .y-item').hover(function(){
			$('.y-lifewheel .target-text span').html($(this).data('description'));
		},
		function(){
			$('.y-lifewheel .target-text span').html('');
		});
	}
});