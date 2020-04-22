<?php
include('payslipsVariables.php');
include('../php/shifts.php');

$getHourlyWageQuery = $conn->prepare("SELECT hourly_wage FROM employee_details WHERE person_id=\"$user_id\"");
$getHourlyWageQuery->execute();
$hourlyWage = $getHourlyWageQuery->fetchColumn();

$shiftCost = $hourlyWage * $SHIFT_DURATION;
$hoursCovered = count($days) * $SHIFT_DURATION;
$income = $hoursCovered * $hourlyWage;

foreach ($days as $day) {
   $shift = $day->shift;
   $day = $day->location;
    switch ($day) {
        case 0:
            if ($shift == $MORNING) {
                $mondayMorning = $MORNING_SHIFT;
            } else if ($shift == $AFTERNOON) {
                $mondayAfternoon = $AFTERNOON_SHIFT;
            } else if ($shift == $EVENING) {
                $mondayEvening = $EVENING_SHIFT;
            }
            $mondayWage += $shiftCost;
            break;
        case 1:
            if ($shift == $MORNING) {
                $tuesdayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $tuesdayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $tuesdayEvening = $EVENING_SHIFT;
            }
            $tuesdayWage += $shiftCost;
            break;
        case 2:
            if ($shift == $MORNING) {
                $wednesdayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $wednesdayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $wednesdayEvening = $EVENING_SHIFT;
            }
            $wednesdayWage += $shiftCost;
            break;
        case 3:
            if ($shift == $MORNING) {
                $thursdayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $thursdayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $thursdayEvening = $EVENING_SHIFT;
            }
            $thursdayWage += $shiftCost;
            break;
        case 4:
            if ($shift == $MORNING) {
                $fridayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $fridayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $fridayEvening = $EVENING_SHIFT;
            }
            $fridayWage += $shiftCost;
            break;
        case 5:
            if ($shift == $MORNING) {
                $saturdayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $saturdayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $saturdayEvening = $EVENING_SHIFT;
            }
            $saturdayWage += $shiftCost;
            break;
        case 6:
            if ($shift == $MORNING) {
                $sundayMorning = $MORNING_SHIFT;
            }
            if ($shift == $AFTERNOON) {
                $sundayAfternoon = $AFTERNOON_SHIFT;
            }
            if ($shift == $EVENING) {
                $sundayEvening = $EVENING_SHIFT;
            }
            $sundayWage += $shiftCost;
            break;
    }
}

$date = date("Y-m-d");
$timeSet = strtotime($date);
$dateOfTheWeek = date('w', $timeSet);
$offset = $dateOfTheWeek - 1;

if ($offset < 0) {
    $offset = 6;
}

$timeSet = $timeSet - $offset * $INTERVAL_BETWEEN_DAYS;

for ($i = 0; $i < $NUMBER_OF_WEEKDAYS; $i++, $timeSet += $INTERVAL_BETWEEN_DAYS) {
    array_push($weekdayDates, date("d/m/Y", $timeSet));
}
