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
    var checkbox = document.getElementById("sendEmail");
    checkbox.checked = true;
    var sendEmail = 'on';
    console.log(sendEmail);

    $('#sendEmail').change(function(){
    if(!$(this).prop('checked')){
        sendEmail = 'off';
    }
    else{
        sendEmail = 'on';
    }
    console.log(sendEmail);

    });
    $.ajax({
        url: '../php/sendShiftsEmail.php',
        type: 'POST',
        data:{"sendEmail": sendEmail},
        success: function(result) {}
    });
});

