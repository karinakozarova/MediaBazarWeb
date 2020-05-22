$('#mode').change(function(){

    if($(this).prop('checked')){
        $('head').append('<link rel="stylesheet" type="text/css" href="../css/darkThemePreference.css">')
        localStorage.setItem('mode', 'dark');
    }
    else{
        $('link[rel=stylesheet][href*="../css/darkThemePreference.css"]').remove();
        localStorage.setItem('mode', 'light');
    }
});

$(document).ready(function() {

    var checkbox = document.getElementById("mode");

    if(localStorage.getItem('mode') == 'dark' ){
        $('head').append('<link rel="stylesheet" type="text/css" href="../css/darkThemePreference.css">');
        checkbox.checked = true;
    }
    else if(localStorage.getItem('mode') == 'light'){
        $('link[rel=stylesheet][href*="../css/darkThemePreference.css"]').remove();
        checkbox.checked = false;
    }
});

    if(window.matchMedia("(prefers-color-scheme: dark)").matches){
    var checkbox = document.getElementById("mode");
    if(!$(this).prop('checked')){
        checkbox.checked=true;
        $('head').append('<link rel="stylesheet" type="text/css" href="../css/darkThemePreference.css">');
    }
}

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

    if(localStorage.getItem('mail') == 'on' ){

        console.log("working");
        var checkbox = document.getElementById("sendEmail");
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
        checkbox.checked = true;
    }
    else if(localStorage.getItem('mail') == 'off' ){
        console.log("not");

        var checkbox = document.getElementById("sendEmail");
        checkbox.checked = false;
    }
});
