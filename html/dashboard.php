<?php $title = 'MediaBazar'; ?>
<?php
include('head.php');
include('../php/autoUpdateSchedule.php');
include('../php/accessControl.php');
?>
<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/dashboard.css">
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header padded">
            <h5 class="m-0 font-weight-bold text-primary">Latest notification</h5>
        </div>
        <div class="card-body notification">
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow infocard">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col mr-2">
                            <h6 class="font-weight-bold text-primary mb-1">Earnings (Monthly)</h6>
                            <div class="h4 mb-0 font-weight-bold">15,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow infocard">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col mr-2">
                            <h6 class="font-weight-bold text-success mb-1">Earnings (Annual)
                            </h6>
                            <div class="h4 mb-0 font-weight-bold">$100,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow infocard">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col mr-2">
                            <h6 class="font-weight-bold text-info mb-1">Completed Weekly shifts</h6>
                            <div class="row no-gutters">
                                <div class="h4 font-weight-bold">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow infocard">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col mr-2">
                            <h6 class="font-weight-bold text-warning mb-1">Pending Notifications
                            </h6>
                            <div class="h4 mb-0 font-weight-bold">
                                <p class="pending" id="pending"> </p>
                                <script>
                                    $(document).ready(function() {
                                        setInterval(function() {
                                            $('#pending').load('../php/countNotifications.php')
                                        }, 500);
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">Earnings Overview</h5>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="incomeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="../js/earningsChart.js"></script>
<script>
    $(document).ready(function () {
        var notificationsId = [];
        var notifications;
        setInterval(function () {
            $.ajax({
                url: '../php/latestnotification.php?show',
                type: 'get',
                data: {},
                success: function (response) {
                    notifications = JSON.parse(response);
                }
            });
            var isIncluded = notificationsId.includes(notifications.notificationId);

            if(notifications.notificationId == null){
                $(".notification").html("NO NOTIFICATIONS AVAILABLE");
            } else if (!isIncluded) {
                $(".notification").html('<form method="post"><input type="hidden" name="notificationID" value="' + notifications.notificationId + '"><button type="button" name="markAsRead" value="' + notifications.notificationId + '" class="close">Mark as read</button></form><p>' + notifications.message + '</p><hr> <h6 class="mb-0"><b> Created by: </b> ' + notifications.creatorFirstName + ' ' + notifications.creatorLastName + '</h6><h6 class="mb-0"><b>Date:</b> ' + notifications.date + '</h6> ');
                notificationsId.push(notifications.notificationId);
            }
            $(".close").click(function () {
                var id = $(this).val();
                var idClass = "." + id;
                $.ajax({
                    url: '../php/markAsRead.php',
                    type: 'post',
                    data: {"id": id},
                    success: function (response) {
                        $(".notification").html("NO NOTIFICATIONS AVAILABLE");
                    }
                });
            });
        }, 100)
    });
</script>
</body>
</html>
