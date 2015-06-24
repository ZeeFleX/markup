(function(){
	$(document).ready(function(){
		$buttons = $('.scroll-to');
		$buttons.on('click', function(e){
			e.preventDefault();
			$.scrollTo($(this).attr('data-target'), 1000);
		});
	});
})()