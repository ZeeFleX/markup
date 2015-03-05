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
    //Загрузка фотографии
    $("#new-photo-upload").click(function() {
        $("input#uploader").trigger('click');
    });
    $("input#uploader").on('change', function(){
        $('#uploader-form').submit(); 
    });
    $('#uploader-form #remove-photo').click(function(){
        $('form input[name="avatar"]').val('');
        $('#uploader-form .photo-container img').attr('src', 'images/interface/image-placeholder.png');
    });
    $('#crop-image-container')
        .dialog({ width: 'auto', autoOpen: false, modal: true , beforeClose: function(event, ui){
            console.log(event);
            if(event.which){
                $('#uploader-form input[name="action"]').val('get_preview');
                $('#crop-image-placeholder').html('');
            }
        }
    });
    $('a#crop-image-button').on('click', function(e){
        e.preventDefault();
        $('#uploader-form').submit();
        $('#crop-image-container').dialog('close');
    });
    
    $('#uploader-form').ajaxForm({
        dataType: 'json',
        beforeSend: function() {
            
        },
        uploadProgress: function(event, position, total, percentComplete) {

        },
        success: function(data) {
            if($('input[name="action"]').val() == 'get_preview'){
                var jcrop_api;
                $('#crop-image-placeholder')
                    .append('<img src="' + data.thumb + '" />')
                    .find('img').Jcrop({
                        onSelect: writeCoords,
                        setSelect: [0,0,400,400]
                    }, function(){
                    jcrop_api = this;
                });
                $('#crop-image-container').dialog('open');
            } else if($('input[name="action"]').val() == 'cropping'){
                $('#uploader-form .photo-container img').attr('src', data.cropped_image);
                $('input[name="action"]').val('get_preview');
                $('form input[name="avatar"]').val(data.cropped_image);
                $('#crop-image-placeholder').html('');
            }
        },
        complete: function(data) {
            
        }
    });
});

function writeCoords(c)
{
    $('#x1').val(c.x);
    $('#y1').val(c.y);
    $('#x2').val(c.x2);
    $('#y2').val(c.y2);
    $('#w').val(c.w);
    $('#h').val(c.h);
    $('input[name="action"]').val('cropping');
    $('input[name="file"]').val('');
};

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