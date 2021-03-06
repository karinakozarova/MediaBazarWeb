<?php
include('../php/config.php');
$notifications = [];
if (isset($_REQUEST['show'])) {
    session_start();
}

$user = $_SESSION['username'];
$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

$query = $conn->prepare("SELECT n.status, n.id, n.created_by_id as creator, n.message, n.datetime, p.first_name, p.last_name FROM notifications AS n INNER JOIN person AS p ON n.created_by_id = p.id WHERE n.employee_id=\"$user_id\" AND n.status = 'unread' ORDER BY  n.datetime DESC LIMIT 1");
$query->execute();
$element = $query->fetch();

$notification = new \stdClass();
$notification->notificationStatus = $element["status"];
$notification->notificationId = $element["id"];
$notification->creatorFirstName = $element["first_name"];
$notification->creatorLastName = $element["last_name"];
$notification->creatorId = $element["creator"];
$notification->message = $element["message"];
$notification->date = $element["datetime"];


if (isset($_REQUEST['show'])) {
    echo json_encode($notification);
}