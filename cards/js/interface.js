$(document).ready(function () {
    loadInterface();
});

var loadInterface = function(){
    //Загрузка выбора времени
    loadTimePickers();
    //Валидация
    $('body').on('focus', 'input.error', function(){
        $(this).removeClass('error');
    });
    //Маска телефонов
    $('.phone-mask').mask('8 (000) 000-00-00', {placeholder: '8 (___) ___-__-__'});
    //Модальные окна
    $('.modal').dialog({width: 'auto', autoOpen: false, modal: true });
    //Поле отображения рейтинга
    var ratingFields = $('div.rating-field');
    $.each(ratingFields, function(){
        var ratingField = $(this);
        var ratingValue = $(ratingField).attr('data-value');
        var ratingScale = $(ratingField).attr('data-scale');
        $(ratingField).after('<div class="raiting-block value"></div>');
        var ratingBlock = $(ratingField).siblings('.raiting-block');
        for(i = 0; i < ratingScale; i++){
            if(i < ratingValue){
                var isActive = "fa-star active";
            }else{
                var isActive = "fa-star-o active";
            }
            $(ratingBlock).append('<i class="fa ' + isActive + '"></i>');
        }
    });
    //Чекбоксы
    var toggles = $('input[type="checkbox"]');
    $.each(toggles, function () {
        var toggle = $(this);
        var id = Math.floor(Math.random() * 1000000);
        var ifChecked = '';
        $(toggle).attr('data-id', id);
        if($(toggle).attr('checked')) ifChecked = 'checked'; 
        if($(toggle).hasClass('toggle')){
           $(this)
            .css('display', 'none')
            .after('<div class="toggle container ' + ifChecked + '" id="' + id + '"><div class="handle"></div></div>');
        }else{
           $(this)
            .css('display', 'none')
            .after('<div class="checkbox container ' + ifChecked + '" id="' + id + '"></div>');
        }
        
        var toggleContainer = $('.container#' + id);
        $(toggleContainer).on('click', function () {
            $(this).toggleClass('checked');
            $(toggle).trigger('click');
        });
    });
    //Радио-кнопки
    loadRadioButtons();
    //Поля ввода
    loadForms();
}
var checkForValue = function(element){
    if($(element).val().length) {return true} else{return false}
}
var loadRadioButtons = function(){
    var radioButtons = $('input[type="radio"]');
    $.each(radioButtons, function () {
        var button = $(this);
        if(typeof($(button).attr('data-id')) === 'undefined'){
            var id = Math.floor(Math.random() * 1000000);
            var ifChecked = '';
            $(button).attr('data-id', id);
            if($(button).attr('checked')) ifChecked = 'checked'; 
            $(this)
                .css('display', 'none')
                .after('<div class="radio container ' + ifChecked + '" id="' + id + '"></div>');
            var container = $('.radio#' + id);
            $(container).click(function(){
                $(button).trigger('click');
                if(!$(container).hasClass('checked')){
                    $('.radio.container').removeClass('checked');
                    $(this).addClass('checked');
                }
            });
        }
    });
}

var loadTimePickers = function(){
    $('.timepicker').timepicker({
        currentText: 'Текущее',
        closeText: 'Готово',
        timeOnlyTitle: 'Выберите время',
        timeText: 'Время',
        hourText: 'Часы',
        minuteText: 'Минуты'
    });
    $('.datepicker').datepicker({

    });
}

var loadForms = function(){
    var inputs = $('input[type="text"], textarea');
    $.each(inputs, function(){
        var input = $(this);
        var hiddenClass = 'hidden';
        if(checkForValue(input)) hiddenClass = '';
        if($(input).hasClass('allow-clear')){
            $(input)
                .wrap('<div class="input-container"></div>')
                .before('<div class="clear ' + hiddenClass + '"></div>');
            $(input).siblings('.clear').on('click', function(){
                $(input).val('');
                $(this).addClass('hidden');
            });
            $(input).on('keyup', function(){
                if(checkForValue(input)){
                    $(this).siblings('.clear').removeClass('hidden');
                } else{
                    $(this).siblings('.clear').addClass('hidden');
                }
            });
        }else if ($(input).hasClass('search')){
            var method = $(input).attr('data-method');
            var action = $(input).attr('data-action');
            var width = $(input).outerWidth();
            var height = $(input).outerHeight();
            $(input).wrap('<form action="' + action + '" method="' + method + '" class="input-container"></form>');
            var form = $(input).closest('form');
            $(input).after('<input type="submit" value="" />');
            var submit = $(input).siblings('input[type="submit"]');
            $(form).css({
                width: width + 'px',
                height: height + 'px',
                overflow: 'hidden',
                borderRadius: $(input).css('borderRadius'),
                borderColor: $(input).css('borderColor'),
                borderStyle: $(input).css('borderStyle'),
                borderWidth: $(input).css('borderWidth')
            });
            $(input).css({
                position: 'relative',
                width: width - 60 + 'px',
                height: '100%',
                float: 'left',
                border: 'none'
            });
            $(submit).css({
                position: 'relative',
                width: '60px',
                height: '100%',
                float: 'right',
                background: 'url(images/interface/search-icon.png) center center no-repeat #ec4863',
                border: 'none',
                cursor: 'pointer'
            });
        }else if ($(input).hasClass('plus')){
            var width = $(input).outerWidth();
            var height = $(input).outerHeight();
            var id = $(input).attr('id');
            $(input).removeAttr('id');
            $(input).wrap('<div class="input-container"></div>');
            var container = $(input).closest('.input-container');
            $(input).after('<span id="' + id + '" />');
            var plus = $(input).siblings('span#' + id);
            $(container).css({
                width: width + 'px',
                height: height + 'px',
                overflow: 'hidden',
                borderRadius: $(input).css('borderRadius'),
                borderColor: $(input).css('borderColor'),
                borderStyle: $(input).css('borderStyle'),
                borderWidth: $(input).css('borderWidth'),
                margin: $(input).css('margin')
            });
            $(input).css({
                position: 'relative',
                width: width - 60 + 'px',
                height: '100%',
                float: 'left',
                border: 'none',
                margin: 0
            });
            $(plus).css({
                display: 'block',
                position: 'relative',
                width: '60px',
                height: '100%',
                float: 'right',
                background: 'url(images/interface/plus-icon.png) center center no-repeat #ec4863',
                border: 'none',
                cursor: 'pointer'
            });
        }
    });
    //$('.select2').select2();
}
