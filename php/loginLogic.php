<?php
include 'constants.php';
include 'config.php';

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

if (isset($_SESSION["username"])) {
    header("Location: ../html/dashboard.php");
} else {
    if (isset($_POST["login_bttn"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $errorMessageText = 'Please fill in the empty fields';
        } else {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND account_type = $WORKER_TYPE";
            $loginQueryWorker = $conn->prepare($query);
            $loginQueryWorker->execute(
                array(
                    'username' => $username,
                    'password' => $password
                )
            );
            $count = $loginQueryWorker->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["loginTime"] = time();
                $_SESSION["account_type"] = $WORKER_TYPE;
                header("Location: ../html/dashboard.php");
            } else {
                $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password';";
                $loginQuery = $conn->prepare($query);
                $loginQuery->execute(
                    array(
                        'username' => $username,
                        'password' => $password
                    )
                );
                $count = $loginQuery->rowCount();
                if ($count > 0) {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["loginTime"] = time();
                    $_SESSION["account_type"] = "other";
                    header("Location: ../html/events.php");
                } else {
                    $errorMessageText = 'Wrong credentials';
                }
            }
        }
    }
}