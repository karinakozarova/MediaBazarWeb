<?php $title = "Schedule";
$addCalendar = true;
include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/shifts.php';
?>

<body>
<?php include('navbar.php'); ?>

<div class="container">
    <div class="mb-4">
        <h2 class="mb-3 sked-tape__center centered"> Your schedule for this week: </h2>
        <div class="mb-2" id="schedule"></div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="../libs/jquery-sked-tape-master/src/jquery.skedTape.js"></script>

<script type="text/javascript" src="../js/constants/listShiftsConstants.js"></script>
<script type="text/javascript" src="../js/constants/weekDays.js"></script>
<script type="text/javascript" src="../js/dateFormat.js"></script>
<script type="text/javascript">
    var events = <?php echo json_encode($days) ?>;

    for (i = 0; i < events.length; i++) {
        if (events[i].shift == "morning") {
            events[i].start = today(start_hour_morning, start_minutes_morning);
            events[i].end = today(start_hour_afternoon, start_minutes_afternoon);
        } else if (events[i].shift == "afternoon") {
            events[i].start = today(start_hour_afternoon, start_minutes_afternoon);
            events[i].end = today(start_hour_evening, start_minutes_evening);
        } else if (events[i].shift == "evening") {
            events[i].start = today(start_hour_evening, start_minutes_evening);
            events[i].end = today(end_hour_evening, end_minutes_evening);
        }
    }
</script>
<script type="text/javascript" src="../js/createSchedule.js"></script>

</body>
</html>