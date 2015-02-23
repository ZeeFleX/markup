var loadReviews = function(offset, callback){
    $.ajax({
        method: 'POST',
        url: 'server_side/load_reviews.php',
        data: {
            offset: offset
        },
        success:function(data){
            callback(data);
        }
    });
}