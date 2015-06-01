$(document).ready(function () {
    loadInterface();
    //Трёхмерные тени

    var $shadowBlocks = $('.with-shadow');
    $.each($shadowBlocks, function(key, $block){
        var $shadow = $('<div class="shadow"></div>').appendTo($block);
        $shadow.css({
            position: 'absolute',
            width: '80%',
            height: '20px',
            bottom: '-20px',
            backgroundImage: 'url(images/interface/3d-shadow.png)',
            backgroundPosition: 'top center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: '100% 100%',
            zIndex: '0'
        });
        $shadow.css({
            left: '50%',
            marginLeft: $shadow.outerWidth() / 2 * -1 + 'px'
        });
        $($block).css({
            position: 'relative',
            zIndex: 1
        });
    });
});

var loadInterface = function(){
    $('.btn.disabled').on('click', function(e){
        e.preventDefault();
    });
    //Загрузка Timepicker
    loadTimePickers();
    //Валидация
    $('body').on('focus', 'input.error', function(){
        $(this).removeClass('error');
    });
    //Маска телефонов
    $('.phone-mask').mask('8 (000) 000-00-00', {placeholder: '8 (___) ___-__-__'});
    //Модальные окна
    $('.modal').dialog({width: 'auto', autoOpen: false, modal: true });
    $('.window').on('click', '.fa-close, a#cancel', function(){
        $(this).closest('.window').fadeOut(300);
    });
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
    //Воле ввода рейтинга
    var ratingInputs = $('input[name="rating"]');
    $.each(ratingInputs, function(){
        var input = $(this);
        var inputScale = $(input).attr('data-scale');
        $(input).after('<div class="raiting-block vote"></div>');
        var ratingBlock = $(input).siblings('.raiting-block.vote');
        for(i = 0; i < inputScale; i++){
            $(ratingBlock).append('<i class="fa fa-star-o"></i>');
        }
        $(ratingBlock).on('mouseover', '.fa', function(){
            var currentIndex = $(this).index();
            for(i = 0; i < inputScale; i++){
                if(i <= currentIndex){
                    $(ratingBlock).children('.fa').eq(i)
                        .addClass('active');
                }else{
                    $(ratingBlock).children('.fa').eq(i)
                        .removeClass('active');
                }
            }
        });
        $(ratingBlock).on('mouseleave', function(){
            $(this).children('.fa').removeClass('active');
        });
        $(ratingBlock).on('click', '.fa', function(){
            var currentIndex = $(this).index();
            for(i = 0; i < inputScale; i++){
                if(i <= currentIndex){
                    $(ratingBlock).children('.fa').eq(i)
                        .removeClass('fa-star-o')
                        .addClass('fa-star');
                }else{
                    $(ratingBlock).children('.fa').eq(i)
                        .removeClass('fa-star')
                        .addClass('fa-star-o');
                }
            }
            input.val(currentIndex + 1);
        });
    });
    //Чекбоксы
    var toggles = $('input[type="checkbox"]');
    // $(toggles).on('change', function(){
    //     var target = $('.container[data-id="' + $(this).attr('data-id') + '"]');
    //     if($(this).prop('checked')){
    //         $(target).addClass('checked');
    //     }else{
    //         $(target).removeClass('checked');
    //     }
    // });
    $.each(toggles, function (key, toggle) {
        var id = Math.floor(Math.random() * 1000000);
        var ifChecked = '';
        $(toggle).attr('data-id', id);
        if($(toggle).attr('checked')) ifChecked = 'checked'; 
        if($(toggle).hasClass('toggle')){
           $(this)
            .css('display', 'none')
            .after('<div class="toggle container ' + ifChecked + '" data-id="' + id + '"><div class="handle"></div></div>');
        }else{
           $(this)
            .css('display', 'none')
            .after('<div class="checkbox container ' + ifChecked + '" data-id="' + id + '"></div>');
        }
        
        var toggleContainer = $('.container[data-id="' + id + '"]');
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
var loadTimePickers = function(){
    $('.timepicker').timepicker({
        currentText: 'Текущее',
        closeText: 'Готово',
        timeOnlyTitle: 'Выберите время',
        timeText: 'Время',
        hourText: 'Часы',
        minuteText: 'Минуты',
        minuteGrid: 30
    });
    $('.datepicker').datepicker({

    });
    //$('.timepicker-light').timepickerLight();
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
                .after('<div class="radio container ' + ifChecked + '" data-id="' + id + '"></div>');
            var container = $('.radio[data-id="' + id + '"]');
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
                'border-top-left-radius': $(input).css('border-top-left-radius'),
                'border-top-right-radius': $(input).css('border-top-right-radius'),
                'border-bottom-left-radius': $(input).css('border-bottom-left-radius'),
                'border-bottom-right-radius': $(input).css('border-bottom-right-radius'),
                'border-top-color': $(input).css('border-top-color'),
                'border-right-color': $(input).css('border-right-color'),
                'border-bottom-color': $(input).css('border-bottom-color'),
                'border-left-color': $(input).css('border-left-color'),
                'border-top-style': $(input).css('border-top-style'),
                'border-right-style': $(input).css('border-right-style'),
                'border-bottom-style': $(input).css('border-bottom-style'),
                'border-left-style': $(input).css('border-left-style'),
                'border-top-width': $(input).css('border-top-width'),
                'border-right-width': $(input).css('border-right-width'),
                'border-bottom-width': $(input).css('border-bottom-width'),
                'border-left-width': $(input).css('border-left-width')
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
                background: 'url(images/interface/search-icon.png) center center no-repeat #4ad0c5',
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
                 'border-top-left-radius': $(input).css('border-top-left-radius'),
                'border-top-right-radius': $(input).css('border-top-right-radius'),
                'border-bottom-left-radius': $(input).css('border-bottom-left-radius'),
                'border-bottom-right-radius': $(input).css('border-bottom-right-radius'),
                'border-top-color': $(input).css('border-top-color'),
                'border-right-color': $(input).css('border-right-color'),
                'border-bottom-color': $(input).css('border-bottom-color'),
                'border-left-color': $(input).css('border-left-color'),
                'border-top-style': $(input).css('border-top-style'),
                'border-right-style': $(input).css('border-right-style'),
                'border-bottom-style': $(input).css('border-bottom-style'),
                'border-left-style': $(input).css('border-left-style'),
                'border-top-width': $(input).css('border-top-width'),
                'border-right-width': $(input).css('border-right-width'),
                'border-bottom-width': $(input).css('border-bottom-width'),
                'border-left-width': $(input).css('border-left-width'),
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
                background: 'url(images/interface/plus-icon.png) center center no-repeat #4ad0c5',
                border: 'none',
                cursor: 'pointer'
            });
        }
    });
    $('.select2').select2();
}
