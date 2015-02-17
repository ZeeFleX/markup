$(document).ready(function () {
    loadInterface();
});

var loadInterface = function(){
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
    //Поля ввода
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
            console.log(width);
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
                background: 'url(images/interface/search-icon.png) center center no-repeat #4ad0c5',
                border: 'none',
                cursor: 'pointer'
            });
        }
    });
    $('.select2').select2();
    
}
var checkForValue = function(element){
    if($(element).val().length) {return true} else{return false}
}
