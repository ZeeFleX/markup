$(document).ready(function(){
    //Подгрузка отзывов
    $('#load-more-reviews').on('click', function(e){
        e.preventDefault();
        var lastReview = $(this).siblings('.review').last();
        var offset = $(this).siblings('.review').length;
        var html = loadReviews(offset, function(data){
            $(lastReview).after(data);
            $('.review.hidden').slideDown(300);
        });
    });
    
    //Загрузка городов при выборе страны
    $.ajax({
        type: 'POST',
        url: 'server_side/load_cities.php',
        data: {
            country_id: $('#select-country').val()
        },
        success: function(data){
            loadCitiesCallback($.parseJSON(data));
        }
    }); 
    
    $('#select-country').change(function(){
		$.ajax({
			type: 'POST',
			url: 'server_side/load_cities.php',
			data: {
				country_id: $(this).val()
			},
			success: function(data){
                loadCitiesCallback($.parseJSON(data));
			}
		});
	});
});

function loadCitiesCallback(cities){
    console.log(cities);
    $('select.select2-ajax').html('');
    $.each(cities, function(key,city){
        $('select.select2-ajax').append('<option value="' + city.id + '">' + city.text + '</option>');
    })
    
    $('.select2-ajax').select2({
        placeholder: "Выберите город",
        minimumInputLength: 1,
        data: cities
    });
}