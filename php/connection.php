<?php
include 'config.php';
session_start();
date_default_timezone_set('UTC');
$username = $_SESSION["username"];

$sqlShowInfo = "SELECT  p.id, p.first_name, p.last_name, p.date_of_birth, p.street, p.postcode, p.region, p.country, p.phone_number, p.email  FROM person AS p INNER JOIN user AS u ON p.id=u.account_id WHERE u.username='$username'";
$showResult = $conn->prepare($sqlShowInfo);
$showResult->execute();
$row = $showResult->fetch(PDO::FETCH_ASSOC);

$person_id = $row["id"];
$firstName = $row["first_name"];
$lastName = $row["last_name"];
$dateOfBirth = date("Y-m-d\TH:i", strtotime($row["date_of_birth"]));
$street = $row["street"];
$postcode = $row["postcode"];
$region = $row["region"];
$country = $row["country"];
$phoneNumber = $row["phone_number"];
$email = $row["email"];

if (isset($_POST['changeInfo'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $date = date_create($_POST["dateOfBirth"]);
    $dateOfBirth = date_format($date, "Y-m-d H:i:s");
    $street = $_POST["street"];
    $postcode = $_POST["postcode"];
    $region = $_POST["region"];
    $country = $_POST["country"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST['email'];

    $sqlUpdateInfo = "UPDATE person SET first_name='$firstName', last_name='$lastName',date_of_birth='$dateOfBirth', street='$street', postcode='$postcode', region='$region', country='$country', phone_number='$phoneNumber', email='$email' WHERE id='$person_id'";
    $updateResult = $conn->prepare($sqlUpdateInfo);
    $updateResult->execute([$firstName, $lastName, $dateOfBirth, $street, $postcode, $region, $country, $phoneNumber, $email, $person_id]);

    header("Location:" . "changeProfileInformation.php?isSaved=true");
    exit;
}

if (isset($_POST['changePassword'])) {

    $currentPwd = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $passwordRepeat = $_POST['repeatPassword'];
    $sqlGetPassword = "SELECT password FROM user WHERE username='$username'";
    $showPassword = $conn->prepare($sqlGetPassword);
    $showPassword->execute();
    $row = $showPassword->fetch(PDO::FETCH_ASSOC);
        $password = $row["password"];
    if ($currentPwd != $password) {
        header("Location:" . "changePassword.php?incorrect=true");
        exit;
    } else {
        $sqlUpdatePassword = $conn->prepare("UPDATE user SET password=\"$newPassword\" WHERE username=\"$username\"");
        $sqlUpdatePassword->execute();

        header("Location:" . "changePassword.php?isSaved=true");
        exit;
    }
}