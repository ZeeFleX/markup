$(document).ready(function(){
    $('a#sign-in').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('open');
        $('#registration-window').dialog('close');
    });
    $('a#sign-up').on('click', function(e){
        e.preventDefault();
        $('#authorization-window').dialog('close');
        $('#registration-window').dialog('open');
    });
});