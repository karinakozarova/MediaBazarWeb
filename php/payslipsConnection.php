<?php
include('payslipsVariables.php');
include('../php/shifts.php');

$getHourlyWageQuery = $conn->prepare("SELECT hourly_wage FROM employee_details WHERE person_id=\"$user_id\"");
$getHourlyWageQuery->execute();
$hourlyWage = $getHourlyWageQuery->fetchColumn();

$hoursCovered = count($days) * 4;
$income = $hoursCovered * $hourlyWage;

foreach ($days as $shift) {
    switch ($shift->location) {
        case 0:
            if ($shift->shift == 'morning') {
                $MondayM = '9:00-13:00';
            } else if ($shift->shift == 'afternoon') {
                $MondayA = '14:00-18:00';
            } else if ($shift->shift == 'evening') {
                $MondayE = '14:00-18:00';
            }
            $MondayWage += $hourlyWage;
            break;

        case 1:

            if ($shift->shift == 'morning') {
                $TuesdayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $TuesdayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $TuesdayE = '14:00-18:00';
            }
            $TuesdayWage += $hourlyWage;
            break;

        case 2:
            if ($shift->shift == 'morning') {
                $WednesdayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $WednesdayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $WednesdayE = '14:00-18:00';
            }
            $WednesdayWage += $hourlyWage;
            break;

        case 3:
            if ($shift->shift == 'morning') {
                $ThursdayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $ThursdayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $ThursdayE = '14:00-18:00';
            }
            $ThursdayWage += $hourlyWage;
            break;

        case 4:
            if ($shift->shift == 'morning') {
                $FridayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $FridayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $FridayE = '14:00-18:00';
            }
            $FridayWage += $hourlyWage;
            break;

        case 5:
            if ($shift->shift == 'morning') {
                $SaturdayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $SaturdayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $SaturdayE = '14:00-18:00';
            }
            $SaturdayWage += $hourlyWage;
            break;

        case 6:
            if ($shift->shift == 'morning') {
                $SundayM = '9:00-13:00';
            }
            if ($shift->shift == 'afternoon') {
                $SundayA = '14:00-18:00';
            }
            if ($shift->shift == 'evening') {
                $SundayE = '14:00-18:00';
            }
            $SundayWage += $hourlyWage;
            break;
    }
}

$date = date("Y-m-d");
$ts = strtotime($date);
$dow = date('w', $ts);
$offset = $dow - 1;

if ($offset < 0) {
    $offset = 6;
}

$ts = $ts - $offset * 86400;

for ($i = 0; $i < 7; $i++, $ts += 86400) {
    array_push($weekdayDates, date("d/m/Y", $ts));
}
