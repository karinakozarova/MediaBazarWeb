<?php
include 'constants.php';
include 'config.php';

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

if (isset($_SESSION["username"])) {
    header("Location: ../html/base.php");
} else {
    if (isset($_POST["login_bttn"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $errorMessageText = 'Please fill in the empty fields';
        } else {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND account_type = $WORKER_TYPE";
            $statment = $conn->prepare($query);
            $statment->execute(
                array(
                    'username' => $username,
                    'password' => $password
                )
            );
            $count = $statment->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["loginTime"] = time();
                header("Location: ../html/base.php");
            } else {
                $errorMessageText = 'Wrong credentials';
            }
        }
    }
}
