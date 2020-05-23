$(document).ready(function() {

    var theme = $('#getTheme_hidden').val();
    var checkbox = document.getElementById("mode");

    if(theme === 'dark' ){
        $('head').append('<link rel="stylesheet" type="text/css" href="../css/darkThemePreference.css">');
        checkbox.checked = true;
    }
    else if(theme === 'light'){
        $('link[rel=stylesheet][href*="../css/darkThemePreference.css"]').remove();
        checkbox.checked = false;
    }
});

$('#mode').change(function(){

    if($(this).prop('checked')){
        theme = 'dark';
    }
    else{
        theme = 'light';
    }
    $.ajax({
        url: '../php/settingsConnection.php',
        type: 'POST',
        data:{"theme": theme},
        success: function(result) {
            console.log('sent theme');
        },
        error : function() {
            console.log('error');
        }
    });
    location.reload();
});

$(document).ready(function() {

    $('#sendEmail').change(function(){
        if(!$(this).prop('checked')){
            localStorage.setItem('mail', 'off');
        }
        else{
            localStorage.setItem('mail', 'on');
        }
        location.reload();
    });
});
$(document).ready(function() {
    if(localStorage.getItem('mail') == 'on' ){

        console.log("working");
        var email= 'on';

        window.setInterval(function () {
            $.ajax({
            url: '../php/sendShiftsEmail.php',
            type: 'POST',
            data:{"sendEmail_hidden": email},
         success: function(result) {
            console.log('sent');
            },
        error : function() {
            console.log('error');
            }
         });
        }, 60000);
        var checkbox = document.getElementById("sendEmail");
        checkbox.checked = true;
    }
    else if(localStorage.getItem('mail') == 'off' ){
        console.log("not");

        var checkbox = document.getElementById("sendEmail");
        checkbox.checked = false;
    }
});