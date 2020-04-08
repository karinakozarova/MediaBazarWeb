<?php include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ChangeProfileInfo.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="changeProfile">
<?php include('navbar.php'); ?>
    <form class="password" method="post" onsubmit="return validateNewPasswordForm()">
            <div class="col-sm-10">
                <h4 class="change-pwd-lbl">Change password</h4>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" id="currentPassword" placeholder="Current Password" name="currentPassword" required>
                </div>
            </div>
                    <?php include('errors.php'); ?>
            <div class="row">
                <div class="col-sm-10">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" id="newPassword" placeholder="New Password" name="newPassword" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10">
                    <label for="repeatPassword">Repeat Password</label>
                    <input type="password" class="form-control" id="repeatPassword"  placeholder="Repeat Password" name="repeatPassword" required>
                </div>
            </div>
            <button type="submit"  class="btn btn-light btn-block" id="btn-change-pwd" name="changePassword">Change Password</button>
    </form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="../js/ChangeProfileInfo.js"></script>
</body>
</html>