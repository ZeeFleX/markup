(function(){
	$(document).ready(function(){
		
	});
	$(window).load(function(){
		$.each($('.v-center'), function(key, element){
			vCenter(element);
		});
	});

	$(window).resize(function(){
		$.each($('.v-center'), function(key, element){
			vCenter(element);
		});
	});
}());

var vCenter = function(element){
	var $element = $(element);
	$element.css({
		top: $element.parent('*').outerHeight() / 2 + 'px',
		marginTop: $element.outerHeight() / 2 * -1 + 'px',
		display: 'block'
	});
}