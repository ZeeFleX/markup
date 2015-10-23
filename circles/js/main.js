$(document).ready(function(){
	//Аккордеон
	var $tabs = $('.accordeon_tab');
	var $menu = $('.fixed-menu-container');
	$.each($tabs, function(key, tab){
		var $tab = $(tab);
		var $handler = $tab.find('.head-accord');
		$handler.on('click', function(){
			$tab
				.toggleClass('active')
				.siblings('.accordeon_tab').removeClass('active');
			$.scrollTo($tab);
			var $menuItems = $menu.find('li');
			$menuItems.eq($tab.index('.accordeon_tab') + 1)
				.addClass('active')
				.siblings('li').removeClass('active');
		});
	});
	//Меню
	$menu.find('li').click(function(e){
		e.preventDefault();
		$(this)
			.addClass('active')
			.siblings('li').removeClass('active');
		var scrollTarget = $(this).attr('data-target');
		$($(this).attr('data-open'))
			.addClass('active')
			.siblings('.accordeon_tab').removeClass('active');
		$.scrollTo(scrollTarget, 0);
	});
	//Стрелки
	$('a.scroll-to.head').on('click', function(e){
		e.preventDefault();
		$.scrollTo('.two', 1000);
	});
	$('a.scroll-to.blck2').on('click', function(e){
		e.preventDefault();
		$.scrollTo('.block3', 1000);
	});
});

			