(function(){
	$(document).ready(function(){
		var $questions = $('body.page-faq .questions-container .question');
		$.each($questions, function(key, question){
			var $question = $(question);
			var $handler = $question.find('.show-answer-arrow');
			$handler.on('click', function(){
				$(this).closest('.question').toggleClass('active');
			});
		});
		$('body.page-faq #attach-file').on('click', function(e){
			e.preventDefault();
			$(this).closest('form.ask').find('input[type="file"]').trigger('click');
		})
	});
	
})();