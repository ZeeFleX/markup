$(document).ready(function(){
    //Форма задать вопрос
    $('.ask-question a#ask-question').on('click', function(e){
        e.preventDefault();
        //$(this).closest('.ask-question').css('display', 'none');
        $('form.ask-question-form').css('display', 'block');
    });
    $('form.ask-question-form i.fa-close').on('click', function(){
        $(this).closest('form.ask-question-form').css('display', 'none');
        //$('section.ask-question').css('display', 'block');
    });
    //регистрация
    $('a#sign-in').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('open');
        $('#registration-window').dialog('close');
        $('#forgot-password-window').dialog('close');
    });
    $('a#sign-up').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('close');
        $('#registration-window').dialog('open');
    });
    $('a#forgot-password').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('close');
        $('#forgot-password-window').dialog('open');
    });

    var $slider = $('.professional-consults .slider');
    var $wrapper = $slider.find('.wrapper');
    var $items = $wrapper.find('.item');
    var $itemWidth = $items.outerWidth() + parseInt($items.css('marginLeft'));
    var $wrapperWidth = $itemWidth * $items.length;
    var $controls = $slider.find('.controls');
    var slidesCount = Math.ceil($wrapperWidth / ($itemWidth * 4));
    for(var i = 0; i < slidesCount; i++){
        $controls.append('<div class="circle"></div>');
    }
    var $controlCircles = $controls.find('.circle');
    var currentIndex = 0;
    var timer;
    $controlCircles.eq(0).addClass('active');
    $slider.css({
        width: $itemWidth * 4 + 'px',
        marginLeft: 'auto',
        marginRight: 'auto',
        overflow: 'hidden'
    });
    $controlCircles.on('click', function(){
        var nextIndex = $(this).index('.circle');
        slideTo(nextIndex);
        clearInterval(timer);
        slideShow();
        console.log(nextIndex);
    });
    
    $wrapper.css('width', $wrapperWidth + 'px');
    slideShow();
    

    function slideShow(){
        timer = setInterval(function(){
            if(currentIndex < slidesCount - 1){
                slideTo(currentIndex + 1);
            }else{
                slideTo(0)
            }
            
        }, 6000);
    }

    function slideTo(index){
        $wrapper.stop().animate({
            left: (($itemWidth * 4) * (index)) * -1 - 1 + 'px'
        }, 1000, function(){
            currentIndex = index;
        });
        $controlCircles.eq(index)
            .addClass('active')
            .siblings('.circle').removeClass('active');
    }
});