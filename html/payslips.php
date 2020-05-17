<?php $title = 'Payslips'; ?>
<?php include('head.php');
include('../php/accessControl.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/payslipsConnection.php';
?>
<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/payslips.css">
<div class="html-content">
    <div class="week-container container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header py-3 flex justify-content-between">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <h5 class="m-0 font-weight-bold text-info">Weekdays</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <form class="form-inline" id="payslips-form" name="payslipsForm" method="POST">
                                    <div class="form-group">
                                        <select name="selectedWeek" id="select-select-week" class="form-control" onchange="this.form.submit();">
                                            <option selected value="<?= $getSelectedWeek ?>">--select--</option>
                                            <?php foreach ($previousWorkedWeeks as $week) { ?>
                                                <option <?php if (isset($isSelected) && $isSelected == $week->startDate) echo "selected"; ?>
                                                        value="<?= $week->startDate ?>"><?= date("d/m/Y", strtotime($week->startDate)) ?>-<?= date("d/m/Y", strtotime($week->endDate)) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-light mb-2 btn-block light-background downloadPDF"
                                           onclick="CreatePDFfromHTML()">
                                            <i class="fa fa-download" aria-hidden="true"></i> Download as PDF
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="col"></div>
                        </div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $mondayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $mondayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $mondayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $mondayWage ?>€</div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $tuesdayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $tuesdayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $tuesdayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $tuesdayWage ?>€
                                                </div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $wednesdayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $wednesdayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $wednesdayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $wednesdayWage ?>€
                                                </div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $thursdayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $thursdayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $thursdayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $thursdayWage ?>€
                                                </div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $fridayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $fridayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $fridayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $fridayWage ?>€</div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $saturdayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $saturdayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $saturdayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $saturdayWage ?>€
                                                </div>
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
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $sundayMorning ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $sundayAfternoon ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $sundayEvening ?></div>
                                                <div class="h6 mb-0 font-weight-bold centered"><?= $sundayWage ?>€</div>
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
                <div class="card shadow">
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
</div>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="../js/payslips.js"></script>
<script src="../js/payslipsPDF.js"></script>
</body>
</html>