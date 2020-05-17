<?php
include '../php/constants.php';

if($_SESSION["account_type"] != $WORKER_TYPE){
    header("Location: ../html/events.php");
    exit;
}
