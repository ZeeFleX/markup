$(document).ready(function(){
    //Загрузка городов при выборе страны
    // $.ajax({
    //     type: 'POST',
    //     url: 'server_side/load_cities.php',
    //     data: {
    //         country_id: $('#select-country').val()
    //     },
    //     success: function(data){
    //         loadCitiesCallback($.parseJSON(data));
    //     }
    // }); 
    
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

function buildSelectList(begin, end, cl, name){
    var html = '';
    html += '<select class="' + cl + '" name="' + name + '">';
    for(i = begin; i <= end; i++){
        html += '<option value="' + i + '">' + i + '</option>';
    }
    html += '</select>';
    return html;
}

function generateUniqueId(){
    return Math.floor(Math.random() * 1000000);
}