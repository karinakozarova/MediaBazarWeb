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
<div class="profile">
    <h3 id="Username"><?php echo $_SESSION["username"]?></h3>
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
        <input type="text" class="form-control" id="firstName" placeholder="First name" value="<?php echo $_SESSION["firstName"]?>" name="firstName">
        </div>
        <div class="form-group col-md-6">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Last name" value="<?php echo $_SESSION["lastName"]?>" name="lastName">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="phoneNumber">Phone number</label>
        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number" value="<?php echo $_SESSION["phoneNumber"]?>" name="phoneNumber">
        </div>
        <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION["Email"]?>" name="Email">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label id="dob-lbl" for="dateOfBirth">Date of birth</label>
            <input type="datetime-local" class="form-control" id="dateOfBirth" name="dateOfBirth" max="3000-12-31" value="<?php echo $_SESSION["dateOfBirth"]?>">
        </div>
        <div class="form-group col-md-6">
            <label for="street">Street</label>
            <input type="text" class="form-control" id="street" placeholder="Street" value="<?php echo $_SESSION["street"]?>" name="street">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="postcode">Postcode</label>
            <input type="text" class="form-control" id="postcode" placeholder="Postcode" value="<?php echo $_SESSION["postcode"]?>" name="postcode">
        </div>
        <div class="form-group col-md-6">
        <label for="region">Region</label>
        <input type="text" class="form-control" id="region" placeholder="Region" value="<?php echo $_SESSION["region"]?>" name="region">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" placeholder="Country" value="<?php echo $_SESSION["country"]?>" name="country">
        </div>
        <div class="form-group col-md-6">
                <button type="submit"  class="btn btn-light btn-block"  id="btn-change-pwd" name="changeInfo" >Change Information</button>
                </div>
        </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="../js/ChangeProfileInfo.js"></script>
</body>
</html>