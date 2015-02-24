$(document).ready(function(){
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
});