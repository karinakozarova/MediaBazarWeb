<?php
include '../php/config.php';
include '../php/constants.php';

$notificationId = $_REQUEST['id'];
$updateNotification = $conn->prepare("UPDATE notifications SET status=\"$STATUS_READ\" WHERE id=\"$notificationId\"");
$updateNotification->execute();