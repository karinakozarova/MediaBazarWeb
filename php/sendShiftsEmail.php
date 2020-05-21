<?php

include '../php/constants.php';
include '../php/config.php';
include 'shifts.php';

$date = $currentSchedule;
$timeSet = strtotime($date);
$dateOfTheWeek = date('w', $timeSet);
$offset = $dateOfTheWeek - 1;

if ($offset < 0) {
    $offset = 6;
}

$timeSet = $timeSet - $offset * $INTERVAL_BETWEEN_DAYS;

for ($i = 0; $i < $NUMBER_OF_WEEKDAYS; $i++, $timeSet += $INTERVAL_BETWEEN_DAYS) {
    array_push($weekdayDates, date('Y:m:d', $timeSet));
}

$timer=date('Y:m:d h:i:s a', time());
$currentDate = date("Y:m:d");


$to_email = 'gminchev2000 @ gmail . com';
$subject = 'Testing PHP Mail';
$messageMorning = 'REMINDER: Your shift starts after 30min at 9:00.';
$messageAfternoon = 'REMINDER: Your shift starts after 30min at 9:00.';
$messageEvening = 'REMINDER: Your shift starts after 30min at 9:00.';
$headers = 'From: noreply @ mediabazar . com';


if(isset($_REQUEST['sendEmail']) && $_REQUEST['sendEmail'] == 'on') {
    echo "Oo Djadja";
    foreach ($days as $day) {
        $shift = $day->shift;
        $day = $day->location;
        foreach ($weekdayDates as $index => $weekdayDate) {

            if ($day == $index) {
                if ($weekdayDate == $currentDate) {

                    if ($shift == $MORNING) {
                        $mytimer = $weekdayDate . " 08:30:00 pm";
                        $mytimer2 = $weekdayDate . " 08:30:59 pm";

                        if ($timer >= $mytimer && $timer <= $mytimer2) {
                            mail($to_email, $subject, $messageMorning, $headers);
                        }
                    } else if ($shift == $AFTERNOON) {
                        $mytimer = $weekdayDate . " 01:30:00 pm";
                        $mytimer2 = $weekdayDate . " 01:30:59 pm";

                        if ($timer >= $mytimer && $timer <= $mytimer2) {
                            mail($to_email, $subject, $messageAfternoon, $headers);
                        }
                    } else if ($shift == $EVENING) {
                        $mytimer = $weekdayDate . " 06:30:00 pm";
                        $mytimer2 = $weekdayDate . " 06:30:59 pm";
                        if ($timer >= $mytimer && $timer <= $mytimer2) {
                            mail($to_email, $subject, $messageEvening, $headers);
                        }
                    }
                }
            }
        }
    }
}




