<?php
include '../php/constants.php';

if(!isset($_SESSION["account_type"])){
    header("Location: ../html/index.html");
    exit;
}

if($_SESSION["account_type"] == $WORKER_TYPE) include('base-navbar.php');
else include('other-users/navbar.php');
