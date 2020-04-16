$(document).ready(function() {
    var notificationsId = [];
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
            var isIncluded = notificationsId.includes(notifications[i].notificationId);
            if(!isIncluded){
                if(notifications[i].notificationStatus == "read"){
                    $(".notifications").append('<div class="container"> <div class="alert alert-success" role="alert"> <form method="post"> <input type="hidden" name="notificationID" value="' + notifications[i].notificationId + '"></form><p>' + notifications[i].message + '</p><hr> <h6 class="mb-0"><b>Created by: </b> ' + notifications[i].creatorFirstName + ' '+ notifications[i].creatorLastName +'</h6><h6 class="mb-0"><b>Date:</b> ' + notifications[i].date + '</h6></div></div>');
                }else if (notifications[i].notificationStatus == "unread"){
                    $(".notifications").append('<div class="container"> <div class="alert alert-danger ' + notifications[i].notificationId +'" role="alert"><form method="post"><input type="hidden" name="notificationID" value="' + notifications[i].notificationId + '"><button type="button" name="markAsRead" value="' + notifications[i].notificationId + '" class="close">Mark as read</button></form><p>' + notifications[i].message + '</p><hr> <h6 class="mb-0"><b> Created by: </b> ' + notifications[i].creatorFirstName + ' '+ notifications[i].creatorLastName +'</h6><h6 class="mb-0"><b>Date:</b> ' + notifications[i].date + '</h6></div></div>');
                }
                notificationsId.push(notifications[i].notificationId);
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