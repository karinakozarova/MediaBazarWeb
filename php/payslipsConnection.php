<?php
include('payslipsVariables.php');
include('../php/shifts.php');

if (isset($_POST['select-week'])) {
    $getSelectedWeek = $_POST['selectedWeek'];
}

$payslipDaysQuery = $conn->prepare("SELECT week_day_id as day, shift FROM employee_working_days WHERE employee_id=\"$user_id\" AND assigned_date = \"$getSelectedWeek\"");
$payslipDaysQuery ->execute();
$elements = $payslipDaysQuery ->fetchAll();

foreach ($elements as $element) {
    $shift = new \stdClass();

    $shift->location = $element["day"];
    $shift->shift = $element["shift"];

    array_push($payslipDays, $shift);
}

$getHourlyWageQuery = $conn->prepare("SELECT contract_hourlywage FROM  contract WHERE person_id=\"$user_id\" AND \"$getSelectedWeek\" between contract_start AND contract_end");
$getHourlyWageQuery->execute();
$hourlyWage = $getHourlyWageQuery->fetchColumn();

if($hourlyWage == null){
    $getHourlyWageQuery = $conn->prepare("SELECT contract_hourlywage FROM  contract WHERE person_id=\"$user_id\" AND contract_status = 0");
    $getHourlyWageQuery->execute();
    $hourlyWage = $getHourlyWageQuery->fetchColumn();
}

$shiftCost = $hourlyWage * $SHIFT_DURATION;
$hoursCovered = count($payslipDays) * $SHIFT_DURATION;
$income = $hoursCovered * $hourlyWage;

foreach ($payslipDays as $day) {
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


$getAllWorkedWeeksQuery = $conn->prepare("SELECT assigned_date FROM employee_working_days WHERE employee_id=\"$user_id\"");
$getAllWorkedWeeksQuery->execute();
$workedWeeksMondays = $getAllWorkedWeeksQuery->fetchAll();

foreach ($workedWeeksMondays as $workedWeek) {
    $workedWeekMonday = $workedWeek["assigned_date"];
    if ($workedWeekMonday !=$previousWeekDate){
        $date = $workedWeekMonday;
        $timeSet = strtotime($date);
        $dateOfTheWeek = date('w', $timeSet);
        $offset = $dateOfTheWeek - 1;

        if ($offset < 0) {
            $offset = 6;
        }
        $timeSet = $timeSet - $offset * $INTERVAL_BETWEEN_DAYS;
        $endDate = $timeSet + $INTERVAL_BETWEEN_DAYS * 6;

        $week = new \stdClass();

        $week->startDate = date("Y/m/d", $timeSet);
        $week->endDate = date("Y/m/d", $endDate);
        array_push($previousWorkedWeeks, $week);
        $previousWeekDate = $workedWeekMonday;
    }
}

$date = $getSelectedWeek;
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