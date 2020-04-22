<?php $title = 'Payslips'; ?>
<?php include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/payslipsConnection.php';
?>
<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/payslips.css">
<div class="payslips-container container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex justify-content-between">
                    <h5 class="m-0 font-weight-bold text-info">Weekdays</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Monday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[0] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $MondayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $MondayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $MondayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $MondayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Tuesday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[1] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $TuesdayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $TuesdayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $TuesdayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $TuesdayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Wednesday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[2] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $WednesdayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $WednesdayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $WednesdayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $WednesdayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Thursday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[3] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $ThursdayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $ThursdayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $ThursdayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $ThursdayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Friday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[4] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $FridayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $FridayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $FridayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $FridayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Saturday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[5] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SaturdayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SaturdayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SaturdayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SaturdayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="font-weight-bold text-info mb-1 centered">Sunday</h6>
                                            <h6 class="font-weight-bold text-info mb-1 centered"><?= $weekdayDates[6] ?></h6>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SundayM ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SundayA ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SundayE ?></div>
                                            <div class="h6 mb-0 font-weight-bold centered"><?= $SundayWage ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="payslips-container container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 flex justify-content-between">
                    <h5 class="m-0 font-weight-bold text-info">Weekly payslip</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <h4 class="row-title font-weight-bold text-info mb-1">Week</h4>
                                        </div>
                                        <div class="col">
                                            <h6 class="font-weight-bold text-info mb-1">Start date:</h6>
                                            <div class="h5 mb-0 font-weight-bold"><?= $weekdayDates[0] ?></div>
                                        </div>
                                        <div class="col">
                                            <h6 class="font-weight-bold text-info mb-1">End date:</h6>
                                            <div class="h5 mb-0 font-weight-bold"><?= $weekdayDates[6] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <h4 class="font-weight-bold text-info mb-1">Hours Covered</h4>
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                            <div class="h4 mb-0 font-weight-bold"><?= $hoursCovered ?>h</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <h4 class="font-weight-bold text-info mb-1">Hourly Rate</h4>
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                            <div class="h4 mb-0 font-weight-bold"><?= $hourlyWage ?>€</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow infocard">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <h4 class="font-weight-bold text-info mb-1">Income</h4>
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                            <div class="h4 mb-0 font-weight-bold"><?= $income ?>€</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
</body>
</html>
