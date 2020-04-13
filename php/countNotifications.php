<?php
include '../php/config.php';
session_start();
$user = $_SESSION['username'];
$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

$status="unread";
$countNotificationsQuery = $conn->prepare("SELECT COUNT(*) AS notCount FROM notifications WHERE employee_id=\"$user_id\" AND status=\"$status\"");
$countNotificationsQuery->execute();
$result = $countNotificationsQuery->fetch();
echo $result["notCount"];
