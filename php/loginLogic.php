<?php
include 'config.php';
session_start();
if ($login == 1) {
    echo " <meta http-equiv='refresh' content='0; url=../html/base.php'>";
} else {
    if (isset($_POST["login_bttn"])) {
        $errorMessageText = '';
        $errorMessage = 0;
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            $errorMessageText = 'Please fill in the empty fields';
            $errorMessage = 1;
        } else {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND account_type = 2";
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
                setcookie('logedin', 1, time() + (3600 * 24));
                header("location:../html/base.php");
            } else {
                $errorMessageText = 'Wrong credentials';
                $errorMessage = 1;
            }
        }
    }
}