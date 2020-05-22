<?php $title = 'Settings';
include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/sendShiftsEmail.php';
?>
<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/settings.css">
<br>
<div class="container">
    <div class="row">
            <div class="changeInfoForm form-group row col-sm-6 col-md-offset-4 col-lg-offset-3 col-lg-6 col-xl-6">
                    <div class="form-group">
                        <h3 class="changeInfoLbl centered">Settings</h3>
                        <div class="row">
                            <form class="settings-form form-inline" method="POST" id="dark-mode-form">
                                <div class="col-md-3">
                                    <h4>Dark Mode</h4>
                                </div>
                                <div class="col-md-3">
                                    <label id="switch" class="switch">
                                        <input type="checkbox" data-toggle="toggle" name="mode" id="mode">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <form class="settings-form-email form-inline"  method="POST" id="send-email-form">
                                <div class="col-md-7">
                                    <h4>Send shift notifications by email</h4>
                                </div>
                                <div class="col-md-3">
                                    <label id="switch" class="switch">
                                        <input type="checkbox" data-toggle="toggle" name="sendEmail" id="sendEmail">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <input type="hidden" id="sendEmail_hidden" name="sendEmail_hidden" value="on">
                            </form>
                        </div>
                    </div>
            </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/settings.js"></script>
</body>
</html>