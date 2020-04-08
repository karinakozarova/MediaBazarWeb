<?php
include 'config.php';

    if(session_status() == PHP_SESSION_NONE)
    {
    session_start();
    }
    $username = $_SESSION["username"];
    $errors = array();

$sql1 = "SELECT  p.id, p.first_name, p.last_name, p.date_of_birth, p.street, p.postcode, p.region, p.country, p.phone_number, p.email  FROM person AS p INNER JOIN user AS u ON p.id=u.account_id WHERE u.username='$username'";
             $emailResult = $conn-> query($sql1);
             if ($emailResult-> num_rows > 0){
                while ($row = $emailResult-> fetch_assoc()){
                    $person_id = $row["id"];
                    $_SESSION["firstName"]  = $row["first_name"];
                    $_SESSION["lastName"] = $row["last_name"];
                    $_SESSION["dateOfBirth"] = date("Y-m-d\TH:i", strtotime($row["date_of_birth"]));
                    $_SESSION["street"] = $row["street"];
                    $_SESSION["postcode"] = $row["postcode"];
                    $_SESSION["region"] = $row["region"];
                    $_SESSION["country"] = $row["country"];
                    $_SESSION["phoneNumber"] = $row["phone_number"];
                    $_SESSION['Email'] = $row["email"];
                }
             }

        if (isset($_POST['changeInfo'])){
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $date =date_create($_POST["dateOfBirth"]);
            $dateOfBirth = date_format($date, "Y-m-d H:i:s");
            $street = $_POST["street"];
            $postcode = $_POST["postcode"];
            $region = $_POST["region"];
            $country = $_POST["country"];
            $phoneNumber = $_POST["phoneNumber"];
            $email = $_POST['Email'];

            if (count($errors) == 0) {
                $sql = "UPDATE person SET first_name='$firstName' , last_name='$lastName',date_of_birth='$dateOfBirth', street='$street', postcode='$postcode', region='$region', country='$country', phone_number='$phoneNumber', email='$email' WHERE id='$person_id'";
                mysqli_query($conn, $sql);
                 $_SESSION["firstName"] = $firstName;
                 $_SESSION["lastName"] = $lastName;
                 $_SESSION["dateOfBirth"] = date("Y-m-d\TH:i", strtotime($dateOfBirth));
                 $_SESSION["street"] = $street;
                 $_SESSION["postcode"] = $postcode;
                 $_SESSION["region"] = $region;
                 $_SESSION["country"] = $country;
                 $_SESSION["phoneNumber"] = $phoneNumber;
                 $_SESSION["email"] = $email;
            }
        }


  if (isset($_POST['changePassword'])) {
            $currentPwd = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            $passwordRepeat = $_POST['repeatPassword'];
            $sql = "SELECT password FROM user WHERE username='$username'";
                            $typeResult = $conn-> query($sql);
                            if ($typeResult-> num_rows > 0){
                                  while ($row = $typeResult-> fetch_assoc()){
                                           $password= $row["password"];
                                  }
                            }
            if ($newPassword != $passwordRepeat)
            {
                return;
            }
            else if($currentPwd != $password)
            {
                array_push($errors, "Please enter the correct current password!");
            }
            else if (count($errors) == 0)
            {
                $newPasswordC = $newPassword;
                $sqlUpdate = "UPDATE user SET password='$newPasswordC' WHERE username='$username'";
                mysqli_query($conn, $sqlUpdate);
                array_push($errors, $newPassword, $username);
                header('location: ChangePassword.php');
            }
    }
?>