$(document).ready(function() {
    setInterval(function() {
        $('#notificationNumber').load('../php/countNotifications.php')
    }, 500);
});