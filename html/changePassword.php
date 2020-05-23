<?php include('changeInfoConnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Change Password </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/changePassword.css">
    <link rel="stylesheet" href="../css/base.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript">
        var isSaved = "<?= isset($_REQUEST['isSaved']) ? "true" : "false"?>";
        var incorrect = "<?= isset($_REQUEST['incorrect']) ? "true" : "false"?>";
    </script>
    <script src="../js/changeProfileInfo.js"></script>
</head>
<?php
include('../html/navbar.php');
?>
<body class="green changeProfile">
<br> <br>
<div class="container">
    <div class="row">
        <form method="post" onsubmit="return validateNewPasswordForm()"
              class="col-md-offset-4 col-lg-offset-3 col-md-5 col-sm-10 col-lg-6 col-xl-6">
            <h3 class="centered">Change password</h3>
            <div class="form-group">
                <label for="currentPassword">Current Password</label>
                <input type="password" class="form-control" id="currentPassword" placeholder="Current Password"
                       name="currentPassword" required>
            </div>

            <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="New Password"
                       name="newPassword" required>
            </div>

            <div class="form-group">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password"
                       name="repeatPassword" required>
            </div>
            <button type="submit" class="btn btn-light btn-block" id="btn-change-pwd" name="changePassword">
                Change Password
            </button>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/settings.js"></script>
</body>
</html>