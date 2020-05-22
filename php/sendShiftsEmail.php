<?php

include '../php/constants.php';
include '../php/config.php';
include '../php/shifts.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$timer=date('Y:m:d h:i:s a', time());
$currentDate = date("Y:m:d");
$morningShiftLower = " 08:30:00 am";
$morningShiftUpper = " 08:31:00 am";
$afternoonShiftLower = " 01:30:00 pm";
$afternoonShiftUpper = " 01:31:00 pm";
$eveningShiftLower = " 06:30:00 pm";
$eveningShiftUpper = " 06:31:00 pm";

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

$query = $conn->prepare("SELECT email FROM person WHERE id=\"$user_id\"");
$query->execute();
$userEmail = $query->fetchColumn();

if(isset($_POST['sendEmail_hidden'])){

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'MediaBazaarTest@gmail.com';
        $mail->Password   = 'MediaBazaar!Test123 ';
        $mail->Port       = 587;
        $mail->setFrom('MediaBazaarTest@gmail.com', 'Mediabazar REMINDER');
        $mail->addAddress('gminchev.nl@gmail.com', 'Joe User');     // Add a recipient
        $mail->isHTML(true);
        $mail->Subject = 'REMINDER: Your shift starts soon.';

        foreach ($days as $day) {
            $shift = $day->shift;
            $day = $day->location;
            foreach ($weekdayDates as $index => $weekdayDate) {

                if ($day == $index) {
                    if ($weekdayDate == $currentDate) {

                        if ($shift == $MORNING) {
                            $mytimer = $weekdayDate . $morningShiftLower;
                            $mytimer2 = $weekdayDate . $morningShiftUpper;

                            if ($timer >= $mytimer && $timer <= $mytimer2) {
                                $mail->Body    = 'REMINDER: Your shift starts after <b>30min at 9:00.</b>';
                                $mail->send();
                            }
                        } else if ($shift == $AFTERNOON) {
                            $mytimer = $weekdayDate . $afternoonShiftLower;
                            $mytimer2 = $weekdayDate . $afternoonShiftUpper;

                            if ($timer >= $mytimer && $timer <= $mytimer2) {
                                $mail->Body    = 'REMINDER: Your shift starts after <b>30min at 14:00.</b>';
                                $mail->send();
                            }
                        } else if ($shift == $EVENING) {
                            $mytimer = $weekdayDate . $eveningShiftLower;
                            $mytimer2 = $weekdayDate . $eveningShiftUpper;
                            if ($timer >= $mytimer && $timer <= $mytimer2) {
                                $mail->Body    = 'REMINDER: Your shift starts after <b>30min at 19:00.</b>';
                                $mail->send();
                            }
                        }
                    }
                }
            }
        }

    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}





