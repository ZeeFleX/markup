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
});