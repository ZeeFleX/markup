(function(){
	$(document).ready(function(){
		if($('.window.payment').length){
			var $win = $('.window.payment');
			var $calendar = $win.find('.calendar');
			var $dateInput = $win.find('input[name="date"]');
			$win.on('click', 'a.item', function(e){
				e.preventDefault();
				$dateInput.val($(this).attr('data-timestamp'));
				$(this)
					.addClass('selected')
					.siblings('a.item').removeClass('selected');
			});
		}
	});
})();