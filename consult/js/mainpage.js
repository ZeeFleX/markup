$(document).ready(function(){
    $('a#sign-in').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('open');
    });
});