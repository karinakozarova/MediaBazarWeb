<?php
$title = "Inbox";
include('head.php');
include '../php/config.php';
include '../php/notifications.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Inbox</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="../css/base.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<?php include('navbar.php'); ?>
<br>
<div class="notifications"> </div>

<script type="text/javascript">
    var events = <?php echo json_encode($notifications) ?>;

    for (i = 0; i < events.length; i++) {
        if(events[i].notificationStatus == "read"){
            $( ".notifications" ).append('<div class="container"> <div class="alert alert-success" role="alert"> <form method="post"> <input type="hidden" name="notificationID" value="' + events[i].notificationId + '"></form><h4 class="alert-heading">Greetings!</h4> <p>' + events[i].message + '</p><hr> <p class="mb-0">Created by: ' + events[i].creatorFirstName + ' '+ events[i].creatorLastName +'</p><p class="mb-0">Date: ' + events[i].date + '</p></div></div>');
        }else if (events[i].notificationStatus == "unread"){
            $( ".notifications" ).append('<div class="container"> <div class="alert alert-danger ' + events[i].notificationId +'" role="alert"><form method="post"><input type="hidden" name="notificationID" value="' + events[i].notificationId + '"><button type="button" name="markAsRead" value="' + events[i].notificationId + '" class="close">Mark as read</button></form> <h4 class="alert-heading">Greetings!</h4> <p>' + events[i].message + '</p><hr> <p class="mb-0">Created by: ' + events[i].creatorFirstName + ' '+ events[i].creatorLastName +'</p><p class="mb-0">Date: ' + events[i].date + '</p></div></div>');
        }
    }
    $( ".close" ).click(function() {
        var id = $(this).val();
        var idClass = "." + id;
        $.ajax({
            url: '../php/markAsRead.php',
            type: 'post',
            data: { "id": id},
            success: function(response) {}
        });
        $(idClass).addClass('alert-success');
        $(idClass).removeClass('alert-danger');
        $(this).css("display", "none");
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>