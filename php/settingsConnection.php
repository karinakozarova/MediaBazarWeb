<?php

if(!isset($_SESSION))
{
    session_start();
}

include '../php/constants.php';
include '../php/config.php';

$user = $_SESSION["username"];
if(isset($_REQUEST['theme'])) {
echo $_REQUEST['theme'];

    $theme = $_REQUEST['theme'];
    $updateQuery = $conn->prepare("UPDATE user SET theme=\"$theme\"  WHERE username=\"$user\"");
    $updateQuery ->execute();
}

    $query = $conn->prepare("SELECT theme FROM user WHERE username=\"$user\"");
    $query->execute();
    $getTheme = $query->fetchColumn();
