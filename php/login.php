<?php
include 'config.php';
$Messegealarm = '';
if ($login == 1) {
echo " <meta http-equiv='refresh' content='0; url=../html/base.html'>";
}else{

if (isset($_POST["login_bttn"])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (empty($username) || empty($password)) {
    $Messegealarm =  '<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Please fill in the empty fields</div>';
  }else{
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
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
      header("location:../html/base.html");
    }else {
      $Messegealarm = '<div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Wrong credentials</div>';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- jQuery Boostrap alerts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
<div class="wrapper">
    <div id="formContent">
        <br>
        <h3> Welcome </h3>
<?=$Messegealarm?>
        <form method="post">
            <input type="text" id="login" name="username" placeholder="Username">
            <input type="text" id="password" name="password" placeholder="Password">
            <input type="submit" name ="login_bttn"style="width: 85%" value="Log In">
        </form>

        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>
