<?php
include 'config.php';
if ($login == 1) {
echo " <meta http-equiv='refresh' content='0; url=../html/base.php'>";
}else{
if (isset($_POST["login_bttn"])) {
  $Errormessege = '';
  $boolmessage = 0;
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (empty($username) || empty($password)) {
    $Errormessege =  'Please fill in the empty fields';
    $boolmessage = 1;
  }else{
    session_start();
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND account_type = 2";
    $statment = $conn->prepare($query);
    $statment -> execute(
      array(
        'username' => $username,
        'password' => $password
      )
    );
    $count = $statment->rowCount();
    if($count > 0)
    {
      $_SESSION["username"] = $_POST["username"];
      setcookie('logedin',1,time()+(3600 * 24));
      header("location:../html/base.php");
    }else {
      $Errormessege = 'Wrong credentials';
      $boolmessage = 1;
    }
  }
  $Messegealarm = '<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  '.$Errormessege.' </div>';
}
}
?>
