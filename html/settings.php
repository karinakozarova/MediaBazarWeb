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
<div class="week-container container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header py-3 flex justify-content-between">
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <h5 class="m-0 font-weight-bold text-info">Settings</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <form class="settings-form form-inline" method="POST" id="dark-mode-form">
                            <div class="form-group">
                                <h4 class="text-info">Dark Mode</h4>
                            </div>
                            <div class="switch-darkmode form-group">
                                <label id="switch" class="switch">
                                    <input type="checkbox" data-toggle="toggle" name="mode" id="mode">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </form>
                        <div class="col"></div>
                    </div>
                    <br><br><br>

                    <?php if ($_SESSION["account_type"] == $WORKER_TYPE) { ?>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <form class="settings-form-email form-inline" method="POST" id="send-email-form">
                            <div class="form-group">
                                <h4 class="text-info">Send shift notifications by email</h4>
                            </div>
                            <div class="switch-email form-group">
                                <label id="switch" class="switch">
                                    <input type="checkbox" data-toggle="toggle" name="sendEmail" id="sendEmail">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <input type="hidden" id="sendEmail_hidden" name="sendEmail_hidden" value="on">
                        </form>
                        <div class="col"></div>
                    </div>
                    <br><br><br>
                </div>
                <?php } ?>
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