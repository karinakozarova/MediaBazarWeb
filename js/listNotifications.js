for (i = 0; i < events.length; i++) {
    if(events[i].notificationStatus == "read"){
        $(".notifications").append('<div class="container"><div class="alert alert-success" role="alert"><form method="post"><input type="hidden" name="notificationID" value="' + events[i].notificationId + '"></form><h4 class="alert-heading">Greetings!</h4><p>' + events[i].message + '</p><hr><p class="mb-0">Created by: '+ events[i].creatorFirstName + ' '+ events[i].creatorLastName +'</p><p class="mb-0">Date: '+ events[i].date +'</p></div></div>');
    }else if (events[i].notificationStatus == "unread"){
        $(".notifications").append('<div class="container"><div class="alert alert-danger '+ events[i].notificationId +'" role="alert"><form method="post"><input type="hidden" name="notificationID" value="'+ events[i].notificationId +'"><button type="button" name="markAsRead" value="'+ events[i].notificationId +'" class="close">Mark as read</button></form><h4 class="alert-heading">Greetings!</h4><p>'+ events[i].message +'</p><hr><p class="mb-0">Created by: '+ events[i].creatorFirstName + ' '+ events[i].creatorLastName +'</p><p class="mb-0">Date: '+ events[i].date +'</p></div></div>');
    }
}