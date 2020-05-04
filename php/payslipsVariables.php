<?php

date_default_timezone_set("Europe/Amsterdam");
$NUMBER_OF_WEEKDAYS = 7;
$INTERVAL_BETWEEN_DAYS = 86400;
$SHIFT_DURATION = 4;
$MORNING_SHIFT = '9:00 - 14:00';
$AFTERNOON_SHIFT = '14:00 - 19:00';
$EVENING_SHIFT = '19:00 - 23:00';

$MORNING = 'morning';
$AFTERNOON = 'afternoon';
$EVENING = 'evening';

$previousWorkedWeeks = [];
$days = [];
$weekdayDates = [];
$weekdayShifts = [];
$countShifts = 0;
$previousWeekDate = 0;
$isWeekSelected = false;
$getSelectedWeek = date("Y-m-d");

if (isset($_POST['selectedWeek'])) {
    $isSelected = $_POST['selectedWeek'];
    $getSelectedWeek = $_POST['selectedWeek'];
}

$mondayWage = 0;
$mondayMorning = '-';
$mondayAfternoon = '-';
$mondayEvening = '-';

$tuesdayWage = 0;
$tuesdayMorning = '-';
$tuesdayAfternoon = '-';
$tuesdayEvening = '-';

$wednesdayWage = 0;
$wednesdayMorning = '-';
$wednesdayAfternoon = '-';
$wednesdayEvening = '-';

$thursdayWage = 0;
$thursdayMorning = '-';
$thursdayAfternoon = '-';
$thursdayEvening = '-';

$fridayWage = 0;
$fridayMorning = '-';
$fridayAfternoon = '-';
$fridayEvening = '-';

$saturdayWage = 0;
$saturdayMorning = '-';
$saturdayAfternoon = '-';
$saturdayEvening = '-';

$sundayWage = 0;
$sundayMorning = '-';
$sundayAfternoon = '-';
$sundayEvening = '-';