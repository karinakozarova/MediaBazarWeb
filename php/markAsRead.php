<?php
include '../php/config.php';

$notificationId = $_REQUEST['id'];
$status = "read";
$updateNotification = $conn->prepare("UPDATE notifications SET status=\"$status\" WHERE id=\"$notificationId\"");
$updateNotification->execute();
