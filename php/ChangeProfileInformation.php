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
    <script src="../js/ChangeProfileInfo.js"></script>
</head>
<body class="changeProfile">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Contracts</a></li>
                <li><a href="#">Payslips</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Schedule <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Change workdays</a></li>
                        <li><a href="#">Get weekly schedule</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Inbox <span class="badge">42</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Change profile information</a></li>
                        <li><a href="#">Change password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sign out </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="profile">
    <h3 id="Username"><?= $_SESSION["username"]?></h3>
    <img class="profile-picture" src="../resources/profileman.jpg">
</div>
<form class="profile-form" method="post" onsubmit="return validateChangedInformation()">
    <div class="form-group my-group">
        <div class="col-10">
            <h4 class="change-info-lbl">Change Profile Information</h4>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" placeholder="First name" value="<?= $_SESSION["firstName"]?>" name="firstName">
        </div>
        <div class="form-group col-md-6">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Last name" value="<?= $_SESSION["lastName"]?>" name="lastName">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="phoneNumber">Phone number</label>
        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number" value="<?= $_SESSION["phoneNumber"]?>" name="phoneNumber">
        </div>
        <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" value="<?= $_SESSION["Email"]?>" name="Email">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label id="dob-lbl" for="dateOfBirth">Date of birth</label>
            <input type="datetime-local" class="form-control" id="dateOfBirth" name="dateOfBirth" max="3000-12-31" value="<?= $_SESSION["dateOfBirth"]?>">
        </div>
        <div class="form-group col-md-6">
            <label for="street">Street</label>
            <input type="text" class="form-control" id="street" placeholder="Street" value="<?= $_SESSION["street"]?>" name="street">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="postcode">Postcode</label>
            <input type="text" class="form-control" id="postcode" placeholder="Postcode" value="<?= $_SESSION["postcode"]?>" name="postcode">
        </div>
        <div class="form-group col-md-6">
        <label for="region">Region</label>
        <input type="text" class="form-control" id="region" placeholder="Region" value="<?= $_SESSION["region"]?>" name="region">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" placeholder="Country" value="<?= $_SESSION["country"]?>" name="country">
        </div>
        <div class="form-group col-md-6">
                <button type="submit" class="btn btn-light btn-block"  id="btn-change-pwd" name="changeInfo" >Change Information</button>
                </div>
        </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>