<?php
$title = "Inbox";
include('head.php');
include '../php/config.php';
include '../php/notifications.php';
?>

<body>
<?php include('navbar.php'); ?>
<br>
<div class="notifications"> </div>
<script type="text/javascript">
    var events = <?php echo json_encode($notifications) ?>;
</script>
<script type="text/javascript" src="../js/listNotifications.js"></script>
<script type="text/javascript" src="../js/markAsRead.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>