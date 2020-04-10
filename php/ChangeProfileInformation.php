<?php include('connection.php');?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChangeInformation</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/ChangeProfileInfo.css">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script type="text/javascript">
            var val = "<?= isset($_REQUEST['saved']) ? "true"  : "false"?>";
        </script>
        <script src="../js/ChangeProfileInfo.js"></script>
    </head>
    <body class="changeProfile">
        <?php include('navbar.php'); ?>
            <div class="username-picture">
                <h3 id="Username"><?= $username?></h3>
                <img class="profile-picture" src="../resources/profileman.jpg">
            </div>
            <form class="profile-form" method="post" onsubmit="return validateChangedInformation()" style="width:450px">
                <div class="my-group">
                    <div class="form-group">
                        <div class="col-10">
                            <h4 class="change-info-lbl">Change Profile Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First name" value="<?= $firstName?>" name="firstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last name" value="<?= $lastName?>" name="lastName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber">Phone number</label>
                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number" value="<?= $phoneNumber?>" name="phoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" value="<?= $Email?>" name="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label id="dob-lbl" for="dateOfBirth">Date of birth</label>
                                    <input type="datetime-local" class="form-control" id="dateOfBirth" name="dateOfBirth" max="3000-12-31" value="<?= $dateOfBirth?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" id="street" placeholder="Street" value="<?= $street?>" name="street">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="Postcode" value="<?= $postcode?>" name="postcode">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" class="form-control" id="region" placeholder="Region" value="<?= $region?>" name="region">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Country" value="<?= $country?>" name="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light btn-block" id="btn-change-pwd" name="changeInfo">Change Information</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    </html>