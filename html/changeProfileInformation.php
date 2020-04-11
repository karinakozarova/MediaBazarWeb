<?php include('changeInfoConnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Change Profile Information</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/changeProfileInfo.css">
    <link rel="stylesheet" href="../css/base.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript">
        var isSaved = "<?= isset($_REQUEST['isSaved']) ? "true" : "false"?>";
    </script>
    <script src="../js/changeProfileInfo.js"></script>
</head>
<body class="changeProfile green">
<?php include('navbar.php'); ?>
<br>
<div class="container">
    <div class="username-picture">
        <h3 id="Username"><?= $username ?></h3>
        <img class="profile-picture" src="../resources/profileman.jpg">
    </div>
    <div class="row">
        <form method="post" onsubmit="return validateChangedInformation()">
            <div class="changeInfoForm form-group row col-md-offset-4 col-lg-offset-3 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="form-group">
                        <h4 class="changeInfoLbl centered">Change Profile Information</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First name"
                                   value="<?= $firstName ?>" name="firstName">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last name"
                                   value="<?= $lastName ?>" name="lastName">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber">Phone number</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number"
                                   value="<?= $phoneNumber ?>" name="phoneNumber">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" value="<?= $email ?>"
                                   name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label id="dob-lbl" for="dateOfBirth">Date of birth</label>
                            <input type="datetime-local" class="form-control" id="dateOfBirth" name="dateOfBirth" value="<?= $dateOfBirth ?>">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="street">Street</label>
                            <input type="text" class="form-control" id="street" placeholder="Street"
                                   value="<?= $street ?>" name="street">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" class="form-control" id="postcode" placeholder="Postcode"
                                   value="<?= $postcode ?>" name="postcode">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="region" placeholder="Region"
                                   value="<?= $region ?>" name="region">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" placeholder="Country"
                                   value="<?= $country ?>" name="country">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-block" id="btn-change-pwd" name="changeInfo">
                                Change Information
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>