<?php
include '../php/constants.php';

if($_SESSION["account_type"] == $WORKER_TYPE) include('base-navbar.php');
else include('other-users/navbar.php');