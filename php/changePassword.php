<?php include('connection.php');?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChangePassword</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/ChangeProfileInfo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script type="text/javascript">
            var val = "<?= isset($_REQUEST['saved']) ? "true"  : "false"?>";
        </script>
        <script type="text/javascript">
            var incorrect = "<?= isset($_REQUEST['incorrect']) ? "true"  : "false"?>";
        </script>
        <script src="../js/changeProfileInfojs"></script>
    </head>
    <body class="changeProfile">
        <?php include('navbar.php'); ?>
            <form class="password" method="post" onsubmit="return validateNewPasswordForm()">
                <div class="password-group" <div class="col">
                    <h4 class="change-pwd-lbl">Change password</h4>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Current Password" name="currentPassword" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="New Password" name="newPassword" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="repeatPassword">Repeat Password</label>
                        <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password" name="repeatPassword" required>
                        <button type="submit" class="btn btn-light btn-block" id="btn-change-pwd" name="changePassword">Change Password</button>
                    </div>
                </div>
                </div>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    </html>