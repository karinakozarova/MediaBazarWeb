<?php
include 'config.php';
setcookie('logedin', '', time() - 3600, '/');
$login = 0;
header('Location: ../html/index.html');

