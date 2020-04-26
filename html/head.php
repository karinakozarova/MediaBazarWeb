<?php
session_start();
if (isset($_SESSION["username"]) && (time() - $_SESSION["loginTime"] > 1800)) {
    session_unset();
    session_destroy();
    header('Location: ../php/signout.php');
}
$_SESSION["loginTime"] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?= $title ?> </title>

    <?php if (isset($addEditSchedule)) { ?>
        <link rel="stylesheet" href="../css/editSchedule.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php } ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/base.css">

    <?php if (isset($addCalendar)) { ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../libs/jquery-sked-tape-master/docs/jquery.skedTape.css">
        <script src="../libs/jquery-sked-tape-master/src/jquery.skedTape.js"></script>
    <?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
