$(document).ready(function() {
    var notificationsIdArray = [];
    var notifications = [];
    setInterval(function() {
        $.ajax({
            url: '../php/notifications.php?show',
            type: 'get',
            data: {},
            success: function(response) {
                notifications = JSON.parse(response);
            }
        });
        for (i = 0; i < notifications.length; i++) {
            var flag = notificationsIdArray.includes(notifications[i].notificationId);
            if(!flag){
                if(notifications[i].notificationStatus == "read"){
                    $(".notifications").append('<div class="container"> <div class="alert alert-success" role="alert"> <form method="post"> <input type="hidden" name="notificationID" value="' + notifications[i].notificationId + '"></form><h4 class="alert-heading">Greetings!</h4> <p>' + notifications[i].message + '</p><hr> <p class="mb-0"><b>Created by: ' + notifications[i].creatorFirstName + ' '+ notifications[i].creatorLastName +'</b></p><p class="mb-0"><b>Date: ' + notifications[i].date + '</b></p></div></div>');
                }else if (notifications[i].notificationStatus == "unread"){
                    $(".notifications").append('<div class="container"> <div class="alert alert-danger ' + notifications[i].notificationId +'" role="alert"><form method="post"><input type="hidden" name="notificationID" value="' + notifications[i].notificationId + '"><button type="button" name="markAsRead" value="' + notifications[i].notificationId + '" class="close">Mark as read</button></form> <h4 class="alert-heading">Greetings!</h4> <p>' + notifications[i].message + '</p><hr> <p class="mb-0">Created by: ' + notifications[i].creatorFirstName + ' '+ notifications[i].creatorLastName +'</p><p class="mb-0">Date: ' + notifications[i].date + '</p></div></div>');
                }
                notificationsIdArray.push(notifications[i].notificationId);
            }
        }
        $(".close").click(function() {
            var id = $(this).val();
            var idClass = "." + id;
            $.ajax({
                url: '../php/markAsRead.php',
                type: 'post',
                data: {"id": id},
                success: function(response) {}
            });
            $(idClass).addClass('alert-success');
            $(idClass).removeClass('alert-danger');
            $(this).css("display", "none");
        });
    }, 500);
});