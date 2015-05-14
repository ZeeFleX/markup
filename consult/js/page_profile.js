$(document).ready(function(){

    //Установка конца рабочего дня не меньшего, чем начало
    if($('.page-profile-settings.worktime').length){
        var $dayContainers = $('.day');
        $.each($dayContainers, function(key, day){
            var $day = $(day);
            var $beginContainer = $day.find('select[name="begin[]"]');
            var $endContainer = $day.find('select[name="end[]"]');
            for(var i = 0; i <= 48; i++){
                $beginContainer.append('<option data-row="' + i + '" value="' + rowToTime(i) + '">' + rowToTime(i) + '</option>');
                $endContainer.append('<option data-row="' + i + '" value="' + rowToTime(i) + '">' + rowToTime(i) + '</option>');
            }
            $beginContainer.select2();
            $endContainer.select2();
            $beginContainer.on('change', function(){
                var row = $(this).find('option:selected').attr('data-row');
                $.each($endContainer.find('option'), function(key, option){
                    if($(option).attr('data-row') < row){
                        $(option).prop('disabled', true);
                    }
                    if($(option).attr('data-row') >= row){
                        $(option).prop('disabled', false);
                    }
                });
                if($endContainer.find('option:selected').attr('data-row') < $beginContainer.find('option:selected').attr('data-row')){
                    $endContainer.val($beginContainer.val());
                }
                $endContainer.select2();
            });
        });
    }
    //Добавление дипломов
    var uploaderEventObject;
    $('#uploader-form-simple').ajaxForm({
        dataType: 'json',
        beforeSend: function() {
            
        },
        uploadProgress: function(event, position, total, percentComplete) {

        },
        success: function(data) {
            $(uploaderEventObject)
                .find('img').attr('src', data.thumb).end()
                .find('input.filename').val(JSON.stringify(data));
        },
        complete: function(data) {
            
        }
    });
    
    $('body').on('click', '.upload-scan', function(e){
        uploaderEventObject = $(this).closest('.field.upload');
        $('#uploader-form-simple input[type="file"]').trigger('click');
    });
    $('#uploader-form-simple input[type="file"]').on('change', function(){
        $(this).closest('form').submit();
        $(this).val('');
    });
    $('body').on('click', '.remove-scan', function(e){
        $(this)
            .closest('.field.upload').find('img').attr('src', 'images/interface/image-placeholder.png').end()
            .closest('.field.upload').find('input.filename').val('');
    });
    
    var eduBlock = $('.about-me .education');
    $(eduBlock).on('click', 'a#remove-university', function(e){
        e.preventDefault();
        $(this).closest('.university').slideUp(200, function(){$(this).remove()});
    });
    $(eduBlock).on('click', 'a.add-document-button', function(e){
        e.preventDefault();
        var id = generateUniqueId();
        var eduItem = '<div class="university hidden"><h5>Название ВУЗа</h5><a href="#" id="remove-university"><i class="fa fa-close"></i></a><input type="text" class="allow-clear" name="univers[' +  id + '][name]" placeholder="Введите название Вашего учебного заведения" /><div class="clr"></div><h5>Специальность</h5><input type="text" class="allow-clear" name="univers[' +  id + '][specialization]" placeholder="Введите специальность" /><h5>Квалификация</h5><input type="text" class="allow-clear" name="univers[' +  id + '][quality]" placeholder="Введите квалификацию" />         <h5>Период обучения</h5>' + buildSelectList(1970, 2015, 'select2 period begin', 'univers[' +  id + '][begin]') + buildSelectList(1970, 2015, 'select2 period end', 'univers[' +  id + '][end]') + '<h5>Диплом</h5><div class="field upload"><input type="hidden" class="filename" name="univers[' +  id + '][file]" /><div class="preview"><img src="images/interface/image-placeholder.png" alt="" /></div><div class="buttons"><input type="button" class="btn ghost upload-scan" id="upload-edu-diplom" value="Загрузить фото диплома" /><br><input type="button" class="btn ghost red remove-scan" id="remove-edu-diplom" value="Удалить" /></div><p>Макс. размер файла 5Mb, (.jpeg, .png)</p><div class="clr"></div></div></div>';
        $(this).before(eduItem);
        loadForms();
        $(eduBlock).find('.university.hidden').slideDown(200);
     });
    //Добавление сертификатов
    var certsBlock = $('.about-me .professional');
    $(certsBlock).on('click', 'a#remove-certificate', function(e){
        e.preventDefault();
        $(this).closest('.certificate').slideUp(200, function(){$(this).remove()});
    });
     $(certsBlock).on('click', 'a.add-document-button', function(e){
        e.preventDefault();
        var id = generateUniqueId();
        var certItem = '<div class="certificate hidden"><h5>Название курса или семинара</h5><a href="#" id="remove-certificate"><i class="fa fa-close"></i></a><input type="text" class="allow-clear" name="certs[' +  id + '][name]" placeholder="Введите название курса или семинара" /><div class="clr"></div><h5>Квалификация</h5><input type="text" class="allow-clear" name="certs[' +  id + '][quality]" placeholder="Введите квалификацию" /><h5>Год получения сертификата</h5>' + buildSelectList(1970, 2015, 'select2', 'certs[' +  id + '][year]') + '<h5>Сертификат</h5><div class="field upload"><input type="hidden" class="filename"  name="certs[' +  id + '][file]" /><div class="preview"><img src="images/interface/image-placeholder.png" alt="" /></div><div class="buttons"><input type="button" class="btn ghost upload-scan" id="upload-prof-cert" value="Загрузить фото сертификата" /><input type="button" class="btn ghost red remove-scan" id="remove-prof-cert" value="Удалить" /></div><p>Макс. размер файла 5Mb, (.jpeg, .png)</p><div class="clr"></div></div></div>';
        $(this).before(certItem);
        loadForms();
        $(certsBlock).find('.certificate.hidden').slideDown(200);
    });
    $('a.add-document-button').trigger('click');
    //Цены на консультации
    var itemContainers = $('.prices .item');
    $.each(itemContainers, function(key,item){
        $(item).find('input[type="checkbox"]').on('change', function(){
            if($(this).is(':checked')){
                $(item).addClass('active');
            }else{
                $(item).removeClass('active');
            }
        });
    });
    //Добавление и удаление офисов проведения консультаций
    var places = $('.places');
    $(places).on('click', '.remove-place', function(e){
        e.preventDefault();
        $(this).closest('.item').slideUp(300, function(){
            $(this).closest('.item').remove();
        });
    });
    var autocompleteSource = ['Москва', 'Красноярск', 'Днепропетровск', 'Санкт-Петербург'];
    $(places).find('input.plus.autocomplete').autocomplete({
        source: autocompleteSource
    });
    $('span#add-place').on('click', function(){
        var newAddress = $(this).siblings('input').val();
        $(this).siblings('input').val('');
        if(newAddress.length){
            $(places).find('.item').last().after('<div class="item hidden"><input type="hidden" name="places[]" value="' + newAddress + '"/><a href="#" class="remove-place"><i class="fa fa-close"></i></a><span class="address">' + newAddress + '</span><input type="radio" name="main-place" value="2"><label for="main-place">Основной город</label><div class="clr"></div></div>');
            loadRadioButtons();
            $(places).find('.item').last().slideDown(300);
        }else{
            $(this).siblings('input').addClass('error');
        }
    });
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