//by Kardapolov Ilya (kardapolov@gmail.com). Required underscore.js and jQuery libraries
(function(){
	$(document).ready(function(){
		var $grids = $('.articles-flow');
		$.each($grids, function(key, grid){
			var $grid = $(grid);
			var $articles = $grid.find('.article').detach();
			for(var i = 0; i < 4; i++){
				$grid.append('<div class="column" id="col' + i + '"></div>');
			}
			var $columns = $grid.find('.column');
			$columns.css({
				float: 'left',
				width: '23%',
				marginRight: '2.66%'
			});
			$columns.last().css('marginRight', 0);
			$articles.css({
				width: '100%',
				marginRight: 0,
				float: 'none'
			});
			$.each($articles, function(key, article){
				var $article = $(article);
				var columnHeightArray = [];
				$.each($columns, function(key, column){
					columnHeightArray.push($(column).outerHeight());
				});
				var nextColumnIndex = _.indexOf(columnHeightArray, _.min(columnHeightArray));
				$columns.eq(nextColumnIndex).append($article);
				console.log(columnHeightArray);
			});
		});
	});
})();